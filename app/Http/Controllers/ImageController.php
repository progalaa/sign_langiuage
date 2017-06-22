<?php

namespace App\Http\Controllers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Images;

class ImageController extends Controller
{
    public function getAll()
    {
        $images = Images::all();
        //return $images->toJson();
        $result=array(
        );
        $result['images']=$images;
        echo json_encode(array($result));
    }

    public function getImage($id){
        $image = Images::where('id', $id)->get();
        //return $image->toJson();
        //$fin = "{data:".$image."}";
        $fin = $image;
        $fin2 = str_replace('[',' ',$fin);
        $fin3 = str_replace(']',' ',$fin2);
        return $fin3;
    }

    public function getTextImage($keyword){
        $exploded = explode(" ",$keyword);
        $result = Images::where(function($query) use($exploded){
            foreach($exploded as $val) {
                $query->orWhere('keywords', 'LIKE', '%'.$val.'%');
            }
        })->get();
        return $result->toJson();
    }
    
}
