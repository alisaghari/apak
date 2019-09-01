<?php

namespace App\Http\Controllers;

use App\auction;
use App\auctions_gallery;
use Illuminate\Http\Request;

class auctionController extends Controller
{
    public function auctions(){
        $auctions=auction::all();
        return view("admin.auction")->with("auctions",$auctions);
    }
    public function auction_add(Request $request){
        $auction=new auction();
        $auction->title=$request->input("title");
        $auction->price=$request->input("price");
        $auction->desc=$request->input("desc");
        $auction->countdown=$request->input("countdown");
        $auction->favorite=$request->input("fav");
        $auction->save();
        $Lastauction=auction::orderBy('created_at', 'desc')->first();
        $file = $request->file('image');
        if(isset($file))
            if ($file->isValid()) {
                $fileName="au-".$Lastauction->id."-".$file->getClientOriginalName();
                $file->move('upload/au', $fileName);
                auction::where('id',$Lastauction->id)
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }
    public function auction_update_view($id){
        $auctions=auction::all();
        $auction =auction::find($id);
        return view("admin.auction" ,['auctions'=>$auctions,'auction'=>$auction,'id'=>$id]);
    }
    public function auction_update(Request $request){
        auction::where('id',$request->input("id"))
            ->update([
                'title' =>$request->input("title"),
                'desc' =>$request->input("desc"),
                'price' =>$request->input("price"),
                'countdown' =>$request->input("countdown"),
                'favorite' =>$request->input("fav"),
            ]);
        $file = $request->file('image');

        if(isset($file))
            if ($file->isValid()) {
                $fileName="au-".$request->input("id")."-".$file->getClientOriginalName();
                $file->move('upload/au', $fileName);
                auction::where('id',$request->input("id"))
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }
    public function auction_delete($id){
        auction::find($id)->delete();
        return redirect()->back();
    }

    public function auction_gallery($id){
        $auctions_galleries=auctions_gallery::all()->where("a_id",$id);
        return view("admin.auctiongallery")->with("id",$id)->with("auctions_galleries",$auctions_galleries);
    }

    public function auction_gallery_add(Request $request){


        $auction=new auctions_gallery();
        $auction->a_id=$request->input("id");
        $auction->save();
        $Lastauction=auctions_gallery::orderBy('created_at', 'desc')->first();
        $file = $request->file('image');
        if(isset($file))
            if ($file->isValid()) {
                $fileName="au-".$Lastauction->id."-".$file->getClientOriginalName();
                $file->move('upload/au/gallery', $fileName);
                auctions_gallery::where('id',$Lastauction->id)
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }

    public function auction_gallery_delete($id){
        auctions_gallery::find($id)->delete();
        return redirect()->back();
    }
}
