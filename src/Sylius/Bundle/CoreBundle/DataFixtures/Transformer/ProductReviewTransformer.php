<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\DataFixtures\Transformer;

use Psr\EventDispatcher\EventDispatcherInterface;
use Sylius\Bundle\CoreBundle\DataFixtures\Factory\CustomerFactoryInterface;

final class ProductReviewTransformer implements ProductReviewTransformerInterface
{
    use TransformProductAttributeTrait;
    use TransformCustomerAttributeTrait;

    public function __construct(private EventDispatcherInterface $eventDispatcher)
    {
    }

    public function transform(array $attributes): array
    {
        $attributes = $this->transformCustomerAttribute($this->eventDispatcher, $attributes, 'author');

        return $this->transformProductAttribute($this->eventDispatcher, $attributes);
    }
}
