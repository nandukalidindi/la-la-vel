<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customer', 'CustomerController');

Route::resource('product', 'ProductController');

Route::put('/purchases',function(Request $request){
  $pname = $request->pname;
  $cname = $request->cname;
  $puttime = $request->puttime;

  $specific_task = DB::select("SELECT * FROM purchase WHERE cname=? AND pname=? AND puttime=?", [$cname, $pname, $puttime])[0];
  $quantity = $specific_task->quantity + 1;
  $current_time = date('Y-m-d H:i:s');
  $product_price = DB::select('SELECT pprice FROM product WHERE pname = ?', [$pname])[0]->pprice;
  $final_price = $specific_task->puprice + $product_price;
  DB::update('UPDATE purchase SET quantity=?, puttime=?, puprice=? WHERE cname=? AND pname=? AND puttime=?', [$quantity, $current_time, $final_price, $cname, $pname, $puttime]);
  return Response::json(null);
});


Route::post('/purchases', function(Request $request) {
  $pname = $request->pname;
  $cname = $request->cname;
  $product_price = DB::select('SELECT pprice FROM product WHERE pname = ?', [$pname])[0]->pprice;
  $current_time = date('Y-m-d H:i:s');
  DB::insert('INSERT INTO purchase VALUES (?, ?, ?, ?, ?, ?)',  [$cname, $pname, $current_time, '1', $product_price, 'pending']);

  return Response::json(null);
});
