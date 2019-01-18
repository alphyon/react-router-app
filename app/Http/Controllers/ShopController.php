<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');

        $shop = Shop::where('seller_id',"=",$id)->first();


       if($shop !== null){
          $data= ['data'=>$shop,'id_user'=>$id];
           $view = 'shop.edit';
       }else{
           $data= ['data'=> null,'id_user'=>$id];
           $view = 'shop.index';
       }

       return view($view,$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $shop = new Shop([
          'shop_name' => $request->shop_name,
          'testimony_shop' => $request->testimony_shop,
          'about_shop' => $request->about_shop,
          'stripe_id' => $request->stripe_id,
          'seller_id'=>$request->seller_id,
          'image' => $request->imgurl[0],
      ]);
      $shop->save();
        return redirect('/shop')->with('success', 'Store Add');
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
        $shop = Shop::find($id);
        $shop->shop_name =  $request->shop_name;
        $shop->testimony_shop = $request->testimony_shop;
        $shop->about_shop = $request->about_shop;
        $shop->stripe_id = $request->stripe_id;
        $shop->image = $request->imgurl[0];
        $shop->save();
        return redirect('/shop')->with('success', 'Store Update');
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
