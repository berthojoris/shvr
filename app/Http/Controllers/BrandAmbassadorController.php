<?php

namespace App\Http\Controllers;

use App\BrandAmbassador;
use Illuminate\Http\Request;
use App\Http\Requests\BARequest;

class BrandAmbassadorController extends Controller
{
    public function register()
    {
        return view('reg_ba');
    }

    public function save(BARequest $request)
    {
        $validated = $request->validated();
        BrandAmbassador::create($validated);
        flash('Data kamu berhasil dikirim')->success();
        return redirect()->back();
    }

    public function index(Request $request)
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(Request $request)
    {
        return view('category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->all());
        $request->session()->flash('category', $category);
        return redirect()->route('category');
    }

    public function update(Request $request, Category $category)
    {
        $category = Category::find($category);
        return redirect()->route('category');
    }

    public function show(Request $request, Category $category)
    {
        $category = Category::find($category);
        return view('category.show', compact('category'));
    }

    public function edit(Request $request, Category $category)
    {
        $category = Category::find($category);
        return view('category.edit', compact('category'));
    }

    public function destroy(Request $request, Category $category)
    {
        Category::destroy($category->id);
        return redirect()->route('category');
    }
}
