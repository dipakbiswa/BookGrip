<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Favourite Keywords")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Favourite Keyword
          </h2>
          
        {{-- @if(auth()->user()->is_paid == 1) --}}
          <!-- CTA -->

        <!-- Product Start -->
      
      <!-- Product End -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">Keyword</th>
                    <th class="px-4 py-3">Search Volume</th>
                    <th class="px-4 py-3">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach($keywords as $keyword)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div>
                          <a target="_blank" href="https://www.amazon.com/s?k={{ $keyword->keyword }}&tag=bookgrip09-20">{{ $keyword->keyword }}</a>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{ $keyword->search_volume }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <form action="{{route('delete-favourite')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $keyword->id }}" name="id">
                            <button type="submit">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                    </td>
                    {{-- <td class="px-4 py-3 text-sm">
                      
                    </td> --}}
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>

          <center>
            @if (session('success'))
                <h6 class="alert alert-success" style="color: red;">{{ session('success') }}</h6>
            @endif
          </center>
        
        {{-- @else
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <center>
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                </h2><br>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    Upgrade Your Subscription to Get Access to Niche Finder
                </h2><br>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Your current subscription status does not include access to Niche Finder. Please upgrade your subscription to keep using the Niche Finder and the other powerful BookGrip tools.
                </p><br>
                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                UPGRADE SUBSCRIPTION
                </button>
                </center>
            </div>
        @endif --}}

          

        </div>
    </main>
</x-app-layout>
