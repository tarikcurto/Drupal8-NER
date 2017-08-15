<?php

namespace Drupal\ner;

/**
 * NER property definition.
 *
 * @package Drupal\ner
 */
class PropertyDefinitionEntity
{

    /**
     * Property key of definition.
     *
     * @var string
     */
    protected $property;

    /**
     * Value of definition.
     *
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     * @return PropertyDefinitionEntity
     */
    public function setProperty(string $property): PropertyDefinitionEntity
    {
        $this->property = $property;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return PropertyDefinitionEntity
     */
    public function setValue(string $value): PropertyDefinitionEntity
    {
        $this->value = $value;
        return $this;
    }


}