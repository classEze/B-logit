<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('/css/app.css')}}"  rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased min-h-screen flex flex-col">
    <header class="flex z-10 w-full fixed justify-between items-center bg-gray-600 text-white px-4 h-20">
   <i onclick='show_Nav(event)' class='fa faMenu'> MENU</i>
<div class=' text-2xl '>  Blogit </div>
</header>
<main class="flex-1 mt-20">
@yield('body')
</main>
@include('partials/drawer')
        <footer class="text-center text-white py-8 bg-gray-400">
    <div class='footer-image'> </div>
     <span class='brand-name'> Blogit </span> 
      <section class='footer-links'>
       <aside> About</aside> 
       <aside> Advertising</aside> 
       <aside> Contact</aside> 
       <aside> Search</aside> 
       <aside> Privacy</aside> 
        </section>
       <section class="newsletter">
     <p> Subscribe to our Newsletter </p>  
      <form action="/" method='POST'>
      <input type="text required" class='' placeholder="Enter your email address"> <br>
      <button type="submit" class=''> Subscribe</button>
      </form>
       </section>
       <section class="social-media-links">
       <i class='fa fa-facebook'> FB</i>
       <i class='fa fa-twitter'> TW</i>
       <i class='fa fa-youtube'> YT</i>
       <i class='fa fa-instagram'> IG</i>
       </section>
       <div class='bg-gray-500 h-8 grid items-center'> &copy Copyright Blogit @php
       echo date("Y");
       @endphp
       </div>
    </footer>

    <script type='text/javascript'>
      const sideNav = document.querySelector('.side-nav')
      function show_Nav(e){
        sideNav.classList.toggle('-translate-x-full')
      }
      function hide_Nav(e){
          sideNav.classList.add('-translate-x-full')
      }
</script>

    </body>
</html>
