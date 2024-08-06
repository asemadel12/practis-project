<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;

class UploadItemsController extends Controller
{
    function index()
    {
        return view('upload-items');
    }
    function addNewStock(Request $request)
    {
        $rules = [
            'stock-id' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'description' => 'required'
        ];
        $messages = [
            'stock-id.required' => 'اسم الصنف لا يمكن ان يكون فارغ',
            'stock-id.regex' => 'اسم الصنف يجب ان يتكون من احرف و ارقام فقط',
            'description.required' => 'وصف الصنف لا يمكن ان يكون فارغ'
        ];

        try {
            $validation = $request->validate($rules, $messages);
            
            $stock = new Stock();
            $stock->stock_id = $request->input('stock-id');
            $stock->description = $request->input('description');
            $stock->save();

            return redirect()->back()->with('success', 'تمت إضافة الصنف بنجاح');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput(); // with input --> old valeus, with errors --> errors messages
        }
    }
}
