<?php

namespace Jobleads\Action;

use Jobleads\Model\User;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Luke Adamczewski
 * @package Jobleads\Action
 */
class IndexAction
{
    /** @var User */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function __invoke(Request $request)
    {
        return "{$this->user}: Jobleads rocks!";
    }
}
