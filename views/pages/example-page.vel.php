@extends('layouts.app')

@section('title')
    Velto | Example Projects Showcase
@endsection

@section('content')

    <section id="examples" class="py-24 bg-gray-50 dark:bg-dark-900 mt-12">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-12 text-center">
                {{ $title }}
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($examples as $example)
                    <div class="bg-white dark:bg-dark-800 rounded-xl shadow p-6 transition hover:shadow-lg">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">
                            {{ $example['icon'] }} {{ $example['title'] }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                            {{ $example['desc'] }}
                        </p>
                        <a href="/example/{{ $example['link'] }}" target="_blank" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">
                            View Demo →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
