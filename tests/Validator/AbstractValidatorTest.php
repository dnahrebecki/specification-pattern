<?php

namespace Dnah\Specification\Tests\Validator;

use Dnah\Specification\Specification\SpecificationInterface;
use Dnah\Specification\Tests\Specification\DummySpecification;
use Dnah\Specification\Validator\AbstractValidator;

class AbstractValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractValidator
     */
    private $validator;

    public function setUp()
    {
        $this->validator = new DummyValidator(new DummySpecification(DummySpecification::SATISFIED));
    }

    public function test_is_valid_when_specification_is_satisfied()
    {
        $this->assertTrue($this->validator->isValid(new \stdClass()));
    }

    public function test_is_not_valid_when_specification_is_not_satisfied()
    {
        $validator = new DummyValidator(new DummySpecification(DummySpecification::NOT_SATISFIED));

        $this->assertFalse($validator->isValid(new \stdClass()));
    }

    public function test_is_not_valid_when_specification_throws_exception()
    {
        $specification = $this->getMockBuilder(SpecificationInterface::class)->getMock();

        $specification
            ->expects($this->once())
            ->method('isSatisfiedBy')
            ->willThrowException(new \InvalidArgumentException('invalid_type'));

        $validator = new DummyValidator($specification);

        $this->assertFalse($validator->isValid(new \stdClass()));
    }

    public function test_can_get_specification_from_validator()
    {
        $this->assertInstanceOf(SpecificationInterface::class, $this->validator->specification());
    }

//    public function test_result_is_success_when_specification_is_satisfied()
//    {
//        $this->assertInstanceOf(Success::class, $this->validator->result());
//    }
//
//    public function test_result_is_failure_when_specification_is_not_satisfied()
//    {
//        $validator = new DummyValidator(new DummySpecification(DummySpecification::NOT_SATISFIED));
//
//        $this->assertInstanceOf(Failure::class, $validator->result());

//    }
}
