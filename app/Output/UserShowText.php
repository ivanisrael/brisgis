<?php

namespace brisgis\Output;

use brisgis\Output\Contracts\UserShowInterface;

class UserShowText implements UserShowInterface {

    public function show($user)
    {
        return $user->name;
    }
}