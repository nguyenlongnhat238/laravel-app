<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $title = "This is title product page";
        $name = "This is name product page";
        $products = [
            ["name" => "Iphone 12", "price" => 1000],
            ["name" => "Iphone 11", "price" => 900],
            ["name" => "Iphone 10", "price" => 800],
            ["name" => "Iphone 9", "price" => 700],
            ["name" => "Iphone 8", "price" => 600],
            ["name" => "Iphone 7", "price" => 500],
        ];
        # return view with variables title and name
        return view("products.index", compact("title", "name", "products"));
        # return a view with variable title
        # return view("products.index")->with("title",$title);
        # return a array with variable title: asociative array
        # return view("products.index",["title"=>$title]);
    }
    public function detail($productName)
    {
        $title = "This is title product detail page";
        $name = "this is name product detail page";
        $products = [
            ["name" => "Iphone 12", "price" => 1000],
            ["name" => "Iphone 11", "price" => 900],
            ["name" => "Iphone 10", "price" => 800],
            ["name" => "Iphone 9", "price" => 700],
            ["name" => "Iphone 8", "price" => 600],
            ["name" => "Iphone 7", "price" => 500],
        ];
        $product = [];
        foreach ($products as $p)
            if ($p["name"] == $productName) {
                $product = $p;
                break;
            }
        if (empty($product)) {
            abort(404);
        }
        return view("products.detail", compact("title", "name", "product", "products"));
    }
    public function about()
    {
        return view("products.about");
    }
}
