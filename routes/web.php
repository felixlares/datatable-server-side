<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

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
Route::get('/products', function (Request $request)
{
    $productsDB = DB::table('products')
    ->leftJoin('product_warehouse_sections', 'products.product_warehouse_section_id', '=', 'product_warehouse_sections.id')
      ->leftJoin('product_manufacturers', 'products.product_manufacturer_id', '=', 'product_manufacturers.id')
      ->leftJoin('product_categories', 'products.product_categorie_id', '=', 'product_categories.id')
      ->where('products.deleted_at', NULL)
      ->get([
        'products.id',
        'products.part_number',
        'products.name',
        'product_warehouse_sections.name AS warehouse_section',
        'product_manufacturers.name AS manufacturer',
        'product_categories.name AS category',
        'products.descontinued_flag',
        'products.clearance_flag',
        'products.qty_purchased',
        'products.qty_booked_in',
        'products.qty_due_from_pos',
        'products.qty_booked_out',
        'products.qty_allocated_to_sos',
        'products.qty_in_stock',
        'products.qty_available',
        'products.qty_available_alert_below',
        'products.cost_min',
        'products.cost_max',
        'products.cost_last',
        'products.cost_average',
        'products.price_min',
        'products.price_max',
        'products.price_last',
        'products.price_average',
        'products.id AS in_alert',
        'products.id AS product_value',
      ]);

      $products = $productsDB->map(function ($item) {
        $item->in_alert = $item->qty_in_stock < $item->qty_available_alert_below ? 1 : 0;
        $item->in_stock = $item->qty_in_stock > 0 ? 1 : 0;
        $item->product_value = $item->qty_in_stock * $item->cost_average;
        $item->qty_purchased = number_format($item->qty_purchased);
        $item->qty_booked_in = number_format($item->qty_booked_in);
        $item->qty_due_from_pos = number_format($item->qty_due_from_pos);
        $item->qty_booked_out = number_format($item->qty_booked_out);
        $item->qty_allocated_to_sos = number_format($item->qty_allocated_to_sos);
        $item->qty_in_stock = number_format($item->qty_in_stock);
        $item->qty_available = number_format($item->qty_available);
        $item->qty_available_alert_below = number_format($item->qty_available_alert_below);
        $item->cost_min = $item->cost_min;
        $item->cost_max = $item->cost_max;
        $item->cost_last = $item->cost_last;
        $item->cost_average = $item->cost_average;
        $item->price_min = $item->price_min;
        $item->price_max = $item->price_max;
        $item->price_last = $item->price_last;
        $item->price_average = $item->price_average;
        return $item;
      });
    Log::alert(["Hola" => $request->all()]);
    return DataTables::of($products)->make(true);
}
)->name('products');
