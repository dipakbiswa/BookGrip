<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Book Scout")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Book Scout
          </h2>
          
        @if(auth()->user()->is_paid == 1)
          <!-- CTA -->

        <!-- Product Start -->
      <div class="grid gap-6 mb-8 md:grid-cols-2">
        <div
          class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
        <center>
          <h4 class="mb-4 text-l font-semibold text-red-600 dark:text-red-300">
            Book Details
          </h4>
          <hr>
        </center>
        <br>
          <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            <span class="text-red-600 dark:text-red-300">Title:</span> {{ session()->get('title') }}
          </h4>
          <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            <span class="text-red-600 dark:text-red-300">ASIN:</span> {{ session()->get('asinCode') }}
          </h4>
          <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            <span class="text-red-600 dark:text-red-300">Price:</span> {{ session()->get('price_from') }}
          </h4>
          <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            <span class="text-red-600 dark:text-red-300">Currency:</span> {{ session()->get('currency') }}
          </h4>
          <center>
            <hr>
            <h4 class="mb-4 text-l font-semibold text-red-600 dark:text-red-300">
              Note: Do not refresh the page!
            </h4>
          </center>
        </div>
        <!-- Lines chart -->
        <div
        class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
      <center>
        <img src="{{ session()->get('image_url') }}" style="height: 250px;" alt=""><br>
        <a href="{{ session()->get('url') }}" target="_blank" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">View on amazon</a>
    </center>
        <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
        >
        </div>
      </div>
      </div>
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
                    <th class="px-4 py-3">Rank Group &nbsp;&nbsp;<abbr title="Position within a group of elements with identical type values"><span class="material-symbols-outlined">help</span></abbr></th>
                    <th class="px-4 py-3">Rank Absolute&nbsp;&nbsp;<abbr title="Absolute rank in Amazon Search Engine Results Page. Absolute position among all the elements in Search Engine Results Page."><span class="material-symbols-outlined">help</span></abbr></th>
                    <th class="px-4 py-3">Type</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @for($i = 0; $i<session()->get('result_count'); $i++)
                    {{-- @foreach(session()->get('data') as $datas) --}}
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div>
                          <a target="_blank" href="https://www.amazon.com/s?k={{ session()->get('data')[0][$i]['keyword_data']['keyword'] }}&tag=bookgrip09-20"><p class="font-semibold">{{ session()->get('data')[0][$i]['keyword_data']['keyword'] }}</p></a>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{ session()->get('data')[0][$i]['keyword_data']['keyword_info']['search_volume'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{ session()->get('data')[0][$i]['intersection_result'][1]['rank_group'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{ session()->get('data')[0][$i]['intersection_result'][1]['rank_absolute'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                      @if (session()->get('data')[0][$i]['intersection_result'][1]['type'] == 'amazon_serp')
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                          <abbr title="Search Engine Results Page" style="border: none; text-decoration: none;">SERP</abbr>
                        </span>
                      @else
                        <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                          Paid
                        </span>
                      @endif
                      {{-- {{ session()->get('data')[0][$i]['intersection_result'][1]['type'] }} --}}
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                  @endfor
                  
                </tbody>
              </table>
            </div>
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
        @endif

          

        </div>
    </main>
</x-app-layout>
