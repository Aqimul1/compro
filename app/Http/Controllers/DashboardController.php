<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Testimonial;
use App\Models\Product;
Use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'activePage' => 'dashboard',
            'totalUsers' => User::count(),
            'totalTestimonials' => Testimonial::count(),
            'totalProducts' => Product::count(),
            'totalContacts' => Contact::count(),
        ]);
    }
}
