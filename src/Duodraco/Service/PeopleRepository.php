<?php

namespace Duodraco\Service;

use Duodraco\Data\Person;
use Duodraco\Foundation\Command\Service;

class PeopleRepository implements Service
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    protected function prepareStatement(string $sql): \PDOStatement
    {
        $statement = $this->pdo->prepare($sql);
        $statement->setFetchMode(
            \PDO::FETCH_GROUP | \PDO::FETCH_CLASS,
            Person::class
        );
        return $statement;
    }

    public function findAll()
    {
        $sql = 'SELECT id,name,relation,beloved FROM people';
        $statement = $this->prepareStatement($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findBeloved()
    {
        $sql = 'SELECT id,name,relation,beloved FROM people WHERE beloved = 1';
        $statement = $this->prepareStatement($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}