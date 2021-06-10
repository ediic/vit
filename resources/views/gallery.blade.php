@extends('layouts.layout')

@section('content')
  <main class="flex-1">
      <div class="max-w-7xl px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

          <!-- hero -->
          <div class="hero">
              <!-- hero headline -->
              <div class="hero-headline flex flex-col items-center justify-center pt-10 text-center">
                  <h1 class=" font-bold text-3xl text-gray-900">Va oferim servicii calitative</h1>
                  <p class=" font-base text-base text-gray-600">rapid si comod.</p>
              </div>
              
              <section id="photos" class="my-5 grid justify-items-center grid-cols-1 md:grid-cols-2 gap-4">
                  <img src="{{ asset('storage/vit.jpg') }}" class="w-full h-80 hover:opacity-75"/>
                  <img src="{{ asset('storage/vit.jpg') }}" class="w-full h-80 hover:opacity-75"/>
                  <img src="{{ asset('storage/vit.jpg') }}" class="w-full h-80 hover:opacity-75"/>
                  <img src="{{ asset('storage/vit.jpg') }}" class="w-full h-80 hover:opacity-75"/>
              </section>

          </div>
      </div>                

  </main>
@endsection
