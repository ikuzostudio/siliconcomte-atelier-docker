FROM debian

RUN apt-get update \
    && apt install -y apache2

WORKDIR /var/www/html/

ADD index.html . 
ADD styles.css . 

EXPOSE 80

CMD /usr/sbin/apache2ctl -D FOREGROUND