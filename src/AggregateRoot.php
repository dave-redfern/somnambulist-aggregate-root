<?php

namespace Somnambulist\AggregateRoot;

use Somnambulist\AggregateRoot\Contracts\AggregateRoot as AggregateRootContract;
use Somnambulist\DomainEvents\Traits\RaisesDomainEvents;
use Somnambulist\EntityBehaviours\Traits\Identifiable;
use Somnambulist\EntityBehaviours\Traits\Timestampable;
use Somnambulist\EntityBehaviours\Traits\UniversallyIdentifiable;

/**
 * Class AggregateRoot
 *
 * @package    Somnambulist\AggregateRoot
 * @subpackage Somnambulist\AggregateRoot\AggregateRoot
 */
abstract class AggregateRoot implements AggregateRootContract
{

    use Identifiable;
    use UniversallyIdentifiable;
    use Timestampable;
    use RaisesDomainEvents;

}
