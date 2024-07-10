<div>
    <div class="flex gap-[32px] justify-between w-full pb-[32px]">
        <div class="form-create w-[40%] bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4 max-h-[920px]">
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Data/Horario</label>
                <input id="textInputDefault" type="date" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="date" wire:model.live="date"/>
            </div>
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Evento</label>
                <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" wire:model.live="name" name="name" placeholder="Nome"/>
            </div>
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Descrição</label>
                <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" wire:model.live="description" name="description" placeholder="Descrição" value="{{ $description ?? ''}}"/>
            </div>
            <div class="flex gap-4">
                <div class="flex w-[50%] flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                    <label for="textInputDefault" class="w-fit pl-0.5 text-sm">CEP</label>
                    <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="cep" placeholder="CEP" wire:model.change="cep" value="{{ $cep ?? ''}}"/>
                </div>
                <div class="flex w-[50%] flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                    <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Número</label>
                    <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="number" placeholder="Número" wire:model.live="number"/>
                </div>
            </div>
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Rua</label>
                <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="street" placeholder="Rua" wire:model.live="street"/>
            </div>
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Bairro</label>
                <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="neighborhood" placeholder="Bairro" wire:model.live="neighborhood"/>
            </div>
            <div class="flex gap-4">
                <div class="flex w-[50%] flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                    <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Cidade</label>
                    <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="city" wire:model.live="city" placeholder="Cidade"/>
                </div>
                <div class="flex w-[50%] flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                    <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Estado</label>
                    <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" wire:model="state" placeholder="Estado"/>
                </div>
            </div>
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Complemento</label>
                <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="complement" placeholder="Complemento" wire:model.live="complement"/>
            </div>
            <div class="flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4">
                <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Responsavel</label>
                <input id="textInputDefault" type="text" class="w-full rounded-md border border-gray-500 bg-gray-200 px-2 py-2.5 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:focus-visible:outline-sky-400" name="organizer" placeholder="Responsavel" wire:model.live="organizer"/>
            </div>

            <div class="relative flex w-full flex-col gap-1 text-gray-800 dark:text-gray-300 mt-4"  @if($eventID) style="display: none;" @endif>
                <label for="fileInput" class="w-fit pl-0.5 text-sm">Imagem</label>
                <input wire:model.live="image"  id="fileInput" type="file" class="w-full overflow-clip rounded-md border border-gray-500 bg-gray-200/50 text-sm file:mr-4 file:cursor-pointer file:border-none file:bg-gray-200 file:px-4 file:py-2 file:font-medium file:text-gray-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-900 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:bg-gray-800/50 dark:file:bg-gray-800 dark:file:text-gray-100 dark:focus-visible:outline-sky-400" />
                <small class="pl-0.5">PNG, JPG, WebP - Max 5MB</small>
            </div>
            
            <button type="button" wire:click="create" wire:loading.attr="disabled" class="mt-4 cursor-pointer flex justify-center items-center gap-2 whitespace-nowrap rounded-md bg-indigo-900 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-900 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-indigo-400 dark:text-black dark:focus-visible:outline-indigo-400 ml-auto" @if($eventID) style="display: none;" @endif>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 fill-white dark:fill-black" fill="currentColor">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
                Create
            </button>
        
            <!-- Botão Edit -->
            <button type="button" wire:click="saveEdit" wire:loading.attr="disabled" class="mt-4 cursor-pointer flex justify-center items-center gap-2 whitespace-nowrap rounded-md bg-indigo-900 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-900 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-indigo-400 dark:text-black dark:focus-visible:outline-indigo-400 ml-auto" @if(!$eventID) style="display: none;" @endif>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 fill-white dark:fill-black" fill="currentColor">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
                Edit
            </button>
        </div>
        <div class="max-w-7xl w-[60%]">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden w-full overflow-x-auto rounded-md border border-gray-500 dark:border-gray-500">
                    <table class="w-full text-left text-sm text-gray-800 dark:text-gray-300">
                        <thead class="border-b border-gray-500 bg-gray-200 text-sm text-gray-950 dark:border-gray-500 dark:bg-gray-800 dark:text-gray-100">
                            <tr>
                                <th scope="col" class="p-4">Evento</th>
                                <th scope="col" class="p-4">Reponsavel</th>
                                <th scope="col" class="p-4">Cidade</th>
                                <th scope="col" class="p-4">Status</th>
                                <th scope="col" class="p-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-500 dark:divide-gray-500">
                            @foreach($events as $event)
                            <tr>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <img class="size-10 rounded-full object-cover" src="{{$event->image->url}}" alt="user avatar" />
                                        <div class="flex flex-col">
                                            <span class="text-gray-950 dark:text-gray-100">{{$event->name}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">{{ $event->organizer }}</td>
                                <td class="p-4">{{ $event->address->city }}</td>
                                <td class="p-4"><span class="inline-flex overflow-hidden rounded-md border border-green-500 px-1 py-0.5 text-xs font-medium text-green-500 bg-green-500/10">Active</span></td>
                                <td class="p-4">
                                    <button wire:click="edit({{ $event->id }})" type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-sky-900 outline-sky-900 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-sky-400 dark:outline-sky-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </button>
                                    <button wire:click="delete({{ $event->id }})" type="button" class="cursor-pointer whitespace-nowrap rounded-md    text-sky-400 dark:outline-sky-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>