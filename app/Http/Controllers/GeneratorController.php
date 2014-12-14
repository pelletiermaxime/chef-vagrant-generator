<?php namespace App\Http\Controllers;

// use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Models;
use App\Http\Requests\GeneratorRequest;

class GeneratorController extends Controller
{
    public function index()
    {
        return view('generator/index')
            ->withGeneral(new Models\General)
        ;
    }

    public function store(GeneratorRequest $request)
    {
        $input = $request->all();
        return view('chef/Vagrantfile')
            ->withInput($input)
        ;
    }
}
