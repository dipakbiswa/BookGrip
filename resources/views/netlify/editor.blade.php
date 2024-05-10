@if (auth()->user()->is_paid === 1)
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookGrip Editor</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
  </head>
  <body>
    <iframe src="" id="iframe" security="restricted" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>
    <script src="{{ asset("script.js") }}"></script>
  </body>
  </html>
@else
<x-app-layout>
  <main class="h-full overflow-y-auto">
    @section('title', "BookGrip Editor")
      <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Editor
        </h2>


          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <center>
              <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                  <span class="material-symbols-outlined">
                      lock
                  </span>
              </h2><br>
              <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                  Upgrade Your Subscription to Get Access to BookGrip Editor
              </h2><br>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                  Your current subscription status does not include access to BookGrip Editor. Please upgrade your subscription to keep using the BookGrip Editor and the other powerful BookGrip tools.
              </p><br>
              <button
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >
              UPGRADE SUBSCRIPTION
              </button>
              </center>
          </div>

      </div>
  </main>
</x-app-layout>

@endif
