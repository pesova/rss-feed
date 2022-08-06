<?php

namespace App\Http\Controllers;

use DB;
use Exception;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->json(['status'=>'success', 'message'=>'Success', 'data'=>$tasks], 200);

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
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        
        DB::beginTransaction();
        try{
            $task = Task::create($request->validated());
            $findtask  = Task::find($task->id);

            DB::commit();
            return response()->json(['status'=>'success', 'message'=>'Task created successfully', 'data'=>$findtask], 201);
        }
        catch(Exception $e){
            DB::rollback();
            return response()->json(['status'=>'failed', 'message'=>$e->getMessage(), 'errorCode'=>500], $statusCode);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return response()->json(['status'=>'success', 'message'=>'Task found', 'data'=>$task], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {

        DB::beginTransaction();
        try{
            $updateTAsk  = $task->update($request->validated());
            $findtask = Task::find($task->id);

            DB::commit();
            return response()->json(['status'=>'success', 'message'=>'Task update successfully', 'data'=>$findtask], 202);
        }
        catch(Exception $e){
            DB::rollback();
            return response()->json(['status'=>'failed', 'message'=>$e->getMessage(), 'errorCode'=>500], $statusCode);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
