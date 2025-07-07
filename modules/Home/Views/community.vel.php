@extends('layouts.app')

@section('title')
    Community | Welcome to VeltoPHP V2.0
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
                    Welcome to 
                    <span class="relative text-red-500 ml-2 inline-block">
                        VeltoPHP
                        <span class="absolute -top-2 -right-4 text-sm text-red-500 font-light">V2</span>
                    </span>
                </h1>                

                <p class="text-gray-600 font-light max-w-4xl mx-auto mb-4">Community Forum</p>   

                {{-- Notice for development --}}
                <div class="mt-8 text-sm text-gray-700 dark:text-gray-300 max-w-2xl mx-auto">
                    <p class="italic">
                        The VeltoPHP Community Forum is currently under development. We're working hard to provide a space for discussion, support, and collaboration among developers.
                    </p>
                    <p class="italic mt-2">
                        At the same time, we’re writing the official documentation for VeltoPHP V2.0. We appreciate your patience — stay tuned for updates!
                    </p>
                </div>                             
            </div>
        </div>
    </div>
</div>
@endsection
