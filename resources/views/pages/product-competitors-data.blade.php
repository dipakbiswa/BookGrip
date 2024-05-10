<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Product Competitors")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Product Competitors
          </h2>
          
        @if(auth()->user()->is_paid == 1)
          <!-- CTA -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">ASIN</th>
                    <th class="px-4 py-3">AVG Position&nbsp;&nbsp;<abbr title="Average position of the product in Amazon SERP"><span class="material-symbols-outlined">help</span></abbr></th>
                    <th class="px-4 py-3">SUM Position &nbsp;&nbsp;<abbr title="Sum of all product positions in Amazon SERP"><span class="material-symbols-outlined">help</span></abbr></th></th>
                    <th class="px-4 py-3">Intersections&nbsp;&nbsp;<abbr title="Number of intersecting keywords"><span class="material-symbols-outlined">help</span></abbr></th>
                    <th class="px-4 py-3">SERP Search Volume&nbsp;&nbsp;<abbr title="Total search volume of the product’s ranking keywords in organic SERP"><span class="material-symbols-outlined">help</span></abbr></th>
                    <th class="px-4 py-3">Paid Search Volume&nbsp;&nbsp;<abbr title="Total search volume of the product’s ranking keywords in paid SERP"><span class="material-symbols-outlined">help</span></abbr></th>
                    <th class="px-4 py-3">Show</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @for($i = 0; $i<$result_count; $i++)
                    @foreach($competiorsDatas as $datas)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      {{ $datas['asin'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $datas['avg_position'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $datas['sum_position'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $datas['intersections'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $datas['competitor_metrics']['amazon_serp']['search_volume'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $datas['competitor_metrics']['amazon_paid']['search_volume'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                      <a href="https://www.amazon.com/dp/{{ $datas['asin'] }}&tag=bookgrip09-20" target="_blank">
                        <span class="material-symbols-outlined">
                          visibility
                        </span>
                      </a>
                    </td>
                  </tr>
                  @endforeach
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
