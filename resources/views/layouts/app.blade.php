<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>Pesova Blog</title>
</head>
<body>
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Pesova Blog') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>

                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
    </div>


    <div>
        <footer class="bg-gray-800 py-20 mt-20">
            <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">
                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Pages
                    </h3>
        
                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/blog">
                                Following Blogs
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/login">
                                Manage Blog feeds
                            </a>
                        </li>
                    </ul>
                </div>
        
                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Find Us
                    </h3>
        
                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/">
                                Address
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Phone
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
        
                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Latest posts
                    </h3>
        
                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/">
                                Why we love tech
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Why we love design
                            </a>
                        </li>
                        <li class="pb-1">
                            <a href="/">
                                Why to use Laravel
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
                Copyright 2022 Pesovatech. All Rights Reserved
            </p>
        </footer>
    </div>

    <!-- Scripts -->
    {{-- <script src="/js/app.js"></script> --}}


    
</body>
</html>




  