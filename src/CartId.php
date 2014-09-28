<?php namespace PhilipBrown\WorldPay;

use Assert\Assertion;

class CartId
{
    /**
     * @var string
     */
    private $id;

    /**
     * Create a new CartId
     *
     * @param string $id
     * @return void
     */
    private function __construct($id)
    {
        Assertion::string($id);

        $this->id = $id;
    }

    /**
     * Set the CartId
     *
     * @param string $id
     * @return CartId
     */
    public static function set($id)
    {
        return new CartId($id);
    }

    /**
     * Return the CartId when cast to string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}
