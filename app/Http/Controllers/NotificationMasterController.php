<?php

namespace App\Http\Controllers;

use App\Models\FcmtokenMaster;
use App\Models\ProjectMaster;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Kutia\Larafirebase\Facades\Larafirebase;

class NotificationMasterController extends Controller
{
    public function create()
    {
        return view('notification.create_notification_master')->with([
            'projectMaster' => ProjectMaster::pluck('name', 'id')->toArray()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // dd($request->all());
        try {
            $projectMaster = ProjectMaster::find($request->projectMasterId);

            $response  = Http::withHeaders([
                'Authorization' => 'key=' . $projectMaster->server_key
            ])->post('https://fcm.googleapis.com/fcm/send', [
                'registration_ids' => FcmtokenMaster::pluck('fcm_token')->toArray(),
                'data' => [
                    'title' => $request->title,
                    'body' => $request->body,
                    'icon' => url('/') . '/' . $projectMaster->icon,
                    'click_action' => $request->clickAction,
                ]
            ]);

            return redirectBack(true, 'Notification send successfully');
        } catch (Exception $th) {
            return redirectBack(false, 'Internal server error');
        }
    }
}