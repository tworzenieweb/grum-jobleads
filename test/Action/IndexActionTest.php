<?php

namespace JobleadsTest\Action;

use Jobleads\Action\IndexAction;
use Jobleads\Model\User;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;
use Symfony\Component\HttpFoundation\Request;


class IndexActionTest extends TestCase
{
    private $action;

    const FULL_NAME = 'Adamczewski Luke';



    protected function setUp()
    {
        $user = $this->getUser();
        $user->__toString()->willReturn(self::FULL_NAME);

        $this->action = new IndexAction($user->reveal());
    }

    /**
     * @test
     */
    public function it_should_be_invokable()
    {
        self::assertTrue(is_callable($this->action));
    }

    /**
     * @test
     */
    public function it_should_return_response()
    {
        $action = $this->action;
        $request = $this->prophesize(Request::class)->reveal();
        self::assertEquals('Adamczewski Luke: Jobleads rocks!', $action($request));
    }

    /**
     * @return User|ObjectProphecy
     */
    private function getUser()
    {
        return $this->prophesize(User::class);
    }
}
