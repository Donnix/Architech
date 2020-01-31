<?php
         
namespace App\Http\Controllers;
          
use App\Service;
use Illuminate\Http\Request;
use DataTables;
        
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
   
        if ($request->ajax()) {
            $data = Service::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editService">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteService">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('serviceAjax');
    }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service::updateOrCreate(['id' => $request->service_id],
                ['nama' => $request->nama,'biaya' => $request->biaya,'id_arsitek' => $request->id_arsitek,'id_projekmanager' => $request->id_projekmanager, 'detail' => $request->detail]);        
   
        return response()->json(['success'=>'Service saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return response()->json($service);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
     
        return response()->json(['success'=>'Service deleted successfully.']);
    }
}