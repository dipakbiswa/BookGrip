<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Resources")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Resources
          </h2>

            @if(auth()->user()->is_paid == 1)
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
                <a href="{{ route('recources.image') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <center>
                    <svg height="100px" width="100px" viewBox="0 0 73 73" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>fundamentals/css/images</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="fundamentals/css/images" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="container" transform="translate(2.000000, 2.000000)" fill-rule="nonzero"> <rect id="mask" stroke="#000000" stroke-width="2" fill="#424A60" x="-1" y="-1" width="71" height="71" rx="14"> </rect> <circle id="Oval" fill="#EFCE4A" cx="21.069" cy="23.069" r="9.069"> </circle> <polygon id="Shape" fill="#1A9172" points="69.5 56.7492553 68.1170213 55.212766 51.5212766 40 37 55.9042553 44.5828723 63.4871277 50.1382979 69.0425532 60.7455406 69.0425532 69.5 60.1780353"> </polygon> <polygon id="Shape" fill="#25AE88" points="47.8532188 64.0501875 33.8030313 50 12 69.1969687 53 69.1969687"> </polygon> <rect id="mask" stroke="#000000" stroke-width="2" x="-1" y="-1" width="71" height="71" rx="14"> </rect> </g> </g> </g></svg>
                    <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Images</h1>
                </center>
                </div></a>

                <a href="{{ route('resources.docs') }}"><div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <center>
                    <svg height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z"></path> <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z"></path> <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon> <path style="fill:#F15642;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16 V416z"></path> <g> <path style="fill:#FFFFFF;" d="M101.744,303.152c0-4.224,3.328-8.832,8.688-8.832h29.552c16.64,0,31.616,11.136,31.616,32.48 c0,20.224-14.976,31.488-31.616,31.488h-21.36v16.896c0,5.632-3.584,8.816-8.192,8.816c-4.224,0-8.688-3.184-8.688-8.816V303.152z M118.624,310.432v31.872h21.36c8.576,0,15.36-7.568,15.36-15.504c0-8.944-6.784-16.368-15.36-16.368H118.624z"></path> <path style="fill:#FFFFFF;" d="M196.656,384c-4.224,0-8.832-2.304-8.832-7.92v-72.672c0-4.592,4.608-7.936,8.832-7.936h29.296 c58.464,0,57.184,88.528,1.152,88.528H196.656z M204.72,311.088V368.4h21.232c34.544,0,36.08-57.312,0-57.312H204.72z"></path> <path style="fill:#FFFFFF;" d="M303.872,312.112v20.336h32.624c4.608,0,9.216,4.608,9.216,9.072c0,4.224-4.608,7.68-9.216,7.68 h-32.624v26.864c0,4.48-3.184,7.92-7.664,7.92c-5.632,0-9.072-3.44-9.072-7.92v-72.672c0-4.592,3.456-7.936,9.072-7.936h44.912 c5.632,0,8.96,3.344,8.96,7.936c0,4.096-3.328,8.704-8.96,8.704h-37.248V312.112z"></path> </g> <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z"></path> </g></svg>
                    <h1 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Documents</h1>
                </center>
                </div></a>
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
                    Upgrade Your Subscription to Get Access to Resources
                </h2><br>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Your current subscription status does not include access to Resources. Please upgrade your subscription to keep using the Resources and the other powerful BookGrip tools.
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
