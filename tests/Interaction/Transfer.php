<?php
/**
 * The file for the Transfer class
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2015 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Dci\Tests\Interaction;

use Jstewmc\Dci\Tests\Context;

/**
 * The transfer interaction
 *
 * @since   0.1.0
 */
class Transfer extends \Jstewmc\Dci\Interaction
{
    /* !Magic methods */
    
    /**
     * Called when the object is constructed
     *
     * @param  Jstewmc\Dci\Tests\Data\Account  $source  the source account
     * @param  Jstewmc\Dci\Tests\Data\Account  $destination  the destination account
     * @return  self
     * @since  0.1.0
     */
    public function __construct(
        \Jstewmc\Dci\Tests\Data\Account $source, 
        \Jstewmc\Dci\Tests\Data\Account $destination
    ) {
        $this->source = $source;
        $this->destination = $destination;
        
        return $this;
    }
    
    
    /* !Public methods */
    
    /**
     * Executest the transfer
     *
     * @param  $amount  the transfer amount
     * @return  self
     * @since   0.1.0
     */
    public function execute($amount) 
    {
        // attach the contexts to the data objects
        $this->source->attach(new Context\Withdraw());
        $this->destination->attach(new Context\Deposit());
        
        // withdraw and deposit the funds
        $this->source->withdraw($amount);
        $this->destination->deposit($amount);
        
        return;
    }
}