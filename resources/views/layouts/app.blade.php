<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $header }} | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @if (isset($style))
            <style>{{ $style }}</style>
        @endif

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ $header }}
                        </h2>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        {{-- Errors --}}
                        @if ($errors->any())
                            <div class="row">
                                <div class="col s12">
                                    <div class="card-panel red lighten-2 text-white">
                                        @foreach ($errors->all() as $error)
                                        <p>{{ $error }} *</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Success --}}
                        @if (session('success'))
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel green lighten-2 text-white">
                                    <p>{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        {{ $slot }}
                    </div>
                </div>
            </main>

        </div>

        @if (isset($script))
            <script>{{ $script }}</script>
        @endif

        @stack('modals')

        @livewireScripts
    </body>
</html>
