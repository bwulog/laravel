<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersController
 *
 * @author bwu
 */
class UsersController extends BaseController {
    
    public function index() {
        $users = User::all();
        return View::make('users.index', ['users' => $users]);
    }
    
    public function show($username) {
        $user = User::whereUsername($username)->first();
        return View::make('users.show', ['user' => $user]);
    }
    
}
