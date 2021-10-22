<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImage;

class BrandController extends Controller {
  use UploadImage;

  public function index() {
    $brands = Brand::all();

    return view('admin.brands.index', compact('brands'));
  }

  public function create() {
    return view('admin.brands.create');
  }

  public function store(Request $request) {
    $request->validate([
      'name_en' => 'required',
      'name_fr' => 'required',
      'image' => 'required',
    ]);

    $brandImage = $request->file('image');

    $brand = new Brand();
    $brand->name_en = $request->name_en;
    $brand->name_fr = $request->name_fr;
    $brand->imageURL = $this->uploadImage($brandImage, 'images/brands');
    $brand->slug = str_replace(' ', '-', $request->name_en);
    $brand->save();

    return redirect()
      ->route('brands.index')
      ->with(toastr('success', 'Created a new brand.'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function show(Brand $brand) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function edit(Brand $brand) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Brand $brand) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function destroy(Brand $brand) {
    //
  }
}
