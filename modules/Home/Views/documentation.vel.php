@extends('layouts.app')

@section('title')
    Documentation | Welcome to VeltoPHP V2.0
@endsection

@section('app-content')
<div class="min-h-screen font-thin">
    <div class="pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="text-center font-light text-sm text-gray-700 dark:text-gray-300 py-6 px-4">
                    <span class="italic">Bug report, contribution, or donation</span> — email us at 
                    <a href="mailto:dev@veltophp.com" class="underline text-red-600 dark:text-red-400 hover:text-red-500">dev@veltophp.com</a>
                </div> 

                <h1 class="text-5xl md:text-6xl font-thin text-gray-900 mb-4">
                    Documentation |
                    <span class="relative text-red-500 ml-2 inline-block">
                        VeltoPHP
                        <span class="absolute -top-2 -right-4 text-sm text-red-500 font-light">V2</span>
                    </span>
                </h1>                
                {{-- New info notice --}}
                <div class="mt-8 text-sm text-gray-700 dark:text-gray-300 max-w-2xl mx-auto">
                    <p class="italic">
                        The VeltoPHP team is currently writing the official documentation for version 2.0.
                        Please be patient and stay tuned for upcoming updates. Thank you for your support!
                    </p>
                </div> 
                <div class="mt-24">
                    <a href="https://github.com/veltophp/velto" target="_blank" rel="noopener" class="inline-flex items-center px-4 py-3 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-gray-800 transition">
                        <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 24 24">
                            <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.92.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.87-1.54-3.87-1.54-.53-1.35-1.3-1.71-1.3-1.71-1.07-.73.08-.72.08-.72 1.19.08 1.81 1.22 1.81 1.22 1.05 1.8 2.75 1.28 3.42.98.11-.76.41-1.28.74-1.57-2.55-.29-5.23-1.28-5.23-5.71 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.15 1.18a10.94 10.94 0 012.87-.39c.97 0 1.95.13 2.87.39 2.18-1.49 3.14-1.18 3.14-1.18.63 1.57.24 2.73.12 3.02.74.81 1.18 1.84 1.18 3.1 0 4.44-2.69 5.41-5.25 5.69.42.36.79 1.09.79 2.2 0 1.59-.01 2.87-.01 3.26 0 .31.21.68.8.56A10.51 10.51 0 0023.5 12C23.5 5.73 18.27.5 12 .5z"/>
                        </svg>
                        Visit GitHub
                    </a>                    
                </div>                              
            </div>
        </div>
    </div>
</div>
@endsection
