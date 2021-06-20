<?php

namespace App\Http\Controllers;

use App\Models\list_todo;
use Illuminate\Http\Request;

class ListTodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master')->with('todo_array', list_todo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input('name');

        $todo = new list_todo();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\list_todo  $list_todo
     * @return \Illuminate\Http\Response
     */
    public function show(list_todo $list_todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\list_todo  $list_todo
     * @return \Illuminate\Http\Response
     */
    public function edit(list_todo $list_todo, $id)
    {
        $todo = list_todo::find($id);
        return view('edit_list')->with('todo_array', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\list_todo  $list_todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, list_todo $list_todo, $id)
    {
        $todo = list_todo::find($id);
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\list_todo  $list_todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(list_todo $list_todo, $id)
    {
        $row = list_todo::destroy($id);
        return redirect('/');
    }
}
