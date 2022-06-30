<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{

    /**
     * dashboard view and get filter out the data
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $companies = Company::with('cro')->paginate(10);
        return view('dashboard', compact('companies'));
    }

}
