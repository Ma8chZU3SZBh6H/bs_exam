<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->companies()->create($request->all());
        return back();
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return back();
    }
}
