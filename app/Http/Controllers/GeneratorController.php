<?php namespace App\Http\Controllers;

// use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    public function index()
    {
        return view('generator/index');
    }

    public function create(Request $request)
    {
        $input = $request->all();
        return view('chef/Vagrantfile')
            ->withVmName($input['vmName'])
            ->withMemory($input['memory'])
            ->withIpAddress($input['ipAddress'])
        ;
    }
}
