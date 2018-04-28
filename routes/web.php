<?php

/*
 * Copyright (c) 2017 Daniel Echenique <facueche@gmail.com>.
 *
 * This file is part of FliSol Inscription App.
 *
 * FliSol Inscription App is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * FliSol Inscription App is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FliSol Inscription App.  If not, see <http://www.gnu.org/licenses/>.
 */

Route::get('/', [
    'as' => 'user.showForm',
    'uses' => 'UserController@showForm',
]);

Route::post('/', [
    'as' => 'user.postForm',
    'uses' => 'UserController@store'
]);