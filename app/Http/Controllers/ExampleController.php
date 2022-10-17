<?php

namespace App\Http\Controllers;

use ApiController;
use Illuminate\Http\Request;

include "ApiController.php";

class ExampleController extends Controller
{
    //
    
    public function index(){
        $api = new ApiController();

        // $profile = $api->profile();
        // print("<pre>".print_r($profile, true));
        // print('<br /><br />');
        // print("<pre>".print_r($profile->data, true));
        // print("<pre>".print_r($profile->data->username, true));    

        $service = $api->services();
        // print("<pre>".print_r($service->data[0], true));
        $data_servise = $service->data;

        return view('example', [
            'data_servise' => $data_servise
        ]);
    }
}
