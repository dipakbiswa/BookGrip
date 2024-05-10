<x-app-layout>
    <style>
        page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 11cm;
  height: 19.7cm; 
}
    </style>
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Book Scout
          </h2>
          

          <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table align="center" class="w-full whitespace-no-wrap">
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td style="text-align: center;" class="px-4 py-3">
                        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Left Side Options</h3>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                  Requested Limit
                                </span>
                                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                  <option>$1,000</option>
                                  <option>$5,000</option>
                                  <option>$10,000</option>
                                  <option>$25,000</option>
                                </select>
                            </label>
                            <br>
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Name</span>
                                <input
                                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  placeholder="Jane Doe"
                                />
                            </label>
                        </div>
                    </td>
                    <td style="text-align: center;" class="px-4 py-3 text-sm">
                        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            {{-- <img src="{{ asset('img/kdp-studio/blank.png') }}" alt=""> --}}
                            <page size="A4"></page>
                        </div>
                    </td>
                    <td style="text-align: center;" class="px-4 py-3 text-sm">
                        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Right Side Options</h3>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                  Requested Limit
                                </span>
                                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                  <option>$1,000</option>
                                  <option>$5,000</option>
                                  <option>$10,000</option>
                                  <option>$25,000</option>
                                </select>
                            </label>
                            <br>
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Name</span>
                                <input
                                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  placeholder="Jane Doe"
                                />
                            </label>
                        </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            
          </div>
          
          



        </div>
    </main>
</x-app-layout>
