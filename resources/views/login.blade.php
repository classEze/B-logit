@extends('layouts/layout')
@section('body')
    <p class='text-center font-bold text-2xl'> Login  </p>
    <form action="{{route('login')}}" method='post'>
        @if(session('message'))
        <span class="text-white inline-block ml-8 p-4 bg-red-500 rounded-xl my-2">{{session('message')}}</span>
        @endif
        @csrf
        <div>
            <label for=""> Email *</label>
            <input type="text" name='email' value="{{old('email')}}" required placeholder='please enter registered email'>
        </div>
        <div>
            <label for=""> Password *</label>
            <input type="password" name='password'  required placeholder='please enter your password'>
        </div>
        <div>
            <button class='bg-blue-500 text-white'> Let's Go </button>
        </div>
@endsection

