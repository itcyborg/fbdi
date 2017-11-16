<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/26/2017
 * Time: 9:06 PM
 */

/*
 * Auth Routes
 */
Router::get('','indexController@index');
Router::get('projects','indexController@projects');
Router::get('contact','indexController@contact');
Router::post('contact','indexController@contactPost');
Router::get('gallery','indexController@gallery');
