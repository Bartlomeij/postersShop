<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Poster;

use App\Models\Order;

use Auth;

class PostersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($posterId)
    {
        $poster = Poster::find($posterId);
        $recommended = Poster::all()->random(3);
        return view('poster',['poster' => $poster, 'recommended' => $recommended]);
    }

    public function cart()
    {
        $shoppingCart = session()->get('shoppingCart');
        $posters = Poster::all();
        $posters->keyBy('id');
        
        $completed = false;
        if (session()->has('order_completed')){
            $completed = true;
            session()->forget('order_completed');
        }
        
        return view('cart',['shoppingCart' => $shoppingCart, 'posters' => $posters, 'completed' => $completed]);
    }
    
    public function completeOrder()
    {
        $session = session()->get('shoppingCart');
        $postersId = array();
        
        if($session){
        
            foreach($session as $key => $value){
                for($i=0; $i<$value; $i++)
                $postersId[] += $key;
            }
        
            $order = new Order();
            $order->user_id = Auth::id();
            $order->save();
            
            $order->posters()->sync($postersId);
            
            session()->forget('shoppingCart');
            session()->put('order_completed', true);
        }

        return redirect('/cart');
    }
    
    public function addToCart($posterId)
    {
        if (session()->has('shoppingCart.'.$posterId)) {
            $value = session()->get('shoppingCart.'.$posterId);
            $value++;
            session()->put('shoppingCart.'.$posterId, $value);
        } else{
            session()->put('shoppingCart.'.$posterId, 1);
        }
        return redirect('/poster/'.$posterId);
    }
    
    public function removeFromCart($posterId)
    {
        if (session()->has('shoppingCart.'.$posterId)) {
            session()->forget('shoppingCart.'.$posterId);
        }
        return redirect('/cart');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
