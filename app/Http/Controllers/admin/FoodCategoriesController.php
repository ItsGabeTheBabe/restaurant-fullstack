<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodCategoriesController extends Controller
{
    public function index()
    {
        return view('admin/food-categories/all');
    }
    public function create()
    {
        return view('admin/food-categories/create');
    }
    public function edit()
    {
        return view('admin/food-categories/edit');
    }
}