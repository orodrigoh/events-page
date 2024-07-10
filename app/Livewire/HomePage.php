<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class HomePage extends Component
{
    public $events;
    public $search;
    public $location;
    public $date;

    public function render()
    {
        $this->events = Event::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->location, function ($query) {
                $query->whereHas('address', function ($query) {
                    $query->where('city', 'like', '%' . $this->location . '%');
                });
            })
            ->when($this->date, function ($query) {
                $query->where('date', 'like', '%' . $this->date . '%');
            })
            ->get();

        return view('livewire.home-page');
    }
}
