<?php

namespace App\Http\Controllers\Pension;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterPFARequest;
use App\Models\Pensiontbl;
use Illuminate\Http\Request;

class PensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $data = Pensiontbl::orderby('pfaname','asc')->paginate(10);
        return view('pension.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pension.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterPFARequest $request)
    {
        //
        $data = new Pensiontbl();
        $data->pencode = $request->input('pencode');
        $data->pfaname = $request->input('pfaname');
        $data->pfacontact = $request->input('pfacontact');
        $data->contact_phone = $request->input('contact_phone');
        $data->save();
        return back()->with('success','Registration of PFA Successful');
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
        $data = Pensiontbl::findorfail($id);
        return view('pension.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request,[
            'pencode' => 'required|string|integer',
            'pfacontact' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:255',
        ]);
        $data = Pensiontbl::findorfail($id);
        $data->pencode = $request->input('pencode');
        $data->pfacontact = $request->input('pfacontact');
        $data->contact_phone = $request->input('contact_phone');
        $data->save();
        return redirect()->route('pension.index')->with('success','Update Successful');
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
