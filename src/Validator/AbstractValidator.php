<?php

namespace Dnah\Specification\Validator;

use Dnah\Specification\Specification\SpecificationInterface;

abstract class AbstractValidator implements ValidatorInterface
{
    /**
     * @var SpecificationInterface
     */
    protected $specification;

    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    /**
     * {@inheritdoc}
     */
    public function isValid($value, array $context = [])
    {
        try {
            $isSatisfied = $this->specification()->isSatisfiedBy($value);
        } catch (\InvalidArgumentException $exception) {
            return false;
        }

        return $isSatisfied;
    }

    /**
     * {@inheritdoc}
     */
    public function specification()
    {
        return $this->specification;
    }
}
