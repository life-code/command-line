<?php

namespace CommandLine\Foundation;

use Composer\Script\Event;

class ComposerScript
{
    /**
     * Handle the post-install Composer event.
     *
     * @param \Composer\Script\Event  $event
     * @return void
     */
    public static function postInstall(Event $event)
    {
        $event->getIO()->write("Show me after INSTALL command");
    }
    
    /**
     * Handle the post-update Composer event.
     *
     * @param \Composer\Script\Event  $event
     * @return void
     */
    public static function postUpdate(Event $event)
    {
        $event->getIO()->write("Show me after UPDATE command");
    }
}