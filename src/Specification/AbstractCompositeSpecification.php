<?php

namespace Dnah\Specification\Specification;

abstract class AbstractCompositeSpecification implements SpecificationInterface
{
    /**
     * {@inheritdoc}
     */
    public function andX(SpecificationInterface $otherSpecification)
    {
        return new AndSpecification($this, $otherSpecification);
    }

//    /**
//     * {@inheritdoc}
//     */
//    public function orX(SpecificationInterface $otherSpecification)
//    {
//        return new AndSpecification($this, $otherSpecification);
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function not(SpecificationInterface $otherSpecification)
//    {
//        return new AndSpecification($this, $otherSpecification);
//    }
}
