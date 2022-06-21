<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 42;
        // $products = DB::table('products')->get();
        //! condition in table row
        // $products = DB::select('select id, name from products where id = ? and name = ?', [$id, 'Bajaj Pulsar NS160 Twin Disc ABS']);

        // $products = DB::select('select id, name from products where id = ? or name = ?', [$id, 'Bajaj Pulsar NS160 Twin Disc ABS']);

        // $products = DB::select('select id, name from products where not id = ?', [$id]);

        // $products DB::select('select * from products where id = ?', [$id]);

        // $products = DB::select('select id from products where id = ?', [$id]);

        // $products = DB::table('products')->get();

        // $products = DB::table('products')->where('id', $id)->first();

        // $products = DB::table('products')->value('id', 'name');

        // $products = DB::table('products')->find(42);

        // $products = DB::table('products')->pluck('id');

        // $products = DB::table('products')
        // ->select('id', 'name', 'added_by')
        // ->limit(10)
        // ->get();

        // $products = DB::table('products')->orderBy("id")->chunk(20, function ($products) {
        //     foreach ($products as $product) {
        //         echo $product->status . '<br>';
        //     }
        //     return false;
        // });

        // $products = DB::table('products')->where("published", 1)->chunkById(2, function ($products) {
        //     foreach ($products as $product) {
        //         echo $product->published . '<br>';
        //     }
        //     return false;
        // });


        // Streaming Results Lazily
        // $products = DB::table('products')->orderBy("id")->lazy()->each(function($product) {
        //     echo $product->id . '<br>';
        // });


        // Aggregates

        // $products = DB::table('products')->select(DB::raw('count(*) as total'))->first();

        // $products = DB::table('products')->count();

        // $products = DB::table('products')->max('unit_price');

        // $products = DB::table('products')->min('unit_price');


        // $products = DB::table('products')->avg('unit_price');

        // $products = DB::table('products')->sum('unit_price');


        // $products = DB::table('products')->select(DB::raw("count(*) as total sum('unit_price') total_id"))->toSql();

        // $products = DB::table('products')->select(DB::raw("count(*) as total, sum('unit_price') total_id"))->toSql();

        // Select Statements
        // $products = DB::table('products')->select('id', 'name', 'unit_price as price')->limit(10)->get();


        // $products = DB::table('products')->distinct()->limit(2)->get();

        // Raw Expressions
        // if(DB::table('orders')->where('id', 1)->exists()) {
        //     return 'Order exists';
        // }

        // Select Statements

        // $query = DB::table('users')->select('name');
        // $query->addSelect('id');
        // $query->limit(10);
        // echo $query->get();


        // Raw Expressions
        // $products = DB::table('products')->select('id', 'name')
        // ->where('id', '>', 1)
        // ->where('id', '<', 50)
        // ->where('published', 1)
        // ->get();

        // Raw Methods
        $products = Product::selectRaw('id, name, unit_price as price')
        ->whereRaw('id > ?', [1])
        ->whereRaw('id < ?', [50])
        ->whereRaw('published = ?', [1])
        ->whereRaw('unit_price > IF(unit_price < 169900)')
        ->get();



        return $products;




        // return view('products.index', ['products' => $products]);
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
