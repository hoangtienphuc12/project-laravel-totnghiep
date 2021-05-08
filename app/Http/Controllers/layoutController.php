<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Movie;
use App\Model\RoomShow;
use App\Model\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class layoutController extends Controller
{
    public function phimsapchieu(){
        $data['phimsc']= Movie :: where('movie_status','1')->get();
        // dd($phimsc);
        return view('coming-soon',$data); 
    }
    public function phimdangchieu(){
        $data['phimdc']= Movie :: where('movie_status','2')->get();
        // dd($phimsc);
        return view('showing',$data); 
    }
    public function chitietphim($id){
        $data['catelist'] = Category ::all();
        $data['roomlist'] = RoomShow ::all();
    //    $data['ctphim'] = Movie :: where('id',$id) -> get();
       $data['ctphim'] = DB::table('movies')
            ->join('categories', 'movies.movie_cate', '=', 'categories.category_id')
            ->select('movies.*', 'categories.category_name')
            ->where('movies.id',$id)        
            ->get();
       $data['phimlq'] = Movie :: where('movie_status','2')
       ->inRandomOrder()->limit(3)-> get();
       $data['timelist'] =ShowTime::where('movie_name',$id)->get();
    //    dd($data);
       return view('movie-detail',$data);
    }
}
