<?php

use Core\Authenticator;
(new Authenticator)->logout();


header("Location: /");
die();