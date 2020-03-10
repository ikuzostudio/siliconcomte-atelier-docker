# Atelier Docker - Silicon Comté

## Troisième exercice
Partons à la découverte de Docker Compose désormais !  
Jusqu'à présent, notre container est immuable : nous sommes obligés de rebuild à chaque modification. Voyons comment utiliser docker-compose pour servir notre application locale.

## Commandes utiles
* Build l'image de notre container : `docker-compose build`
* Lancer nos services : `docker-compose up -d`
* Stopper nos services : `docker-compose down`

## Tâches
* Créer un fichier docker-compose.yml
* Déclarer un service Apache
* Monter nos fichiers locaux vers le container du service
* Éditer le fichier index.html pour vérifier que le fichier est bien actualisé