<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller{

    protected $data;

    public function __construct(){
        $this->data = [];
    }
}