<?php
namespace Drush\Commands;

/**
 * For commands that are 'global', Drush expects to find them inside
 * the 'Commands' folder of a location specified via --include.
 */
class FoobarCommands
{
    /**
     * Do nearly nothing.
     *
     * @command foobar
     */
    public function foobar()
    {
        return 'baz';
    }
}
