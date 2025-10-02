@extends('layouts.app') 
@section('content')

    <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-xl p-6 lg:p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Daftar Pengguna</h1> 
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg"> 
                <thead class="bg-gray-50"> 
                    <tr> 
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">ID</th> 
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th> 
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NPM</th> 
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">Kelas</th> 
                    </tr> 
                </thead> 
                <tbody class="bg-white divide-y divide-gray-200"> 
                    @foreach ($users as $user) 
                        <tr class="hover:bg-indigo-50 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->id }}</td> 
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user->nama }}</td> 
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user->NPM }}</td> 
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-600 font-semibold">{{ $user->nama_kelas }}</td> 
                        </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div>
    </div>
@endsection