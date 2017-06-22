<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Images;
use DB;

class CrudController extends Controller
{
    public function addImage()
    {
        return view('admin/layouts/addImage');
    }
    
    public function doAddImage(Request $request)
    {
        $keywords = $request['keywords'];
        $image1 = $request->file('image');
        $input['imagename'] = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image1->move($destinationPath, $input['imagename']);

        $image = new Images;
        $image->keywords = $keywords;
        $image->images = $input['imagename'];

        $image->save();
        return Redirect()->route('viewImages')->with('message', 'Images Added Successfully');
    }
    
    public function viewImages()
    {
        $images = Images::all();
        return view('admin/layouts/viewImages',['images'=>$images]);
    }

    public function deleteImage($id)
    {
        $delete_image =DB::table('images')->where('id',$id)->delete();
        if($delete_image)
        {
            return Redirect()->route('viewImages')->with('message', 'Image With ID '.$id.'  Deleted');
        }
        else
        {
            return Redirect()->back()->with('error', 'Error Deleting The Image With ID'.$id);
        }
    }

    public function editImage($id)
    {
        $images =DB::table('images')->where('id', '=', $id)->get();
        return view('admin/layouts/editImage',['images'=>$images]);
    }

    public function doEditImage($id ,  Request $request)
    {
        $keywords = $request['keywords'];
        if($request->file('image')){
            $image1 = $request->file('image');
            $input['imagename'] = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image1->move($destinationPath, $input['imagename']);
            $query = DB::table('images')->where('id',$id)->update(['keywords'=>$keywords,'images'=>$input['imagename']]);
        }else{
            $query = DB::table('images')->where('id',$id)->update(['keywords'=>$keywords]);
        }



        return Redirect()->route('viewImages')->with('message', 'Images Updated Successfully');
    }


}