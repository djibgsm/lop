<?php

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\DataFixtures\Factory;

interface WithStatusInterface
{
    /**
     * @return $this
     */
    public function withStatus(string $status): self;
}
