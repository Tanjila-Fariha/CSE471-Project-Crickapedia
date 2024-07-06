<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stadium;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function view(){

        $total_sta = Stadium::count();

        $total_user = User::count();
        $total_product = Product::count();

        
        return view('admin/admindashboard2',compact('total_sta','total_user','total_product'));

        

    }
}
