<?php
Route::get('todo', function () {
    echo "hello world";
});
Route::get('add/{a}/{b}', 'Temur\Todolist\TodoController@add');
Route::get('minus/{a}/{b}', 'Temur\Todolist\TodoController@minus');
?>