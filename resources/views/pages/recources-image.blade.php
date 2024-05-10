<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Resources")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Images
          </h2>

            @if(auth()->user()->is_paid == 1)
            <div class="grid gap-6 mb-8 md:grid-cols-4 xl:grid-cols-4">
                @foreach ($results as $result)
                    <a href="{{ $result->url }}" download><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <center>
                      <img src="{{ $result->url }}" alt="">
                    </center>
                    </div></a>
                @endforeach
                

            </div>
            @else 
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <center>
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                </h2><br>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    Upgrade Your Subscription to Get Access to Resources
                </h2><br>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Your current subscription status does not include access to Resources. Please upgrade your subscription to keep using the Resources and the other powerful BookGrip tools.
                </p><br>
                <a href="{{ route('pricing') }}"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                UPGRADE SUBSCRIPTION
              </a><br><br>
                </center>
            </div>
            @endif
          
          </div>

    </main>
</x-app-layout>
