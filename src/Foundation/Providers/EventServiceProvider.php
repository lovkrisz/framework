<?php

declare(strict_types=1);

/**
 * Contains the EventServiceProvider class.
 *
 * @copyright   Copyright (c) 2018 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2018-11-11
 *
 */

namespace Vanilo\Foundation\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Vanilo\Cart\Events\CartDeleting;
use Vanilo\Cart\Events\CartUpdated;
use Vanilo\Checkout\Events\ShippingAddressChanged;
use Vanilo\Checkout\Events\ShippingMethodSelected;
use Vanilo\Foundation\Listeners\CalculateShippingFees;
use Vanilo\Foundation\Listeners\DeleteCartAdjustments;
use Vanilo\Foundation\Listeners\UpdateSalesFigures;
use Vanilo\Order\Events\OrderWasCreated;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        OrderWasCreated::class => [
            UpdateSalesFigures::class,
        ],
        ShippingMethodSelected::class => [
            CalculateShippingFees::class,
        ],
        ShippingAddressChanged::class => [
            CalculateShippingFees::class,
        ],
        CartUpdated::class => [
            CalculateShippingFees::class,
        ],
        CartDeleting::class => [
            DeleteCartAdjustments::class,
        ]
    ];
}
