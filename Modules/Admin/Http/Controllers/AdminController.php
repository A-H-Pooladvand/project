<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin::show');
    }
}
