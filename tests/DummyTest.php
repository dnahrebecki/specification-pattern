<?php

namespace Dnah\Specification\Tests;

use Dnah\Specification\Dummy;

class DummyTest extends \PHPUnit_Framework_TestCase
{
    public function test_add()
    {
        $this->assertEquals(4, (new Dummy())->add());
    }
}
