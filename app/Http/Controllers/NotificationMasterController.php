<?php

namespace App\Http\Controllers;

use App\Models\ProjectMaster;
use Illuminate\Http\Request;

class NotificationMasterController extends Controller
{
    public function create()
    {
        return view('notification.create_notification_master')->with([
            'projectMaster' => ProjectMaster::all()->pluck('name', 'id')
        ]);
    }
}
