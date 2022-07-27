<?php

namespace App\Http\Controllers;
use App\Models\Dps;
use App\Models\CoveredMunicipality;
use App\Models\Municipality;
use App\Http\Requests\DpsRequest;
use Illuminate\Http\Request;

class DspController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dsp = Dps::with('cover_municipality')->where('status', 'ongoing')->get();
        $dsp->map(function($item_project){  
            $covered_project = $item_project->cover_municipality;
            $covered_project->map(function($list){
                $municipality_data = Municipality::findorfail($list->municipality_id);
                $list->municipality = $municipality_data->municipality;
            });
        });

        $municipalities = Municipality::get();

        return view('admin.dsp.ongoing-dsp', compact('municipalities','dsp'));
    }

    public function viewArchive()
    {
        $dsp = Dps::with('cover_municipality')->where('status', 'archive')->get();
        $dsp->map(function($item_project){  
            $covered_project = $item_project->cover_municipality;
            $covered_project->map(function($list){
                $municipality_data = Municipality::findorfail($list->municipality_id);
                $list->municipality = $municipality_data->municipality;
            });
        });

        $municipalities = Municipality::get();

        return view('admin.dsp.archive-dsp', compact('municipalities','dsp'));
    }

    public function viewComplete()
    {
        $dsp = Dps::with('cover_municipality')->where('status', 'completed')->get();
        $dsp->map(function($item_project){  
            $covered_project = $item_project->cover_municipality;
            $covered_project->map(function($list){
                $municipality_data = Municipality::findorfail($list->municipality_id);
                $list->municipality = $municipality_data->municipality;
            });
        });

        $municipalities = Municipality::get();

        return view('admin.dsp.complete-dsp', compact('municipalities','dsp'));
    }
 
    public function create( DpsRequest $request )
    {
        $validated = $request->validated();

        $_valdsp = Dps::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        if(count($validated['municipality_id']) > 0){
            foreach($validated['municipality_id'] as $data ){
                $_valrldspmunic = CoveredMunicipality::create([
                    'dps_id' => $_valdsp->id,
                    'municipality_id' => $data
                ]);
            }
        }
       
        return redirect()->back()->with('message', 'Successfull Added!');
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
        $dsp = Dps::findOrFail($id);

        $municipalities = Municipality::get();
        return view('admin.dsp.edit-ongoing-dsp', compact('municipalities','dsp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( DpsRequest $request, $id)
    {
        $validated = $request->validated();
        $_valdsp = Dps::findOrFail($id);
        $_valdsp->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);
        
        CoveredMunicipality::where('dps_id', $_valdsp->id)->delete();
        
        if(count($validated['municipality_id']) > 0){
            foreach($validated['municipality_id'] as $data ){
                $_valrldspmunic = CoveredMunicipality::create([
                    'dps_id' => $_valdsp->id,
                    'municipality_id' => $data
                ]);
            }
        }
       
        return redirect()->route('dsp.view')->with('message', 'Successfull Updated!');
    }

    public function updateStatus($id,$status)
    {
        $_valdsp = Dps::findOrFail($id);
        $_valdsp->status = $status;
        $_valdsp->update();

        return redirect()->route('dsp.view')->with('message', 'Status Updated!');
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
