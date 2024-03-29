<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Jobs\SendEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function register(Request $request)
    {
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'lesson' => $request->lesson,
            'class' => $request->class,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('students')->insert($data);

        return "Successfully";
    }
}
