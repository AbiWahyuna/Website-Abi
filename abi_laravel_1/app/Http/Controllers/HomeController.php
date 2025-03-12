<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 

class HomeController extends Controller
{ 
    public function home() 
    { 
        $images = [
            'https://embed.pixiv.net/artwork.php?illust_id=99316246',
            'https://embed.pixiv.net/artwork.php?illust_id=99316246',
            'https://embed.pixiv.net/artwork.php?illust_id=99316246',
            'https://embed.pixiv.net/artwork.php?illust_id=99316246',
        ];

        return view('home', ['name' => 'Kondisi admin saat ngulik laravel modal modul', 'images' => $images]);
    }
}
