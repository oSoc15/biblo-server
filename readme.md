## Bieblo Server

### Bieblo Server is the Back-office of Bieblo App (which can be found [here](https://github.com/oSoc15/biblo-app).)

Bieblo is a new, intuitive and fun book-recommendation app for children. It can be tested at
[http://www.bieblo.be] (http://www.bieblo.be)

It currently runs on [Laravel 5.1](http://laravel.com).

### Documentation

First of all choose in which environment you are going to run Bieblo-server. We suggest running it in **Homestead**.
Visit [the official Laravel documentation] (http://laravel.com/docs/5.1/homestead) for more information.

Once everything is set up, run `composer install`.

Further in, run `npm install` and `bower install`. 
Run `gulp` once to initialize everything in terms of styling and functionality. If you are running Laravel in Homestead, don't run gulp in your virtual environment, but locally as well!

### Models
Only create models when necessary. :)

### Views

Going through the back-office you will notice that the language is **NL (Dutch)** for now. More languages will be added later on. For now, we are focussing on the **Belgian (Dutch-speaking)** libraries.

### Controllers

While not a necessity, we strongly urge creating controllers based on models (that are being actively used in the application). 
Make your controllers (and functions inside of them) accordingly, it will save you a ton of time, and your code will be way more consistent!

### License

Bieblo-Server is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
