# Atelier Docker - Silicon Comté

## Cinquième exercice
C'est la fin. Mettons en pratique tout ce que l'on a apprit jusqu'à présent.  
Vous devez rédiger un fichier docker-compose vous permettant de servir une stack composée d'Apache (avec PHP), MySQL et Adminer.

## Commandes utiles
* Build l'image de notre container : `docker-compose build`
* Lancer nos services : `docker-compose up -d`
* Stopper nos services : `docker-compose down`

## Tâches
* Créer un fichier docker-compose.yml
* Déclarer trois services : MySQL, Adminer et Web (s'appuyer sur l'image https://hub.docker.com/r/thecodingmachine/php)
* Monter les fichiers locaux sur Web
* Importer le dump de nos tables (`tweets.sql`) sur la base de données `atelier5`
* Utiliser les variables d'environnement pour passer nos credentials de notre BDD au service