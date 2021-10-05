<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Point;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class PointController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return QueryBuilder::for(Point::class)
            ->select('point.*')
            ->paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();
        return Point::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $ponto = Point::findOrFail($id);
        return $ponto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $ponto = Point::findOrFail($id);
        $ponto->update($request->all());
        return $ponto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $ponto = Point::findOrFail($id);
        $ponto->delete();
        return $ponto;
    }
}
