<?php
declare(strict_types=1);

namespace IngoS\DemoTogetherTheme\Core\Content\Faq;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class FaqDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'faq';
    protected $technicalName;
    protected $question;
    protected $answer;

    // TODO does the order of variables, fields, functions matter?
    // as Database fields, possible parameters?

    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    // TODO why is getQuestion marked as unused, but not getTechnicalName?
    // TODO why is $answer makred as unused but not $question?
    // or is it a bug and it only marks the latest occurence?

    // TODO add setters for Q,A
    public function setTechnicalName(string $technicalName)
    {
        $this->technicalName = $technicalName;
    }

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return FaqEntity::class;
    }

    public function getCollectionClass(): string
    {
        return FaqCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            new StringField('name', 'name'),
            new CreatedAtField(),
            new UpdatedAtField(),
            // TODO add $technicalName, $question, $answer here?
        ]);
    }
}