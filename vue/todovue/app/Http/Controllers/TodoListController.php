<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TodoList::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = new TodoList;
        $result->content = $request->TodoList["content"];
        $result->save();

        return $result;

        // {
        //     "TodoList":{
        //         "content":"내용입니다",
        //         "completed":true,
        //     }
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function show(TodoList $todoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $result = TodoList::find($id);

        if ($result) {
            $result-> completed = $request->TodoList['completed']?true:false;
            $result->completed_at = $request->TodoList['completed']?Carbon::now():null;
            $result->save();
            return $result;
        }

        return 'No Data.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = TodoList::find($id);

        if ($result) {
            $result->delete();
            return 'successfully deleted';
        }
        return 'No Data.';
    }
}
