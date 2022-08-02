<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class ListController extends Controller
{
    function index()
    {
        $listResults  = ListModel::all();

        if (sizeof($listResults) == 0) {
            return 'No hay datos registrados';
        }else{
            return $listResults;
        }

    }

    function save(Request $request)
    {

        ListModel::create([
            'name' => $request->name,
            'status' => '1'
        ]);

        
    }
}
