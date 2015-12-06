<?php
/**
 * The file for the Example class
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2015 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Dci\Tests;

/**
 * An example as a unit test
 *
 * @since  0.1.0
 */
class Example extends \PHPUnit_Framework_TestCase
{
    /* !test() */
    
    
    public function test()
    {
        $checking = new Data\Account(100);
        $savings  = new Data\Account(25);
        
        $this->assertEquals(100, $checking->getBalance());
        $this->assertEquals(25, $savings->getBalance());
        
        $transfer = new Interaction\Transfer($checking, $savings);
        
        $transfer->execute(50);
        
        $this->assertEquals(50, $checking->getBalance());
        $this->assertEquals(75, $savings->getBalance());
        
        return;
    }
}
