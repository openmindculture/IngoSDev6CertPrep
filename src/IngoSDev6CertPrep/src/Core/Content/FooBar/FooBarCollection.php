<?php declare(strict_types=1);

namespace IngoS\Dev6CertPrep\Core\Content\FooBar;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(FooBarEntity $entity)
 * @method void set(string $key, FooBarEntity $entity)
 * @method FooBarEntity[] getIterator()
 * @method FooBarEntity[] getElements()
 * @method FooBarEntity|null get(string $key)
 * @method FooBarEntity|null first()
 * @method FooBarEntity|null last()
 */
class FooBarCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return FooBarEntity::class;
    }
}
