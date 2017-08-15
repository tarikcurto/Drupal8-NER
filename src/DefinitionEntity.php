<?php

namespace Drupal\ner;

/**
 * NER definition.
 *
 * @package Drupal\ner
 */
class DefinitionEntity
{

    /**
     * Definition class name + extraction algorithm.
     *
     * @var string
     */
    private $definition;

    /**
     * Definition class name.
     *
     * @var string
     */
    private $definitionSort;

    /**
     * Extraction algorithm.
     *
     * @var string
     */
    private $extractionAlgorithm;

    /**
     * @var PropertyDefinition[]
     */
    private $propertyDefinitionMap;

    /**
     * @return string
     */
    public function getDefinition(): string
    {
        return $this->definition;
    }

    /**
     * @param string $definition
     * @return DefinitionEntity
     */
    public function setDefinition(string $definition): DefinitionEntity
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefinitionSort(): string
    {
        return $this->definitionSort;
    }

    /**
     * @param string $definitionSort
     * @return DefinitionEntity
     */
    public function setDefinitionSort(string $definitionSort): DefinitionEntity
    {
        $this->definitionSort = $definitionSort;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtractionAlgorithm(): string
    {
        return $this->extractionAlgorithm;
    }

    /**
     * @param string $extractionAlgorithm
     * @return DefinitionEntity
     */
    public function setExtractionAlgorithm(string $extractionAlgorithm): DefinitionEntity
    {
        $this->extractionAlgorithm = $extractionAlgorithm;
        return $this;
    }

    /**
     * @return PropertyDefinition[]
     */
    public function getPropertyDefinitionMap(): array
    {
        return $this->propertyDefinitionMap;
    }

    /**
     * @param PropertyDefinition[] $propertyDefinitionMap
     * @return DefinitionEntity
     */
    public function setPropertyDefinitionMap(array $propertyDefinitionMap): DefinitionEntity
    {
        $this->propertyDefinitionMap = $propertyDefinitionMap;
        return $this;
    }
}