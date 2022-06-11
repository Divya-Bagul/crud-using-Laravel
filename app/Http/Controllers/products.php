<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class products extends Controller
{
    //
    function product_page(Request $req){
        if(!$req->session()->has('name')) {
            return redirect('/'); 
        }
            return view('product/addProduct');
    }

    function save(Request $req){
        if(!$req->session()->has('name')) {
            return redirect('/'); 
        }

        $req->validate(
                [

                'name'=>'required|string|max:255|unique:product_master',
                'price'=>'required|integer',
                'code'=>'required|max:6|min:6',
                'image'=>'mimes:jpg,png',
                ]
            );
        $product = new product;
        $product->name= $req->name;
        $product->price= $req->price;
        $product->code= $req->code;
        $image = $req->file('image');
        $reimage =  $image->getClientOriginalName();
        $dest = public_path('/product_image'); //assign path public folder
        $image->move($dest,$reimage); //move image in public path
        $product->image = $reimage; // insewrt image in db
               
       

        $product->save();
        return back()->with('msg',"product Added succesfully");
    }

    function show(Request $req){

        if(!$req->session()->has('name')) {
            return redirect('/'); 
        }
        $product = product::all();
        return view('product/show',compact('product'));
    }
    function edit( Request $req,$id){
        if(!$req->session()->has('name')) {
            return redirect('/'); 
        }
        $product = product::where('id','=',$id)->get();
        return view('product/edit',compact('product'));
    }
    function update(Request $req){
        if(!$req->session()->has('name')) {
            return redirect('/'); 
        }
        $id = $req->id;
        $image = $req->file('image');
        $reimage =  $image->getClientOriginalName();
        $dest = public_path('/product_image'); //assign path public folder
        $image->move($dest,$reimage); //move image in public path
     
        $product = product::where('id','=',$id)->update([
            'name'=>$req->name,
            'price'=>$req->price,
            'code'=>$req->code,
            'image'=>$reimage
        ]);
        return back()->with('msg',"product Upadted succesfully");
    }
    function delete(Request $req,$id){
        if(!$req->session()->has('name')) {
            return redirect('/'); 
        }
        $product = product::where('id','=',$id)->delete();
        return back();
    }
}
