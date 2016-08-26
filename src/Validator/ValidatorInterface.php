<?php

namespace Dnah\Specification\Validator;

use Dnah\Specification\Validator\Result\ResultInterface;

interface ValidatorInterface
{
    /**
     * @param $value
     * @param array $context
     *
     * @return bool
     */
    public function isValid($value, array $context = []);

    /**
     * @return ResultInterface
     */
    public function result();
}
