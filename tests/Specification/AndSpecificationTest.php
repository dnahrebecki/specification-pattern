<?php

namespace Dnah\Specification\Tests\Specification;

class AndSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function test_is_satisfied_when_both_specification_are_satisfied()
    {
        $spec = (new DummySpecification(DummySpecification::SATISFIED))
            ->andX(new DummySpecification(DummySpecification::SATISFIED));

        $this->assertTrue($spec->isSatisfiedBy(new \stdClass()));
    }

    public function test_is_not_satisfied_when_only_one_specification_is_satisfied()
    {
        $specLeftFailure = (new DummySpecification(DummySpecification::NOT_SATISFIED))
            ->andX(new DummySpecification(DummySpecification::SATISFIED));

        $specRightFailure = (new DummySpecification(DummySpecification::SATISFIED))
            ->andX(new DummySpecification(DummySpecification::NOT_SATISFIED));

        $this->assertFalse($specLeftFailure->isSatisfiedBy(new \stdClass()));
        $this->assertFalse($specRightFailure->isSatisfiedBy(new \stdClass()));
    }
}