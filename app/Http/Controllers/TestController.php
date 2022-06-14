<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tests as test;
class TestController extends Controller
{
    public function index()
    {
        $tests = test::all();
        return view ('tests.index')->with('tests', $tests);
    }
 
    
    public function create()
    {
        return view('tests.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        test::create($input);
        return redirect('test')->with('flash_message', 'test Addedd!');  
    }
 
    
    public function show($id)
    {
        $test = test::find($id);
        return view('tests.show')->with('tests', $test);
    }
 
    
    public function edit($id)
    {
        $test = test::find($id);
        return view('tests.edit')->with('tests', $test);
    }
 
  
    public function update(Request $request, $id)
    {
        $test = test::find($id);
        $input = $request->all();
        $test->update($input);
        return redirect('test')->with('flash_message', 'test Updated!');  
    }
 
   
    public function destroy($id)
    {
        test::destroy($id);
        return redirect('test')->with('flash_message', 'test deleted!');  
    }
}
