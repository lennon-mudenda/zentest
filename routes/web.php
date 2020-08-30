<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/customers', 'HomeController@customers')->name('customers');

Route::get('/admin/customers/{customer}', 'HomeController@customer')->name('customer');

Route::get('/admin/transactions', 'HomeController@transactions')->name('transactions');

Route::get('/admin/transactions/{transaction}', 'HomeController@transaction')->name('transaction');
