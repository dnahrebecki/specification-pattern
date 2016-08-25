<?php

namespace Dnah\Specification\Tests\Specification;

use Dnah\Specification\Specification\AbstractCompositeSpecification;

class DummySpecification extends AbstractCompositeSpecification
{
    const SATISFIED = 1;
    const NOT_SATISFIED = -1;

    private $isSatisfiedOverwrite;

    public function __construct($isSatisfiedOverwrite = null)
    {
        $this->isSatisfiedOverwrite = $isSatisfiedOverwrite;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate)
    {
        if (!is_null($this->isSatisfiedOverwrite)) {

            if ($this->isSatisfiedOverwrite == static::SATISFIED) {
                return true;
            }

            if ($this->isSatisfiedOverwrite == static::NOT_SATISFIED) {
                return false;
            }
        }

        return true;
    }
}