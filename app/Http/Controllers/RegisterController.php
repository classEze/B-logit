<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $request->validate(
    [
        'phone'=>'regex:/^234\d{10}$/',
        'email'=>'email',
        'username'=>'min:7',
        'password'=>'regex:/(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*[@!#\$%\^&\*]+).{8,}/',
    ], ['password.regex'=> ' Password must contain at least one special character, one uppercase and a digit',
                'phone.regex'=> 'Invalid phone format please enter a valid phone',
                'email.email'=> ' Invalid email format'
                ]);
        $userToSave = new User;

                $userToSave->firstname = $request->firstname;
                $userToSave->lastname= $request->lastname;
                $userToSave->phone= $request->phone;
                $userToSave->password= Hash::make($request->password);
                $userToSave->hobbies= json_encode(explode( ',',  $request->likes ) );
                $userToSave->likes= json_encode(explode( ',' ,  $request->likes));
                $userToSave->dislikes= json_encode(explode( ',', $request->likes ) );
                $userToSave->username= $request->username;
                $userToSave->email= $request->email;
        $userToSave->save();
        return redirect('/login');

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
