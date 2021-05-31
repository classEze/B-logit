<style>
 li{
      border-bottom:0.5px solid gray;
 }

</style>
<section class='h-screen side-nav transition-all w-3/6 fixed  mt-20 z-10 transform -translate-x-full w-full' onclick='hide_Nav(event)'>
<nav class='w-3/6 bg-gray-500 h-full pl-2'>
<ul class='text-gray-100'>
     <li><a> TECH  </a></li>
     <li> <a>SCIENCE </a> </li>
     <li> <a>ENTERTAINMENT </a> </li>
     <li><a> ABOUT US </a> </li>
     <li><a href={{route('register')}}> REGISTER </a> </li>
     <li><a> LOGIN </a> </li>
     <li><a> LOGOUT </a> </li>
</ul>
</nav>
</section>