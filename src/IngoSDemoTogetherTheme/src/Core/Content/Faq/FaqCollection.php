<?php
declare(strict_types=1);

namespace IngoS\DemoTogetherTheme\Core\Content\Faq;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class FaqCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return FaqEntity::class;
    }
}