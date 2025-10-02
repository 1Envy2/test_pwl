<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav class="bg-white shadow-lg max-h-80">
    <div class="container mx-auto px-4 py-4 md:flex md:justify-between md:items-center">
        <p class="text-2xl font-bold text-gray-800">
          Sistem Pencatatan 
        </p>  
        <div class="md:flex md:items-center">
            <a href="{{ url('/user') }}" class="block px-4 py-2 mt-2 text-gray-700 hover:bg-gray-200 md:mt-0 md:ml-4 rounded-lg">Daftar Pengguna</a>
            <a href="{{ url('/user/create') }}" class="block px-4 py-2 mt-2 text-gray-700 hover:bg-gray-200 md:mt-0 md:ml-4 rounded-lg">Tambah Pengguna</a>
            </div>
    </div>
  </nav>
</body>
</html>