<?php

namespace Jobleads\Action;

use Jobleads\Model\User;
use Symfony\Component\HttpFoundation\Request;

class IndexAction
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function __invoke(Request $request): string
    {
        return "{$this->user}: Jobleads rocks!";
    }
}
