<?php

class GeneratorController extends BaseController
{
    public function index()
    {
        return View::make('generator/index');
    }

    public function create()
    {
        $input = Input::all();
        return View::make('chef/Vagrantfile')
            ->withVmName($input['vmName'])
            ->withMemory($input['memory'])
            ->withIpAddress($input['ipAddress'])
        ;
    }
}
