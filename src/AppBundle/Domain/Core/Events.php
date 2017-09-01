<?php

namespace AppBundle\Domain\Core;

/**
 * Domain Order Events, represents an order event
 *
 * @author Paulo Gomes <pv.gomes89@gmail.com>
 */
final class Events
{

    /**
     * The "market.create.configuration" event is thrown each time an Market create new configuration
     *
     * @var string
     */
    const MARKET_CREATE_CONFIGURATION = 'market.create.configuration';

    /**
     * The "market.create.configuration.error" event is thrown each time an Market thrown error on create configuration
     *
     * @var string
     */
    const MARKET_CREATE_CONFIGURATION_ERROR = 'market.create.configuration.error';

}
