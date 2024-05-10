<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Favourite Niches")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Favourite Keyword
          </h2>
          
        {{-- @if(auth()->user()->is_paid == 1) --}}
          <!-- CTA -->

        <!-- Product Start -->
      
      <!-- Product End -->

        {{-- Keyword table --}}
        @isset($results)
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Niche Keywords</th>
                      <th class="px-4 py-3"><abbr title="These four subcategories—Buyer Demand, Competition Opportunity, Investment Sweet Spot, and Revenue Potential—are all combined in the calculation of Niche Score."> Niche Score </abbr> </th>
                      <th class="px-4 py-3"><abbr title="Buyer demand, which measures people's propensity to purchase products in that niche, is computed using a variety of data points. The monthly search volume and the monthly sales volume for the keyword's organic listings are two significant criteria.">Buyer Demand</abbr> </th>
                      <th class="px-4 py-3"><abbr title="Competition Opportunity is based on several characteristics that show how well-versed and knowledgeable the sellers are in that particular sector. To assess competition opportunity, for instance, we look at the Listing Strength Indicator (LS) and the proportion of strong versus weak competitors. To determine its score, LS takes into account various elements like reviews, bullet points, photos, title optimization, and EBC. The competition opportunity increases with LS weakness since it increases the likelihood of outperforming the competition (high competition opportunity is a positive thing)."> Competition </abbr></th>
                      <th class="px-4 py-3"><abbr title="Using our expected launch budget (the price to buy three months' worth of merchandise based on the average monthly sales volume on page 1), we compute the Investment Sweet Spot. We advise a launch budget of between $10,000 and $15,000.00. According to our analysis, private label sellers get the best return on investment within this range. Your Investment Sweet Spot score drops the further you go from this range. In the end, there's no one size fits all solution, so feel free to modify this range if you have a larger tolerance for risk.">Investment </abbr></th>
                      <th class="px-4 py-3"><abbr title="Revenue Potential is determined by estimating the profit that sellers in that area are expected to make. To calculate revenue potential, we take into account important metrics like average pricing and sales velocity.">Revenue Potential</abbr></th>
                      <th class="px-4 py-3"><span class="material-symbols-outlined">
                        settings
                        </span></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($results as $result)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div>
                            <a target="_blank" href="https://www.amazon.com/s?k={{ $result->niche_keyword }}&tag=bookgrip09-20">{{ $result->niche_keyword }}</a>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $result->niche_score }}%<br>
                        <input type="range" min="1" max="100" value="{{ $result->niche_score }}" step="10" disabled/>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $result->buyer_demand }}%
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $result->competition_opportunity }}%
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $result->investment }}%
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $result->revenue_potential }}%
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <span class="material-symbols-outlined" style="cursor: pointer;" onclick="my_modal_{{ $result->id }}.showModal()">
                          visibility
                        </span>
                        <form action=" {{route('delete-favourite-niche.post')}} " method="POST">
                            @csrf
                            <input type="hidden" value="{{ $result->id }}" name="id">
                            <button type="submit">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                      </td>
                    </tr>
                    {{-- Model start --}}
                    <dialog id="my_modal_{{ $result->id }}" class="modal">
                      <div class="modal-box w-11/50 max-w-5xl">
                        <h3 class="font-bold text-lg">More Data!</h3>
                        <hr>
                        <br>
                        <p class="py-10">
                          <p ><b>Currency:</b> {{ $result->currency }}</p>
                          <p ><b>Search Volume:</b> {{ $result->search_volume }}</p>
                          <p ><b>Avg. Sales:</b> {{ $result->av_sales }}</p>
                          <p ><b>Avg. Price:</b> {{ $result->av_price }}</p>
                          <p ><b>Avg. Ratings:</b> {{ $result->av_ratings }}</p>
                          <p ><b>Avg. Rating:</b> {{ $result->av_rating }}</p>
                          <p ><b>Avg. Revenue:</b> {{ $result->av_revenue }}</p>
                          <p ><b>Launch Budget:</b> {{ $result->launch_budget }}</p>
                          <p ><b>Main Category:</b> {{ $result->main_category }}</p>
                          <p ><b>Avg Listing Strength:</b> {{ $result->av_listing_strength }}</p>
                          <p ><b>% FBA:</b> {{ $result->fba }}%</p>
                          <p ><b>PPC Bid:</b> {{ $result->ppc_bid }}</p>
                          <p ><b>KW $:</b> {{ $result->kw }}</p>
                          <p ><b>KW Title %:</b> {{ $result->kw_title }}%</p>
                        </p>
                        <br>
                        <div class="modal-action">
                          <form method="dialog">
                            <!-- if there is a button, it will close the modal -->
                            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Close</button>
                          </form>
                        </div>
                      </div>
                    </dialog>
                    {{-- Model end --}}
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>

            
        @endisset
        {{-- Keyword table end --}}


          

        </div>
    </main>
</x-app-layout>
