## BSO official

Step by step installation

1.  clone project use terminal you type `git clone https://github.com/destroylord/bso-official.git`
2.  `composer install` && `npm install`
3.  `cp .env.example .env`
4.  You can create a database in PhpMyAdmin with the name a same in .env
5.  `php artisan db:seed`
6.  You login in dashboard admin, example : `http://127.0.0.1:8000/login`
7.  Done