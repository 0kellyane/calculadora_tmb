<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; // A chave é que ele usa um alias

class Controller extends BaseController // A classe é 'Controller'
{
    use AuthorizesRequests, ValidatesRequests;
}