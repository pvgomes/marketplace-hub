# Container for Nginx
#
# Version   0.0.1

FROM pvgomes/nginx:latest

COPY ./marketplace-hub.conf /etc/nginx/sites-available/

RUN ln -nfs /etc/nginx/sites-available/marketplace-hub.conf /etc/nginx/sites-enabled/marketplace-hub.conf \
    && rm sites-enabled/domain.conf

EXPOSE 80

ENTRYPOINT ["nginx"]
