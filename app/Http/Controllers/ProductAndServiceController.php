<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAndService;

class ProductAndServiceController extends Controller
{
    public function index()
    {
        $productsAndServices = ProductAndService::latest()->get();
        return view('admin.product_and_services.index', compact('productsAndServices'));
    }

    public function create()
    {
        return view('admin.product_and_services.create');
    }

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Store the image in the storage/app/public/images directory
    $imageName = time().'.'.$request->image->extension();
    $path = $request->image->storeAs('public/images', $imageName);

    // Save the image path relative to the storage/app/public directory
    ProductAndService::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => 'images/' . $imageName,
    ]);

    return redirect()->route('product_and_services.index')->with('success', 'Product or Service added successfully.');
}

    public function edit(ProductAndService $productAndService)
    {
        return view('admin.product_and_services.edit', compact('productAndService'));
    }

    public function update(Request $request, ProductAndService $productAndService)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $productAndService->image = $imageName;
        }

        $productAndService->title = $request->title;
        $productAndService->description = $request->description;
        $productAndService->save();

        return redirect()->route('product_and_services.index')->with('success', 'Product or Service updated successfully.');
    }

    public function destroy(ProductAndService $productAndService)
    {
        $productAndService->delete();
        return redirect()->route('product_and_services.index')->with('success', 'Product or Service deleted successfully.');
    }
}
