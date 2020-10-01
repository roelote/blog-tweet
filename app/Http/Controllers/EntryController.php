<?php

namespace App\Http\Controllers;
use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
    }


    public function create()
    {
        return view('entries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $datos =  $request->validate([
            'title' =>'required|min:7|max:255|unique:entries',
            'content' =>'required|min:25|max:3000'
        ]);

        $entry = new Entry();

        $entry->title = $datos['title'];
        $entry->content = $datos['content'];
        $entry->user_id = auth()->id();
        $entry->save();

        $status = 'Correcto';

        return back()->with(compact('status'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        return view('entries.edit',compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
       $datos =  $request->validate([
            'title' =>'required|min:7|max:255|unique:entries,id,'.$entry->id,
            'content' =>'required|min:25|max:3000'
        ]);

        $entry->title = $datos['title'];
        $entry->content = $datos['content'];

        $entry->save();

        $status = 'Correcto';

        return back()->with(compact('status'));

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
    }
}
