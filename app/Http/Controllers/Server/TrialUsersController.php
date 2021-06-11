<?php

namespace App\Http\Controllers\Server;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Contracts\Encryption\DecryptException;

use Crypt;

class TrialUsersController extends BaseController
{
    public function LoginConfirm(Request $request)
    {
        try {
            $user = DB::table('trial_users')->where('email', $request->email)->first();
            if ($user) {
                $result = password_verify($request->password, $user->password);
                if ($result == true)
                    return response()->json(['success' => true, 'message' => 'Thành công']);
                else
                    return response()->json(['success' => false, 'message' => 'Sai mật khẩu']);
            } else
                return response()->json(['success' => false, 'message' => 'Không tìm thấy người dùng']);
        } catch (QueryException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function RegisterTrialUsers(Request $request)
    {
        try {
            $result = DB::table('trial_users')->insert([
                'email' => $request->email,
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
                'phone' => $request->phone,
                'created_at' => date('Y-m-d H:i:s')
            ]);
            if ($result)
                return response()->json(['success' => true, 'message' => 'Thành công']);
            else
                return response()->json(['success' => false, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function CheckEmailExisted(Request $request)
    {
        try {
            $result = DB::table('trial_users')->where('email', $request->email)->first();
            if ($result)
                return response()->json(['success' => true, 'message' => 'Thành công']);
            else
                return response()->json(['success' => false, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function CheckPhoneExisted(Request $request)
    {
        try {
            $result = DB::table('trial_users')->where('phone', $request->phone)->first();
            if ($result)
                return response()->json(['success' => true, 'message' => 'Thành công']);
            else
                return response()->json(['success' => false, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function GetTotalNumber()
    {
        try {
            $result = DB::table('trial_users')->count();
            if ($result)
                return response()->json(['data' => $result, 'message' => 'Thành công']);
            else
                return response()->json(['data' => 0, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['data' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function GetTrialUserListForTable()
    {
        try {
            $result = DB::table('trial_users')
                ->select('email', 'phone', 'created_at')
                ->orderBy('created_at', 'desc')
                ->get();
            if ($result)
                return response()->json(['data' => $result, 'message' => 'Thành công']);
            else
                return response()->json(['data' => null, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['data' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function ResetPasswordForOneTrialUser(Request $request)
    {
        try {
            $decryptedToken = Crypt::decrypt($request->token);
            $data = explode("|", $decryptedToken);
            $expiration = $data[0];
            $email = $data[1];

            if (intval($expiration) < time())
                return response()->json(['success' => false, 'message' => 'Quá thời gian hiệu lực']);
        } catch (DecryptException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        }

        try {
            $result = DB::table('trial_users')->where('email', $email)
                ->update(['password' => password_hash($request->password, PASSWORD_DEFAULT)]);
            if ($result)
                return response()->json(['success' => true, 'message' => 'Thành công']);
            else
                return response()->json(['success' => false, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['success' => null, 'message' => $ex->getMessage()]);
        };
    }
}
