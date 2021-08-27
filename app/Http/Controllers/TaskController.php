<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\TaskUpdateRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\TaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        //validate user's input inside Task Request class
        $validatedData = $request->validated();
        $validatedData["status"] = 0; // TO DO default value 0 -- edit table tasks.
        $task = Task::create($validatedData);

        return redirect()->route('lists.show', $validatedData["listID"])->with('message', 'Task created successfully!');
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
        $task = Task::findOrFail($id);
        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\TaskUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskUpdateRequest $request, $id)
    {
        //validate user's input inside Task Request class
        $validatedData = $request->validated();
        $task = Task::where('id', $id)
                    ->update($validatedData);

        return redirect()->route('lists.show', $this->findListID($id))->with('message', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listID = $this->findListID($id);
        Task::destroy($id);
        return redirect()->route('lists.show',  $listID)->with('message', 'Task deleted successfully!'); //TODO message
    }

    /**
     * Find the list ID in which the task belongs to
     * 
     * @param int $id
     * @return int listID 
     */
    private function findListID($id)
    {
        return (Task::findOrFail($id))->listID;
    }
}
