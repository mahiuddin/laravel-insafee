<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{
    public function UserList()
    {
        return DB::table('users')->get();
    }
}
