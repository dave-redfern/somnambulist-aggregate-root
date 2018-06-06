<?php

namespace Somnambulist\AggregateRoot\Contracts;

use Somnambulist\DomainEvents\Contracts\RaisesDomainEvents;
use Somnambulist\EntityBehaviours\Contracts\UniversallyIdentifiable;
use Somnambulist\EntityBehaviours\Contracts\Identifiable;
use Somnambulist\EntityBehaviours\Contracts\Timestampable;

/**
 * Interface AggregateRoot
 *
 * @package    Somnambulist\AggregateRoot\Contracts
 * @subpackage Somnambulist\AggregateRoot\Contracts\AggregateRoot
 */
interface AggregateRoot extends UniversallyIdentifiable, Identifiable, Timestampable, RaisesDomainEvents
{

}
