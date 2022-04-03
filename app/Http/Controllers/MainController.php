<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function pricelist()
    {
        $priceThera = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Терапия')->get();
        $priceChild = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Детская стоматология')->get();
        $priceSurg = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Хирургия')->get();
        $priceOrthoP = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Ортопедия')->get();
        $priceOrtho = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Ортодонтия')->get();
        $priceImplant = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Имплантология')->get();
        $pricePhiz = Price::query()->select('service_name', 'price', 'comment')->where('price_category', '=', 'Физио-лечение')->get();
        return view('price', compact('priceThera', 'priceChild', 'priceSurg', 'priceOrthoP', 'priceOrtho', 'priceImplant', 'pricePhiz'));
    }
}
