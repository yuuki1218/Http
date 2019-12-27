<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    
use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
        
    }
    public function edit()
    {
        return view('admin.profile.edit');
        
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
