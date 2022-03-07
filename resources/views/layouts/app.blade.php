<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-grey-900 bg-gray-background text-sm">
        <header class="flex items-center justify-between px-8 bg-blue py-4">
            <a href="#">Logo</a>
            <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0  bg-blue rounded-full px-6 py-4 sm:block">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}" 
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 bg-blue ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 bg-blue dark:text-gray-500 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <a href="#">

                </a>
            </div>
        </header>
        <main class="container flex mx-auto max-w-custom" style="max-width:1000px;">
            <div class="w-70 mr-5">
                add idea form here Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem harum perspiciatis fugiat dolorem velit saepe suscipit eos officiis, quasi unde.
            </div>
            <div class="w-175">
                <nav class="flex item-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3   space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue" style="border-color:blue">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (7)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Inprogress (12)</a></li>
                       
                        
                    </ul>
                    <ul class="flex uppercase font-semibold  border-b-4 pb-3   space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (3)</a></li>
                        
                       
                        
                    </ul>
                </nav>
                <div class="mt-8">
                    {{$slot}}
                </div>
            </div>
        </main>
    </body>
</html>
