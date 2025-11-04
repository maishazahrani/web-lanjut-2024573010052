<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function home(Request $request) {
        $theme = session('theme', 'light');
        $alertMessage = 'Selamat datang di Laravel UI Integrated Demo!';
        $features = [
            'Partial Views',
            'Blade Components',
            'Theme Switching',
            'Bootstrap 5',
            'Responsive Design'
        ];

        return view('home', compact('theme', 'alertMessage', 'features'));
    }

    public function about(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Halaman ini menggunakan Partial Views!';
        $team = [
            ['name' => 'Ayu', 'role' => 'Developer'],
            ['name' => 'Sinta', 'role' => 'Designer'],
            ['name' => 'Bayu', 'role' => 'Project Manager']
        ];

        return view('about', compact('theme', 'alertMessage', 'team'));
    }

    public function contact(Request $request) {
        $theme = session('theme', 'light');
        $departments = [
            'Technical Support',
            'Sales',
            'Billing',
            'General Inquiry'
        ];

        return view('contact', compact('theme', 'departments'));
    }

    public function profile()
{
    $user = [
        'name' => 'Maisha Zahrani',
        'email' => 'maisha@example.com',
        'join_date' => '2024-09-15', 
        'preferences' => ['Coding', 'Design', 'Dark Mode'],
    ];

    $theme = session('theme', 'light');
    return view('profile', compact('user', 'theme'));
}

    public function switchTheme($theme, Request $request) {
        if (in_array($theme, ['light', 'dark'])) {
            session(['theme' => $theme]);
        }
        return back();
    }
}