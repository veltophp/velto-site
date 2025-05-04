@extends('layouts.docs')

@section('title')
    Documentation | VeltoPHP | Version 1.x | View System
@endsection

@section('content')

<div class="docs-section">
    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">🖼️ View System</h2>

    <p class="mb-4 text-gray-600 dark:text-gray-400">
        The View System in VeltoPHP provides a clean separation between application logic and presentation. Views are responsible for displaying your application's data to users.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mt-6 mb-2"><i class="fa fa-arrow-right ml-1"></i>  Basic View Structure</h3>
    <p class="mb-4 text-gray-600 dark:text-gray-400">
        Views in VeltoPHP are stored in the <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">your-project/views</code> directory. A simple view file might look like:
    </p>

    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded mb-4">
        <pre class="text-gray-800 dark:text-gray-300">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&#64;yield('title', 'default title')&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &#64;yield('content')
    &lt;/body&gt;
&lt;/html&gt;</pre>
    </div>

    <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mt-6 mb-2"><i class="fa fa-arrow-right ml-1"></i> Layout System</h3>
    <p class="mb-4 text-gray-600 dark:text-gray-400">
        VeltoPHP uses template inheritance with layout files. Here's how it works:
    </p>

    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded mb-4">
        <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-2">Base Layout (layouts/app.vel.php):</h4>
        <pre class="text-gray-800 dark:text-gray-300">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&#64;yield('title', 'default title')&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &#64;yield('content')
    &lt;/body&gt;
&lt;/html&gt;</pre>
    </div>

    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded mb-4">
        <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-2">View Template (home.vel.php):</h4>
        <pre class="text-gray-800 dark:text-gray-300">

&#64;extends('layouts.app')

&#64;section('title')
    Some Title that will replace the default title
&#64;endsection

&#64;section('content')
    &lt;h1&gt;Welcome&lt;/h1&gt;
    &lt;p&gt;This is our home page content.&lt;/p&gt;
&#64;endsection</pre>
    </div>

    <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mt-6 mb-2"><i class="fa fa-arrow-right ml-1"></i> Passing Data to Views</h3>
    <p class="mb-4 text-gray-600 dark:text-gray-400">
        Data can be passed from controllers to views as an associative array:
    </p>

    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded mb-4">
        <pre class="text-gray-800 dark:text-gray-300">// In your controller

return view('profile', [
    'Some Title' => $title,
    'John Doe' => $user
]);</pre>
    </div>

    <p class="mb-4 text-gray-600 dark:text-gray-400">
        In the view, you can access this data directly:
    </p>

    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded mb-4">
        <pre class="text-gray-800 dark:text-gray-300">&lt;!-- views/profile.vel.php --&gt;

&lt;h1&gt;&#123;&#123; $title &#125;&#125;&lt;/h1&gt;
&lt;p&gt;Welcome, &#123;&#123; $user &#125;&#125;&lt;/p&gt;</pre>
    </div>

    <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mt-6 mb-2"><i class="fa fa-arrow-right ml-1"></i> View Caching</h3>
    <p class="mb-4 text-gray-600 dark:text-gray-400">
        Views are automatically cached in the <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">storage/cache/views</code> directory for better performance. Cache is cleared when view files are modified.
    </p>
</div>

<div class="my-8 py-2 flex justify-between bg-gray-200 dark:bg-gray-700 rounded-lg">
    <a href="/docs/installation" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center font-semibold text-gray-700 dark:text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Previous
    </a>

    <a href="/docs/home" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center font-semibold text-gray-700 dark:text-gray-300">
        Next
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </a>
</div>

@endsection
