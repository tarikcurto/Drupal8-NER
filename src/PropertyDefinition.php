<?php

namespace Drupal\ner;

/**
 * NER property definition.
 *
 * @package Drupal\ner
 */
class PropertyDefinition
{

    /**
     * Property key of definition.
     *
     * @var string
     */
    private $property;

    /**
     * Value of definition.
     *
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     * @return PropertyDefinition
     */
    public function setProperty(string $property): PropertyDefinition
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
     * @return PropertyDefinition
     */
    public function setValue(string $value): PropertyDefinition
    {
        $this->value = $value;
        return $this;
    }


}