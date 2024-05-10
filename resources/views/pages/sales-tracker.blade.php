<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Sales Tracker")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Sales Tracker
          </h2>
          
          
          
          <!-- CTA -->

            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <center>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    Discover how many books an author is selling by entering their kindle best seller rank and ASIN code
                </h2>
                <form method="post" action="{{ route('sales-tracker.post') }}" class="mt-6 space-y-6">
                    @csrf
                  <!-- Invalid input -->
                  <label class="block text-sm">
                    <div>
                        <x-input-label class="text-gray-600 dark:text-gray-400" for="bsr" :value="__('Best Seller Rank')" />
                        <x-text-input id="bsr" name="bsr" type="number" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" required autofocus autocomplete="bsr" />
                        <x-input-error class="text-red-600" :messages="$errors->get('bsr')" />
                    </div>
                  </label>
                  <br>
                  <label class="block text-sm">
                    <div>
                        <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('ASIN Code')" />
                        <x-text-input id="asin" name="asin" type="text" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" required autofocus autocomplete="asin" />
                        <x-input-error class="text-red-600" :messages="$errors->get('asin')" />
                    </div>
                  </label>
                  <br>
                  <x-primary-button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Check Sales') }}</x-primary-button>
                </form>
                </center>
            </div>

          
              
          @isset($books)
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <center>
              <h2 class="text-l font-semibold text-gray-700 dark:text-gray-200">
                  Sales per day
              </h2>
              <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                {{ $books }}
              </h2>
              <hr>
              <h2 class="text-l font-semibold text-gray-700 dark:text-gray-200">
                Sales per week
              </h2>
              <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                {{ $books*7 }}
              </h2>
              <hr>
              <h2 class="text-l font-semibold text-gray-700 dark:text-gray-200">
                Sales per month
              </h2>
              <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                {{ $books*30 }}
              </h2>
              </center>
            </div>
          @endisset
          
          

        





        </div>
    </main>
</x-app-layout>
