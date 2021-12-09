@extends('layouts.register')
@section('content')
<div class="max-w-lg rounded overflow-hidden shadow-lg object-center">    
    <div class="mt-5 md:mt-0 md:col-span-2">
        
        <form action="{{url('send-subscription')}}" method="POST">
            @csrf
            @honeypot
            <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="name_company" class="block text-sm font-medium text-gray-700">Nombre de la Empresa</label>
                    <input type="text" name="name_company" value="{{old('name_company')}}" autocomplete="name_company" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('name_company')
                        <span class="text-xs italic text-red-600">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="activity_id" class="block text-sm font-medium text-gray-700">Giro del negocio</label>
                    <select name="activity_id" autocomplete="activity_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Actividad</option>
                        @foreach ($activities as $activity)
                            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                        @endforeach
                    </select>
                    </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="name_partner" class="block text-sm font-medium text-gray-700">Nombre del socio</label>
                    <input type="text" name="name_partner" value="{{ old('name_partner') }}" autocomplete="name_partner" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('name_partner')
                        <span class="text-xs italic text-red-600">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Telefono</label>
                    <input type="text" name="phone_number" value="{{ old("phone_number") }}" autocomplete="phone_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('phone_number')
                        <span class="text-xs italic text-red-600">{{$message}}</span>
                    @enderror
                    </div>

                <div class="col-span-6 sm:col-span-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="email" value="{{ old("email") }}" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('email')
                        <span class="text-xs italic text-red-600">{{$message}}</span>
                    @enderror
                </div>

                

                <div class="col-span-6">
                    <label for="address" class="block text-sm font-medium text-gray-700">Direccion</label>
                    <input type="text" name="address" value="{{ old("address") }}" autocomplete="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('address')
                        <span class="text-xs italic text-red-600">{{$message}}</span>
                    @enderror
                </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Enviar
                </button>
            </div>
            </div>
        </form>
    </div>
  </div>
@endsection