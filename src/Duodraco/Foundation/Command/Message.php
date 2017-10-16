<?php

namespace Duodraco\Foundation\Command;

final class Message implements \JsonSerializable
{
    private $status;
    private $data;

    /**
     * Message constructor.
     * @param $data
     * @param bool $status
     */
    public function __construct($data, bool $status = true)
    {
        $this->status = $status;
        $this->data = $data;
    }


    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}