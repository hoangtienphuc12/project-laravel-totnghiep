<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Movie;
use App\Model\Category;
use App\Model\combo;
use App\Model\RoomShow;
use App\Model\RowSeat;
use App\Model\SeatNumber;
use App\Model\ShowTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function getMovieItems()
    {

        return view('admin/index');
    }
    public function postAddMovieCategories(Request $request)
    {
        $data['catelist'] = Category::all();
        $category = new Category();
        $category->category_name = $request->cate_name;
        $category->category_slug = Str::slug($request->cate_name);
        $category->save();
        return view('admin/add-cate-movies', $data);
    }
    public function getAddMovieCategories()
    {
        $data['catelist'] = Category::all();
        return view('admin/add-cate-movies', $data);
    }
    public function checkCategories(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->cate_name;
        $category->category_slug = Str::slug($request->cate_name);
        $category->save();
        return back();
    }
    //delete category
    public function getDeleteCate($category_id)
    {
        Category::destroy($category_id);
        return back();
    }

    //edit category
    public function getEditCate($id)
    {
        $data['cate'] = Category::find($id);
        return view('backend.editcategory', $data);
    }

    public function postComingSoon(Request $request)
    {
        $check = Movie::where('movie_name', '=', $request->movie_name)->first();
        // dd($request);
        if ($check !== null) {
            return FacadesRedirect::back()->with('error', "teen phim co r");
        } else {
            $destination = base_path() . '/public/images';
            $request->file('movie_image')->move($destination, $request->file('movie_image')->getClientOriginalName());
            $movie = new Movie();
            $movie->movie_name = $request->movie_name;
            $movie->movie_directors = $request->movie_directors;
            $movie->movie_actors = $request->movie_actors;
            $movie->movie_time = $request->movie_time;
            $movie->movie_language = $request->movie_language;
            $movie->movie_rating = $request->movie_rating;
            $movie->movie_description = $request->movie_description;
            $movie->movie_rated = $request->movie_rated;
            $movie->movie_releasetime = $request->movie_releasetime;
            $movie->movie_status = $request->movie_status;
            $movie->movie_cate = $request->movie_cate;
            $movie->movie_image = $request->file('movie_image')->getClientOriginalName();
            $movie->save();
            $data['catelist'] = Category::all();
            $data['movielist'] = DB::table('movies')
                ->join('categories', 'movies.movie_cate', '=', 'categories.category_id')
                ->select('movies.*', 'categories.category_name')
                ->get();
            return view('admin/coming-soon', $data);
        }
    }
    public function getDeleteMovie($movie_id)
    {
        Movie::destroy($movie_id);
        return back();
    }


    public function getComingSoon()
    {
        // $data['movielist'] = Movie :: all();
        $data['catelist'] = Category::all();
        $data['movielist'] = DB::table('movies')
            ->join('categories', 'movies.movie_cate', '=', 'categories.category_id')
            ->select('movies.*', 'categories.category_name')
            ->get();
        // dd($data);
        return view('admin/coming-soon', $data);
    }
    public function getAddMovies()
    {
        return view('admin/add-movies');
    }
    public function postRoomShow(Request $request)
    {

        $room = new RoomShow();
        $room->room_name = $request->room_name;
        $room->save();
        $data['roomlist'] = RoomShow::all();
        return view('admin/room-show', $data);
    }
    public function getRoomShow()
    {
        $data['roomlist'] = RoomShow::all();
        return view('admin/room-show', $data);
    }
    public function checkRoomShow(Request $request)
    {
        $room = new RoomShow();
        $room->room_name = $request->cate_name;
        $room->save();
        return back();
    }
    public function getDeleteRoom($room_id)
    {
        // dd($room_id);
        RoomShow::destroy($room_id);
        return back();
    }

    public function getRowSeat()
    {
        $data['roomlist'] = RoomShow::all();
        $data['rowlist'] = DB::table('row_seats')
            ->join('room_shows', 'row_seats.room_id', '=', 'room_shows.room_id')
            ->select('row_seats.row_id','row_seats.row_number', 'room_shows.room_name')
            ->get();           
        return view('admin/row-seat',$data);
    }
    public function postRowSeat(Request $request)
    {
        // dd($request);
        $row = new RowSeat();
        $row->row_number = $request->row_number;
        $row->room_id = $request->room_id;
        $row->save();
        $data['rowlist'] = RowSeat::all();
        $data['roomlist'] = RoomShow::all();
        return view('admin/row-seat', $data);
    }
    public function getDeleteRow($row_id){
        RowSeat ::destroy($row_id);
        return back();
    }


//SeatNumber-------------------------

    public function getSeatNumber(){
        $data['roomlist'] = RoomShow::all();
        $data['rowlist'] = RowSeat::all();
        $data['seatlist'] = DB::table('seat_numbers')
            ->join('room_shows','seat_numbers.room_id', '=','room_shows.room_id')
            ->join('row_seats','seat_numbers.row_id', '=','row_seats.row_id')
            ->select('seat_numbers.*','row_seats.row_number','room_shows.room_name')
            ->get();
        return view('admin/seat-number',$data);
    } 
    public function postSeatNumber(Request $request){
        // dd($request);
        $seat = new SeatNumber();
        $seat->seat_number =$request->seat_number;
        $seat->status =$request->status;
        $seat->room_id=$request->room_id;
        $seat->row_id=$request->row_id;
        $seat -> save();
        $data['seatlist'] = SeatNumber::all();
        $data['rowlist'] = RowSeat::all();
        $data['roomlist'] = RoomShow::all();
        return view('admin/seat-number',$data);
    }
    public function getDeleteSeat($seat_id){
        SeatNumber ::destroy($seat_id);
        return back();
    }

//ShowTime-------------------------
    public function getShowTime(){
        $data ['movielist'] = Movie ::all();
        $data ['roomlist'] = RoomShow ::all();
        $data ['timelist'] = DB :: table('show_times')
            ->join('room_shows','show_times.room_show', '=','room_shows.room_id')
            ->join('movies','show_times.movie_name', '=','movies.id')
            ->select('show_times.*','room_shows.room_name','movies.movie_name')
            ->get();
        return view('admin/show-time',$data);
    }
    public function postShowTime(Request $request){
        // dd($request);
        $time = new ShowTime();
        $time -> room_show = $request -> room_id;
        $time -> movie_name = $request -> movie_id;
        $time -> date = $request -> date;
        $time -> time = $request -> time;
        $time -> save();
        $data['timelist'] = ShowTime::all();
        $data['movielist'] = Movie::all();
        $data['roomlist'] = RoomShow::all();
        return view('admin/show-time',$data);
    }
    public function getDeleteTime($id){
        ShowTime :: destroy($id);
        return back();
    }
//Combo-------------------------
    public function getCombo(){
        $data['combolist'] = combo :: all();
        return view('admin/combo',$data);
    }

    public function postCombo(Request $request){
        $combo = new combo();
        $combo -> tencombo = $request -> tencombo;
        $combo -> chitiet = $request -> chitiet;
        $combo -> gia = $request -> gia;
        $combo ->save();
        $data['combolist'] = combo::all();
        return back();
    }
    public function getDeletecombo($id){
        combo :: destroy($id);
        return back();
    }
}
