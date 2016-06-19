## Description

First time using the framework and @lucadegasperi's software. Actually without success, because of this error
![https://i.gyazo.com/8d22d3ae2d2ffb916ce4301ca7d5da39.png](https://i.gyazo.com/8d22d3ae2d2ffb916ce4301ca7d5da39.png)
![https://i.gyazo.com/039d6eb8b75785e5cb58cdca7b4da97d.png](https://i.gyazo.com/039d6eb8b75785e5cb58cdca7b4da97d.png)

To reproduce the issue simply:

1. Clone this repo
2. Run `composer install`
3. Edit [routes.php](app/Http/routes.php) accordingly. In my case, I use `http://localhost/lumen-oauth-api/public`
4. Run `php artisan migrate --seed`
5. Try it

## Tutorials I have been following

* [Integrate OAuth2 Server Into Lumen To Secure Your RESTful API With Access Tokens](http://mrgott.com/joomla/24-integrate-oauth2-server-into-lumen-to-secure-your-restful-api-with-access-tokens)
* [oauth-2-server-laravel: Getting started with Lumen](https://github.com/lucadegasperi/oauth2-server-laravel/blob/master/docs/getting-started/lumen.md)
* [Implementing an Authorization server: With the Password Grant](https://github.com/lucadegasperi/oauth2-server-laravel/blob/master/docs/authorization-server/password.md)
