<?php

namespace Dnah\Specification\Validator;

use Dnah\Specification\Specification\SpecificationInterface;

interface ValidatorInterface
{
    /**
     * @param $value
     * @param array $context
     *
     * @return bool
     */
    public function isValid($value, array $context = []);

//    @todo rethink architecture. Maybe ResultInterface::messages() should be moved to validators?
//    /**
//     * @return ResultInterface
//     */
//    public function result();

    /**
     * @return SpecificationInterface
     */
    public function specification();
}
