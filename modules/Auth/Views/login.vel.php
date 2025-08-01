@extends('layouts.guest')

@section('title')
    Login | Axion
@endsection

@section('guest-content')
<div class="min-h-screen flex flex-col md:flex-row bg-white dark:bg-gray-900">
    
    <!-- Left Side (Intro Section) -->
    <div class="md:w-1/2 bg-red-500 md:flex items-center justify-center hidden p-12">
        <div class="max-w-md text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Hi👋, I'm Axion!</h1>
            <p class="text-xl opacity-90">
                Streamline your development workflow with VeltoPHP's powerful dashboard
            </p>
        </div>
    </div>

    <!-- Right Side (Form Section) -->
    <div class="md:w-1/2 flex items-center justify-center p-8 md:p-12 lg:p-24">
        <div class="w-full max-w-md mt-12">
            
            <!-- Logo & Branding -->
            <div class="text-center">
                <a href="{{ route('home') }}">
                    <span class="text-3xl font-semibold text-gray-800 dark:text-white">
                        Axion<span class="text-red-600">Dashboard</span>
                    </span>
                </a>
            </div>

            <!-- Heading -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Sign In</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Enter your credentials to access your dashboard
                </p>
            </div>

            <!-- Flash Message -->
            <div class="mt-4">
                @flash_info('#form-login')
            </div>

            <!-- Login Form -->
            <form id="form-login" action="{{ route('submit.login') }}" method="POST" class="space-y-6">
                {!! csrf_field() !!}

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Email Address
                    </label>
                    <input type="email" id="email" name="email"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-red-500"
                           placeholder="you@example.com" required>
                </div>

                <!-- Password Field -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Password
                        </label>
                        <a href="{{ route('forgot.password') }}" 
                           class="text-sm text-red-600 dark:text-red-400 hover:underline">
                            Forgot password?
                        </a>
                    </div>
                    <input type="password" id="password" name="password"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-red-500"
                           placeholder="••••••••" required>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-4 
                            rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 
                            transition duration-200">
                        Sign In
                    </button>
                </div>
            </form>
            <div class="my-6 text-center text-gray-800">
                Or login via social account.
            </div>
            <div class="flex justify-center gap-8 px-4 pb-4">
                {{-- Google --}}
                <a href="{{ route('social.login', ['driver' => 'google']) }}"
                   class="w-12 h-12 flex items-center justify-center rounded-md border border-gray-300 bg-white hover:bg-gray-100">
                    <img src="https://www.svgrepo.com/show/452216/google.svg" alt="Google" class="w-8 h-8">
                </a>
            
                {{-- GitHub --}}
                <a href="{{ route('social.login', ['driver' => 'github']) }}"
                   class="w-12 h-12 flex items-center justify-center rounded-md border border-gray-300 bg-white hover:bg-gray-100">
                    <img src="https://www.svgrepo.com/show/217753/github.svg" alt="GitHub" class="w-8 h-8">
                </a>
            
                {{-- Discord --}}
                <a href="{{ route('social.login', ['driver' => 'discord']) }}"
                   class="w-12 h-12 flex items-center justify-center rounded-md border border-gray-300 bg-white hover:bg-gray-100">
                    <img src="https://www.svgrepo.com/show/353655/discord-icon.svg" alt="Discord" class="w-8 h-8">
                </a>

                {{-- Facebook --}}
                {{-- <a href="{{ route('social.login', ['driver' => 'facebook']) }}"
                    class="w-12 h-12 flex items-center justify-center rounded-md border border-gray-300 bg-white hover:bg-gray-100">
                     <img src="https://www.svgrepo.com/show/452196/facebook-1.svg" alt="Facebook" class="w-8 h-8">
                 </a> --}}
            </div>
            
            
            @if (env('AUTH_REGISTER'))
                <!-- Register Link -->
                <div class="mt-8 text-center">
                    <p class="text-gray-600 dark:text-gray-400">
                        Don't have an account?
                        <a href="{{ route('register') }}" 
                        class="text-red-600 dark:text-red-400 font-medium hover:underline">
                            Register
                        </a>
                    </p>
                </div>
            @endif
            <!-- Footer -->
            <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-6">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} VeltoPHP. All rights reserved.
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
