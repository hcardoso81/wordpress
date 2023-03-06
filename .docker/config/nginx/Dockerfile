FROM nginx:latest

LABEL Maintainer = "Hernan Cardoso <hernan.f.cardoso@gmail.com>"

COPY ./default.conf /etc/nginx/conf.d/default.conf

ARG WORDPRESS_PORT

RUN export WORDPRESS_PORT=${WORDPRESS_PORT} ; sed -i -r "s/WORDPRESS_PORT/${WORDPRESS_PORT}/g" /etc/nginx/conf.d/default.conf