<?php

namespace App\Http\Controllers\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterBranchRequest;
use App\Models\Branchtbl;
use App\Models\Statetbl;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class BranchController extends Controller
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
        $data = Branchtbl::orderby('branch_name','asc')->paginate(10);
        return view('branch.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = Statetbl::orderby('state_name','asc')->get();
        $array = array('state'=>$state);
        return view('branch.create')->with($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterBranchRequest $request)
    {
        //
        $data = new Branchtbl();
        $data->branch_code=$request->input('branch_code');
        $data->branch_name=$request->input('branch_name');
        $data->branch_div=$request->input('branch_div');
        $data->branch_state=$request->input('branch_state');
        $data->save();
        return back()->with('success','Registration of Branch Successful');
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
        $data = Branchtbl::findorfail($id);
        $state = Statetbl::orderby('state_name','asc')->get();
        $array = array('state'=>$state,'data'=>$data);
        return view('branch.edit')->with($array);
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
            'branch_code' => 'required|string|integer',
            'branch_div' => 'required|string|max:255',
            'branch_state' => 'required|string|max:255',
        ]);
        $data = Branchtbl::findorfail($id);
        $data->branch_code=$request->input('branch_code');
        $data->branch_div=$request->input('branch_div');
        $data->branch_state=$request->input('branch_state');
        $data->save();
        return redirect()->route('branch.index')->with('success','Update Successful');
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
