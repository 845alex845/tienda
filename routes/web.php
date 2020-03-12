<?php
use App\Product;
use App\Category;
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
   /* $prod= new Product();
$prod->nombre="Producto 4";
$prod->slug="Producto 4";
$prod->category_id=1;
$prod->descripcion_corta="Producto";
$prod->descripcion_larga="Producto";
$prod->especificaciones="Producto";
$prod->datos_de_interes="Producto";
$prod->estado="Nuevo";
$prod->activo="Si";
$prod->sliderprincipal="No";
$prod->save();
return $prod;*/
    //return view('welcome');
    /*$prod = Product::find(10)->category;
    return $prod;*/
  /*  $cat=Category::find(1);
    return $cat;*/
    return view('tienda.index');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin',function(){
  return view('admin.category.create');
});

Route::resource('admin/category','Admin\AdminController')->names('admin.category');
// Route::resource('admin/category','Admin\AdminController');