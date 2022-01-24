<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\VisitorModel;

class FrontController extends Controller
{
    public function index(){

        $userIp=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("asia/Dhaka");
        $timeDate=date("y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$userIp,'visit_time'=>$timeDate]);

        $category=Category::where('publication_status',1)->get();
        $product=Product::where('publication_status',1)
                                ->orderBy('id','desc')
                                ->take(8)
                                ->get();
        return view('font.home.home',[
                    'category'=>$category,
                    'product'=>$product,

                ]);

    }


}

// $product=Product::where('category_id',$id)
//                 ->where('publication_status',1)
//                 ->get();
