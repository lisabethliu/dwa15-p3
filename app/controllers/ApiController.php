<?php

class ApiController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function generateLoremIpsum()
    {
        $paragraphs = Input::get('paragraphs');

        $a = Validator::make(array());

        return 'LoremIpsum'.$paragraphs;
    }

    public function generateUser($qty = 1, $hasBirthday = false, $hasProfile = false)
    {
        return 'LoremIpsum';
    }

}