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
        if(!(isset($request->variant_1))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->answer,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_2))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->answer,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_3))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->answer,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_4))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->answer,
            );
        }

        

        test::create($data);
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
        if(!(isset($request->variant_1))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->answer,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_2))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->answer,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_3))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->answer,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_4))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->answer,
            );
        }   
        $test->update($data);
        return redirect('test')->with('flash_message', 'test Updated!');  
    }
    public function gettests(Request $request) {
        try{
            $data = test::all();
            
            return response()->json([
                'ok' => true,
                'data' => $data
                // 'id' => $data->id,
                // 'curse' => $data->curse,
                // 'lesson' => $data->lesson,
                // 'question' => $data->question,
                // 'answer' => $data->answer,
                // 'variant_1' => $data->variant_1,
                // 'variant_2' => $data->variant_2,
                // 'variant_3' => $data->variant_3,
                // 'variant_4' => $data->variant_4,
                // 'created_at' => $data->created_at,
                // 'updated_at' => $data->updated_at
            ]);

        }catch(\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

 
   
    public function destroy($id)
    {
        test::destroy($id);
        return redirect('test')->with('flash_message', 'test deleted!');  
    }
}
