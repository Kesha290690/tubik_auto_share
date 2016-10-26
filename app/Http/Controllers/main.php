<?php
/**
 * Created by PhpStorm.
 * User: sparo
 * Date: 26.10.2016
 * Time: 23:15
 */

namespace App\Http\Controllers;


class main extends Controller
{
    public function test(){

        $data = array(
            'name' => 'Sahs',
            'type' => 'name'
        );

        return $data;
    }
}