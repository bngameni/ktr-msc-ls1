Epitech technique test:


Hello, bienvenue sur ce repo de dev........

Nous allons voir étape par étape les étapes à suivre pour déployer notre application..

NB: Etapes testées sur une distro Linux(Kali)

1- Installation de git
$ sudo apt-get -y install git

2- Installation de php et de ses dépendences
$ sudo apt-get -y install libapache2-mod-php php php-common php-xml php-gd php-opcache php-mbstring php-tokenizer php-json php-bmath php-zip unzip

3- Installer composer
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ composer --version                      #pour tester si on a bel et bien installer composer

4- Cloner le projet sur sa machine locale
$ git clone  
