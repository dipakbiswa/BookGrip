
<div
class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
>
<h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
    Delete Account
</h4>
<p class="text-gray-600 dark:text-gray-400">
    Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
</p>
<br>
<div>
    <button
      @click="openModal"
      class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-800 focus:outline-none focus:shadow-outline-purple"
    >
      Delete Account
    </button>
  </div>
</div>






<!-- Modal backdrop. This what you want to place close to the closing body tag -->
<div
x-show="isModalOpen"
x-transition:enter="transition ease-out duration-150"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition ease-in duration-150"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
>
<!-- Modal -->
<div
  x-show="isModalOpen"
  x-transition:enter="transition ease-out duration-150"
  x-transition:enter-start="opacity-0 transform translate-y-1/2"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-150"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0  transform translate-y-1/2"
  @click.away="closeModal"
  @keydown.escape="closeModal"
  class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
  role="dialog"
  id="modal"
>
  <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
  <header class="flex justify-end">
    <button
      class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
      aria-label="close"
      @click="closeModal"
    >
      <svg
        class="w-4 h-4"
        fill="currentColor"
        viewBox="0 0 20 20"
        role="img"
        aria-hidden="true"
      >
        <path
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"
          fill-rule="evenodd"
        ></path>
      </svg>
    </button>
  </header>
  <!-- Modal body -->
  <div class="mt-4 mb-6">
    <!-- Modal title -->
    <p
      class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300"
    >
    Are you sure you want to delete your account?
    </p>
    <!-- Modal description -->
    <p class="text-sm text-gray-700 dark:text-gray-400">
        Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
    </p>

    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <div class="mt-6">
            <x-input-label class="text-gray-600 dark:text-gray-400" for="password" value="{{ __('Password') }}" />

            <x-text-input
                id="password"
                name="password"
                type="password"
                class="mt-1 block w-3/4"
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input"
                placeholder="{{ __('Password') }}"
            />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">

            <x-danger-button class="ml-3">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>
    </form>


  </div>
  {{-- <footer
    class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800"
  >
    <button
      @click="closeModal"
      class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
    >
      Cancel
    </button>
    <button
      class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    >
      Accept
    </button>
  </footer> --}}
</div>
</div>
<!-- End of modal backdrop -->