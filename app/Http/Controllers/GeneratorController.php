<?php namespace App\Http\Controllers;

// use Illuminate\Routing\Controller;
// use App\Http\Requests\GenerateRequest;

class GeneratorController extends Controller
{
    public function index()
    {
        return view('generator/index');
    }

    public function create(GenerateRequest $request)
    {
        $input = $request->all();
        return view('chef/Vagrantfile')
            ->withVmName($input['vmName'])
            ->withMemory($input['memory'])
            ->withIpAddress($input['ipAddress'])
        ;
    }
}
