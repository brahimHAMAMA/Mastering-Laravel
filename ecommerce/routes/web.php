<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/welcome');
})->name("home");


Route::get('about-us', function () {
    return view("pages/about");
})->name("about");

Route::view('contact-me', "pages/contact", [
    "page_name" => "Contact me Page",
    "page_desc" => "This Is Description"
])->name("contact");

Route::get('category/{id}/{name}', function ($id, $name) {
    //    $id = request("id");
    $cats = [
        1 => "cat 01",
        2 => "cat 02",
        3 => "cat 03",
        4 => "cat 04",
        5 => "cat 05",
    ];
    return view("pages/category", [
        "the_id" => $id,
        "the_name" => $name,
        "the_cats" => $cats[$id] ?? "This Id Is Not Found..."
    ]);
})->name("category");
