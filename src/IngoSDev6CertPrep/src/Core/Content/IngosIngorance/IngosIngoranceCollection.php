<?php declare(strict_types=1);

namespace IngoS\Dev6CertPrep\Core\Content\IngosIngorance;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(IngosIngoranceEntity $entity)
 * @method void set(string $key, IngosIngoranceEntity $entity)
 * @method IngosIngoranceEntity[] getIterator()
 * @method IngosIngoranceEntity[] getElements()
 * @method IngosIngoranceEntity|null get(string $key)
 * @method IngosIngoranceEntity|null first()
 * @method IngosIngoranceEntity|null last()
 */
class IngosIngoranceCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return IngosIngoranceEntity::class;
    }
}
