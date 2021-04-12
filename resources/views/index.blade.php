<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="{{ asset('js/app1.js') }}" defer></script> --}}
    </head>

    <body class="antialiased">
        <div class="flex flex-col h-screen">
          <nav class="bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex items-center justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-14 sm:rounded-3xl" src="{{ asset('storage/logo.jpg') }}">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#" class="text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contacte</a>
                            <a href="#" class="text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Autocamioanele noastre</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                  <div class="ml-4 flex items-center md:ml-6">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                
                    <div class="ml-1 relative">
                        <div>
                            <a href="#" class="text-gray-600 hover:underline pr-3 rounded-md text-sm font-medium">Log in</a>
                        </div>
                      <!--
                        Dropdown menu, show/hide based on menu state.

                        Entering: "transition ease-out duration-100"
                          From: "transform opacity-0 scale-95"
                          To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                          From: "transform opacity-100 scale-100"
                          To: "transform opacity-0 scale-95"
                      -->
                    {{--   <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                  <!-- Mobile menu button -->
                  <button type="button" id = "show-hide" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" id="burger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" id="cross-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden" id="mobile-menu">
              <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contacte</a>
                <a href="#" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Autocamioanele noastre</a>
                <a href="#" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sign out</a>
              </div>
            </div>
          </nav>

            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-900 text-center">
                        Servicii auto de transport intern si international
                    </h1>
                </div>
            </header>

            <main class="flex-1">
                {{-- <div class="max-w-full border-2 border-black">
                    <div class="p-1">
                        <img class="object-cover w-full" src="{{ asset('storage/vit.jpg') }}">
                    </div>
                </div> --}}
                <div class="">
                    <div class="w-2/3 mx-auto px-4 mt-2">
                        <img src="{{ asset('storage/vit.jpg') }}"class="shadow-lg rounded w-full h-auto border-none" />
                    </div>
                </div>
            </main>

           {{--  <hr class="border-b m-0" /> --}}
            <footer class="bg-gray-100 text-gray-600 text-sm font-medium border-t p-4 text-center">
                <h3>Copyright &copy; {{ date('Y') }} Vit Trans Service</h3>
            </footer>
        </div>   
    </body>
</html>
