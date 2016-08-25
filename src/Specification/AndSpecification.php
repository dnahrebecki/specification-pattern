<?php

namespace Dnah\Specification\Specification;

class AndSpecification extends AbstractCompositeSpecification
{
    /**
     * @var SpecificationInterface
     */
    private $leftSpecification;

    /**
     * @var SpecificationInterface
     */
    private $rightSpecification;

    /**
     * @param SpecificationInterface $leftSpecification
     * @param SpecificationInterface $rightSpecification
     */
    public function __construct(SpecificationInterface $leftSpecification, SpecificationInterface $rightSpecification)
    {
        $this->leftSpecification  = $leftSpecification;
        $this->rightSpecification = $rightSpecification;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate)
    {
        return
            $this->leftSpecification->isSatisfiedBy($candidate)
            && $this->rightSpecification->isSatisfiedBy($candidate);
    }
}
