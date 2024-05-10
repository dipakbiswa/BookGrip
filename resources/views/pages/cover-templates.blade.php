<x-app-layout>
    <main class="h-full pb-16 overflow-y-auto">
        @section('title', "Cover Templates")
        <!-- Remove everything INSIDE this div to a really blank page -->
        <div class="container px-6 mx-auto grid">
            <div style="width: 100%;">
                <h2 style="float: left;" class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Cover Templates
                </h2>
                <br>
                <a style="float: right;" href="https://bookgrip.com/cover-creator/?page=bookgrip" target="_blank" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Create from scratch</a>
            </div>

            <!-- ====== Portfolio Section Start -->
            
                
            <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />


<!-- This is an example component -->
<div class=" mx-auto">
    

    

    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
        <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="free-tab" data-tabs-target="#free" type="button" role="tab" aria-controls="free" aria-selected="false">Free</button>
            </li>
            
           
        </ul>
    </div>
    <div id="myTabContent">
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @php
                    $all = App\Models\Template::all();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('cover-creator').'/'.$item->id }}" target="_blank"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""></a><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center>
                        @else 
                            <a href="{{ url('cover-creator').'/'.$item->id }}" target="_blank"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""></a><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="free" role="tabpanel" aria-labelledby="free">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @php
                    $all = App\Models\Template::where('free', 1)->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        <a href="{{ url('cover-creator').'/'.$item->id }}" target="_blank"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""></a><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center>
                    </div>
                @endforeach
            </div>
        </div>
      
    </div>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


            <!-- ====== Portfolio Section End -->

        </div>
    </main>
</x-app-layout>