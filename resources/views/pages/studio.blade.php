<x-app-layout>
    <main class="h-full pb-16 overflow-y-auto">
        @section('title', "Low Content Studio")
        <!-- Remove everything INSIDE this div to a really blank page -->
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Low Content Studio
            </h2>

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
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="interior-design-tab" data-tabs-target="#interior-design" type="button" role="tab" aria-controls="interior-design" aria-selected="false">Interior Design</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="maze-tab" data-tabs-target="#maze" type="button" role="tab" aria-controls="maze" aria-selected="false">Maze</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="word-puzzle-tab" data-tabs-target="#word-puzzle" type="button" role="tab" aria-controls="word-puzzle" aria-selected="false">Word Puzzle</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="money-tab" data-tabs-target="#money" type="button" role="tab" aria-controls="money" aria-selected="false">Money</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="todo-tab" data-tabs-target="#todo" type="button" role="tab" aria-controls="todo" aria-selected="false">To Do</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="planner-tab" data-tabs-target="#planner" type="button" role="tab" aria-controls="planner" aria-selected="false">Planner</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="health-tab" data-tabs-target="#health" type="button" role="tab" aria-controls="health" aria-selected="false">Health</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="math-tab" data-tabs-target="#math" type="button" role="tab" aria-controls="math" aria-selected="false">Math</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="games-tab" data-tabs-target="#games" type="button" role="tab" aria-controls="games" aria-selected="false">Games</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="coloring-books-tab" data-tabs-target="#coloring-books" type="button" role="tab" aria-controls="coloring-books" aria-selected="false">Coloring Books</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="sudoku-tab" data-tabs-target="#sudoku" type="button" role="tab" aria-controls="sudoku" aria-selected="false">Sudoku</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="comic-tab" data-tabs-target="#comic" type="button" role="tab" aria-controls="comic" aria-selected="false">Comic</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="music-tab" data-tabs-target="#music" type="button" role="tab" aria-controls="music" aria-selected="false">Music Sheets</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="journals-tab" data-tabs-target="#journals" type="button" role="tab" aria-controls="journals" aria-selected="false">Journals</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="activity-tab" data-tabs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="false">Activity books</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="tracker-tab" data-tabs-target="#tracker" type="button" role="tab" aria-controls="tracker" aria-selected="false">Tracker books</button>
            </li>
           
        </ul>
    </div>
    <div id="myTabContent">
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::all();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
                
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="free" role="tabpanel" aria-labelledby="free">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('free', 1)->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="interior-design" role="tabpanel" aria-labelledby="interior-design-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'interior')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="maze" role="tabpanel" aria-labelledby="maze-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'maze')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="word-puzzle" role="tabpanel" aria-labelledby="word-puzzle-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'word-puzzle')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="money" role="tabpanel" aria-labelledby="money-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'money')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="todo" role="tabpanel" aria-labelledby="todo-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'todo')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="planner" role="tabpanel" aria-labelledby="planner-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'planner')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="health" role="tabpanel" aria-labelledby="health-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'health')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="math" role="tabpanel" aria-labelledby="math-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'math')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="games" role="tabpanel" aria-labelledby="games-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'games')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="coloring-books" role="tabpanel" aria-labelledby="coloring-books-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'coloring-books')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="sudoku" role="tabpanel" aria-labelledby="sudoku-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'sudoku')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="comic" role="tabpanel" aria-labelledby="comic-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'comic')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="music" role="tabpanel" aria-labelledby="music-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'music')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="journals" role="tabpanel" aria-labelledby="journals-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'journals')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="activity" role="tabpanel" aria-labelledby="activity-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'activity')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="tracker" role="tabpanel" aria-labelledby="tracker-tab">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $all = App\Models\Interior::where('category', 'tracker')->get();
                @endphp
                @foreach ($all as $item)
                    <div>
                        @if (($item->free === 0) and (auth()->user()->is_paid === 1))
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->free_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @else 
                            <a href="{{ url('create-pdf').'/'.$item->id }}"><img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray;" src="{{ $item->paid_image }}" alt=""><center><span class="text-gray-700 dark:text-gray-200">{{$item->name}}</span></center></a>
                        @endif
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