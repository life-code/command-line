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
    
    /**
     * Handle the post-install Composer event.
     *
     * @param \Composer\Script\Event  $event
     * @return void
     */
    public static function postInstall(Event $event)
    {
        var_dump($event);
        die;
        
        // $instance = new static($event);
    }
    
    /**
     * Handle the post-update Composer event.
     *
     * @param \Composer\Script\Event  $event
     * @return void
     */
    public static function postUpdate(Event $event)
    {
        var_dump($event);
        die;
        
        // $instance = new static($event);
    }
}