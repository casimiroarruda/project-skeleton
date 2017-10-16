<?php
namespace Duodraco\Foundation\Command;

interface Handler
{
    public function handle(Command $command):Message;
}