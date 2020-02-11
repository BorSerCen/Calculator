<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Borsercen\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Borsercen\Calculator\CalculatorController@subtract');