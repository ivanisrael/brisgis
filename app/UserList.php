<?php

namespace brisgis;

use brisgis\Output\Contracts\UserShowInterface;
use brisgis\Repositories\Contracts\UserRepositoryInterface;

class UserList
{
    private $user;

    function __construct(UserRepositoryInterface $repo, $id)
    {
        $this->user = $repo->get($id);
    }

    public function show(UserShowInterface $i){
        return $i->show($this->user);
    }
}
