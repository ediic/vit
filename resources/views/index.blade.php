@extends('layouts.layout')

@section('content')
    <main class="min-h-screen">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-gray-900 text-center">
                    VIT-TRANS-SERVICE 
                </h2>
                <h2 class="text-2xl font-bold text-gray-900 text-center">
                    Servicii auto de transport intern si international
                </h2>
              
            </div>
        </header>

        @include('partials.flash')

        
        {{-- <div class="max-w-full border-2 border-black">
            <div class="p-1">
                <img class="object-cover w-full" src="{{ asset('storage/vit.jpg') }}">
            </div>
        </div> --}}
        <div class="flex flex-col md:flex-row items-center max-w-7xl h-full mx-auto">
            
            <div class="w-4/5 h-auto md:h-600">
                <img src="{{ asset('storage/vit.jpg') }}" class="border-none w-full h-3/5 md:h-4/5 lg:h-full rounded-lg shadow-lg overflow-hidden" />
            </div>

            <!-- component -->
            <div class="bg-white w-96 ml-2 mt-2 shadow-md">
                <div class="py-8 px-8 rounded-xl">
                    <h1 class="font-medium text-2xl text-center">Comanda transport</h1>
                    <hr>
                    <form method="POST" action="/command/store" class="mt-6">
                        @csrf
                        <div class="my-5 text-sm">
                            <label for="username" class="block text-black">Nume<span class="text-red-400"> *</span></label>
                            <input type="text" autofocus name="username" class="rounded-sm px-4 py-3 mt-1 focus:outline-none bg-gray-100 w-full" value="{{ old('username') }}" placeholder="Nume" />
                            @error('username')
                                <div class="flex justify-start mt-2 text-xs">
                                    <span class="text-red-500">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="my-5 text-sm">
                            <label for="location" class="block text-black">Locatia<span class="text-red-400"> *</span></label>
                            <input type="text" autofocus name="location" class="rounded-sm px-4 py-3 mt-1 focus:outline-none bg-gray-100 w-full" value="{{ old('location') }}" placeholder="Locatia" />
                            @error('location')
                                <div class="flex justify-start mt-2 text-xs">
                                    <span class="text-red-500">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="my-5 text-sm">
                            <label for="destination" class="block text-black">Destinatia<span class="text-red-400"> *</span></label>
                            <input type="text" autofocus name="destination" class="rounded-sm px-4 py-3 mt-1 focus:outline-none bg-gray-100 w-full" value="{{ old('destination') }}" placeholder="Destinatia" />
                            @error('destination')
                                <div class="flex justify-start mt-2 text-xs">
                                    <span class="text-red-500">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="my-5 text-sm">
                            <label for="phone" class="block text-black">Telefon<span class="text-red-400"> *</span></label>
                            <input type="text" autofocus name="phone" class="rounded-sm px-4 py-3 mt-1 focus:outline-none bg-gray-100 w-full" value="{{ old('phone') }}" placeholder="Telefon" />
                            @error('phone')
                                <div class="flex justify-start mt-2 text-xs">
                                    <span class="text-red-500">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="my-5 text-sm">
                            <label for="email" class="block text-black">Email</label>
                            <input type="text" autofocus name="email" class="rounded-sm px-4 py-3 mt-1 focus:outline-none bg-gray-100 w-full" value="{{ old('email') }}" placeholder="Email" />
                            @error('email')
                                <div class="flex justify-start mt-2 text-xs">
                                    <span class="text-red-500">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="my-5 text-sm">
                            <label for="message" class="block text-black">Mesaj</label>
                            <textarea type="textarea" name="message" class="rounded-sm px-4 py-3 mt-1 focus:outline-none bg-gray-100 w-full text-black" rows="1" placeholder="Mesaj">{{ old('message') }}</textarea>
                        </div>
                        <button class="block text-center text-white bg-gray-800 p-3 duration-300 rounded-sm hover:bg-black w-full">Expediaza</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <div class="bg-gray-100 p-5 mt-6 shadow">
        <h1 class="font-bold text-gray-900 text-2xl text-center">
            La dispozitia dumneavoastra urmatoarele servicii
        </h1>
    </div>

    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-7">
        <!--Card 1-->
        <div class="rounded overflow-hidden shadow-lg pb-5">
          <img class="w-3/5 mx-auto" src="{{ asset('storage/1bus.jpg') }}" alt="Truck">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">PINA LA 2 TONE</div>
            <div class="px-6 pt-4 pb-2 text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">PRIN ORAS</span>
            </div>            
            <p class="text-center font-bold">
              de la 160 Lei/ora
            </p>
            <div class="px-6 pt-4 pb-2 text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mt-3">IN AFARA ORASULUI</span>
            </div>            
            <p class="text-center font-bold">
              de la 5 Lei/km
            </p>            
          </div>
        </div>
        <!--Card 2-->
        <div class="rounded overflow-hidden shadow-lg">
          <img class="w-3/5 mx-auto" src="{{ asset('storage/2bus.jpg') }}" alt="Truck">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">PINA LA 3 TONE</div>
            <div class="px-6 pt-4 pb-2 text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">PRIN ORAS</span>
            </div>            
            <p class="text-center font-bold">
              de la 190 Lei/ora
            </p>
            <div class="px-6 pt-4 pb-2 text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mt-3">IN AFARA ORASULUI</span>
            </div>            
            <p class="text-center font-bold">
              de la 6 Lei/km
            </p> 
          </div>
        </div>

        <!--Card 3-->
        <div class="rounded overflow-hidden shadow-lg">
          <img class="w-3/5 mx-auto" src="{{ asset('storage/3bus.jpg') }}" alt="Truck">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-center">PINA LA 5 TONE</div>
            <div class="px-6 pt-4 pb-2 text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">PRIN ORAS</span>
            </div>            
            <p class="text-center font-bold">
              de la 230 Lei/ora
            </p>
            <div class="px-6 pt-4 pb-2 text-center">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 mt-3">IN AFARA ORASULUI</span>
            </div>            
            <p class="text-center font-bold">
              de la 7 Lei/km
            </p> 
        </div>
      </div>
    </div>
@endsection

