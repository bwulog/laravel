<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PagesController
 *
 * @author bwu
 */
class PagesController extends BaseController {
    
    public function home() {
        
        $name = "William";
        
        return View::make('hello')->with('name', $name);
        
    }
    
    public function about() {
        return View::make('about');
    }
    
}
