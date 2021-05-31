@extends('layouts/layout')
@section('body')
<p class='text-center font-bold text-2xl'> Hello, Let's get to know you... </p>
<form action="/register" method='post'>
@csrf
<div>
  <label for=""> First Name *</label>
  <input type="text" name='firstname' value="{{old('firstname')}}" required placeholder='enter your firstname'>
{{--  @error('firstname') <p class="error"> {{$message}}</p> @enderror--}}
</div>
<div>
  <label for="">Last Name *</label>
  <input type="text" name='lastname' value="{{old('lastname')}}" required placeholder='enter your lastname'>
{{--  @error('lastname') <p class="error"> {{$message}}</p> @enderror--}}
</div>
<div>
  <label for="">Username *</label>
  <input type="text" name='username' value="{{old('username')}}" required placeholder='choose a username'>
  @error('username') <p class="error"> {{$message}}</p> @enderror
</div>
<div>
  <label for="">Email *</label>
  <input type="email" name='email' value="{{old('email')}}" required placeholder='enter your email address'>
  @error('email') <p class="error"> {{$message}}</p> @enderror
</div>
<div>
  <label for="">Phone No *</label>
  <input type="text" name='phone' value="{{old('phone')}}" required placeholder='eg 2348160245128'>
  @error('phone') <p class="error"> {{$message}}</p> @enderror
</div>
<div>
  <label for="">Password *</label>
  <input type="password" name='password' required placeholder='select a good password'>
  @error('password') <p class="error"> {{$message}}</p> @enderror
</div>
<div class='checkbox'>
<span class='checkbox font-bold'> View Password </span>
<input class='checkbox w-4 h-4 ml-2' type="checkbox" onchange='change_Visibility(event)'>
</div>
<div>
  <label for="">Likes</label>
  <input type="text" name='likes' value="{{old('likes')}}" placeholder='comma separated values'>
{{--  @error('likes') <p class="error"> {{$message}}</p> @enderror--}}
</div>
<div>
  <label for="">Dislikes</label>
  <input type="text" name='dislikes' value="{{old('dislikes')}}" placeholder='comma separated values'>
{{--  @error('dislikes') <p class="error"> {{$message}}</p> @enderror--}}
</div>
<div>
  <label for="">Hobbies</label>
  <input type="text" name='hobbies' value="{{old('hobbies')}}" placeholder='comma separated values'>
{{--  @error('hobbies') <p class="error"> {{$message}}</p> @enderror--}}
</div>
<div>
     <button class='bg-blue-500 text-white'> Submit </button>
</div>
</form>
<script>
const form = document.querySelector('form')
function change_Visibility(e){
     form['password'].setAttribute('type', form['password'].getAttribute('type')== 'text' ? 'password' : 'text' )
}
</script>
@endsection

