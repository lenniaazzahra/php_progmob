<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create(Request $request){

      $advertisement = new Advertisement;
      $advertisement->spesialization = $request->specialization;
      $advertisement->title = $request->title;
      $advertisement->course_type = $request->course_type;
      $advertisement->desc = $request->desc;
      $advertisement->location = $request->location;
      $advertisement->price = $request->price;
      $advertisement->save();

      return response()->json(['success' => '1']);

        return response()->json(['success' => '1']);
    }


}