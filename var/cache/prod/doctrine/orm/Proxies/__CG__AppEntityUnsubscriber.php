<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Unsubscriber extends \App\Entity\Unsubscriber implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'firstName' => [parent::class, 'firstName', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'lastName' => [parent::class, 'lastName', null],
        "\0".parent::class."\0".'subscribedAt' => [parent::class, 'subscribedAt', null],
        "\0".parent::class."\0".'unsubscribeReason' => [parent::class, 'unsubscribeReason', null],
        "\0".parent::class."\0".'unsubscribedAt' => [parent::class, 'unsubscribedAt', null],
        'email' => [parent::class, 'email', null],
        'firstName' => [parent::class, 'firstName', null],
        'id' => [parent::class, 'id', null],
        'lastName' => [parent::class, 'lastName', null],
        'subscribedAt' => [parent::class, 'subscribedAt', null],
        'unsubscribeReason' => [parent::class, 'unsubscribeReason', null],
        'unsubscribedAt' => [parent::class, 'unsubscribedAt', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
