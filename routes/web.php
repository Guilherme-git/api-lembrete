<?php

$router->get('/', 'LembreteController@show');
$router->post('/create','LembreteController@create');
$router->delete('/delete/{id}','LembreteController@delete');
$router->get('/search-edit/{id}','LembreteController@searchEdit');
$router->post('/edit','LembreteController@edit');
