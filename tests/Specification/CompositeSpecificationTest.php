<?php

namespace Dnah\Specification\Tests\Specification;

use Dnah\Specification\Specification\AndSpecification;

class CompositeSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function test_andX_returns_AND_specification()
    {
        $this->assertInstanceOf(AndSpecification::class, (new DummySpecification())->andX(new DummySpecification()));
    }

//    public function test_orX_returns_OR_specification()
//    {
//        $this->assertInstanceOf(OrSpecification::class, (new DummySpecification())->orX(new DummySpecification()));
//    }
//
//    public function test_not_returns_NOT_specification()
//    {
//        $this->assertInstanceOf(NotSpecification::class, (new DummySpecification())->not(new DummySpecification()));
//    }
}