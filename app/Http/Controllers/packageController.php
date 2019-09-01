<?php

namespace App\Http\Controllers;

use App\package;
use Illuminate\Http\Request;

class packageController extends Controller
{
    public function packages_link(){
        $packages=package::all()->where("type","متنی");
        return view("admin.packageLink")->with("packages",$packages);
    }
    public function packages_link_add(Request $request){
        $package=new package();
        $package->type="متنی";
        $package->title=$request->input("title");
        $package->price=$request->input("price");
        $package->count=$request->input("count");
        $package->link=$request->input("link");
        $package->save();
        return redirect()->back();
    }
    //nikmehr
    public function packages_link_update_view($id){
        $packages=package::all()->where("type","متنی");
        $package =Package::find($id);
        return view("admin.packageLink" ,['packages'=>$packages,'package'=>$package,'id'=>$id]);
    }
    //nikmehr
    public function package_link_update(Request $request){
        package::where('id',$request->input("id"))
            ->update([
                'title' =>$request->input("title"),
                'count' =>$request->input("count"),
                'price' =>$request->input("price"),
                'link' =>$request->input("link"),
            ]);
        return redirect()->back();
    }

    public function packages_download(){
        $packages=package::all()->where("type","دانلودی");
        return view("admin.packageDownload")->with("packages",$packages);
    }
    public function packages_download_add(Request $request){
        $package=new package();
        $package->type="دانلودی";
        $package->title=$request->input("title");
        $package->price=$request->input("price");
        $package->count=$request->input("count");
        $package->link=$request->input("link");
        $package->save();
        return redirect()->back();
    }
    //nikmehr
    public function package_download_update_view($id){
        $packages=package::all()->where("type","دانلودی");
        $package =Package::find($id);
        return view("admin.packageDownload" ,['packages'=>$packages,'package'=>$package,'id'=>$id]);
    }
    //nikmehr
    public function package_download_update(Request $request){
        package::where('id',$request->input("id"))
            ->update([
                'title' =>$request->input("title"),
                'count' =>$request->input("count"),
                'price' =>$request->input("price"),
                'link' =>$request->input("link"),
            ]);
        return redirect()->back();
    }

    public function packages_image(){
        $packages=package::all()->where("type","تصویری");
        return view("admin.packageImage")->with("packages",$packages);
    }
    //nikmehr
    public function packages_image_add(Request $request){
        $package=new package();
        $package->type="تصویری";
        $package->title=$request->input("title");
        $package->price=$request->input("price");
        $package->count=$request->input("count");
        $package->save();
        $LastProduct=package::orderBy('created_at', 'desc')->first();
        $file = $request->file('image');
        if(isset($file))
            if ($file->isValid()) {
                $fileName="package-".$LastProduct->id."-".$file->getClientOriginalName();
                $file->move('upload/package', $fileName);
                package::where('id',$LastProduct->id)
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }
    //nikmehr
    public function package_image_update_view($id){
        $packages=package::all()->where("type","تصویری");
        $package =Package::find($id);
        return view("admin.packageImage" ,['packages'=>$packages,'package'=>$package,'id'=>$id]);
    }
    //nikmehr
    public function package_image_update(Request $request){
        package::where('id',$request->input("id"))
            ->update([
                'title' =>$request->input("title"),
                'count' =>$request->input("count"),
                'price' =>$request->input("price"),
            ]);
        $Lastpackage=$request->input("id");
        $file = $request->file('image');
        if(isset($file))
            if ($file->isValid()) {
                $fileName="package-".$Lastpackage."-".$file->getClientOriginalName();
                $file->move('upload/package', $fileName);
                package::where('id',$Lastpackage)
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }

    public function packages_delete($id){
        package::find($id)->delete();
        return redirect()->back();
    }
}
