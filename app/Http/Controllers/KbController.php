<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kb_main;
use App\questions;


class KbController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kb = kb_main::all();

        return view('kb.index', compact('kb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'story_title'=> 'required',
            'story'=>'required'
            //'share_price'=> 'required|integer',
            //'share_qty' => 'required|integer'
          ]);
          $kb_mains = new kb_main([
            'title' => $request->get('story_title'),
            'para' => $request->get('story')
            //'share_price'=> $request->get('share_price'),
            //'share_qty'=> $request->get('share_qty')
          ]);
          $kb_mains->save();
          return redirect('/kb/create')->with('success', 'Story has been added');
    }

    public function add_ques(Request $request, $id)
    {
        //
        $request->validate([
            //'story_title'=> 'required',
            'question'=>'required'
            //'share_price'=> 'required|integer',
            //'share_qty' => 'required|integer'
          ]);
          $kb_mains = new questions([
           'question' => $request->get('question'),
           //'question' => 'test',
            'para_id' => $id
            //'share_price'=> $request->get('share_price'),
            //'share_qty'=> $request->get('share_qty')
          ]);
          $kb_mains->save();

          //return redirect()->back()->with('Success', 'Question has been added');
          return redirect()->route('kb.show', ['id' => $id])->with('Success', 'Question has been added');
          //$kb = kb_main::findOrFail($id);
          //return view('kb.show', compact($id))->with('Success', 'Question has been added');
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
        $kb = kb_main::findOrFail($id);
        return view('kb.show', compact('kb'));
        //return $id;
    }
    
   /*public function show($request, $id)
    {
        //
        if($request->isMethod('GET'))
        {
                //$kb = kb_main::findOrFail($request->get('id'));
                $kb = kb_main::findOrFail($id);
                return view('kb.show', compact('kb'));
        //return $id;
        }
        if($request->isMethod('POST'))
        {
            $request->validate([
                //'story_title'=> 'required',
                'question'=>'required'
                //'share_price'=> 'required|integer',
                //'share_qty' => 'required|integer'
              ]);
              $kb_mains = new questions([
                'question' => $request->get('question'),
                'para_id' => $request->get('id')
                //'share_price'=> $request->get('share_price'),
                //'share_qty'=> $request->get('share_qty')
              ]);
              $kb_mains->save();
              return redirect('/kb')->with('Success', 'Question has been added');
           //  return view('kb.show', compact('kb'));

        }
    }
*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kb = kb_main::find($id);

        return view('kb.edit', compact('kb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'story_title'=>'required',
            'story'=>'required'
          //  'share_price'=> 'required|integer',
           // 'share_qty' => 'required|integer'
          ]);$request->validate([
            'story_title'=>'required', 
            'story'=>'required'
          //  'share_price'=> 'required|integer',
           // 'share_qty' => 'required|integer'
          ]);
    
          $kb = kb_main::find($id);
          $kb->title = $request->get('story_title');
          $kb->para = $request->get('story');
          $kb->created_at= $request->get('created_at');
          $kb->updated_at = $request->get('updated_at');
          $kb->save();
    
          return redirect('/kb')->with('success', 'Story has been updated');
    
         
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
        $kb = kb_main::find($id);
        $kb->delete();
   
        return redirect('/kb')->with('success', 'Stock has been deleted Successfully');
    }

}
