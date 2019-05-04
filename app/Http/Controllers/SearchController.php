<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;


class SearchController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $companies = Company::search($request->keywords)->get();

        $companies->map(function ($item) {
            $item->lighter = $item->highlight->name[0] ?? null;
        });

        return response()->json([
            'data' => $companies
        ]);
    }

}
