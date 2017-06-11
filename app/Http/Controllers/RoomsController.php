<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Status;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $status = Status::all()->pluck('name','id')->toArray();
        $search = \Request::get('room_no'); //get url parameter
        $status_id = \Request::get('status_id');
        $price_per_day = \Request::get('price_per_day');

        if(!empty($search)){
            $rooms = Room::with(['status'])
                          ->where('room_no', 'like', '%'.$search.'%')
                          ->get();
        }
        if(!empty($status_id)){
            $rooms = Room::with(['status'])
                          ->where('status_id', '=', $status_id)
                          ->get();
        }
        if(!empty($price_per_day)){
            $rooms = Room::with(['status'])
                          ->where('price_per_day', '=', $price_per_day)
                          ->get();
        }
        return view('Rooms.index', compact('rooms','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all()->pluck('name','id')->toArray();
        return view('Rooms.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Room::create($request->all());
      return redirect()->action('RoomsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = Room::findorfail($id);
      $status = Status::all()->pluck('name','id');
      return view('Rooms.edit', compact('edit', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Room::findorfail($id)->update($request->all());
      return redirect()->action('RoomsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Room::findorfail($id)->delete();
      return redirect()->action('RoomsController@index');
    }
}
