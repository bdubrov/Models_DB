<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Option;
use App\Type;
use Illuminate\Http\Request;
use App\Pages;
use App\UsersRegistration;


class ShopController extends Controller {
    public function getPagesType($page, $lib, $shop_type = 0) {
        $s = new Pages($page, $lib);
        return view('index', ['obj' => $s, 'types' => Type::all(), 'shop_type' => $shop_type]);
    }
    public function getPagesOption($page, $lib, $shop_option = 0) {
        $s = new Pages($page, $lib);
        return view('index', ['obj' => $s, 'options' => Option::all(), 'shop_option' => $shop_option]);
    }
}
