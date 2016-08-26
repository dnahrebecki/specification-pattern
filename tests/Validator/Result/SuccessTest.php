<?php

namespace Dnah\Specification\Tests\Validator\Result;

use Dnah\Specification\Validator\Result\Success;

class SuccessTest extends \PHPUnit_Framework_TestCase
{
    public function test_success_returns_true()
    {
        $this->assertTrue((new Success())->isSuccess());
    }
}
