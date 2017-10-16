<?php

namespace Duodraco\Data;

class Person implements \JsonSerializable
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $relation;
    /** @var bool */
    private $beloved;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRelation(): string
    {
        return $this->relation;
    }

    /**
     * @param string $relation
     */
    public function setRelation(string $relation)
    {
        $this->relation = $relation;
    }

    /**
     * @return bool
     */
    public function isBeloved(): bool
    {
        return $this->beloved;
    }

    /**
     * @param bool $beloved
     */
    public function setBeloved(bool $beloved)
    {
        $this->beloved = $beloved;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
