<pre>
Vagrant.configure("2") do |config|

  # required_plugins = %w( vagrant-hostsupdater vagrant-someotherplugin )
  # required_plugins.each do |plugin|
  #   system "vagrant plugin install #{plugin}" unless Vagrant.has_plugin? plugin
  # end

  config.vm.provider :virtualbox do |v|
    v.name = "{{ $input['vmName'] }}"
    v.customize ["modifyvm", :id, "--memory", {{ $input['memory'] }}]
  end

  config.vm.box = '{{ $input['distro'] }}'

  config.berkshelf.enabled = true
  config.omnibus.chef_version = :latest

  config.vm.network :private_network, ip: "{{ $input['ipAddress'] }}"
  config.ssh.forward_agent = true

  config.vm.provision "chef_zero" do |chef|
    chef.add_recipe("chef-vagrant")
    # chef.json = JSON.parse(File.read("config.json"))
  end

  config.vm.synced_folder "{{--- $syncedFolder ---}}", "/vagrant", id: "vagrant-root"
end
</pre>
