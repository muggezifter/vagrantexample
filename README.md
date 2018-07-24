Installeer VirtualBox, Vagrant en Git:

https://www.virtualbox.org/

https://www.vagrantup.com/

https://git-scm.com

(Als je in Windows werkt voer je de volgende commando's het beste uit in git bash)

```
git clone https://github.com/muggezifter/vagrantexample.git
cd vagrantexample 
cp Vagrantfile.dist Vagrantfile
vagrant up
```

Als de installatie voltooid is is de website beschikbaar op 192.168.33.10

Je kunt dit toevoegen in je hosts file zodat de site beschikbaar is als http://example.local:
```
192.168.33.10 example.local
```

Je kunt in de vagrant box werken via ssh: `vagrant ssh`

Als je klaar bent met werken kun je de box stoppen met `vagrant suspend`. De volgende keer dat je `vagrant up` doet gaat hij dan verder waar je gebleven was.

Zie alle vagrant commands:`vagrant -h`

Om de database aan te maken/vullen voer je binnen de vagrant box de volgende commandos uit:

`cd /var/www/app`

`php artisan migrate:install`

`php artisan migrate`

`php artisan db:seed`


