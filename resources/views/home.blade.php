@extends('layouts/layout')
@include('partials/drawer')
@section('body')
<div class='home-news h-80 relative mb-2'>
 <img src="/images/user.jpg" alt="Image naa" class='h-full object-cover w-full '>
<span class="news-text  text-white text-xl  w-10/12 absolute p-2 bottom-2 ">
<p> Tech </p>
 First news in my blog as i resume laravel again. This time I am going for its head aha
 </span>
</div>
<div class='home-news h-80 relative mb-2'>
 <img src="/images/eze.jpg" alt="Image naa" class='h-full object-cover w-full '>
<span class="news-text  text-white text-xl  w-10/12 absolute p-2 bottom-2 "> 
<p> Football </p>
Second news in my blog as i resume laravel again. This time I am going for its head aha
</span>
</div>
<div class='home-news h-80 relative mb-2'>
 <img src="/images/eze.jpg" alt="Image naa" class='h-full object-cover w-full '>
<span class="news-text text-white text-xl  w-10/12 absolute p-2 bottom-2 "> 
<p> Tech </p>
Third news in my blog as i resume laravel again. This time I am going for its head aha
</span>
</div>
@endsection

<script type='text/javascript'>
      const sideNav = document.querySelector('.side-nav')
      function show_Nav(e){
        sideNav.classList.toggle('-translate-x-full')
      }
      function hide_Nav(e){
          sideNav.classList.add('-translate-x-full')
      }
</script>