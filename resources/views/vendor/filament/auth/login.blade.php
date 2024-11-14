<!-- resources/views/vendor/filament/auth/login.blade.php -->
<x-filament::page>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-4 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>
            
            <form method="POST" action="{{ route('filament.auth.login') }}">
                @csrf
                <div class="mt-4">
                    <x-filament::input label="Email" name="email" type="email" required />
                </div>
                <div class="mt-4">
                    <x-filament::input label="Password" name="password" type="password" required />
                </div>
                <div class="flex items-center justify-between mt-6">
                    <x-filament::button type="submit">Login</x-filament::button>
                </div>
                
            </form>
        </div>
    </div>
</x-filament::page>
