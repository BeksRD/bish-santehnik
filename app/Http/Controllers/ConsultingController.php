<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendNotification;

class ConsultingController extends Controller
{
    public function saveAndSend(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
        ]);
        $name =  $request->post('name');
        $mobile = $request->post('mobile');
        $application = Application::where('name', $name)
                                    ->where('mobile', $mobile)
                                    ->first();
        if (!$application){
            $newApplication = Application::create([
                'name'=>$name,
                'mobile'=>$mobile,
            ]);
            Notification::send($newApplication,$telegram = new SendNotification([$name,$mobile]));
            return response($newApplication, 200);
        }else{
            return  response('AlreadyExist', 409);
        }
    }

}
