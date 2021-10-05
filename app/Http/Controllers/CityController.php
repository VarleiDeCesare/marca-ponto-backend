<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use Spatie\QueryBuilder\QueryBuilder;

class CityController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return QueryBuilder::for(City::class)
                    ->select('cities.*')
                    ->paginate(15);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return City::findOrFail($id);
    }
}
