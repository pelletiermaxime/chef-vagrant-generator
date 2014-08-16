<pre>
Vagrant.configure("2") do |config|

    config.vm.provider :virtualbox do |v|
      v.name = "{{ $vm_name }}"
      v.customize ["modifyvm", :id, "--memory", {{ $memory }}]
    end

    config.vm.box = "ubuntu/trusty64"

    config.vm.network :private_network, ip: "{{ $ip_address }}"
    config.ssh.forward_agent = true

    #config.vm.provision "chef_solo" do |chef|
    #  chef.roles_path = "roles"
    #  chef.add_role("web")
    #  chef.json = JSON.parse(File.read("config.json"))
    #end

    config.vm.synced_folder "{{--- $syncedFolder ---}}", "/vagrant", id: "vagrant-root"
end
</pre>