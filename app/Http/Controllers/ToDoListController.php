<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ToDoList;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\ToDoListRequest;

// use Illuminate\Http\RedirectResponse;

class ToDoListController extends Controller
{
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
        return view('lists.index');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lists.create');
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
        $validatedData["userID"] = auth()->id(); //TO DO check if this is correct
        $toDoList = ToDoList::create($validatedData);
        
        // if(!$toDoList) {
        //     return response([
        //         'error' => 'Internal server error'
        //     ], 500);
        // }
        // return response([
        //     'toDoList' => $validatedData['title']
        // ], 201);

        return redirect()->route('lists.show', $toDoList->id)->with('message', 'List created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $toDoList = ToDoList::findOrFail($id);
        return view('lists.show', $toDoList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toDoList = ToDoList::findOrFail($id);
        return view('lists.edit')->with('toDoList', $toDoList);
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
        // var_dump($validatedData);
        $toDoList = ToDoList::where('id', $id)
                        ->update($validatedData);
        
        return redirect()->route('lists.show', $id)->with('message', 'List updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ToDoList::destroy($id);

        return redirect()->route('lists.index'); //TODO message
    }
}
