# PHP Quickstart

Project startup with Docker, PHP 7, MySQL and Nginx.

## Requirements

- Git
- Docker
- Docker Compose

## Installation

```
git clone git@github.com:fernandohu/quickstart-php7-nginx.git 
docker-compose up
```

## Application access

Open the web browser at: http://localhost.

## Tips

- Source code at /app.
- Mysql initial data at /mysql/migration/.

## Connecting to the database

The database is available at localhost:3306. But if you want, it is convenient to just access the MySQL container and use the Mysql Client installed: 

1) Check the name of the mysql container with:

```
docker-compose ps
```

2) Connect to the container:

```
docker exec -it php_mysql_1 bash
```

3) Use the mysql client to connect to the database: 

```
mysql -u root -p fhu
```

When asked, type 'root' as the password.

4) Run some MySQL commands:
```
SHOW DATABASES;
SHOW TABLES;
SELECT * FROM user;
```


