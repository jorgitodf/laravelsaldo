<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        $balance = auth()->user()->balance;
        $amaout = $balance ? $balance->amout : 0;
        return view('admin.balance.index', compact('amaout'));
    }

    public function deposito()
    {
        return view('admin.balance.deposito');
    }

    public function depositoStore(Request $request, Balance $balance)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        dd($balance->deposito($request->value));
    }
}
