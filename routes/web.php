<?php

$router->get('/', 'LembreteController@show');
$router->post('/create','LembreteController@create');
$router->delete('/delete/{id}','LembreteController@delete');
$router->get('/search/{title}','LembreteController@search');

