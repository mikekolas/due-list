<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ToDoList;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\ToDoListRequest;

class ToDoListController extends Controller
{
    // public function index()
    // {
    //     $toDoLists = DB::table('to_do_lists')
    //         ->select('title')
    //         ->get();
    //     dd($toDoLists);
    // }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $toDoLists = ToDoList::all();
        // // dd($toDoLists);
        // if (!$toDoLists) {
        //     return response([
        //         'error' => 'lists not found'
        //     ], 404);
        // }
        
        // return response([
        //     'data' => $toDoLists
        // ], 200);
        return view('lists');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ToDoListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToDoListRequest $request)
    {
        //validate user's input inside Form Request Class
        $validatedData = $request->validated();
        var_dump($validatedData);

        $toDoList = ToDoList::create($validatedData);

        if(!$toDoList) {
            return response([
                'error' => 'Internal server error'
            ], 500);
        }
        return response([
            'toDoList' => $validatedData['title']
        ], 201);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ToDoListRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToDoListRequest $request, $id)
    {
        //validate user's input inside Form Request Class
        $validatedData = $request->validated();
        
        return response([
            'toDoList' => $toDoLists
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
