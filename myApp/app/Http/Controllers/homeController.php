<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function companyInfo()
    {
        $company = [
            'name' => config('company.name'),
            'email' => config('company.email'),
            'phone' => config('company.phone'),
            'address' => config('company.address'),
        ];

        return response()->json($company);
    }
}
