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

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        return view('app.userForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->all();

        $user = new User();
        $user->setFirstName($fields["first_name"]);
        $user->setLastName($fields["last_name"]);
        $user->setDNI($fields["dni"]);
        $user->setEmail($fields["email"]);
        
        $user->save();

        alert()->success('Gracias por tu participación!', 'Registrado')->autoclose(3500);;

        return redirect()->route('user.showForm');
    }
}
