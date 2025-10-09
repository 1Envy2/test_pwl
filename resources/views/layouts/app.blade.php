<!DOCTYPE html>
<html lang="en">
  <head> 
      <meta charset="UTF-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title><?= $title ?></title> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous"> 
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head> 
  <body> 
    <div class="bg-gray-100 flex flex-col">
      <div class="w-full">
        @include('layouts.navbar')
      </div>  

        <div class=" px-6 py-25 md:py-16">
            @yield('content') 
        </div>

      <div class="w-full">
        @include('layouts.footer')
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"      integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
  </body> 
</html> 