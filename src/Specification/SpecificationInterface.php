<?php

namespace Dnah\Specification\Specification;

interface SpecificationInterface
{
    /**
     * @param object $candidate
     *
     * @throw \InvalidArgumentException when type of $candidate is not expected
     * @return bool
     */
    public function isSatisfiedBy($candidate);

    /**
     * @param SpecificationInterface $specification
     *
     * @return SpecificationInterface
     */
    public function andX(SpecificationInterface $specification);

//    /**
//     * @param SpecificationInterface $specification
//     *
//     * @return SpecificationInterface
//     */
//    public function orX(SpecificationInterface $specification);
//
//    /**
//     * @param SpecificationInterface $specification
//     *
//     * @return SpecificationInterface
//     */
//    public function not(SpecificationInterface $specification);
}