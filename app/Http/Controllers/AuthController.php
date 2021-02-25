<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me()
    {
        return [
            "nis" => "3103108062",
            "name" => "Febryan Eka Setiaji",
            "gender" => "Laki-laki",
            "phone" => "08748324382",
            "class" => "XII RPL 2",
        ];
    }
}
