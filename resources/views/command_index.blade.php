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
                            <a href="{{ url('/') }}" class="text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <!-- This is an example component -->
                            <div id="box-menu" class="relative text-gray-600 hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer">
                                <span>Contacte</span>
                                <svg class="h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                <div id="items-menu" class="absolute mt-1 left-0 top-full min-w-max shadow rounded bg-gray-100 border border-gray-400 transition delay-75 ease-in-out z-10 opacity-0">
                                    <ul class="block text-gray-600">
                                        <li class="px-3 py-2">Chisinau, str.Sarmizegeduza 28/1</li>
                                        <li class="px-3 py-2">tel.067573620</li>
                                        <li class="px-3 py-2">service@mail.md</li>
                                    </ul>
                                </div>
                            </div>
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

          <main class="flex-1">
              <!-- modal -->
            <div class="modal hidden fixed w-full inset-0 overflow-y-auto bg-gray-600 bg-opacity-40">
              <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg">
                <div class="modal-content py-4 text-left px-6">
                  <!--Title-->
                  <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-gray-500">Add Caretaker</p>
                    <div class="modal-close cursor-pointer z-50 close-modal">
                      <svg class="fill-current text-gray-500" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                          d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <!--Body-->
                  <div class="my-5 mr-5 ml-5 flex justify-center">
                    <div id="add_caretaker_form" class="w-full">
                      <div class="">
                        <label class="text-md text-gray-600">Numele</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Locatia</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Destinatia</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Telefon</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Email</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Mesaj</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Mesaj</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                      <div class="">
                        <label class="text-md text-gray-600">Mesaj</label>
                      </div>
                      <div class="p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                        <span>Numele</span>
                      </div>
                    </div>
                  </div>
                  <!--Footer-->
                  <div class="flex justify-end pt-2 space-x-14">
                    <button
                      class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold close-modal ">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <p class="text-lg text-center font-bold m-5">Comenzile primite</p>
            <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
              <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Numele</th>
                <th class="px-4 py-3">Locatia</th>
                <th class="px-4 py-3">Destinatia</th>
                <th class="px-4 py-3">Telefon</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Mesaj</th>
                <th class="px-4 py-3">Actions</th>
              </tr>
              @foreach($commands as $command)
              <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">{{$command->username}}</td>
                <td class="px-4 py-3">{{$command->location}}</td>
                <td class="px-4 py-3">{{$command->destination}}</td>
                <td class="px-4 py-3">{{$command->phone}}</td>
                <td class="px-4 py-3">{{$command->email}}</td>
                <td class="px-4 py-3">{{$command->message}}</td>
                <td class="px-4 py-3">
                  <div class="flex item-center justify-center">
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 show-modal cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg>
                      </div>
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                          </svg>
                      </div>
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                      </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </table>
          </main>

           {{--  <hr class="border-b m-0" /> --}}
            <footer class="bg-gray-200 text-gray-600 text-sm font-medium border-t p-5 text-center">
                <h3>Copyright &copy; {{ date('Y') }} Vit Trans Service</h3>
            </footer>
            <script type="text/javascript">
              const modal = document.querySelector('.modal');

              const showModal = document.querySelector('.show-modal');
              const closeModal = document.querySelectorAll('.close-modal');

              showModal.addEventListener('click', function (){
                modal.classList.remove('hidden')
              });

              //setTimeout(() => showTimer(), 1000000);

              closeModal.forEach(close => {
                close.addEventListener('click', function (){
                  modal.classList.add('hidden')
                });
              });                  
            </script>
        </div>  
    </body>
</html>
