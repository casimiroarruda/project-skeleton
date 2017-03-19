<?php
namespace Duodraco\Service;

use Duodraco\Foundation\Command\Service;

class DataProvider extends Service
{
    public function peopleToFollow(): array
    {
        return [
            "@gabidavila" => "Gabriela D'Ávila",
            "@eminetto" => "Elton Minetto",
            "@abdala" => "Abdala Cerqueira",
            "@dianaarnos" => "Diana Arnos"
        ];
    }

    public function getPHPVersion(): string
    {
        return PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION;
    }
}
