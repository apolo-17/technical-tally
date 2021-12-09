<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Activity;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('dashboard', ['companies' => Company::all()->load('activity')]);
    }

    public function create()
    {

        return view('form-subscription', ['activities' => Activity::get(['id', 'name'])]);
    }

    public function store(CompanyRequest $request)
    {
        Company::create($request->all());
        return view('send-subscribe');
    }
}
