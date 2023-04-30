<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //get count using query
        $customerCount = DB::select('SELECT COUNT(*) AS count FROM customers')[0]->count;

        //all customers
        $customers = Customer::all();

        //if user send 'json' in body, return json response, if not return view.
        if ($request->json){
            return response()->json($customers);
        }else{
            return view('dashboard', ['customers' => $customers, 'count'=>$customerCount]);
        }

    }

}
