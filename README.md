# Assignment for Laravel Developer from Companies House

## Requirements

-   PHP >= 8.0.2
-   NodeJs >= 14
-   Tailwindcss >= 3
-   Alpinejs 3
-   MySQL 8
-   Composer 2

## Configuration

## Step #01

Clone the git repo

```shell
git clone https://github.com/MuhammadSaim/ch-secp-laravel chlaravel
```

## Step #02

Step in to the directory

```shell
cd chlaravel
```

## Step #03

Install the composer dependencies

```shell
composer install
```

## Step #04

Install the frontend dependencies with **Yarn** or **NPM**

**Yarn**

```shell
yarn install
```

**NPM**

```shell
npm install
```

## Step #05

Copy the <kbd>.env.example</kbd> and create new file with name of <kbd>.env</kbd> or just create <kbd>.env</kbd> file and paste all the content from <kbd>.env.example</kbd> in the file.

If your in **Linux** or **Mac** or any unix or linux based Operating System then run this command.

```shell
cp .env.example .env
```

## Step #06

Now generate the <kbd>APP_KEY</kbd> this will be used for session, cookies encryption and other security stuff.

```shell
php artisan key:generate
```

## Step #07

Setup the Database credentials in <kbd>.env</kbd> file and fill those values.

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ch_assignment
DB_USERNAME=root
DB_PASSWORD=
```


## Step #08

Run the migration with the seed. After running the seeder please run the [WebScrapper](https://github.com/MuhammadSaim/ch-secp-scrapper) to pull the companies from SECP Companies List.

```shell
php artisan migrate --seed
```

## Step #09

Build the frontend assets

**Development**

```shell
yarn dev
```

**Production**

```shell
yarn prod
```

## Step #10

Run the development server

```shell
php artisan serve
```


## Step #11

Login Credentials for demo user
```text
Email: user@demo.com
Password: 12345678
```


Application is deployed now Thanks.
