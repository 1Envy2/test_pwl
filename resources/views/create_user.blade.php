@extends('layouts.app') 
@section('content')
<div class=" p-4 flex justify-center items-start">
    <div class="max-w-md w-full bg-white shadow-xl rounded-xl p-6 lg:p-8 mt-12">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 text-center">Buat Pengguna Baru</h1> 
        <form action="{{ route('user.store') }}" method="POST"> 
            @csrf 
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="npm" class="block text-sm font-medium text-gray-700 mb-1">NPM</label>
                <input type="text" id="npm" name="npm" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-6">
                <label for="kelas_id" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"> 
                    @foreach ($kelas as $kelasItem) 
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option> 
                    @endforeach 
                </select>
            </div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </form> 
    </div>
</div>
@endsection