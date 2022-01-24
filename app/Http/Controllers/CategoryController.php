<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request)

    {
        // Category::create($request->all());

        // DB::table('categors')->insert([
        //     'category_name' =>$request->category_name,
        //     'category_description' =>$request->categrory_description,
        //     'publication_status' =>$request->publication_status
        // ]);


        // $newName = 'product_' . time() . '.' . $request->file('photo')->getClientOriginalExtension();
        // $request->file('photo')->move('uploads/products', $newName);
        //$category->photo = $newName;



        //perfect
        $this->validate($request,
        [
           'category_name'=>'required',
           'category_description'=>"required",
           'publication_status'=>"required"


       ]);

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        // $request->all();
        return redirect('/add-category')->with('message','Category info successfully');


    }
    public function manageCategory()

    {
        $category=Category::all();
        return view('admin.category.manage-category',['category'=>$category]);
    }
    public function unpublishedCategory($id)

    {
        $category=Category::find($id);
        $category->publication_status= 0;
        $category->save();
        return redirect('/manage-category')->with('message','Category info Unpublished');

    }
    public function publishedCategory($id)

    {
        $category=Category::find($id);
        $category->publication_status= 1;
        $category->save();
        return redirect('/manage-category')->with('message','Category info Published');

    }
    public function editCategory($id)

    {
        $category=Category::find($id);

        return view('admin.category.edit-category',['category'=>$category]);

    }
    public function updateCategory(Request $request)

    {
        $category=Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/manage-category')->with('message','Category update successfully');


    }
    public function deleteCategory(Request $request )

    {
        $category=Category::find($request->id);

        $category->delete();

        return redirect('/manage-category')->with('message','Category delete successfully');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryProduct($id)
    {
        $product=Product::where('category_id',$id)
                ->where('publication_status',1)
            
                ->get();
        $category=Category::where('publication_status',1)->get();
       return view('font.category.category-content',[
           'category'=>$category,
           'product'=>$product,

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
