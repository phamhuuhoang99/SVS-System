<?php

namespace App\Http\Controllers\Server;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class ContactController extends BaseController
{
    public function SaveContact(Request $request)
    {
        try {
            $result = DB::table('contacts')->insert([
                'fullname' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
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

    public function GetTotalNumber()
    {
        try {
            $result = DB::table('contacts')->count();
            if ($result)
                return response()->json(['data' => $result, 'message' => 'Thành công']);
            else
                return response()->json(['data' => 0, 'message' => 'Không có kết quả']);
        } catch (QueryException $ex) {
            return response()->json(['data' => null, 'message' => $ex->getMessage()]);
        };
    }

    public function GetContactListForTable()
    {
        try {
            $result = DB::table('contacts')
                ->select('fullName', 'phone', 'email', 'message', 'created_at')
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
}
