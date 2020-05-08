<?php

namespace App\Http\Controllers;
use DB;
use App\Fans;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movie=Movie::all();

        return view('cartoon', compact('movie'));

    }
    public function film()
    {
        $movie=Movie::all();

        return view('film', compact('movie'));

    }
    public function serial()
    {
        $movie=Movie::all();

        return view('serial', compact('movie'));

    }

    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $movie = Movie::find($id);

        if(!$movie) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $movie->name,
                    "genre" => $movie->genre,
                    "image" =>$movie->image,
                    "date" => $movie->date,
                    "plan" => $movie->plan
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        $cart[$id] = [
            "name" => $movie->name,
            "genre" => $movie->genre,
            "image" =>$movie->image,
            "date" => $movie->date,
            "plan" => $movie->plan
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');





    }

    public function remove(Request $movie)
    {
        if($movie->id) {

            $cart = session()->get('cart');

            if(isset($cart[$movie->id])) {

                unset($cart[$movie->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
    public function create(){
        return view('create');
    }



    public function store(Request $request){
        $name = $request->input('name');
        $genre = $request->input('genre');
        $date = $request->input('date');
        $image = $request->input('image');
        $plan = $request->input('plan');
        $type = $request->input('type');
        $data=array('name'=>$name,"genre"=>$genre,"date"=>$date,"image"=>$image,"plan"=>$plan,"type"=>$type);
        DB::table('movie')->insert($data);
        return redirect(route('home'))->with('successMsg', 'Movie Added Successfully');
    }
    public function edit($id){
        $movie= Movie::find($id);
        return view('edit',compact('movie'));
    }
    public function show(){
        $movie = Movie::paginate(5);
        return view('table', compact('movie'));
    }
    public function update(Request $req, $id){
        $this->validate($req,[
            'name'=>'required',
            'genre'=>'required',
            'date'=>'required',
            'image'=>'required',
            'plan'=>'required',
            'type'=>'required'

        ]);
        $movie = Movie::find($id);
        $movie->name = $req->name;
        $movie->genre = $req->genre;
        $movie->date = $req->date;
        $movie->image = $req->image;
        $movie->plan = $req->plan;
        $movie->type = $req->type;
        $movie->save();

        return redirect(route('table'))->with('successMsg', 'User Successfully Updated');
    }
    public function delete($id){
        Movie::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'User Delete Successfully');
    }

}
