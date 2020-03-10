# FROM debian

# RUN apt-get update \
#     && apt install -y apache2 nodejs npm

# WORKDIR /var/www/html/

# # On copie package.json et index.html local vers le container
# ADD package.json .
# ADD index.html . 

# # On copie le dossier complet vers le container
# COPY scss/ scss/

# # On installe nos dépendences et on build les assets
# RUN npm install && npm run build

# # On copie le résultat du build dans le container vers le dossier racine du projet
# RUN cp build/styles.css .

# EXPOSE 80

# CMD /usr/sbin/apache2ctl -D FOREGROUND

FROM node as builder
WORKDIR /home/node/app
COPY . .
RUN npm install && npm run build


FROM debian
RUN apt-get update \
    && apt install -y apache2
WORKDIR /var/www/html/

# On copie index.html local vers le container
ADD index.html . 

# On copie le build de nodejs vers le container
COPY --from=builder /home/node/app/build/styles.css .

EXPOSE 80

CMD /usr/sbin/apache2ctl -D FOREGROUND