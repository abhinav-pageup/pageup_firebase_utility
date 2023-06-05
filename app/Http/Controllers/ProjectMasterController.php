<?php

namespace App\Http\Controllers;

use App\Models\ProjectMaster;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectMasterController extends Controller
{
    public function index()
    {
        return view('projects.view_projects');
    }

    public function create()
    {
        return view('projects.create_project');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $projectMaster = new ProjectMaster();
            $projectMaster->name = $request->name;
            $file = $request->file('icon');
            $fileName   = time() . $file->getClientOriginalName();
            $projectMaster->icon = Storage::put('images/' . $fileName, File::get($file));
            $projectMaster->server_key = $request->server_key;
            $projectMaster->firebase_url = $request->firebase_url;
            $projectMaster->created_at = date('Y-m-d H:i:s');
            $projectMaster->created_by = auth()->id();
            $projectMaster->save();

            DB::commit();
            return redirectRoute(true, 'Project has been created successfully', 'projects.index');
        } catch (Exception $th) {
            DB::rollBack();
            return redirectRoute(false, 'Internal server error', 'projects.create');
        }
    }
}
