<?php
/**
 * The file for the Deposit class
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2015 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Dci\Tests\Context;

/**
 * A deposit context
 *
 * @since  0.1.0
 */
class Deposit extends \Jstewmc\Dci\Context
{
    /* !Protected properties */
    
    /**
     * @var  string[]  an array of the context's required property names
     */
    protected static $requiredProperties = ['balance'];
    
    
    /* !Public methods */
    
    /**
     * Deposits $amount to the account
     *
     * Of course, in the real world, this method would include all kinds of tests,
     * logging, etc.
     *
     * @param  float  $amount  the amount to deposit
     * @return  self
     * @since  0.1.0
     */
    public function deposit($amount)
    {
        $this->increase($amount);
        
        return;
    }
}