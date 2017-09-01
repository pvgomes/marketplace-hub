<?php

namespace AppBundle\Application\Order;

use Symfony\Component\DependencyInjection\ContainerInterface;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Doctrine\DBAL\Exception\DriverException;
use AppBundle\Domain;

class MarketCreateConsumer implements ConsumerInterface
{
    /**
     * @var \Exception
     */
    private $exception;

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(AMQPMessage $message)
    {
        $messageObject = json_decode($message->body);
        try {
            /** @var \AppBundle\Application\CommandBus\CommandBus $commandBus */
            $commandBus = $this->container->get("command_bus");
            $createOrderCommand = new CreateOrderCommand($messageObject->marketKey, $messageObject->sellerKey, ['orderId' => $messageObject->orderId], Domain\Order\Events::MARKET_CREATE_ORDER);
            $commandBus->execute($createOrderCommand);
        } catch (\Exception $exception) {
            // retry?
        }

        return true;
    }

    /**
     * To assist the validation of tests
     *
     * @return \Exception
     */
    public function getException()
    {
        return $this->exception;
    }
}
