<p align="center"><img src="https://theme.zdassets.com/theme_assets/624144/6a8455c16fd14684884098941e1317cc5173b353.png" width="400"></p>

# BitPanda Sample Code

This is a RESTful API project developed with Laravel, Passport, Mysql and Docker. This project went through all software development steps; analysis, design, development, testing and documentation.

This project was inspired by BitPanda. The main goal was to try simulating the basic functions and architecture of this interesting platform.

[API Documentation](https://jvarona05.github.io/bitpanda-sample/public/docs/).

## Main Technologies

- Laravel
- Mysql
- Docker - Laradock
- Oauth2 - Passport
- Migrations
- Seeders
- Factory
- Query Scopes
- Carbon/Carbon
- FeatureTest - PHPUnit
- Eloquent - Resource
- Eloquent - Eager Loading
- Eloquent - One To Many (Polymorphic) relation

## Installation

### Clone the project

```
git clone https://github.com/jvarona05/bitpanda-sample.git
```

### Create .env file

```
cp .env.example .env
```

### Run Docker

```
cd laradock

cp env-example .env

docker-compose up -d nginx mysql phpmyadmin workspace 
```

### Configure the project

```
docker exec -ti laradock_workspace_1 composer install

docker exec -ti laradock_workspace_1 php artisan migrate --seed

docker exec -ti laradock_workspace_1 php artisan passport:install
```