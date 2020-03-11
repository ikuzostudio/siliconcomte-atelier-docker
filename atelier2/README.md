# Atelier Docker - Silicon Comté

## Second exercice

En repartant du premier exercice, vous devez créer un container permettant de build les assets du projet (Sass) et de publier le résultat sous le port 80.

## Commandes utiles

* Build votre image et la nommer : `docker build . -t <nom-image>`
* Lancer votre container nommé sur le port 8080 :  `docker run -d -p 8080:80 --name <nom-container> <nom-image>`

## Tâches

* Créer un fichier `Dockerfile` en partant d'une image Debian
* Mettre à jour le repository des paquets de Debian puis installer les paquets `apache2 npm nodejs`
* Build les assets avec la commande `npm run build`
* Copier les fichiers `index.html` et `build/styles.css` dans le container
* Exposer le port d'apache par défaut (`80`)
* Faire en sorte qu'Apache se lance en foreground (background par défaut) (la commande : `/usr/sbin/apache2ctl -D FOREGROUND`)