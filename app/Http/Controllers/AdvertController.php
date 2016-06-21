<?php
/**
 * Created by PhpStorm.
 * User: dape
 * Date: 21/06/16
 * Time: 08:58
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Lumen\Routing\ProvidesConvenienceMethods;


use App\Models\Advert;

class AdvertController
{
    use ProvidesConvenienceMethods;

    public function index()
    {

        $categoryList = \App\Models\Category::all();
        $adverts = Advert::where('expire_date','<',time());


        return view('main.index')->with('categoryList', $categoryList);
    }

    public function listByCategory($id)
    {
        $advertList = Advert::where('category_id', $id)->get();
        return view('main.list')->with('list', $advertList);

    }

    public function get($id)
    {
        $advert = Advert::find($id);
        return view('main.show')->with('advert', $advert);

    }

    public function postForm()
    {
        return view('main.form');
    }


    public function post(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'sometimes|string'
        ]);



        return;
    }


}