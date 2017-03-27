<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customer_name = Input::get('customer');
      $keyword = Input::get('name');
      $products = DB::select("SELECT product_like.pname,
                                     product_like.pdescription,
                                     product_like.pprice,
                                     product_like.pstatus,
                                     customer_purchase.puttime,
                                     customer_purchase.cname,
                                     (CASE WHEN customer_purchase.quantity IS NULL
                                       THEN 0
                                       ELSE customer_purchase.quantity
                                      END)
                               FROM (SELECT *
                                     FROM product
                                     WHERE lower(pdescription) LIKE ?) AS product_like
                               LEFT JOIN (SELECT *
                                          FROM purchase
                                          WHERE cname=? AND status='pending') AS customer_purchase
                               ON product_like.pname = customer_purchase.pname",
                               ['%' . $keyword . '%', $customer_name]);

      return view('product.index', compact('products'));
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
