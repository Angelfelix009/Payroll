<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterBankRequest;
use App\Models\Banktbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
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
        $bank = Banktbl::orderby('bankname','asc')->get();
        return view ('bank.index',compact('bank'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterBankRequest $request)
    {
        //
        $data = new Banktbl();
        $data->bankcode = $request->input('bank_code');
        $data->bankname = $request->input('bankname');
        $data->sortcode = $request->input('sort_code');
        $data->user_id = Auth::user()->id;
        $data->save();
        return back()->with('success','Registration of Bank Successfully');
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
        $data= Banktbl::find($id);
        $array=array('data'=>$data);
        return view ('bank.edit')->with($array);
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
            'bankname' => 'required|string|max:255',
            'bank_code' => 'required|string|integer',
            'sort_code' => 'required|integer',
        ]);
        $data = Banktbl::findorfail($id);
        $data->bankcode = $request->input('bank_code');
        $data->sortcode = $request->input('sort_code');
        $data->save();
        return redirect()->route('bank.index')->with('success','Update of Bank Successfully');
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
