<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "KDP Niche Finder")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            KDP Niche Finder
          </h2>
            @if (session()->get('status'))
              <center><span class="text-s font-semibold text-red-700 dark:text-red-200">{{ session()->get('status') }}</span></center>
            @endif 
          <!-- CTA -->


          <!-- Credits CTA -->
          <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
              <svg
                class="w-5 h-5 mr-2"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                ></path>
              </svg>
              <span>You've got {{ auth()->user()->niche_finder_credits }} lookups till the end of this month!</span>
            </div>
          </a>



        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
          
            @if(auth()->user()->is_paid == 1)
            <div class="flex items-center">
                
                
                <form action="{{ route('kdp-niche-finder.post') }}" method="post">
                    @csrf
                        <span class="material-symbols-outlined">
                            input
                        </span>&nbsp;&nbsp;&nbsp;
                    <select name="market" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        <option value="" disabled selected>Marketplace</option>
                        <option value="US">United States (.com)</option>
                        <option value="UK">United Kingdom (.co.uk)</option>
                        <option value="Germany (.de)">Germany (.de)</option>
                        <option value="France (.fr)">France (.fr)</option>
                        <option value="Italy (.it)">Italy (.it)</option>
                        <option value="Spain (.es)">Spain (.es)</option>
                        <option value="Canada (.ca)">Canada (.ca)</option>
                        <option value="Mexico (.com.mx)">Mexico (.com.mx)</option>
                        <option value="Australia (.com.au)">Australia (.com.au)</option>
                        <option value="India (.in)">India (.in)</option>
                    </select>

                    <select name="keyword" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        <option value="" disabled selected>Select Category</option>
                        <option value="maze">Maze Books</option>
                        <option value="Coloring Books">Coloring Books</option>
                        <option value="Journals">Journals</option>
                        <option value="Planners">Planners</option>
                        <option value="Recipe Books">Recipe Books</option>
                        <option value="Quote Books">Quote Books</option>
                        <option value="Activity Books">Activity Books</option>
                        <option value="Gratitude Journals">Gratitude Journals</option>
                        <option value="Guided Meditations">Guided Meditations</option>
                        <option value="Daily Devotionals">Daily Devotionals</option>
                        <option value="Travel Planners">Travel Planners</option>
                        <option value="Adult Activity Books">Adult Activity Books</option>
                    </select>
                    
                    {{-- <input name="asin" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="ASIN"/> --}}
                    
                    <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Search
                    </button>
                </form>
                &nbsp;
                <a href="{{ route('favourite-niches') }}" type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Favourite Niches
                </a>
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
                        Upgrade Your Subscription to Get Access to KDP Niche Finder
                    </h2><br>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Your current subscription status does not include access to KDP Niche Finder. Please upgrade your subscription to keep using the Book Scout and the other powerful BookGrip tools.
                    </p><br>
                    <a href="{{ route('pricing') }}"
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                    UPGRADE SUBSCRIPTION
                </a><br><br>
                    </center>
                </div>
            @endif



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
                        {{-- <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" onclick="my_modal_{{ $result->id }}.showModal()"> --}}
                          <span class="material-symbols-outlined" style="cursor: pointer;" onclick="my_modal_{{ $result->id }}.showModal()">
                          visibility
                          </span>
                        {{-- </button> --}}
                        <form action="{{route('favourite-niches.post')}}" method="POST">
                          @csrf
                          <input type="hidden" name="market" value="{{ $result->market }}">
                          <input type="hidden" name="niche_keyword" value="{{ $result->niche_keyword }}">
                          <input type="hidden" name="niche_score" value="{{ $result->niche_score }}">
                          <input type="hidden" name="buyer_demand" value="{{ $result->buyer_demand }}">
                          <input type="hidden" name="competition_opportunity" value="{{ $result->competition_opportunity }}">
                          <input type="hidden" name="investment" value="{{ $result->investment }}">
                          <input type="hidden" name="revenue_potential" value="{{ $result->revenue_potential }}">
                          <input type="hidden" name="currency" value="{{ $result->currency }}">
                          <input type="hidden" name="search_volume" value="{{ $result->search_volume }}">
                          <input type="hidden" name="av_sales" value="{{ $result->av_sales }}">
                          <input type="hidden" name="av_price" value="{{ $result->av_price }}">
                          <input type="hidden" name="av_ratings" value="{{ $result->av_ratings }}">
                          <input type="hidden" name="av_rating" value="{{ $result->av_rating }}">
                          <input type="hidden" name="av_revenue" value="{{ $result->av_revenue }}">
                          <input type="hidden" name="launch_budget" value="{{ $result->launch_budget }}">
                          <input type="hidden" name="main_category" value="{{ $result->main_category }}">
                          <input type="hidden" name="av_listing_strength" value="{{ $result->av_listing_strength }}">
                          <input type="hidden" name="fba" value="{{ $result->fba }}">
                          <input type="hidden" name="ppc_bid" value="{{ $result->ppc_bid }}">
                          <input type="hidden" name="kw" value="{{ $result->kw }}">
                          <input type="hidden" name="kw_title" value="{{ $result->kw_title }}">
                          <button type="submit"><span class="material-symbols-outlined">
                            favorite
                          </span></button>
                        </form>
                      </td>
                      {{-- <td class="px-4 py-3 text-sm">
                        
                      </td> --}}
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

        
        

        <center>
          @if (session('success'))
              <h6 class="alert alert-success" style="color: red;">{{ session('success') }}</h6>
          @endif
        </center>

        <center>
          @if (session('error'))
              <h6 class="alert alert-success" style="color: red;">{{ session('error') }}</h6>
          @endif
        </center>

        </div>
    </main>
</x-app-layout>
<style>
  #blur {
    color: transparent;
    text-shadow: 0 0 8px #28dbf7;
  }

</style>

