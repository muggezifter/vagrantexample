Installeer VirtualBox, Vagrant en Git:

https://www.virtualbox.org/
https://www.vagrantup.com/
https://git-scm.com

(Als je in Windows werkt voer je de volgende commando's het beste uit in git bash:

```
git clone https://github.com/muggezifter/vagrantexample.git
cd vagrantexample 
cp Vagrantfile.dist Vagrantfile
vagrant up
```

nadat de installate voltooid is is de website beschikbaar op 192.168.33.10

Je kunt in de virtual boxwerken via ssh:

```
vagrant ssh
```
Als je klaar bent met werken kun je de box stoppen met vagrant suspend.De volgende keer dat je vagrant up doet gat hij dan verder waar je gebleven was.

