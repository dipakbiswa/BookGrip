<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Amazon Niche Finder")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Amazon Niche Finder
          </h2>
          
        @if(auth()->user()->is_paid == 1)
          <!-- CTA -->
        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                    <path fill="#ef4823" d="M3.746,21.482c-0.078,1.981-0.24,3.956-0.108,5.934c0.233,3.475,0.834,7.105,3.037,9.866 c1.203,1.508,2.812,2.66,4.416,3.768c2.024,1.397,4.156,2.787,6.602,3.238c1.242,0.229,2.52,0.205,3.782,0.131 c4.225-0.248,8.467-1.07,12.241-2.915c3.775-1.845,7.063-4.777,8.785-8.502c1.018-2.203,1.469-4.622,1.546-7.032 c0.25-7.81-3.835-15.873-10.96-19.607c-0.819-0.429-1.674-0.803-2.572-1.048c-1.214-0.332-2.483-0.426-3.742-0.518 c-2.404-0.175-4.84-0.349-7.21,0.078S4.222,9.316,3.746,21.482z"></path><path fill="#38b47b" d="M6.938,12.728c0.726,3.424,2.526,6.829,4.381,9.72c1.625,2.531,2.994,4.911,4.981,7.106 c0,0,6.251,8.113,14.939,0c-2.003,4.541-4.901,11.736-8.452,14.749c-3.64,0.692-11.172-0.328-17.008-8.336 C2.192,31.045,3.254,16.442,6.938,12.728z"></path><path fill="#febf10" d="M23,44.471c0,0,8.559-11.653,9.517-19.742c0.395-3.332-1.988-8.659-8.517-9.15 c10.016-0.087,18.088,0.079,18.088,0.079s4.588,9.886,0,17.916S30.368,43.809,23,44.471z"></path><path fill="#010101" d="M36.721,8.195c-1.768-1.465-3.842-2.756-6.072-3.364c-1.339-0.365-2.737-0.453-4.115-0.553 c-1.444-0.104-2.892-0.202-4.341-0.161c-2.381,0.067-4.509,0.632-6.684,1.554C9.885,8.055,4.869,12.479,3.587,18.679 c-0.191,0.923-0.299,1.862-0.34,2.804c-0.205,5.03-0.493,10.687,2.339,15.129c1.351,2.118,3.393,3.592,5.433,4.993 c2.133,1.465,4.401,2.871,7.01,3.24c2.571,0.364,5.321,0.008,7.868-0.411c2.643-0.436,5.236-1.172,7.667-2.303 c4.13-1.921,7.818-5.153,9.605-9.411C46.655,24.415,43.549,13.852,36.721,8.195z M36.188,39.489 c-4.084,2.797-9.039,4.005-13.92,4.376c-1.284,0.098-2.59,0.176-3.872,0.026c-1.304-0.153-2.552-0.602-3.715-1.199 c-2.116-1.085-4.21-2.521-6.007-4.077c-1.814-1.571-3.026-3.533-3.691-5.834c-0.67-2.322-0.911-4.807-0.893-7.218 c0.01-1.361,0.101-2.721,0.157-4.08c0.148-3.359,1.351-6.554,3.524-9.128c1.769-2.096,4.017-3.732,6.447-4.981 c1.618-0.831,3.348-1.539,5.127-1.944c2.025-0.461,4.17-0.353,6.226-0.218c1.374,0.09,2.773,0.146,4.125,0.421 c1.226,0.25,2.374,0.735,3.467,1.337c7.377,4.06,11.346,12.952,10.206,21.189C42.715,32.878,40.096,36.813,36.188,39.489z"></path><path fill="#c0e6ed" d="M26.955,16.253c-2.757-0.936-5.241-1.091-7.774,0.351s-4.335,4.345-4.487,7.436 s1.408,6.24,3.931,7.703c1.171,0.679,2.492,0.999,3.81,1.177c1.414,0.191,2.867,0.225,4.247-0.158 c3.422-0.951,5.987-4.697,5.828-8.513C32.352,20.433,30.305,17.391,26.955,16.253z"></path><path fill="#010101" d="M27.088,15.771c-2.014-0.67-4.166-1.017-6.244-0.416c-1.893,0.548-3.525,1.749-4.702,3.317 c-2.365,3.15-2.612,7.558-0.456,10.885c1.08,1.666,2.65,2.834,4.549,3.412c2.083,0.633,4.552,0.868,6.662,0.251 c3.539-1.035,5.932-4.643,6.11-8.234C33.207,20.956,30.94,17.124,27.088,15.771z M27.784,31.788 c-1.728,0.913-3.772,0.888-5.656,0.585c-1.863-0.3-3.598-0.976-4.88-2.403c-2.346-2.614-2.66-6.555-1.008-9.602 c0.933-1.721,2.426-3.147,4.271-3.847c2.087-0.793,4.245-0.472,6.311,0.216c3.013,1.058,4.862,3.831,5.151,6.956 C32.27,26.9,30.683,30.256,27.784,31.788z"></path><path fill="#4b7bb2" d="M22.546,18.596c-2.647,0-4.935,2.884-4.921,5.808c0.007,1.388,0.507,2.802,1.47,3.693 c0.763,0.705,1.743,1.04,2.695,1.358c1.691,0.565,3.56,1.122,5.174,0.328c1.825-0.897,2.713-3.347,2.496-5.541 C29.218,21.791,28.189,18.596,22.546,18.596z"></path><path fill="#010101" d="M29.164,21.271c-1.271-2.453-4.047-3.158-6.617-3.176c-2.842,0.062-4.966,2.71-5.349,5.369 c-0.215,1.495,0.084,3.118,0.987,4.351c0.955,1.304,2.487,1.812,3.966,2.284c1.542,0.493,3.264,0.886,4.82,0.227 c1.264-0.535,2.112-1.669,2.584-2.927C30.271,25.484,30.108,23.095,29.164,21.271z M27.775,28.524 c-0.936,1.07-2.29,1.297-3.642,1.061c-1.328-0.232-2.844-0.673-4.013-1.356c-1.173-0.685-1.821-1.928-1.964-3.257 c-0.278-2.583,1.548-5.815,4.391-5.876c1.917,0.013,4.086,0.37,5.326,1.994c0.875,1.145,1.188,2.764,1.111,4.178 C28.92,26.421,28.547,27.642,27.775,28.524z"></path><path fill="#010101" d="M23.6,16.048c2.981,0.01,5.961-0.018,8.942-0.044c1.443-0.012,2.887-0.024,4.33-0.029 c0.773-0.003,1.547-0.004,2.32-0.002c0.778,0.002,1.562-0.032,2.321,0.168c0.623,0.164,0.889-0.8,0.266-0.964 c-1.408-0.371-2.978-0.206-4.421-0.203c-1.526,0.004-3.051,0.015-4.577,0.028c-3.06,0.026-6.121,0.056-9.181,0.046 C22.956,15.046,22.956,16.046,23.6,16.048L23.6,16.048z"></path><path fill="#010101" d="M31.418,27.699c-2.147,5.8-5.077,11.285-8.619,16.352c-0.37,0.529,0.497,1.029,0.863,0.505 c3.593-5.14,6.542-10.708,8.72-16.591C32.606,27.36,31.64,27.099,31.418,27.699L31.418,27.699z"></path><path fill="#010101" d="M6.455,12.861c0.711,3.249,2.222,6.277,3.96,9.09c1.692,2.739,3.375,5.551,5.531,7.956 c0.43,0.48,1.136-0.229,0.707-0.707c-2.098-2.34-3.728-5.089-5.375-7.754c-1.697-2.745-3.165-5.681-3.859-8.851 C7.282,11.967,6.318,12.233,6.455,12.861L6.455,12.861z"></path>
                </svg>&nbsp;&nbsp;&nbsp;
              <span class="text-l">Set Up the BookGrip Chrome Extension - The Most Advanced Market Analytics Extension for Publishers</span><br>
              </div>
            <a href="#"><button
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >
                Install
              </button></a>
              
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <p class="text-sm text-gray-600 dark:text-gray-400">
                The BookGrip Chrome Extension will show you valuable data about the book marketplace on Amazon and Audible. See sales, royalties, historic BSR data and much more for any book on Amazon and Audible.
              </p>
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                Your Account Details
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                <b>Email:</b> dbiswakarma003@gmail.com
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                <b>Password:</b> dbiswakarma003@gmail.com
            </p>
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
                <a href="{{route('pricing')}}"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                UPGRADE SUBSCRIPTION
              </a><br><br>
                </center>
            </div>
        @endif

          <!-- Charts -->
          
        


          
          <!-- Cards -->
          {{-- <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
              <div
                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                >
                  Total clients
                </p>
                <p
                  class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                >
                  6389
                </p>
              </div>
            </div>
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
              <div
                class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                >
                  Account balance
                </p>
                <p
                  class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                >
                  $ 46,760.89
                </p>
              </div>
            </div>
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
              <div
                class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                >
                  New sales
                </p>
                <p
                  class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                >
                  376
                </p>
              </div>
            </div>
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
              <div
                class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                >
                  Pending contacts
                </p>
                <p
                  class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                >
                  35
                </p>
              </div>
            </div>
          </div> --}}

          <!-- New Table -->
          {{-- <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Hans Burger</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            10x Developer
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 863.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Jolina Angelie</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Unemployed
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 369.95
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                      >
                        Pending
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Sarah Curry</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Designer
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 86.00
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                      >
                        Denied
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Rulia Joberts</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Actress
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 1276.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Wenzel Dashington</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Actor
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 863.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"
                      >
                        Expired
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Dave Li</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Influencer
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 863.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Maria Ramovic</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Runner
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 863.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Hitney Wouston</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            Singer
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 863.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>

                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">Hans Burger</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            10x Developer
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      $ 863.45
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
            >
              <span class="flex items-center col-span-3">
                Showing 21-30 of 100
              </span>
              <span class="col-span-2"></span>
              <!-- Pagination -->
              <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                  <ul class="inline-flex items-center">
                    <li>
                      <button
                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Previous"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 fill-current"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        1
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        2
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        3
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        4
                      </button>
                    </li>
                    <li>
                      <span class="px-3 py-1">...</span>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        8
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        9
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Next"
                      >
                        <svg
                          class="w-4 h-4 fill-current"
                          aria-hidden="true"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </li>
                  </ul>
                </nav>
              </span>
            </div>
          </div> --}}

        </div>
    </main>
</x-app-layout>
