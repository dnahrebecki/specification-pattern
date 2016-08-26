<?php

namespace Dnah\Specification\Tests\Validator\Result;

use Dnah\Specification\Validator\Result\Failure;

class FailureTest extends \PHPUnit_Framework_TestCase
{
    public function test_success_returns_false()
    {
        $this->assertFalse((new Failure())->isSuccess());
    }
}
