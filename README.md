<img src="https://i.imgur.com/aLYSrzD.png">

# TechViews Data

**TechViews Data Website** 

**Author: ChenJi & TieuGum**

**Version: 0.0.1 Beta**

**Laravel Framework 6.4.1**

# What is this ?

TechViews Data helps hide the information of Facebook team members posted on this site. Only members of that Facebook group can unlock and view hidden information on it. Help fight against outside members stealing information inside the group. The website has a ranking of the active members in the group.


# Install
How to Install
```
$ git clone https://github.com/chenjiinguyen/techviews.git your-project
$ cd your-project
$ composer install && npm install
$ cp .env.example .env
$ php artisan key:generate
$ # edit config website in file .env
$ php artisan migrate --seed
$ php artisan vendor:publish --tag=laravel-admin-simditor
$ php artisan erve --port=your-port
```
