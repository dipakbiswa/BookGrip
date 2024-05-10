<x-app-layout>
    <main class="h-full overflow-y-auto">
        @section('title', "Tutorials")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tutorials
          </h2>
            <div class="grid gap-6 mb-8 md:grid-cols-2">

                @foreach ($tutorials as $tutorial)
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        {{-- <canvas id="pie"></canvas> --}}
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            {{ $tutorial->title }}
                        </h4>
                        {{-- <hr><br> --}}
                        <div class="container" style="position: relative;
                        overflow: hidden;
                        width: 100%;
                        padding-top: 56.25%;">
                            <iframe class="responsive-iframe" src="{{ $tutorial->youtube_url }}" style="position: absolute;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            width: 100%;
                            height: 100%; border-radius: 10px;"></iframe>
                        </div>
                    </div>
                @endforeach
                
                
            </div>

        </div>
    </main>
</x-app-layout>