Marketplace-hub
============
A simple demo of an Marketplace Hub


## Project configuration

**1) Environment configuration (use docker + docker-compose)**:

```
docker-compose up -d
```

**2) Run composer inside container, following this code**:

```
docker exec -it marketplace-hub_php_1 bash
su docker
cd /var/www/marketplace-hub/
php composer.phar install
```

**3) Create database and update schema**:

```
php app/console doctrine:database:create
php app/console doctrine:schema:update

```

**4) Run data Fixtures**:

```
app/console doctrine:fixtures:load

```

**5) Done, access using this url**:

```
http://marketplace-hub.dev:8080/
http://marketplace-hub.dev:8080/api/doc

ELK
http://localhost:5601/

RabbitMQ
http://localhost:15672/

```