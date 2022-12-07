<?php

namespace App\Http\Controllers;

use App\Models\CategoryDisease;
use Illuminate\Http\Request;

class CategoryDiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.data-master.category-disease.index')->with([
            'category' => CategoryDisease::all(),
            'title' => 'Category',
            'subtitle' => 'Disease'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.data-master.category-disease.add')->with([
            'title' => 'Category',
            'subtitle' => 'Disease'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'category' => 'required|min:2|max:255|unique:category_diseases'
        ]);

        CategoryDisease::create($validateData);

        return redirect()->intended('/category-disease/create')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Add Category Disease Success!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryDisease  $categoryDisease
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryDisease $categoryDisease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryDisease  $categoryDisease
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryDisease $categoryDisease)
    {
        return view('administrator.data-master.category-disease.edit')->with([
            'category' => $categoryDisease,
            'title' => 'Category',
            'subtitle' => 'Disease'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryDisease  $categoryDisease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryDisease $categoryDisease)
    {
        $validateData = $request->validate([
            'category' => 'required|min:2|max:255|unique:category_diseases'
        ]);

        CategoryDisease::whereId($categoryDisease->id)->update($validateData);

        return redirect()->intended('/category-disease')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Update Success!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryDisease  $categoryDisease
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryDisease $categoryDisease)
    {
        CategoryDisease::destroy($categoryDisease->id);

        return redirect()->intended('/category-disease')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Delete Success!'
        ]);
    }
}
