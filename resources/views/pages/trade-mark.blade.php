<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Trademark Research")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Trademark Research
          </h2>
          @if(auth()->user()->is_paid == 1)
            @if (session()->get('status'))
              <center><span class="text-s font-semibold text-red-700 dark:text-red-200">{{ session()->get('status') }}</span></center>
            @endif 
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
              <span>You've got {{ auth()->user()->trade_mark_credits }} lookups till the end of the month</span>
            </div>
          </a>
        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
             
          <div class="flex items-center">
            
            
            <form action="{{ route('trade-mark-post') }}" method="post">
                @csrf
                    <span class="material-symbols-outlined">
                        input
                    </span>&nbsp;&nbsp;&nbsp;
                <input name="trademark" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Search"/>
                <select name="type" id="" class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                    <option value="all">All</option>
                    <option value="active">Active</option>
                </select>
                {{-- <input name="asin" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="ASIN"/> --}}
                
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Search
                </button>
            </form>
            </div>
        </div>


        @isset($results)
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Keyword</th>
                    <th class="px-4 py-3">Registration Number</th>
                    <th class="px-4 py-3">Serial Number</th>
                    <th class="px-4 py-3">Status Label</th>
                    <th class="px-4 py-3">Status Date</th>
                    <th class="px-4 py-3">Status Definition</th>
                    <th class="px-4 py-3">Filing Date</th>
                    <th class="px-4 py-3">Registration Date</th>
                    <th class="px-4 py-3">Abandonment Date</th>
                    <th class="px-4 py-3">Expiration Date</th>
                    <th class="px-4 py-3">Description</th>
                    <th class="px-4 py-3">Owners</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach($results as $result)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{ $result['keyword'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['registration_number'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['serial_number'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['status_label'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['status_code'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['status_definition'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['filing_date'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{ $result['registration_date'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['abandonment_date'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $result['expiration_date'] }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <span class="material-symbols-outlined" style="cursor: pointer;" onclick="decs_modal_{{ $result['registration_number'] }}.showModal()">
                            visibility
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <span class="material-symbols-outlined" style="cursor: pointer;" onclick="own_modal_{{ $result['registration_number'] }}.showModal()">
                            visibility
                        </span>
                    </td>
                  </tr>
                  {{-- Desc Model start --}}
                  <dialog id="decs_modal_{{ $result['registration_number'] }}" class="modal">
                    <div class="modal-box w-11/50 max-w-5xl">
                      <h3 class="font-bold text-lg">Description</h3>
                      <hr>
                      <br>
                      <p class="py-10">
                        {{ $result['description'] }}
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
                  {{-- Desc Model end --}}
                  {{-- Owner Model start --}}
                  <dialog id="own_modal_{{ $result['registration_number'] }}" class="modal">
                    <div class="modal-box w-11/50 max-w-5xl">
                      <h3 class="font-bold text-lg">Owners</h3>
                      <hr>
                      @foreach( $result['owners'] as $owner)
                      <br>
                      <p class="py-10">
                          <p ><b>No:</b> {{ $owner['index'] }}</p>
                          <p ><b>Owner Type:</b> {{ $owner['owner_type'] }}</p>
                          <p ><b>Owner Label:</b> {{ $owner['owner_label'] }}</p>
                          <p ><b>Legal Eentity Type:</b> {{ $owner['legal_entity_type'] }}</p>
                          <p ><b>Legal Entity Type Label:</b> {{ $owner['legal_entity_type_label'] }}</p>
                          <p ><b>Name:</b> {{ $owner['name'] }}</p>
                          <p ><b>Address 1:</b> {{ $owner['address1'] }}</p>
                          <p ><b>Address 2:</b> {{ $owner['address2'] }}</p>
                          <p ><b>City:</b> {{ $owner['city'] }}</p>
                          <p ><b>State:</b> {{ $owner['state'] }}</p>
                          <p ><b>Country:</b> {{ $owner['country'] }}%</p>
                          <p ><b>Post Code:</b> {{ $owner['postcode'] }}</p>
                      </p>
                      <br>
                      @endforeach
                      <div class="modal-action">
                        <form method="dialog">
                          <!-- if there is a button, it will close the modal -->
                          <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Close</button>
                        </form>
                      </div>
                    </div>
                  </dialog>
                  {{-- Owner Model end --}}
                  @endforeach
                  
                </tbody>
              </table>
              {{-- {{ $results->links() }} --}}
            </div>
          </div>
          @endisset
    
          @else
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <center>
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                <span class="material-symbols-outlined">
                    lock
                </span>
            </h2><br>
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                Upgrade Your Subscription to Get Access to Trademark Research
            </h2><br>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Your current subscription status does not include access to Trademark Research. Please upgrade your subscription to keep using the Trademark Research and the other powerful BookGrip tools.
            </p><br>
            <button
              class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
            UPGRADE SUBSCRIPTION
            </button>
            </center>
        </div>
          @endif
        
        

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

