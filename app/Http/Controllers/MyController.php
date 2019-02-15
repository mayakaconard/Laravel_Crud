<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyModel; //use the MyModel model

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Make a function home
//    public function home(){
//        return view('home');
//    }

    //Make a function about
    public function about(){
       // return view('about');

       $data= MyModel::all();
       return view('about')->with('data',$data);
    }
    public function index()
    {
        return view('home');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request,[
          'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'mobile'=>'required'
        ]);

        $details = new MyModel([
            'first_name' => $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'email_address'=> $request->get('email'),
            'mobile'=> $request->get('mobile')
        ]);
        $details->save();
        return redirect('/')->with('success', 'Stock has been added');
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
        $editdata = MyModel::find($id);

        return view('about', compact('editdata'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = MyModel::find($id);
        $record->delete();

        return redirect('about')->with('success', 'Stock has been deleted Successfully');
    }
}
