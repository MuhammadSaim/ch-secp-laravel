<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Cro;
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
        $companies = Company::with('cro')->companiesSearch($request->all())->paginate(10)->appends($request->query());
        $cros = Cro::all();
        $statuses = Company::select('status')->distinct()->get();
        return view('dashboard', compact('companies', 'cros', 'statuses'));
    }

}
