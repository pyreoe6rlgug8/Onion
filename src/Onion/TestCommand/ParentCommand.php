<?php
/*
 * This file is part of the {{ }} package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Onion\TestCommand;

class ParentCommand extends \CLIFramework\Command
{
    function execute($context) 
    { 
        return true;
    }
}
