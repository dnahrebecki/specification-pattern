<?php

namespace Dnah\Specification\Validator\Result;

class Success extends AbstractResult
{
    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        return true;
    }
}
