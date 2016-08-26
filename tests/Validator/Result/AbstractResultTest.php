<?php

namespace Dnah\Specification\Tests\Validator\Result;

class AbstractResultTest extends \PHPUnit_Framework_TestCase
{
    public function test_get_messages()
    {
        $result = new DummyResult();

        $this->assertEmpty($result->messages());

        $result->addMessage('test', 'test_key');

        $this->assertCount(1, $result->messages());
        $this->assertEquals(['test_key' => 'test'], $result->messages());
    }

    public function test_add_message()
    {
        $result = new DummyResult();

        $result->addMessage('test', 'test_key');

        $this->assertEquals(['test_key' => 'test'], $result->messages());
    }

    public function test_set_messages()
    {
        $result = new DummyResult();

        $result->setMessages(['test_key' => 'test']);

        $this->assertEquals(['test_key' => 'test'], $result->messages());
    }
}
