<?php
/**
 * The file for the Withdraw class
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2015 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Dci\Tests\Context;

/**
 * A withdraw context
 *
 * @since  0.1.0
 */
class Withdraw extends \Jstewmc\Dci\Context
{
    /* !Protected properties */
    
    /**
     * @var  string[]  an array of the context's required property names
     */
    protected static $requiredProperties = ['balance'];
    
    
    /* !Public methods */
    
    /**
     * Withdraws $amount from the account
     *
     * Of course, in a real-world scenario this method would involve all kinds of
     * tests, logging, etc.
     *
     * @param  float  $amount  the amount to withdraw
     * @return  self
     * @throws  RuntimeException  if balance has insufficient funds
     * @since  0.1.0
     */
    public function withdraw($amount)
    {
        if ($this->balance < $amount) {
            throw new \RuntimeException('Insufficient funds!');
        }
        
        $this->decrease($amount);
        
        return;
    }
}