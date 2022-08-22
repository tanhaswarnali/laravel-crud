<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\productmodels;
class productcontroller extends Controller
{
    public function addproduct(){
        return view("backend.addproduct");
    }
    public function productstore(Request $rqst){
        $product = new productmodels;
        $product->pname = $rqst->pname;
        $product->pdes  = $rqst->pdes;
        $product->cat = $rqst->cat;
        $product->scat = $rqst->scat;
        $product->price = $rqst->price;
        $product->status = $rqst->status;
        $product->save();
        return redirect()->route("showproduct");
    }
    public function showproduct(){
        $products = productmodels::all();
        return view("backend.showproduct",compact("products"));
    }
    public function editproduct($id){
        $products = productmodels::find($id);
        return view("backend.editproduct",compact("products"));
    }

    public function update(Request $rqst,$id){
        $data = productmodels::find($id);
        $data->pname = $rqst->pname;
        $data->pdes = $rqst->pdes;
        $data->cat = $rqst->cat;
        $data->scat = $rqst->scat;
        $data->price = $rqst->price;
        $data->status = $rqst->status;
        $data->update();
        return redirect()->route("showproduct");
    }

    public function delete($id){
        $delete = productmodels::find($id);
        $delete->delete();
        return redirect()->route("showproduct");
    }
    public function status($id){
        $status = productmodels::find($id);
        if( $status->status==1){
            $status->status=2;
        }
        else{
            $status->status=1;
        }
        $status->update();
        return redirect()->route("showproduct");
    }
}
