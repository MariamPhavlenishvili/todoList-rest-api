<?php

namespace App\Http\Controllers;

use App\Models\todoLists;
use Illuminate\Http\Request;

class listsController extends Controller
{
    public function createLists(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'max_record_in_list' => 'required'
        ]);

        $lists = new todoLists;
        $lists->name = $request->post('name');
        $lists->max_record_in_list = $request->post('max_record_in_list');
        $lists->save();

        return todoLists::select('id','name', 'max_record_in_list')->get();
    }

    public function updateList(Request $request, $id)
    {
        $list = todoLists::findOrFail($id);
        $list->update($request->all());

        return todoLists::select('id','name', 'max_record_in_list')->where('id',$id)->get();
    }

    public function deleteList($id)
    {
        $list = todoLists::findOrFail($id);
        $list->delete();

        return response()->json([
            'message'=>"todo list deleted successfully"]);
    }

    public function getAllLists()
    {
        return todoLists::all();
    }

    public function getList($id)
    {
        return todoLists::findOrFail($id);
    }
}
