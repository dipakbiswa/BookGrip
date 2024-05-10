<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Product Competitors")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Product Competitors
          </h2>
            @if (session()->get('status'))
              <center><span class="text-s font-semibold text-red-700 dark:text-red-200">{{ session()->get('status') }}</span></center>
            @endif 
        @if(auth()->user()->is_paid == 1)
          <!-- CTA -->
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
              <span>You've got {{ auth()->user()->book_scout_credit }} lookups till the end of the day</span>
            </div>
          </a>

        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
             
          <div class="flex items-center">
            
            
            <form action="{{ route('product-competitors-post') }}" method="post">
                @csrf
                    <span class="material-symbols-outlined">
                        input
                    </span>&nbsp;&nbsp;&nbsp;
                <input name="asin" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="ASIN"/>
                
                {{-- <input name="asin" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="ASIN"/> --}}
                
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Search
                </button>
            </form>
            </div>
        </div>

        <!-- Product Start -->
      <div class="grid gap-6 mb-8 md:grid-cols-2">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="container" style="position: relative;
              overflow: hidden;
              width: 100%;
              padding-top: 56.25%;">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/anxFb9gWDmg?si=JLgF7ZFuaStSMaHl" style="position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%; border-radius: 10px;"></iframe>
              </div>
        </div>
        <!-- Lines chart -->
        <div
        class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
      <center>
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Where to get ASIN code
        </h4>
        <img src="{{ asset('img/amazon-asin.png') }}" style="border-radius: 10px;" alt="">
      </center>
        <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
        >
        </div>
      </div>
      </div>
      <!-- Product End -->

        
        @else
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <center>
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                </h2><br>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    Upgrade Your Subscription to Get Access to Product Competitors
                </h2><br>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Your current subscription status does not include access to Product Competitors. Please upgrade your subscription to keep using the Product Competitors and the other powerful BookGrip tools.
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
