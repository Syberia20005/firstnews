<?php

Config::set('site_name', 'First News by N.March');

Config::set('languages',array('en','ru'));

//Routes. Route name => method prefix

Config::set('route',array(
    'default' => '',
    'admin' => 'admin_',
));

Config::set('default_route','default' );
Config::set('default_language','ru' );
Config::set('default_controller','categories' );
Config::set('default_action','index' );

Config::set('db.host','localhost');
Config::set('db.user','root');
Config::set('db.password','');
Config::set('db.db_name','first_news');

Config::set('salt','1dj723sasdwq412' );