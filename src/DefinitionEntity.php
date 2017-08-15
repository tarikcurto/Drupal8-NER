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
    protected $longId;

    /**
     * Definition class name.
     *
     * @var string
     */
    protected $sortId;

    /**
     * Extraction algorithm.
     *
     * @var string
     */
    protected $extractionAlgorithm;

    /**
     * @var PropertyDefinition[]
     */
    protected $propertyDefinitionMap = [];

    /**
     * @return string
     */
    public function getLongId(): string
    {
        return $this->longId;
    }

    /**
     * @param string $longId
     * @return DefinitionEntity
     */
    public function setLongId(string $longId): DefinitionEntity
    {
        $this->longId = $longId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortId(): string
    {
        return $this->sortId;
    }

    /**
     * @param string $sortId
     * @return DefinitionEntity
     */
    public function setSortId(string $sortId): DefinitionEntity
    {
        $this->sortId = $sortId;
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