<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Html;

class GeneratorController extends Controller
{
    public function index()
    {
        return view('generator/index');
    }

    public function create()
    {
        $input = Input::all();
        return view('chef/Vagrantfile')
            ->withVmName($input['vmName'])
            ->withMemory($input['memory'])
            ->withIpAddress($input['ipAddress'])
        ;
    }
}
