<?php

namespace App\Http\Controllers;

use App\User;
//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Input;

class NumerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verbs ()
    {
        if (Request::isMethod('post'))
        {
            if (Input::has('clean'))
            {
                file_put_contents(resource_path('../storage/data/number.json'), '{}');
                $json = json_decode(file_get_contents(resource_path('../storage/data/number.json')), true);
                return view('numeros.post', ['results' => $json]);
            }
            $json = json_decode(file_get_contents(resource_path('../storage/data/number.json')), true);
            return view('numeros.post', ['results' => $json]);
        }
        if (Request::isMethod('get'))
        {
            $json = json_decode(file_get_contents(resource_path('../storage/data/number.json')), true);
            $rand = rand(1000,9999);
            array_push($json,$rand);
            while (array_search($rand, $json) !== false)
            {
                $rand = rand(1000,9999);
            }
            $result = array('rand' => $rand, 'count' => count($json));
            $json = json_encode($json);
            file_put_contents(resource_path('../storage/data/number.json'), $json);
            return view('numeros.get', ['results' => $result]);
        }

    }
}
