<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('/', 'AdminController@index')->name('admin');
    $this->get('balance', 'BalanceController@index')->name('balance');
});

$this->get('/', 'SiteController@index')->name('home');

Auth::routes();


