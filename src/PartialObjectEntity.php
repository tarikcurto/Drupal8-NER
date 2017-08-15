<?php

namespace Drupal\ner;

/**
 * NER partial object.
 *
 * @package Drupal\ner
 */
/**
 * Class PartialObjectEntity
 * @package Drupal\ner
 */
class PartialObjectEntity
{

    /**
     * Text or object partial of a object where
     * NER has occurrences (definitions).
     *
     * @var string|object
     */
    private $objectPartial;

    /**
     * Map of definitions for current
     * text partial.
     *
     * [ definitionClassName => Definition ]
     *
     * @var DefinitionEntity]
     */
    private $definitionMap;

    /**
     * @return object|string
     */
    public function getObjectPartial()
    {
        return $this->objectPartial;
    }

    /**
     * @param object|string $objectPartial
     * @return PartialObjectEntity
     */
    public function setObjectPartial($objectPartial)
    {
        $this->objectPartial = $objectPartial;
        return $this;
    }

    /**
     * @return DefinitionEntity
     */
    public function getDefinitionMap(): DefinitionEntity
    {
        return $this->definitionMap;
    }

    /**
     * @param DefinitionEntity $definitionMap
     * @return PartialObjectEntity
     */
    public function setDefinitionMap(DefinitionEntity $definitionMap): PartialObjectEntity
    {
        $this->definitionMap = $definitionMap;
        return $this;
    }


}