<x-app-layout>
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            @include('profile.partials.update-profile-information-form') 
            @include('profile.partials.update-password-form') 
            @include('profile.partials.delete-user-form') 
        </div>
    </main>
</x-app-layout>
