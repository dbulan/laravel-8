<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return 'Hello Album!';
    }

    public function test()
    {
        // $url = route('profile');

        return redirect()->route('album');
    }

    public function token()
    {
        return 'Token is valid!';
    }
}
