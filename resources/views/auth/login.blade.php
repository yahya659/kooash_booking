<x-guest-layout>
    <!-- حالة الجلسة -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- البريد الإلكتروني -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('البريد الإلكتروني')" />
            <x-text-input id="email" class="block mt-1 w-full text-right" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- كلمة المرور -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('كلمة المرور')" />
            <x-text-input id="password" class="block mt-1 w-full text-right" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- تذكرني -->
        <div class="block mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="mr-2 text-sm text-gray-600">تذكرني</span>
            </label>
        </div>

        <!-- روابط -->
        <div class="flex flex-col sm:flex-row items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 mb-2 sm:mb-0" href="{{ route('password.request') }}">
                    نسيت كلمة المرور؟
                </a>
            @endif

            <x-primary-button class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300">
                تسجيل الدخول
            </x-primary-button>
        </div>

        <!-- رابط إنشاء حساب -->
        <div class="text-center mt-4">
            <span class="text-gray-700">ليس لديك حساب؟</span>
            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-semibold">إنشاء حساب</a>
        </div>
    </form>
</x-guest-layout>
