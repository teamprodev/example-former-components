<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormerController extends Controller
{
    /**
     *
     * Function  create
     * @param Request $data
     * @return  RedirectResponse
     */
    final public function create(Request $data) : RedirectResponse
    {
        User::create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'language' => $data['country_code'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect()->route('home');
    }
}
