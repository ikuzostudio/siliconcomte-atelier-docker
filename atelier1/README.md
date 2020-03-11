# Atelier Docker - Silicon Comté

## Premier exercice

Vous avez en votre possession une page web statique et un fichier CSS.  
Le but est de créer votre premier container, vous permettant de visualiser cette page dans votre navigateur.

## Commandes utiles

* Build votre image et la nommer : `docker build . -t <nom-image>`
* Lancer votre container nommé sur le port 8080 :  `docker run -d -p 8080:80 --name <nom-container> <nom-image>`

## Tâches

* Créer un fichier `Dockerfile` en partant d'une image Debian
* Mettre à jour le repository des paquets de Debian puis installer le paquet `apache2`
* Copier les fichiers `index.html` et `styles.css` dans le container
* Exposer le port d'apache par défaut (`80`)
* Faire en sorte qu'Apache se lance en foreground (background par défaut) (la commande : `/usr/sbin/apache2ctl -D FOREGROUND`)