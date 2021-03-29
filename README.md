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

$ mysql -uroot -p$PASSWORD                                                              # se connecter à la cli de mysql
    > CREATE DATABASE $nameDataBase;                                                    #creer la base de données

!!! Attention : Remplacer $NOM_VAP par la bonne valeur

4- Installation de composer

$ curl -sS https://getcomposer.org/installer | php

$ sudo mv composer.phar /usr/local/bin/composer

$ composer --version                      #pour tester si on a bel et bien installer composer



5- Cloner le projet sur sa machine locale

$ git clone  https://github.com/bngameni/ktr-msc-ls1.git $HOME/laravel-project

$ cd $HOME/laravel-project


6- Mettre à jour les libraires

$ composer update


8- Créer le fichier d'environnement

$ cp .env.example .env


7- Genérer la clé de l'application

$ php artisan key:generate


9- Positionner les bonnes valeurs dans le fichier .env 

$ sed -i.bak "g#DB_USERNAME=root#DB_USERNAME=$USERNAME_MYSQL#g" .env

$ sed -i.bak "g#DB_PASSWORD=#DB_PASSWORD=$PASSWORD_MYSQL#g" .env

$ sed -i.bak "g#DB_DATABASE=laravel#DB_DATABASE=$DATABASE_NAME#g" .env


NB:
$USER_NAME_MYSQL : c'est un user capable de se connecter à la cli de mysql(c'est = root par defaut)
$PASSWORD_MYSQL : C'est le password qui a été renseigné durant l'installation de mysl_secure
$DATABASE_NAME : c'est le nom de la base de donnée qui a été crée


10- Lancer les migrations des tables

$ php artisan migrate


11- Lancer le serveur

$ php artisan serve


12- Aller dans sa barre d'url et saisir l'url : http://localhost:8000


13- End!!!!!!!!!!!!!!!!!!!!!!!!!



Merçi.............
