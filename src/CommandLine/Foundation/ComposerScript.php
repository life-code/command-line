<?php

namespace CommandLine\Foudantion;

use Composer\Script\Event;

class ComposerScript
{
    private $event;
    
    public function __construct(Event $event)
    {
        $this->event = $event;
    }
    
    public static function install(Event $event)
    {
        var_dump($event);
        die;
        
        $instance = new static($event);
        
    }
}