<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Manage Subscription")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Manage Subscription
          </h2>
          <div class="grid gap-6 mb-8 md:grid-cols-1 xl:grid-cols-1">
            <div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <p class="text-gray-700 dark:text-gray-200">
                  We primarily use Lemon Squeezy for as our payment processor. If you have any questions or requests like cancellations or payment method change, please reach out to us through your registered email on BookGrip or click below.
                </p>
              </center>
            </div>

            <div class="grid items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <center>
                <a style="width: 170px;" href="{{ route('cancel') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">Cancel Subscription</a>
                <br><br>
                <a style="width: 170px;" href="mailto:billing@bookgrip.com?subject=Manage billing regarding my BookGrip account - {{ Auth::user()->email }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Manage Subscription</a>
              </center>
            </div>
          </div>
        </div>
    </main>
</x-app-layout>

            