
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                Update Password
              </h4>
              <p class="text-gray-600 dark:text-gray-400">
                Ensure your account is using a long, random password to stay secure.
              </p>
            

              <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
              <!-- Invalid input -->
              <label class="block text-sm">
                <div>
                    <x-input-label for="current_password" class="text-gray-600 dark:text-gray-400" :value="__('Current Password')" />
                    <x-text-input id="current_password" name="current_password" type="password" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="text-sm text-red-600" />
                </div>
              </label>

              <label class="block text-sm">
                <div>
                    <x-input-label for="password" class="text-gray-600 dark:text-gray-400" :value="__('New Password')" />
                    <x-text-input id="password" name="password" type="password" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="text-sm text-red-600" />
                </div>
              </label>

              <label class="block text-sm">
                <div>
                    <x-input-label for="password_confirmation" class="text-gray-600 dark:text-gray-400" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="text-sm text-red-600" />
                </div>
              </label>

              

              <!-- Helper text -->
              <label class="block mt-4 text-sm">
                <div>
                <x-primary-button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-red-600"
                    >{{ __('Saved.') }}</p>
                @endif
                </div>
              </label>    
        </form>
            </div>
