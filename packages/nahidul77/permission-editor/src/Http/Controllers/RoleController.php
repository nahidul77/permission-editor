<?php

namespace Nahidul77\PermissionEditor\Http\Controllers;

use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('permission::permissions.index');
    }
}
