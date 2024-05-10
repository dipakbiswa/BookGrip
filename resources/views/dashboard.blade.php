<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Book Grip Dashboard")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            👋 Welcome, {{ auth()->user()->name }}!
          </h2>
          
          @if(auth()->user()->is_paid == 0)
          <!-- CTA -->
          <a
            class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="{{ route('pricing') }}"
          >
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
              <span>You're on your free plan</span>
            </div>
            <span>Get Pro plan &RightArrow;</span>
          </a>
          @endif


          <!-- Charts -->
          <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                
              </h4>
              {{-- <canvas id="pie"></canvas> --}}
              <div class="container" style="position: relative;
              overflow: hidden;
              width: 100%;
              padding-top: 56.25%;">
                <iframe class="responsive-iframe" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" src="{{ $results->url }}" style="position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
                border-radius: 8px;"></iframe>
              </div>
              <div
                class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
              >
              </div>
            </div>
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" style="overflow: hidden; height: 385px;">
              <div style="width: 100%; height: 15%;">
                <h4 style="float: left;" class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Latest Updates
                </h4>
                <a href="{{ route('notification') }}" style="float: right;" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  All Notifications
                </a>
              </div>
              <hr><br>
              

              <!--Notifications-->
              <div style="height: 300px; max-height: 100%; overflow-y: auto !important;">
                @foreach ($notifications as $notification)
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <h2 class="text-l font-semibold text-gray-700 dark:text-gray-200">
                      {{ $notification->subject }}
                  </h2>
                  <p class="text-sm text-gray-600 dark:text-gray-400">
                      {{ $notification->message }}
                  </p><br>
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        {{ $notification->date }}
                    </span>&nbsp;
                    <a href="{{ $notification->link }}" style="background: gray;" target="_blank" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                      SEE MORE
                    </a>
                </div>
                @endforeach
              </div>
              <!--Notification End-->
              
              <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
              </div>
            </div>
          </div>
        

          <hr><br>
          <div class="grid gap-6 mb-8 md:grid-cols-1 xl:grid-cols-1">
            <div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>chrome-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-400.000000, -1043.000000)"> <g id="chrome" transform="translate(400.000000, 1043.000000)"> <path d="M5.7954035,8.36130434 C16.9522782,-4.62351526 37.639151,-2.06037988 45.3727574,13.1072081 C39.9288251,13.1091897 31.4040328,13.1055761 26.786937,13.1072081 C23.4382318,13.1083738 21.2761308,13.0322537 18.9347285,14.2648621 C16.1820632,15.7138239 14.1051274,18.3997073 13.3801164,21.5544341 L5.7954035,8.36130434 L5.7954035,8.36130434 Z" id="chrome-icon-path" fill="#EA4335"> </path> <path d="M16.015461,23.9991346 C16.015461,28.3998753 19.5936811,31.9800817 23.9919804,31.9800817 C28.3901632,31.9800817 31.9683834,28.3998753 31.9683834,23.9991346 C31.9683834,19.5985104 28.3901632,16.0181875 23.9919804,16.0181875 C19.5936811,16.0181875 16.015461,19.5985104 16.015461,23.9991346 L16.015461,23.9991346 Z" id="chrome-icon-path" fill="#4285F4"> </path> <path d="M27.0876366,34.4456482 C22.6105798,35.7761751 17.371347,34.3006354 14.5014777,29.3468879 C12.3108329,25.5655987 6.52286114,15.4823164 3.89206021,10.8973955 C-5.32185953,25.0194695 2.61924235,44.2642006 19.3464574,47.5489026 L27.0876366,34.4456482 L27.0876366,34.4456482 Z" id="chrome-icon-path" fill="#34A853"> </path> <path d="M31.4014697,16.0181875 C35.1303309,19.4863704 35.9427207,25.102234 33.4168909,29.4566966 C31.5138971,32.7374352 25.4402549,42.9884614 22.4966379,47.9523505 C39.730883,49.0147671 52.2944399,32.1238121 46.6195946,16.0181875 L31.4014697,16.0181875 L31.4014697,16.0181875 Z" id="chrome-icon-path" fill="#FBBC05"> </path> </g> </g> </g> </g></svg>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Install BookGrip Sales Tracker Chrome Extension</h1>
                <a href="https://chromewebstore.google.com/detail/book-grip/amhibgmhlcfpnleaeagmjfendimehfbn" target="_blank" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Install Now
                </a>
              </center>
            </div>
          </div>

          <hr><br>
          <!-- Cards -->
          <div class="grid gap-6 mb-8 md:grid-cols-4 xl:grid-cols-4">
            
            
            <a href="{{ route('kdp-categories') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#7e3af2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#7e3af2;} </style> <g> <path class="st0" d="M332.998,291.918c52.2-71.895,45.941-173.338-18.834-238.123c-71.736-71.728-188.468-71.728-260.195,0 c-71.746,71.745-71.746,188.458,0,260.204c64.775,64.775,166.218,71.034,238.104,18.844l14.222,14.203l40.916-40.916 L332.998,291.918z M278.488,278.333c-52.144,52.134-136.699,52.144-188.852,0c-52.152-52.153-52.152-136.717,0-188.861 c52.154-52.144,136.708-52.144,188.852,0C330.64,141.616,330.64,226.18,278.488,278.333z"></path> <path class="st0" d="M109.303,119.216c-27.078,34.788-29.324,82.646-6.756,119.614c2.142,3.489,6.709,4.603,10.208,2.46 c3.49-2.142,4.594-6.709,2.462-10.198v0.008c-19.387-31.7-17.45-72.962,5.782-102.771c2.526-3.228,1.946-7.898-1.292-10.405 C116.48,115.399,111.811,115.979,109.303,119.216z"></path> <path class="st0" d="M501.499,438.591L363.341,315.178l-47.98,47.98l123.403,138.168c12.548,16.234,35.144,13.848,55.447-6.456 C514.505,474.576,517.743,451.138,501.499,438.591z"></path> </g> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">KDP Categories</h1>
              </center>
            </div></a>
            
            {{-- <a href="{{ route('keyword') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.96491C0 1.87972 0.879721 1 1.96491 1H4.77193C5.85712 1 6.73684 1.87972 6.73684 2.96491V3.52632C6.73684 4.61151 5.85712 5.49123 4.77193 5.49123H1.96491C0.879721 5.49123 0 4.61151 0 3.52632V2.96491ZM1.96491 2.68421C1.80989 2.68421 1.68421 2.80989 1.68421 2.96491V3.52632C1.68421 3.68134 1.80989 3.80702 1.96491 3.80702H4.77193C4.92696 3.80702 5.05263 3.68134 5.05263 3.52632V2.96491C5.05263 2.80988 4.92696 2.68421 4.77193 2.68421H1.96491Z" fill="#7e3af2"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.14035 3.24561C8.14035 2.78053 8.51737 2.40351 8.98246 2.40351H15.1579C15.623 2.40351 16 2.78053 16 3.24561C16 3.7107 15.623 4.08772 15.1579 4.08772H8.98246C8.51737 4.08772 8.14035 3.7107 8.14035 3.24561Z" fill="#7e3af2"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0.280702 8.29825C0.280702 7.83316 0.657725 7.45614 1.12281 7.45614H11.7895C12.2546 7.45614 12.6316 7.83316 12.6316 8.29825C12.6316 8.76333 12.2546 9.14035 11.7895 9.14035H1.12281C0.657725 9.14035 0.280702 8.76333 0.280702 8.29825Z" fill="#7e3af2"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0.280702 13.3509C0.280702 12.8858 0.657725 12.5088 1.12281 12.5088H14.5965C15.0616 12.5088 15.4386 12.8858 15.4386 13.3509C15.4386 13.816 15.0616 14.193 14.5965 14.193H1.12281C0.657725 14.193 0.280702 13.816 0.280702 13.3509Z" fill="#7e3af2"></path> <path d="M14.8772 9.14035C15.3423 9.14035 15.7193 8.76333 15.7193 8.29825C15.7193 7.83316 15.3423 7.45614 14.8772 7.45614C14.4121 7.45614 14.0351 7.83316 14.0351 8.29825C14.0351 8.76333 14.4121 9.14035 14.8772 9.14035Z" fill="#7e3af2"></path> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Keyword Research</h1>
              </center>
            </div></a> --}}
            
            {{-- <a href="{{ route('sales-tracker') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#7e3af2;}  </style> <g> <path class="st0" d="M77.609,448h52.781c7.516,0,13.609-6.094,13.609-13.609V315.094c0-7.516-6.094-13.609-13.609-13.609H77.609 c-7.516,0-13.609,6.094-13.609,13.609v119.297C64,441.906,70.094,448,77.609,448z"></path> <path class="st0" d="M197.609,448h52.781c7.516,0,13.609-6.094,13.609-13.609V235.094c0-7.516-6.094-13.609-13.609-13.609h-52.781 c-7.516,0-13.609,6.094-13.609,13.609v199.297C184,441.906,190.094,448,197.609,448z"></path> <path class="st0" d="M317.609,448h52.781c7.516,0,13.609-6.094,13.609-13.609V139.094c0-7.516-6.094-13.609-13.609-13.609h-52.781 c-7.516,0-13.609,6.094-13.609,13.609v295.297C304,441.906,310.094,448,317.609,448z"></path> <path class="st0" d="M437.609,448h52.781c7.516,0,13.609-6.094,13.609-13.609V43.094c0-7.516-6.094-13.609-13.609-13.609h-52.781 c-7.516,0-13.609,6.094-13.609,13.609v391.297C424,441.906,430.094,448,437.609,448z"></path> <path class="st0" d="M498.391,482H45.609C38.094,482,32,475.906,32,468.391V13.609C32,6.094,25.906,0,18.391,0h-4.781 C6.094,0,0,6.094,0,13.609v484.781C0,505.906,6.094,512,13.609,512h484.781c7.516,0,13.609-6.094,13.609-13.609v-2.781 C512,488.094,505.906,482,498.391,482z"></path> </g> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Sales Tracker</h1>
              </center>
            </div></a> --}}
            
            <a href="{{ route('product-competitors') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>product-catalog</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="icon" fill="#7e3af2" transform="translate(42.666667, 41.600000)"> <path d="M85.334,107.733 L85.335,150.399 L42.6666667,150.4 L42.6666667,342.4 L175.702784,342.4 L192,350.539 L192,250.91 L202.665434,256.831437 L213.331989,262.740708 L223.998544,256.831437 L234.666,250.909 L234.666,350.539 L250.963883,342.4 L384,342.4 L384,150.4 L341.332,150.399 L341.331,107.733 L426.666667,107.733333 L426.666667,385.066667 L261.013333,385.066667 L213.333333,408.918058 L165.632,385.066667 L3.55271368e-14,385.066667 L3.55271368e-14,107.733333 L85.334,107.733 Z M362.666667,278.4 L362.666667,310.4 L256,310.4 L256,278.4 L362.666667,278.4 Z M170.666667,278.4 L170.666667,310.4 L64,310.4 L64,278.4 L170.666667,278.4 Z M362.666667,214.4 L362.666667,246.4 L256,246.4 L256,239.065 L300.43,214.399 L362.666667,214.4 Z M126.237,214.399 L170.666,239.065 L170.666667,246.4 L64,246.4 L64,214.4 L126.237,214.399 Z M213.333333,7.10542736e-15 L320,59.2604278 L320,177.780929 L213.333333,237.041357 L106.666667,177.780929 L106.666667,59.2604278 L213.333333,7.10542736e-15 Z M170.666667,107.370667 L170.666667,188.928 L192,200.789333 L192,119.232 L170.666667,107.370667 Z M128,83.6693333 L128,165.226723 L149.333333,177.088 L149.333333,95.5306667 L128,83.6693333 Z M256.768,48.5333333 L182.037333,89.28 L202.346667,100.565333 L276.373333,59.4133333 L256.768,48.5333333 Z M213.333333,24.4053901 L139.306667,65.536 L159.957333,77.0133333 L234.688,36.2666667 L213.333333,24.4053901 Z" id="Path-2"> </path> </g> </g> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Product Competitors</h1>
              </center>
            </div></a>

            <a href="{{ route('book-scout') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg fill="#7e3af2" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#7e3af2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M481.53,335.288C450.427,238.601,360.298,171.002,256,171.002c-104.242,0-194.41,67.548-225.53,164.286 c-1.3,4.041-1.3,8.387,0,12.427C61.573,444.401,151.703,512,256,512c104.175,0,194.392-67.494,225.53-164.285 C482.83,343.675,482.83,339.329,481.53,335.288z M256,471.419c-85.653,0-157.79-54.616-184.786-129.917 C98.215,266.182,170.365,211.584,256,211.584c85.653,0,157.79,54.617,184.785,129.917 C413.785,416.819,341.634,471.419,256,471.419z"></path> <path d="M256,235.182c-58.625,0-106.321,47.694-106.321,106.319c0,58.625,47.695,106.319,106.321,106.319 s106.321-47.694,106.321-106.319C362.321,282.876,314.625,235.182,256,235.182z M256,407.239 c-36.249,0-65.739-29.491-65.739-65.738s29.491-65.738,65.739-65.738s65.739,29.491,65.739,65.738S292.249,407.239,256,407.239z"></path> <circle cx="256.001" cy="341.507" r="38.201"></circle> <path d="M256.001,122.16c11.206,0,20.291-9.085,20.291-20.291V20.291C276.292,9.085,267.207,0,256.001,0 c-11.206,0-20.291,9.085-20.291,20.291v81.578C235.711,113.076,244.795,122.16,256.001,122.16z"></path> <path d="M119.458,166.832c7.923,7.924,20.771,7.924,28.695,0c7.924-7.923,7.924-20.771,0-28.695L90.47,80.451 c-7.922-7.924-20.77-7.924-28.695,0c-7.924,7.924-7.924,20.771,0,28.695L119.458,166.832z"></path> <path d="M392.547,166.832l57.684-57.685c7.924-7.924,7.924-20.771,0-28.695c-7.923-7.924-20.771-7.924-28.695,0l-57.684,57.685 c-7.924,7.924-7.924,20.771,0,28.695C371.775,174.755,384.624,174.756,392.547,166.832z"></path> </g> </g> </g> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Book Scout</h1>
              </center>
            </div></a>

            <a href="{{ route('description-formatter') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" fill="#7e3af2" viewBox="0 0 512 512" id="_x30_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M416,160h-40c-33.137,0-60-26.863-60-60V60c0-33.137-26.863-60-60-60H96C62.863,0,36,26.863,36,60v392 c0,33.137,26.863,60,60,60h320c33.137,0,60-26.863,60-60V220C476,186.863,449.137,160,416,160z M366,432H146 c-16.569,0-30-13.431-30-30s13.431-30,30-30h220c16.569,0,30,13.431,30,30S382.569,432,366,432z M366,312H146 c-16.569,0-30-13.431-30-30s13.431-30,30-30h220c16.569,0,30,13.431,30,30S382.569,312,366,312z"></path></g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Description Formatter</h1>
              </center>
            </div></a>

            <a href="{{ route('editor') }}" target="_blank"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#7e3af2;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style> </defs> <g id="ic-editor-scale"> <rect class="cls-1" x="19" y="1" width="4" height="4" rx="1.25"></rect> <rect class="cls-1" x="1" y="1" width="4" height="4" rx="1.25"></rect> <rect class="cls-1" x="19" y="19" width="4" height="4" rx="1.25"></rect> <rect class="cls-1" x="1" y="19" width="4" height="4" rx="1.25"></rect> <line class="cls-1" x1="5" y1="3" x2="19" y2="3"></line> <line class="cls-1" x1="21" y1="5" x2="21" y2="19"></line> <line class="cls-1" x1="19" y1="21" x2="5" y2="21"></line> <line class="cls-1" x1="3" y1="19" x2="3" y2="5"></line> <line class="cls-1" x1="7" y1="18" x2="12" y2="6"></line> <line class="cls-1" x1="17" y1="18" x2="12" y2="6"></line> <line class="cls-1" x1="8.67" y1="14" x2="15.33" y2="14"></line> </g> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Editor</h1>
              </center>
            </div></a>

            <a href="{{ route('trade-mark') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 7H9M6 17V7M13 17V7L17 14L21 7V17" stroke="#7e3af2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <br>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Trademark Checker</h1>
              </center>
            </div></a>
            
          </div>
          <hr><br>
          <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
            <div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" fill="#7e3af2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path> </g></svg>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Become a member of our private community</h1>
                <a href="https://www.facebook.com/groups/bookgrip/" target="_blank" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Join Now
                </a>
              </center>
            </div>

            <div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <svg height="50px" width="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#7e3af2" stroke-width="2"></path> <path d="M10.5 8.67709C10.8665 8.26188 11.4027 8 12 8C13.1046 8 14 8.89543 14 10C14 10.9337 13.3601 11.718 12.4949 11.9383C12.2273 12.0064 12 12.2239 12 12.5V12.5V13" stroke="#7e3af2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 16H12.01" stroke="#7e3af2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Have A Question?</h1>
                <a href="https://bookgrip.tawk.help/" target="_blank" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Go to Help Center
                </a>
              </center>
            </div>
          </div>

    </main>
</x-app-layout>
