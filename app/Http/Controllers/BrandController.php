<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBrand()
    {


        return view('admin.brand.add-brand');
    }
    public function saveBrand( Request $request)
    {
        // $request->all();
        $this->validate($request,
         [
            'brand_name'=>'required',
            'brand_description'=>"required",
            'publication_status'=>"required"


        ]);

        $brand = new Brand;
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        // $request->all();
        return redirect('/add-brand')->with('message','Brand info successfully');



    }
    
    public function manageBrand( )
    {

        $brand=Brand::all();
        return view('admin.brand.manage-brand',['brand'=>$brand]);


    }


    public function unpublishedBrand($id)

    {
        $brand=Brand::find($id);
        $brand->publication_status= 0;
        $brand->save();
        return redirect('/manage-brand')->with('message','Brand info Unpublished');

    }
    public function publishedBrand($id)

    {
        $brand=Brand::find($id);
        $brand->publication_status= 1;
        $brand->save();
        return redirect('/manage-brand')->with('message','Brand info Published');

    }
    public function editBrand($id)

    {
        $brand=Brand::find($id);

        return view('admin.brand.edit-brand',['brand'=>$brand]);

    }
    public function updateBrand(Request $request)

    {
        $brand=Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/manage-brand')->with('message','brand update successfully');


    }
    public function deleteBrand(Request $request )

    {
        $brand=brand::find($request->id);

        $brand->delete();

        return redirect('/manage-brand')->with('message','brand delete successfully');


    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
