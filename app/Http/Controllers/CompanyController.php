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
        //
    }

    public function create()
    {

        return view('form-subscription', ['activities' => Activity::get(['id', 'name'])]);
    }

    public function store(CompanyRequest $request)
    {
        $validator = $request->validated();

        Company::create($validator);
        return view('send-subscribe');
    }
}
