<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request )

    {

        $category=Category::where('publication_status',1)->get();
        $brand=Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'category' => $category,
            'brand' => $brand,
        ]);
    }
    // public function saveProduct(Request $request)
    public function saveProduct(Request $request, Product $product)

    {

        // $attributes = $request->validate([
        //     'category_id'=>'required',
        //     'product_name'=>'required',
        //     'brand_id'=>'required',
        //     'product_price'=>'required',
        //     'long_description'=>'required',
        //     'publication_status'=>'required',
        //     'product_image'=>'required',

        // ]);



        // $productImage=$request->file('product_image');
        // $imageName=$productImage->getClientOriginalExtension();
        // $director='product-image';
        // $productImage->move($director,$imageName)
        // $attributes['product_image'] = $productImage;

        // Product::create($attributes);

        $this->validate($request,
         [
            'category_id'=>'required',
            'product_name'=>'required',
            'brand_id'=>'required',
            'product_price'=>'required',
            'long_description'=>'required',
            'publication_status'=>'required',
            'product_image'=>'required',


        ]);

        $productImage=$request->file('product_image');
        $imageName= time() . '.' . $productImage->getClientOriginalExtension();
        $director='product-image';
        $productImage->move($director,$imageName);

        $product= new Product();
        $product->category_id   =      $request->category_id;
        $product->product_name  =    $request->product_name;
        $product->brand_id      =   $request->brand_id;
        $product->product_price     =    $request->product_price;
        $product->product_quantity=$request->product_quantity;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        $product->product_image=$imageName;
        $product->publication_status=$request->publication_status;
        $product->save();

        return redirect('/add-product')->with('message','Product info successfully');

    }




    public function manageProduct( )
    {

        $product=Product::all();
        return view('admin.product.manage-product',['product'=>$product]);


    }


    public function unpublishedProduct($id)

    {
        $product=Product::find($id);
        $product->publication_status= 0;
        $product->save();
        return redirect('/manage-brand')->with('message','Product info Unpublished');

    }
    public function publishedProduct($id)

    {
        $product=Product::find($id);
        $product->publication_status= 1;
        $product->save();
        return redirect('/manage-brand')->with('message','Product info Published');

    }
    public function editProduct($id)

    {
        $product=Product::find($id);

        return view('admin.product.edit-product',['product'=>$product]);

    }
    public function updateProduct(Request $request)

    {
        $product=Product::find($request->id);


        $product=Product::find($request->id);
        return $product;
        // $brand->brand_description = $request->brand_description;
        // $brand->publication_status = $request->publication_status;
        // $brand->save();

        // return redirect('/manage-brand')->with('message','brand update successfully');


    }
    public function deleteProduct(Request $request )

    {
        $product=Product::find($request->id);

        $product->delete();

        return redirect('/manage-product')->with('message','Product delete successfully');


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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
