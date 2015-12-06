<?php
/**
 * The file for the Account class
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2015 Jack Clayton
 * @license    MIT
 */
namespace Jstewmc\Dci\Tests\Data;

/**
 * A bank account
 *
 * @since  0.1.0
 */
class Account extends \Jstewmc\Dci\Data
{
    /* !Protected properties */
    
    /**
     * @var  float  the account's balance
     * @since  0.1.0
     */
    protected $balance = 0;
    
    
    /* !Get methods */
    
    /**
     * Gets the account's balance
     *
     * @return  float
     * @since   0.1.0
     */
    public function getBalance()
    {
        return $this->balance;
    }
    
    
    /* !Set methods */
    
    /**
     * Sets the account's balance
     *
     * @param  float  $balance  the account's balance
     * @return  self
     * @since   0.1.0
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        
        return $this;
    }
    
    
    /* !Magic methods */
    
    /**
     * Called when the object is constructed
     *
     * @param  float  $balance  the account's balance (optional; if omitted, defaults
     *     to null)
     * @return  self
     * @since   0.1.0
     */
    public function __construct($balance = null)
    {
        if ($balance !== null) {
            $this->setBalance($balance);
        }
        
        return;
    }
    
    
    /* !Public methods */
    
    /**
     * Increases the account's balance by $amount
     *
     * @param  float  $amount  the amount to increase
     * @return  self 
     * @since  0.1.0
     */
    public function increase($amount)
    {
        $this->balance += $amount;
        
        return $this;
    }
    
    /**
     * Decreases the account's balance by $amount
     *
     * @param  float  $amount  the amount to decrease
     * @return  self
     * @since  0.1.0
     */
    public function decrease($amount)
    {
        $this->balance -= $amount;
        
        return $this;
    }   
}
