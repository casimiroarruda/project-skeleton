<?php
namespace Duodraco\Service;

use Duodraco\Foundation\Command\Service;

class PeopleProvider extends Service
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
}