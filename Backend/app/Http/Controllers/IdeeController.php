<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\idee;

class IdeeController extends Controller
{
    public function index()
    {
        return idee::All();
    }
}
