<x-app-layout>
    <main class="h-full pb-16 overflow-y-auto">
        @section('title', "Notifications")
        <!-- Remove everything INSIDE this div to a really blank page -->
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Notifications
            </h2>

            @foreach ($notifications as $notification)
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
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
    </main>
</x-app-layout>