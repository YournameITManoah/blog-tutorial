
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Blog Template · Bootstrap v5.3</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
  </head>
  <body>

@include('partials.header')

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      
        @yield('content')

    </div>

    @include('partials.sidebar')
  </div>

</main>

@include('partials.footer')
    </body>
</html>
