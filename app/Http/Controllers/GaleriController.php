<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Data galeri dengan kategori: fotbar, random, musang
        $galleries = [
            // Fotbar
            ['id' => 1, 'category' => 'fotbar', 'title' => 'Fotbar Keluarga', 'date' => '15 Desember 2024', 'image' => 'gallery-1.jpg'],
            ['id' => 2, 'category' => 'fotbar', 'title' => 'Fotbar Gathering', 'date' => '12 Desember 2024', 'image' => 'gallery-2.jpg'],
            ['id' => 3, 'category' => 'fotbar', 'title' => 'Fotbar Anniversary', 'date' => '18 Desember 2024', 'image' => 'gallery-3.jpg'],
            ['id' => 4, 'category' => 'fotbar', 'title' => 'Fotbar Bersama', 'date' => '20 Desember 2024', 'image' => 'gallery-4.jpg'],
            ['id' => 5, 'category' => 'fotbar', 'title' => 'Fotbar Tim', 'date' => '8 Desember 2024', 'image' => 'gallery-5.jpg'],
            ['id' => 6, 'category' => 'fotbar', 'title' => 'Fotbar Event', 'date' => '14 Desember 2024', 'image' => 'gallery-6.jpg'],
            
            // Random
            ['id' => 7, 'category' => 'random', 'title' => 'Random Moment 1', 'date' => '10 Desember 2024', 'image' => 'gallery-7.jpg'],
            ['id' => 8, 'category' => 'random', 'title' => 'Random Moment 2', 'date' => '3 Desember 2024', 'image' => 'gallery-8.jpg'],
            ['id' => 9, 'category' => 'random', 'title' => 'Random Moment 3', 'date' => '9 Desember 2024', 'image' => 'gallery-9.jpg'],
            ['id' => 10, 'category' => 'random', 'title' => 'Random Moment 4', 'date' => '5 Desember 2024', 'image' => 'gallery-10.jpg'],
            ['id' => 11, 'category' => 'random', 'title' => 'Random Moment 5', 'date' => '28 November 2024', 'image' => 'gallery-11.jpg'],
            ['id' => 12, 'category' => 'random', 'title' => 'Random Moment 6', 'date' => '4 Desember 2024', 'image' => 'gallery-12.jpg'],
            
            // Musang
            ['id' => 13, 'category' => 'musang', 'title' => 'Musang Adventure 1', 'date' => '1 Desember 2024', 'image' => 'gallery-13.jpg'],
            ['id' => 14, 'category' => 'musang', 'title' => 'Musang Adventure 2', 'date' => '23 November 2024', 'image' => 'gallery-14.jpg'],
            ['id' => 15, 'category' => 'musang', 'title' => 'Musang Adventure 3', 'date' => '6 Desember 2024', 'image' => 'gallery-15.jpg'],
            ['id' => 16, 'category' => 'musang', 'title' => 'Musang Adventure 4', 'date' => '25 November 2024', 'image' => 'gallery-16.jpg'],
            ['id' => 17, 'category' => 'musang', 'title' => 'Musang Adventure 5', 'date' => '30 November 2024', 'image' => 'gallery-17.jpg'],
            ['id' => 18, 'category' => 'musang', 'title' => 'Musang Adventure 6', 'date' => '2 Desember 2024', 'image' => 'gallery-18.jpg'],
        ];

        return view('galeri-lengkap', compact('galleries'));
    }
}