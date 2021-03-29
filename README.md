Epitech technique test:





Hello, bienvenue sur ce repo de dev........

Nous allons voir étape par étape les étapes à suivre pour déployer notre application..

NB: Etapes testées sur une distro Linux(Kali)

1- Installation de git
$ sudo apt-get -y install git

2- Installation de php,mariadb et de ses dépendences
$ sudo apt-get -y install libapache2-mod-php php php-common php-xml php-gd php-opcache php-mbstring php-tokenizer php-json php-bmath php-zip unzip

3- Installation de mariadb pour la gestion de base de données
$ sudo apt -y install software-properties-common gnupg2                                #installation des dependances de mariadb
$ sudo apt-key adv --recv-keys --keyserver keyserver.ubuntu.com                        #ajout de la clé mariadb au repo
$ sudo apt update                                                                       #mise à jour du repositoire des paquets
$ sudo apt-get -y install mariadb-server mariadb-client
$ sudo systemctl enable --now mariadb                                                   #demarrage du service de mariadb après chaque reboot
$ sudo mysql_secure_installation                                                        #pour sécuriser l'install tout en configurant le mot de passe admin

3- Installer composer
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ composer --version                      #pour tester si on a bel et bien installer composer

4- Cloner le projet sur sa machine locale
$ git clone  https://github.com/bngameni/ktr-msc-ls1.git $HOME/laravel-project
$ cd $HOME/laravel-project

5- Genérer la clé de l'application
$ php artisan key:generate

6- 
