<?php

namespace AppBundle\Domain\Order;

/**
 * Domain Order Events, represents an order event
 *
 * @author Paulo Gomes <pv.gomes89@gmail.com>
 */
final class Events
{

    /**
     * The "seller.create.order" event is thrown each time an Order is received
     * from Partner and created in ExternalShop.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CREATE_ORDER = 'seller.create.order';

    /**
     * The "seller.create.order.error" event is thrown each time an Partner
     * fails on create a new Order in ExternalShop.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CREATE_ORDER_ERROR = 'seller.create.order.error';

    /**
     * The "seller.create.order.exist" event is thrown each time an Partner
     * calls for create an Order that already exists in the ExternalShop .
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CREATE_ORDER_EXIST = 'seller.create.order.exist';

    /**
     * The "seller.confirm.order" event is thrown each time an Partner
     * notify ExternalShop that an Order payment is confirmed.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CONFIRM_ORDER = 'seller.confirm.order';

    /**
     * The "seller.confirm.order.error" event is thrown each time an Partner
     * confirm on Order that not exists in ExternalShop
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CONFIRM_ORDER_ERROR = 'seller.confirm.order.error';

    /**
     * The "seller.confirm.order.already" event is thrown each time an Partner
     * tries to confirm an Order that is already confirmed in ExternalShop.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CONFIRM_ORDER_ALREADY = 'seller.confirm.order.already';

    /**
     * The "seller.confirm.reservation.order" event is thrown when ExternalShop notify
     * an Partner for release stock reservation
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CONFIRM_RESERVATION_ORDER = 'seller.confirm.reservation.order';

    /**
     * The "seller.confirm.reservation.order.error" event is thrown when ExternalShop fail
     * to notify an Partner for release stock reservation
     *
     * @var string
     */
    const SELLER_CONFIRM_RESERVATION_ORDER_ERROR = 'seller.confirm.reservation.order.error';

    /**
     * The "seller.cancel.order" event is thrown each time Partner requests API to cancel a order
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CANCEL_ORDER = 'seller.cancel.order';

    /**
     * The "seller.cancel.order.error" event is thrown each time Partner can't cancel a order
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CANCEL_ORDER_ERROR = 'seller.cancel.order.error';

    /**
     * The "seller.cancel.order.already" event is thrown each time a Partner
     * requests API to cancel an order already canceled
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CANCEL_ORDER_ALREADY = 'seller.cancel.order.already';

    /**
     * The "seller.cancel.order.already.error" event is thrown on Partner fails
     * in cancel an order that already canceled
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_CANCEL_ORDER_ALREADY_ERROR = 'seller.cancel.order.already.error';

    /**
     * The "seller.order.preview" event is thrown each seller request simulate a order.
     *
     * The event listener receives an AppBundle\Application\Product\OrderPreviewEvent instance.
     *
     * @var string
     */
    const SELLER_ORDER_PREVIEW = 'seller.order.preview';

    /**
     * The "seller.order.preview.error" event is thrown each preview order fail.
     *
     * The event listener receives an AppBundle\Application\Product\OrderPreviewEvent instance.
     *
     * @var string
     */
    const SELLER_ORDER_PREVIEW_ERROR = 'seller.order.preview.error';

