<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Cache
 * @subpackage Storage
 */

namespace Zend\Cache\Storage;

use ArrayObject,
    Zend\EventManager\Event as BaseEvent;

/**
 * @category   Zend
 * @package    Zend_Cache
 * @subpackage Storage
 */
class Event extends BaseEvent
{
    /**
     * Constructor
     *
     * Accept a storage adapter and its parameters.
     *
     * @param  string           $name Event name
     * @param  StorageInterface $storage
     * @param  ArrayObject      $params
     * @return void
     */
    public function __construct($name, StorageInterface $storage, ArrayObject $params)
    {
        parent::__construct($name, $storage, $params);
    }

    /**
     * Set the event target/context
     *
     * @param  StorageInterface $target
     * @return Event
     * @see    Zend\EventManager\Event::setTarget()
     */
    public function setTarget($target)
    {
        return $this->setStorage($target);
    }

    /**
     * Alias of setTarget
     *
     * @param  StorageInterface $storage
     * @return Event
     * @see    Zend\EventManager\Event::setTarget()
     */
    public function setStorage(StorageInterface $storage)
    {
        $this->target = $storage;
        return $this;
    }

    /**
     * Alias of getTarget
     *
     * @return StorageInterface
     */
    public function getStorage()
    {
        return $this->getTarget();
    }
}
