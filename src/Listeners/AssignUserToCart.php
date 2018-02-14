<?php
/**
 * Contains the AssignUserToCart class.
 *
 * @copyright   Copyright (c) 2017 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2018-02-14
 *
 */


namespace Vanilo\Cart\Listeners;


use Vanilo\Cart\Facades\Cart;

class AssignUserToCart
{
    /**
     * Assign a user to the cart
     *
     * @param $event
     */
    public function handle($event)
    {
        Cart::setUser($event->user);
    }

}
