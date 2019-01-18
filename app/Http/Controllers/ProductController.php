<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageProducts;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->session()->get('idUser');
        $products = Product::where('seller_id', '=', $id);
        if ($products->get() != null) {
            $data = $products->get();
            $count = count($products);
        } else {
            $data = null;
            $count = 0;
        }


        return view('product.index', ['products' => $data,'count'=>$count]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        $id = $request->session()->get('idUser');
        $product = new Product();
        return view('product.create', ['categories' => $categories, 'data' => $product, 'id_user' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $numberImg = count($request->imgurl);
        $shop = new Product([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category,
            'price' => $request->price,
            'seller_id' => $request->seller_id,
            'tags' => $request->tags,
            'shipping'=>$request->shipping,
            'quantity'=>$request->quantity,
        ]);
        $shop->save();

            for ($i = 0; $numberImg > $i; $i++) {
                $img = new ImageProducts([
                    'product_id' => $shop->id,
                    'image' => $request->imgurl[$i],
                ]);
                $img->save();

            }


        return redirect('/product')->with('success', 'Product Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = Product::find($id);

       $images= ImageProducts::Where('product_id','=',$product->id)->get();

       $category = Category::find($product->category_id);

       return view('product.show',['product'=>$product,'images'=>$images,'category'=>$category->name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $images= ImageProducts::Where('product_id','=',$product->id)->get();

        $categories = Category::all();

        return view('product.edit',['data'=>$product,'images'=>$images,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $numberImg = count($request->imgurl);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->quantity = $request->quantity;
        $product->seller_id = $request->seller_id;
        $product->save();

        for ($i = 0; $numberImg > $i; $i++) {
           $img= ImageProducts::find($request->idImgurl[$i]);
           if($img==null){
               $img = new ImageProducts([
                   'product_id'=>$product->id,
                   'image'=>$request->imgurl[$i],
               ]);
           }else{
               $img->image= $request->imgurl[$i];

           }
            $img->save();
        }


        return redirect('/product')->with('success', 'Product Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
