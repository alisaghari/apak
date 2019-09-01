<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_category;

class ProductCategoryController extends Controller
{
    public function product_categories(){
        $categories=Product_category::where('parent_id',0)->orderBy('id','DESC')->get()->toArray();
        return View('admin.product.productCategory',['categories'=>$categories]);
    }
    public function product_categories_add(Request $request){
        $category=new Product_category();

        $category->name=$request->input("name");
        $category->parent_id=$request->input("parent_id");
        $category->save();
        return redirect()->back();
    }
    public function product_categories_update_view($id){
        $categories=Product_category::where('parent_id',0)->orderBy('id','DESC')->get()->toArray();
        $category =Product_category::find($id);
        return view("admin.product.productCategory" ,['categories'=>$categories,'category'=>$category,'id'=>$id]);
    }
    public function product_categories_update(Request $request){
        Product_category::where('id',$request->input("id"))
            ->update([
                'name' =>$request->input("name"),
                'parent_id' =>$request->input("parent_id"),
            ]);
        return redirect()->back();
    }
    public function product_categories_delete($id){
        Product_category::find($id)->delete();
        return redirect()->back();
    }
}
