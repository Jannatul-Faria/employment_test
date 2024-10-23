<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::with('features')->limit(4)->latest()->get();
        return view('products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validate input
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'features.*' => 'required',
                'image' => 'nullable|image'
            ]);
    
            // Handle the image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('uploads', 'public');

                

            } else {
                $imagePath = null;
            }
    
            // Create product
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath,
            ]);
    
            // Create features
            foreach ($request->features as $featureName) {
                $product->features()->create(['name' => $featureName]);
            }
    
            return redirect()->route('products')->with('success', 'Product created successfully.');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
