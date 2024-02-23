<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XeroFanController extends Controller
{
    public function home()
    {
        return view('project_xero.home');
    }

    public function foragingShow()
    {
        return view('project_xero.foraging.show');
    }

    public function foragingEdit()
    {
        return view('project_xero.foraging.edit');
    }

    public function foragingAdd()
    {
        return view('project_xero.foraging.add');
    }
}
