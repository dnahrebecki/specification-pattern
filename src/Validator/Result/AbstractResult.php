<?php

namespace Dnah\Specification\Validator\Result;

abstract class AbstractResult implements ResultInterface
{
    /**
     * @var array
     */
    protected $messages = [];

    /**
     * {@inheritdoc}
     */
    public function messages()
    {
        return $this->messages;
    }

    /**
     * {@inheritdoc}
     */
    public function addMessage($message, $key)
    {
        $this->messages[$key] = $message;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessages(array $messages)
    {
        foreach ($messages as $messageKey => $message) {
            $this->addMessage($message, $messageKey);
        }

        return $this;
    }
}
