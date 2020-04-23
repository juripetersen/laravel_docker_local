<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- This allows us include all css files inside the public/css folder, --}}
    {{-- even if they have a hash in their name --}}
    @foreach(File::allFiles(public_path() . '/css') as $file)
        <link href="/css/{{ $file->getRelativePathName() }}" rel="stylesheet">
    @endforeach
</head>
<body>
<div id="app">
    <main class="">
        @yield('content')
    </main>
</div>
</body>
</html>
