<?php

namespace Dnah\Specification\Tests\Validator\Result;

use Dnah\Specification\Validator\Result\AbstractResult;

class DummyResult extends AbstractResult
{
    /**
     * @return bool
     */
    public function isSuccess()
    {
        return true;
    }
}
