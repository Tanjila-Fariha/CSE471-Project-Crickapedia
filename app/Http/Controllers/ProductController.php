<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Stadium;



class ProductController extends Controller
{
    public function add_product_view()
    {
        return view('admin/add_product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'price' => 'required|integer',
            'product_details' => 'nullable|string|max:1000',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $fileName = time() . '.' . $request->picture->extension();  
            $request->picture->move(public_path('images/products'), $fileName);
            $data['picture'] = $fileName;
        }

        Product::create($data);

        return redirect('/add_product/view');
    }

    public function product_view()


    {

        $total_sta = Stadium::count();

        $total_user = User::count();

        $total_product = Product::count();
        return view('admin/admindashboard2',compact('total_sta','total_user','total_product'));
    }
}
