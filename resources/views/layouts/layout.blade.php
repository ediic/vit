<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VitTransServ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="{{ asset('js/app1.js') }}" defer></script> --}}
    </head>

    <body class="antialiased">
        <div class="flex flex-col">
            <nav class="bg-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="flex items-center justify-between h-20">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-14 sm:rounded-3xl" src="{{ asset('storage/logo.jpg') }}">
                        </div>
                        <div class="flex items-center md:hidden block ml-4">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                          </svg>
                          <div class="ml-2 mr-10 text-gray-600 text-base font-semibold">069213521</div>                                 
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-center space-x-4">
                                <a href="{{ url('/') }}" class="text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">Home</a>
                                <!-- This is an example component -->
                                <div class="relative text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">
                                  <div id="box-menu" class="cursor-pointer">  
                                    <span>Contacte</span>
                                    <svg class="h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                  </div>
                                  <div id="items-menu" class="absolute mt-1 left-0 top-full min-w-max shadow rounded bg-gray-100 border border-gray-400 transition delay-75 ease-in-out z-10 opacity-0">
                                      <ul class="block text-gray-600">
                                          <li class="px-3 py-2">Chisinau, str.Sarmizegeduza 28/1</li>
                                          <li class="px-3 py-2">tel.067573620</li>
                                          <li class="px-3 py-2">service@mail.md</li>
                                      </ul>
                                  </div>
                                </div>
                                @can('is-admin')
                                  <a href="{{ route('commands.index') }}" class="text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-base font-medium">Comenzile mele</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                      <div class="ml-4 flex items-center md:ml-6 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="ml-2 mr-10 text-gray-600 text-base font-semibold">069213521</div> 
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    
                        <div class="ml-1 relative">

                            @cannot('logged-in')
                              <div>
                                  <a href="{{ route('login') }}" class="text-gray-600 hover:underline pr-3 rounded-md text-base font-medium">Log in</a>
                              </div>
                            @endcannot
                            @can('logged-in')
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div>
                                  <button type="submit" class="text-gray-600 hover:underline pr-3 rounded-md text-base font-medium">Log out</button>
                                </div>
                              </form>
                            @endcan                            
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
                    <a href="{{ url('/') }}" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <div class="">
                      <div id="box-menu" class="cursor-pointer text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">  
                        <span>Contacte</span>
                        <svg class="h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                      </div>
                      <div id="items-menu2" class="ml-4 min-w-max transition delay-75 ease-in-out hidden">
                          <ul class="block text-gray-600">
                              <li class="px-3 py-2">Chisinau, str.Sarmizegeduza 28/1</li>
                              <li class="px-3 py-2">tel.067573620</li>
                              <li class="px-3 py-2">service@mail.md</li>
                          </ul>
                      </div>
                    </div>
                    @can('is-admin')
                      <a href="{{ route('commands.index') }}" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Comenzile mele</a>
                    @endcan                    
                    @cannot('logged-in')
                      <a href="{{ route('login') }}" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Log in</a>
                    @endcannot
                    @can('logged-in')
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div>
                          <button type="submit" class="text-gray-500 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Log out</button>
                        </div>
                      </form>
                    @endcan
                  </div>
                </div>
            </nav>
              
            @yield('content')
                      
            <footer class="bg-gray-200 text-gray-600 text-sm font-medium border-t p-5 text-center flex flex-col md:flex-row justify-around items-center">
                <h3 class="mb-4 md:mb-0">Copyright &copy; {{ date('Y') }} Vit Trans Service</h3>
                <div class="">
                  <div class="flex items-center justify-center -ml-10 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                      </svg>
                    <div class="ml-2 mr-10 text-gray-600 text-sm font-semibold">069213521</div>
                  </div>
                  <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="ml-2 mr-10 text-gray-600 text-sm font-semibold">service@mail.com</div>
                  </div>
                </div>                
            </footer>
        </div>   
    </body>
</html>
