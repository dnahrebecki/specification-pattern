<?php

namespace Dnah\Specification\Validator\Result;

interface ResultInterface
{
    /**
     * @return bool
     */
    public function isSuccess();

    /**
     * @todo can be composed of some kind of MessageInterface
     * @return array
     */
    public function messages();

    /**
     * @param string $message
     * @param string $key
     *
     * @return ResultInterface
     */
    public function addMessage($message, $key);

    /**
     * @param array $messages
     *
     * @return ResultInterface
     */
    public function setMessages(array $messages);
}
