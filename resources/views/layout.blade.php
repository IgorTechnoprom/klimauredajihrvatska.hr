<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
    {{-- <script src="{{ asset('js/livewireScript.js') }}"></script> --}}
    
    
</head>

<body class="relative lg:overflow-auto">
    <div class="fixed top-0 left-0 w-full h-full bg-black opacity-50 z-40 hidden lg:hidden" id="dark-element"></div>
    <div class="overflow-hidden mx-auto">
        <header class="py-4">
            @include('components.top-nav')
    
            @include('components.logo-section')
    
            @include('components.main-nav')
    
            @include('components.mobile-nav')
    
            @include('partials._breadcrumbs')
    
        </header>
    
        <main>
            @yield('content')
        </main>
    
        @include('components.footer')
        @include('partials._toTheTopButton')
    </div>

    @livewireScripts 
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3.1.1/build/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {"background": "#1d1b1b"},
                    "button": {"background": "#f8e71c"}
                },
                "content": {
                    "message": "Koristimo kolačiće kako bismo poboljšali vaše iskustvo. Daljnjim korištenjem ove stranice slažete se s našom Politikom kolačića",
                    "dismiss": "Prihvaćam",
                    "link": "Pročitaj više",
                    "href": "{{ route('cookie.policy') }}" // Link to your cookie policy page
                }
            });
        });
    </script>
    <script src="{{ asset('js/productFilterScript.js') }}"></script>
    <script src="{{ asset('js/styleScript.js') }}"></script>
    <script src="{{ asset('js/tillEndOfSaleCountdown.js') }}"></script>
    <script src="{{ asset('js/livewireScript.js') }}"></script> 
</body>
</html>