@extends('layouts/layout')
@section('body')
    <p class='text-center font-bold text-2xl'> Login  </p>
    <form action="/register" method='post'>
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

