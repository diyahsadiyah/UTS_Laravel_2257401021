<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Sadiyah',
            'nim' => '2257401021',
            'class' => 'MI22A'
        ];

        return view('dashboard', $data);
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/home');

    }
}