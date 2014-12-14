<?php namespace App\Http\Models;

class General
{
    public $vmName   = 'Vagrant generated VM';
    public $memory   = 1024;
    public $ipAddress = '192.168.66.66';
    public $distro   = 'chef/debian-7.7';

    public static $rulesStore = [
        'vmName' => 'required',
        'memory' => 'required',
        'ipAddress' => 'required',
    ];

    public function distros()
    {
        return [
            'chef/debian-7.7' => 'Debian 7 (Wheezy)',
            'ubuntu/precise64' => 'Ubuntu 12.04 (Precise Pangolin)',
            'ubuntu/trusty64' => 'Ubuntu 14.04 (Trusty Tahr)',
        ];
    }
}
