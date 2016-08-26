<?php

namespace Dnah\Specification\Validator\Result;

class Failure extends AbstractResult
{
    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        return false;
    }
}
