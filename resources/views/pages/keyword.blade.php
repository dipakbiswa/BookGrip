<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Keyword Research")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Keyword Research
          </h2>
            @if (session()->get('status'))
              <center><span class="text-s font-semibold text-red-700 dark:text-red-200">{{ session()->get('status') }}</span></center>
            @endif 
          <!-- CTA -->
        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
             
          <div class="flex items-center">
            
            
            <form action="{{ route('keyword-post') }}" method="post">
                @csrf
                    <span class="material-symbols-outlined">
                        input
                    </span>&nbsp;&nbsp;&nbsp;
                <input name="keyword" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Keyword"/>
                
                {{-- <input name="asin" required class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="ASIN"/> --}}
                
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Search
                </button>
            </form>
            &nbsp;
            <a href="{{route('favourite-keywords')}}" type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Favourite Keywords
            </a>
            </div>
        </div>


        {{-- Keyword table --}}
        @isset($results)
          @if(auth()->user()->is_paid == 1)
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Keyword</th>
                      <th class="px-4 py-3">AMZ Search Volume</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($results as $result)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div>
                            <a target="_blank" href="https://www.amazon.com/s?k={{ $result->keyword }}&tag=bookgrip09-20">{{ $result->keyword }}</a>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $result->search_volume }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <form action="{{route('favourite')}}" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $result->id }}">
                          <input type="hidden" name="keyword" value="{{ $result->keyword }}">
                          <input type="hidden" name="search_volume" value="{{ $result->search_volume }}">
                          <button type="submit"><span class="material-symbols-outlined">
                            favorite
                          </span></button>
                        </form>
                      </td>
                      {{-- <td class="px-4 py-3 text-sm">
                        
                      </td> --}}
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{-- {{ $results->links() }} --}}
              </div>
            </div>

          
          @else
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Keyword</th>
                    <th class="px-4 py-3">AMZ Search Volume</th>
                    <th class="px-4 py-3">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @php
                      $i = 0;
                  @endphp
                  @foreach($results as $result)
                  @if($i <= 10)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div>
                          <a target="_blank" href="https://www.amazon.com/s?k={{ $result->keyword }}&tag=bookgrip09-20">{{ $result->keyword }}</a>
                        </div>
                      </div>
                    </td>
                    <td id="blur" class="px-4 py-3 text-sm">
                      0000
                    </td>
                    <td class="px-4 py-3 text-sm">
                      <form action="{{route('favourite')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $result->id }}">
                        <input type="hidden" name="keyword" value="{{ $result->keyword }}">
                        <input type="hidden" name="search_volume" value="{{ $result->search_volume }}">
                        <button type="submit"><span class="material-symbols-outlined">
                          favorite
                        </span></button>
                      </form>
                    </td>
                  </tr>
                  @else
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div id="blur">
                          Please get premium to view this keyword.
                        </div>
                      </div>
                    </td>
                    <td id="blur" class="px-4 py-3 text-sm">
                      0000
                    </td>
                    <td id="blur" class="px-4 py-3 text-sm">
                        <span class="material-symbols-outlined">
                          favorite
                        </span>
                    </td>
                  </tr>
                  @endif
                  @php
                      $i++;
                      
                  @endphp
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          @endif
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

