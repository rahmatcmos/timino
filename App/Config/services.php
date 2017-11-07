<?php

/**
 * Timino - PHP MVC framework
 *
 * @package     Timino
 * @author      Lotfio Lakehal <contact@lotfio-lakehal.com>
 * @copyright   2017 Lotfio Lakehal
 * @license     MIT
 * @link        https://github.com/lotfio-lakehal/timino
 *
 * Copyright (C) 2018
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * INFO :
 * Services config file
 * all services to be loaded must be set here !
 *
 */
return[
    "Mailer"         => App\Services\Custom\Mailer::class,
    "Git"            => App\Services\Custom\Git::class,
    "Record"         => App\Services\Database\Record::class,
    "Form"           => App\Services\Security\Form::class,
    "Authentication" => App\Services\Security\Authentication::class,
    "Cookie"         => App\Services\Security\Cookie::class,
    "Session"        => App\Services\Security\Session::class,
    "Redirection"    => App\Services\Security\Redirection::class,
    "Token"          => App\Services\Security\Token::class,
    "Validation"     => App\Services\Security\Validation::class,
    "Upload"         => App\Services\Uploads\Upload::class,
];