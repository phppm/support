<?php

namespace Zan\Framework\Utilities\Types;

use Countable;
use JsonSerializable;
use ZanPHP\Contracts\Support\Arrayable;
use ZanPHP\Contracts\Support\Jsonable;
use ZanPHP\Contracts\Support\MessageProvider;
use ZanPHP\Contracts\Support\MessageBag as MessageBagContract;

class MessageBag implements Arrayable, Countable, Jsonable, JsonSerializable, MessageBagContract, MessageProvider
{
    /**
     * Create a new message bag instance.
     *
     * @param  array $messages
     */
    public function __construct(array $messages = [])
    {

    }

    /**
     * Get the keys present in the message bag.
     *
     * @return array
     */
    public function keys()
    {

    }

    /**
     * Add a message to the bag.
     *
     * @param  string  $key
     * @param  string  $message
     * @return $this
     */
    public function add($key, $message)
    {

    }

    /**
     * Merge a new array of messages into the bag.
     *
     * @param  \Zan\Framework\Contract\Foundation\MessageProvider|array  $messages
     *
     * @return $this
     */
    public function merge($messages)
    {

    }


    /**
     * Determine if messages exist for a given key.
     *
     * @param  string  $key
     * @return bool
     */
    public function has($key = null)
    {

    }

    /**
     * Get the first message from the bag for a given key.
     *
     * @param  string  $key
     * @param  string  $format
     * @return string
     */
    public function first($key = null, $format = null)
    {

    }

    /**
     * Get all of the messages from the bag for a given key.
     *
     * @param  string  $key
     * @param  string  $format
     * @return array
     */
    public function get($key, $format = null)
    {

    }

    /**
     * Get all of the messages for every key in the bag.
     *
     * @param  string  $format
     * @return array
     */
    public function all($format = null)
    {

    }

    /**
     * Get all of the unique messages for every key in the bag.
     *
     * @param  string  $format
     * @return array
     */
    public function unique($format = null)
    {

    }


    /**
     * Get the raw messages in the container.
     *
     * @return array
     */
    public function messages()
    {

    }

    /**
     * Get the raw messages in the container.
     *
     * @return array
     */
    public function getMessages()
    {

    }

    /**
     * Get the messages for the instance.
     *
     * @return \Zan\Framework\Utilities\Types\MessageBag
     */
    public function getMessageBag()
    {

    }

    /**
     * Get the default message format.
     *
     * @return string
     */
    public function getFormat()
    {

    }

    /**
     * Set the default message format.
     *
     * @param  string  $format
     * @return \Zan\Framework\Utilities\Types\MessageBag
     */
    public function setFormat($format = ':message')
    {

    }

    /**
     * Determine if the message bag has any messages.
     *
     * @return bool
     */
    public function isEmpty()
    {

    }

    /**
     * Determine if the message bag has any messages.
     *
     * @return bool
     */
    public function any()
    {

    }

    /**
     * Get the number of messages in the container.
     *
     * @return int
     */
    public function count()
    {

    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {

    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {

    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {

    }

    /**
     * Convert the message bag to its string representation.
     *
     * @return string
     */
    public function __toString()
    {

    }
}
