<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Advertisement;

class AdvertisementController extends Controller
{
    public function create(Request $request){
        $advertisement = new Advertisement;
        $advertisement->id_user  = $request->id_user;
        $advertisement->specialization = $request->specialization;
        $advertisement->title = $request->title;
        $advertisement->course_type = $request->course_type;
        $advertisement->desc = $request->desc;
        $advertisement->location = $request->location;
        $advertisement->price = $request->price;
        $advertisement->save();

        return response()->json(['success' => '1']);
     } 
     
     public function index(){
    	$advertisement = Advertisement::all();
    	return response()->json(['data' => $advertisement]);
    }

    public function read(Request $request){
    	$id_user = $request->id_user;
        $advertisement  = Advertisement::where("id_user", $id_user)->get();

    	return response()->json(['data' => $advertisement]);
    }



    public function store(Request $request)
    {
        $id_user = $request->id_user;

        $user  = User::find($request->id_user);
        $advertisement  = Advertisement::where('id_user', $id_user)->count();

        $advertisement = new Advertisement;
        $advertisement->id_user= $id_user;
        $advertisement->specialization = $request->specialization;
        $advertisement->title = $request->title;
        $advertisement->course_type = $request->course_type;
        $advertisement->desc = $request->desc;
        $advertisement->location = $request->location;
        $advertisement->price = $request->price;
        $advertisement->save();      

        $result["success"] = "1";
        $result["message"] = "success";
        $result["last_id"] = $advertisement->id;
        return json_encode($result);

    }

    public function delete(Request $request){
        $advertisement = Advertisement::find($request->id);
        $advertisement ->delete();
        return response()->json(['success' => '1']);
    }

}
