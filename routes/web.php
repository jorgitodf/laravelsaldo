<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('/', 'AdminController@index')->name('admin');
    $this->get('deposito', 'BalanceController@deposito')->name('balance.deposito');
    $this->get('balance', 'BalanceController@index')->name('balance');
    $this->post('deposito', 'BalanceController@depositoStore')->name('deposito.store');
});

$this->get('/', 'SiteController@index')->name('home');

Auth::routes();


