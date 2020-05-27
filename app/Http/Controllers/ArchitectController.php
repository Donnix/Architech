<?php

namespace App\Http\Controllers;
Use App\Architect;
Use App\User;
use Illuminate\Http\Request;
use DB;
use File;
use Auth;

class ArchitectController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('architect.index');
    }

    public function create(){
    
        return view('architect.create');

    }

    public function store(){
        if($request->ajax()) {

            DB::beginTransaction();

            /* URL */
            $url_success = route('architect.index');
            $url_error   = route('architect.add');

            try {

               
                /* Initalize Data */
                $data                     = new Architect;
                $data->user_id            =$request->user_id;
                $data->name               = $request->name;
                $data->email              = $request->email;
                $data->no_hp              = $request->no_hp;
                $data->short_description  = $request->short_description;
                $data->id_project         = $request->id_project;
                $data->project_min        = $request->project_min;
                $data->project_max        = $request->project_max;
                $data->location_service   = $request->location_service;
                $data->facebook_url       = $request->facebook_url;
                $data->instagram_url      =$request->instagram_url;
                $data->linkedin_url       =$request->linkedin_url;
                $data->twitter_url        =$request->twitter_url;
                /* Upload Image */
                if ($request->hasfile('profile_image'))
                {   

                    $file                  = $request->file('profile_image');
                    $imageFileName         = time()."_  ".$file->getClientOriginalName();
                    $request->file('profile_image')->move('images/upload/profileimage/', $imageFileName);
                    
                    $data->profile_image = $imageFileName;
                }

                /* Save */
                $data->save();
                Db::commit();

               
                $status = array('status' => '1', 'message' => 'Success Add New Data Profile ' . $request->name, 'url' => $url_success);

            } catch(\Exception $e) {
                DB::rollBack();

                $status = array('status' => '0', 'message' => 'Failed To Add New Data Profile ' . $e->getMessage(). ' at line '.$e->getLine(), 'url' => $url_error);
            }

            $data = $status;
            return response()->json($data);
        }
    }

    public function edit($id){
        $data=Architect::findorFail($id);
        return view('architech.edit');
    }

    public function update(Request $request, $id)
    {
        if($request->ajax()) {

            DB::beginTransaction();

            /* URL */
            $url_success = route('architect.index');
            $url_error   = route('architect.edit','');

            try {

                /* Initalize Data */
                $data = Architect::findOrFail($id);

                $data                    = new Architect;
                $data->user_id=$request->user_id;
                $data->name       = $request->name;
                $data->email   = $request->email;
                $data->no_hp   = $request->no_hp;
                $data->short_description   = $request->short_description;
                $data->id_project   = $request->id_project;
                $data->project_min   = $request->project_min;
                $data->project_max   = $request->project_max;
                $data->location_service   = $request->location_service;
                $data->facebook_url   = $request->facebook_url;
                $data->instagram_url =$request->instagram_url;
                $data->linkedin_url=$request->linkedin_url;
                $data->twitter_url=$request->twitter_url;

                /* Upload Image */
                if ($request->hasfile('upload_image_edit'))
                {   
                    /* Delete Existing Image */
                    File::delete('images/upload/profileimage/'.$data->upload_image);

                    $file                  = $request->file('upload_image_edit');
                    $imageFileName         =time()."_". $file->getClientOriginalName();
                    $request->file('upload_image_edit')->move('images/upload/profileimage/', $imageFileName);
                    
                    $data->upload_image = $imageFileName;
                } else {
                    
                    $imageFileName = $data->upload_image;
                }

                

                /* Save */
                $data->save();
                DB::commit();

                $status = array('status' => '1', 'message' => 'Success Update Data Profile    ' . $request->name, 'url' => $url_success);
            } catch(\Exception $e) {
                Db::rollBack();

                $status = array('status' => '0', 'message' => 'Failed To Update Data Profile   ' . $e->getMessage(). ' at line '.$e->getLine(), 'url' => $url_error);
            }

            $data = $status;
            return response()->json($data);
        }
    }
}


