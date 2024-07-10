<?php

namespace App\Livewire;

use App\Models\Address;
use App\Models\Event;
use App\Models\Image;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class EventosDashboard extends Component
{
    public $date;
    public $name;
    public $description;
    public $cep;
    public $state;
    public $city = '';
    public $street = '';
    public $neighborhood;
    public $number;
    public $complement;
    public $organizer;
    public $events;
    public $eventID;

    #[Validate('image|max:4096')]
    public $image;

    use WithFileUploads;

    public function mount()
    {
        $this->events = Event::get();
    }
    public function render()
    {
        return view('livewire.eventos-dashboard');
    }
    public function create()
    {
        if ($this->image) {
            $path = $this->image->store('images', 'public');

            $image = Image::create([
                'path' => $path,
            ]);
        }

        $address = Address::updateOrCreate([
            'zipcode' => $this->cep,
            'state' => $this->state,
            'city' => $this->city,
            'street' => $this->street,
            'neighborhood' => $this->neighborhood,
            'number' => $this->number,
            'complement' => $this->complement,
        ]);

        $event = Event::create([
            'name' => $this->name,
            'description' => $this->description,
            'date' => Carbon::parse($this->date),
            'address_id' => $address->id,
            'image_id' => $image?->id ?? null,
            'user_id' => auth()->user()->id,
            'organizer' => $this->organizer,
        ]);

        $this->resetValues();
        $this->events = Event::get();
    }

    public function resetValues()
    {
        $this->reset([
            'name',
            'description',
            'date',
            'cep',
            'state',
            'city',
            'street',
            'neighborhood',
            'number',
            'complement',
            'image',
        ]);
    }

    public function saveEdit()
    {
        $data = Event::find($this->eventID);
        $data->name = $this->name;
        $data->description = $this->description;
        $data->date = $this->date;
        $data->organizer = $this->organizer;
        $data->save();

        $this->resetValues();
        $this->events = Event::get();
    }

    public function updatedCep($value)
    {
        $this->fetchAddressFromCep($value);
    }

    private function fetchAddressFromCep($cep)
    {
        $cep = preg_replace('/[^0-9]/', '', $cep);

        if (strlen($cep) !== 8) {
            return;
        }

        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->successful() && !isset($response['erro'])) {
            $data = $response->json();
            $this->street = $data['logradouro'] ?? '';
            $this->neighborhood = $data['bairro'] ?? '';
            $this->city = $data['localidade'] ?? '';
            $this->state = $data['uf'] ?? '';
        }
    }

    public function edit($id)
    {
        $data = Event::find($id);
        $this->eventID = $id;

        $this->name = $data->name;
        $this->description = $data->description;
        $this->date = $data->date;
        $this->organizer = $data->organizer;
        $this->city = $data->address->city;
        $this->state = $data->address->state;
        $this->cep = $data->address->zipcode;
        $this->street = $data->address->street;
        $this->neighborhood = $data->address->neighborhood;
        $this->number = $data->address->number;
        $this->complement = $data->address->complement;
    }

    public function delete($id)
    {
        $data = Event::find($id);
        $data->delete();
        $this->events = Event::get();
    }
}
