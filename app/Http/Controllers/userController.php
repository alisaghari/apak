<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //user controller
    public function users(){
        $users=User::where("type",0)->orderBy('created_at', 'desc')->get();
        return view("admin.users")->with("users",$users);
    }
    public function user_add(Request $request){
        $add = new User();
        $add->f_name = $request->input("f_name");
        $add->l_name = $request->input("l_name");
        $add->birthdate = $request->input("birthdate");
        $add->address = $request->input("address");
        $add->phone = $request->input("phone");
        $add->n_code = $request->input("n_code");
        $add->shaba = $request->input("shaba");
        $add->hesab = $request->input("hesab");
        $add->owner_name = $request->input("owner_name");
        $add->type = 0;
        $add->save();
        return redirect()->back();
    }

    public function user_delete($id){
        User::find($id)->delete();
        return redirect()->back();
    }
    public function user_update_view($id){
        $user=User::find($id);
        $users=User::where("type",0)->orderBy('created_at', 'desc')->get();
        return view("admin.users")->with("user",$user)->with("users",$users)->with("id",$id);
    }
    public function user_update(Request $request){
        User::where('id',$request->input("id"))
            ->update(['f_name' =>$request->input("f_name"),
                'l_name' =>$request->input("l_name"),
                'birthdate' =>$request->input("birthdate"),
                'address' =>$request->input("address"),
                'phone' =>$request->input("phone"),
                'n_code' =>$request->input("n_code"),
                'shaba' =>$request->input("shaba"),
                'hesab' =>$request->input("hesab"),
                'owner_name' =>$request->input("owner_name")
            ]);
        return redirect()->back();
    }

    public function user_search(Request $request){
        $users=User::where("phone",$request->phone)->where("type",0)->get();
        return view("admin.users")->with("users",$users);
    }

    //factory controller
    public function factories(){
        $users=User::where("type",1)->orderBy('created_at', 'desc')->get();
        return view("admin.factories")->with("users",$users);
    }
    public function factory_add(Request $request){
        $add = new User();
        $add->f_name = $request->input("f_name");
        $add->l_name = $request->input("l_name");
        $add->birthdate = $request->input("birthdate");
        $add->address = $request->input("address");
        $add->phone = $request->input("phone");
        $add->n_code = $request->input("n_code");
        $add->website = $request->input("website");
        $add->fa_website = $request->input("fa_website");
        $add->description = $request->input("description");
        $add->type = 1;
        $add->save();
        return redirect()->back();
    }

    public function factory_delete($id){
        User::find($id)->delete();
        return redirect()->back();
    }
    public function factory_update_view($id){
        $user=User::find($id);
        $users=User::where("type",1)->orderBy('created_at', 'desc')->get();
        return view("admin.factories")->with("user",$user)->with("users",$users)->with("id",$id);
    }
    public function factory_update(Request $request){
        User::where('id',$request->input("id"))
            ->update(['f_name' =>$request->input("f_name"),
                'l_name' =>$request->input("l_name"),
                'birthdate' =>$request->input("birthdate"),
                'address' =>$request->input("address"),
                'phone' =>$request->input("phone"),
                'n_code' =>$request->input("n_code"),
                'website' => $request->input("website"),
        'fa_website' => $request->input("fa_website"),
        'description' => $request->input("description")
            ]);
        return redirect()->back();
    }

    public function factory_search(Request $request){
        $users=User::where("phone",$request->phone)->where("type",1)->get();
        return view("admin.factories")->with("users",$users);
    }


        public function verify(){
        //send sms to this phone
             Auth::user()->phone;
             // and content this
            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                .'0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

            User::where('id',Auth::user()->id)
                ->update(['verify' =>$rand]);

            return view("admin.verify");

        }

        public function verifyCheck(Request $request){
            if($request->input("verify")!=Auth::user()->verify){
                //faild not correct
            } else{
                session_start();
                if(Auth::user()->type==2){
                    $_SESSION["type"]="admin";
                    return redirect("admin/users");
                }
            }

            return redirect()->back();
        }




}
