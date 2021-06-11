<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Exception as RootException;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\EncryptException;

use Mail;
use Crypt;

class MailController extends Controller
{
    public function sendingEmail(Request $request)
    {
        try {
            Mail::send($request->template, $request->contents, function ($message) use ($request) {
                $message->from(env("MAIL_USERNAME"));
                $message->to($request->toEmail)->subject($request->subject);
            });
            return response()->json(['success' => true, 'message' => 'Email đã được gửi thành công']);
        } catch (RootException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function sendingEmailWithToken(Request $request)
    {
        try {
            $email = $request->toEmail;
            $expiration = time() + 10 * 60; // 10 minutes
            $data = $expiration . '|' . $email;
            $token =  Crypt::encrypt($data);
        } catch (EncryptException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };

        try {
            $contents = array('token' => $token);
            Mail::send($request->template, $contents, function ($message) use ($request) {
                $message->from(env("MAIL_USERNAME"));
                $message->to($request->toEmail)->subject($request->subject);
            });
            return response()->json(['success' => true, 'message' => 'Email đã được gửi thành công']);
        } catch (RootException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }
}