    /**
     * The "seller.ack.cancel.order" event is thrown each time ExternalShop notifies
     * the Partner that an Order need to be canceled
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_ACK_CANCEL_ORDER = 'seller.ack.cancel.order';

    /**
     * The "seller.ack.cancel.order.error" event is thrown each time ExternalShop fails
     * on notify the Partner that an Order need to be canceled
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_ACK_CANCEL_ORDER_ERROR = 'seller.ack.cancel.order.error';

    /**
     * The "seller.ship.order" event is thrown each time ExternalShop notifies
     * the Partner when an Order was shipped
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_SHIP_ORDER = 'seller.ship.order';

    /**
     * The "seller.ship.order.error" event is thrown each time ExternalShop fails
     * on notifies that shipped order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const SELLER_SHIP_ORDER_ERROR = 'seller.ship.order.error';

    /**
     * The "market.create.order" event is thrown each time an Order is sent
     * from ExternalShop to Venture.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CREATE_ORDER = 'market.create.order';

    /**
     * The "market.create.order.error" event is thrown each time ExternalShop can't
     * send an Order to Venture.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CREATE_ORDER_ERROR = 'market.create.order.error';

    /**
     * The "market.create.processing.confirm.order" event is thrown each time Dafiti notifies
     * ExternalShop that an Order can be created definitely.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CREATE_PROCESSING_CONFIRM_ORDER = 'market.create.processing.confirm.order';

    /**
     * The "market.create.processing.confirm.order.error" event is thrown each time ExternalShop
     * can't create an Dafiti Order definitely.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CREATE_PROCESSING_CONFIRM_ORDER_ERROR = 'market.create.processing.confirm.order.error';

    /**
     * The "market.create.processing.confirm.order.already" event is thrown each time Dafiti notifies
     * ExternalShop that an Order can be created definitely but it is notified before
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CREATE_PROCESSING_CONFIRM_ORDER_ALREADY = 'market.create.processing.confirm.order.already';

    /**
     * The "market.create.processing.confirm.order.already.error" event is thrown each time ExternalShop
     * can't inform already Dafiti Order definitely.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CREATE_PROCESSING_CONFIRM_ORDER_ALREADY_ERROR = 'market.create.processing.confirm.order.already.error';

    /**
     * The "market.confirm.order" event is thrown each time ExternalShop confirms
     * an Order to Venture.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CONFIRM_ORDER = 'market.confirm.order';

    /**
     * The "market.confirm.order.error" event is thrown each time ExternalShop can't
     * confirm an Order to Venture.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CONFIRM_ORDER_ERROR = 'market.confirm.order.error';

    /**
     * The "market.confirm.reservation.order" event is thrown when Venture requests
     * to Partner remove a reservation of item.
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CONFIRM_RESERVATION_ORDER = 'market.confirm.reservation.order';

    /**
     * The "market.confirm.reservation.order.error" event is thrown when occur error
     * to notify Partner and will be log
     *
     * @var string
     */
    const MARKET_CONFIRM_RESERVATION_ORDER_ERROR = 'market.confirm.reservation.order.error';

    /**
     * The "market.cancel.order" event is thrown each time Venture notifies ExternalShop
     * to cancel an Order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CANCEL_ORDER = "market.cancel.order";

    /**
     * The "market.cancel.order.error" event is thrown each time Venture fail to
     * notify ExternalShop to cancel an Order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CANCEL_ORDER_ERROR = "market.cancel.order.error";

    /**
     * The "market.ack.cancel.order" event is thrown each time
     * market confirms the cancel order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_ACK_CANCEL_ORDER = 'market.ack.cancel.order';

    /**
     * The "market.ack.cancel.order.error" event is thrown each time
     * market can't confirm cancel order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_ACK_CANCEL_ORDER_ERROR = 'market.ack.cancel.order.error';

    /**
     * The "market.cancel.order.already" event is thrown each time a Venture
     * tries to cancel a order that already canceled
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CANCEL_ORDER_ALREADY = 'market.cancel.order.already';

    /**
     * The "market.cancel.order.already.error" event is thrown on Venture fails
     * in cancel an order that already canceled
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_CANCEL_ORDER_ALREADY_ERROR = 'market.cancel.order.already.error';

    /**
     * The "market.ship.order" event is thrown each time
     * market confirms the shipping of order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_SHIP_ORDER = 'market.ship.order';

    /**
     * The "market.ship.order.error" event is thrown each time
     * fails on shipping order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_SHIP_ORDER_ERROR = 'market.ship.order.error';

    /**
     * The "market.deliver.order" event is thrown each time
     * market confirms the deliver of order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_DELIVER_ORDER = 'market.deliver.order';

    /**
     * The "market.deliver.order.error" event is thrown each time
     * fails on shipping order
     *
     * The event listener receives an AppBundle\Application\Order\OrderEvent instance.
     *
     * @var string
     */
    const MARKET_DELIVER_ORDER_ERROR = 'market.deliver.order.error';

}
