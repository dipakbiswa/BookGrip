<br>
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Edit Profile</h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                Profile Information
              </h4>
              <p class="text-gray-600 dark:text-gray-400">
                Update your account's profile information and email address.
              </p>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')
              <!-- Invalid input -->
              <label class="block text-sm">
                <div>
                    <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="text-red-600" :messages="$errors->get('name')" />
                </div>
                
              </label>

              <!-- Valid input -->
              <label class="block mt-4 text-sm">
                <div>
                    <x-input-label for="email" class="text-gray-600 dark:text-gray-400" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-green form-input" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="text-red-600" :messages="$errors->get('email')" />
    
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-gray-600 dark:text-gray-400">
                                {{ __('Your email address is unverified.') }}
    
                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>
    
                            @if (session('status') === 'verification-link-sent')
                                <p class="text-gray-600 dark:text-gray-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
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
