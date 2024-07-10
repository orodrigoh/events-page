<div>
    <seciton class="filters">
        <div class="lg:container mx-auto flex justify-center">
            <div class="container-filters w-[650px] h-[100px] bg-[#0B0434] mt-[-50px] rounded-xl p-[16px] flex justify-between">
                <div class="item flex flex-col w-[32%] border-r-[1px] border-purple-950 pr-[32px]">
                    <label for="" class="text-white">Looking for</label>
                    <input wire:model.live="search" type="text" class="bg-transparent text-white border-0 border-b-2 border-purple-500 h-full px-4 focus:outline-none">
    
                </div>
                <div class="item flex flex-col w-[32%] border-r-[1px] border-purple-950 px-[32px]">
                    <label for="" class="text-white">Location</label>
                    <input wire:model.live="location" class="bg-transparent text-white border-0 border-b-2 border-purple-500 h-full px-4 focus:outline-none" type="text">
                </div>
                <div class="item flex flex-col w-[32%]">
                    <label for="" class="text-white">When</label>
                    <input wire:model.live="date" type="date" class="bg-transparent text-white border-0 border-b-2 border-purple-500 h-full px-4 focus:outline-none">
                </div>
            </div>
        </div>

    </seciton>

    <section class="events mt-[64px]">
        <div class="w-[1024px] mx-auto">
            <h2 class="text-3xl font-bold">Upcoming Events</h2>
            <div class="container-events grid grid-cols-3 justify-between mx-auto gap-[32px] mt-[32px] w-[1024px] mx-auto">
                @foreach($events as $event)
                    <div class="event h-[350px] rounded-xl overflow-hidden shadow-md bg-[#ffffff] relative">
                        <div class="top-img h-[200px] w-full ">
                            <img class="object-center object-cover w-full h-full" src="{{$event->image->url}}" alt="event">
                            @auth
                                <svg class="absolute bottom-3 right-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg>
                            @endauth
                        </div>
                        <div class="body-card p-[24px]">
                            <div class="container-body flex gap-x-[32px] items-center">
                                <div class="left">
                                    <div class="mes text-purple-500 font-bold">
                    
                                        {{$event->eventDate->format('M')}}
                                    </div>
                                    <div class="date font-bold">
                                        {{$event->eventDate->format('d')}}
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="title font-bold">
                                        {{$event->name}}
                                    </div>
                                    <div class="location mt-4 text-gray-500 line-clamp-2">
                                        {{$event->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
