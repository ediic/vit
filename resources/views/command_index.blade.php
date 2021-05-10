@extends('layouts.layout')

@section('content')
     
  @include('partials.flash')

  <main class="flex-1">

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
          <div id="{{$command}}" class="flex items-center justify-center">
              <div id="{{$command}}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 show-modal cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
              </div>
              <form action="{{ route('commands.destroy', $command->id) }}" method="POST" class="flex items-center">
                @csrf
                @method("DELETE")
                <button type="submit">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                  </svg>
                </div>
                </button>                        
              </form>
              <form id="checked-{{ $command->id }}" action="{{ route('commands.update', $command) }}" method="POST" class="flex items-center">
              @csrf
              @method("PUT")                                            
                <div class="bg-white border-2 rounded border-gray-400 w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500 transform hover:scale-105">
                  <input onclick="event.preventDefault(); document.querySelector('#checked-{{ $command->id }}').submit()" type="checkbox" value="{{ !$command->checked}}" name="check" class="opacity-0 absolute cursor-pointer" @if($command->checked) checked @endif>
                  <svg class="fill-current hidden w-3 h-3 text-green-500" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                </div>
              </form>  
          </div>
        </td>
      </tr>
    @endforeach
    </table> 
      <!-- modal -->
      <div class="modal-open hidden fixed overflow-y-auto w-full inset-0 bg-gray-600 bg-opacity-40">
        <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg my-5">
          <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
              <p class="text-2xl font-bold text-gray-500">Vizualizare</p>
              <div class="modal-close cursor-pointer z-50">
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
                <div class="modal-item h-12 p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                </div>
                <div class="">
                  <label class="text-md text-gray-600">Locatia</label>
                </div>
                <div class="modal-item h-12 p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                </div>
                <div class="">
                  <label class="text-md text-gray-600">Destinatia</label>
                </div>
                <div class="modal-item h-12 p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                </div>
                <div class="">
                  <label class="text-md text-gray-600">Telefon</label>
                </div>
                <div class="modal-item h-12 p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                </div>
                <div class="">
                  <label class="text-md text-gray-600">Email</label>
                </div>
                <div class="modal-item h-12 p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                </div>
                <div class="">
                  <label class="text-md text-gray-600">Mesaj</label>
                </div>
                <div class="modal-item h-12 p-3 w-full border-2 border-gray-300 mb-5 rounded-md text-gray-500">
                </div>
              </div>
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2 space-x-14">
              <button
                class="modal-close px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold">Close</button>
            </div>
          </div>
        </div>
      </div>
  </main>
@endsection
