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
        $instance = new static($event);
        
        if (!$instance->isInstalled()) {
            $instance->installer();
        }
    }
    
    private function isInstalled()
    {
        return;
    }
    
    private function installer()
    {
        var_dump($event);
    }
}