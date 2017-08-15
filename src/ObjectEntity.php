<?php

namespace Drupal\ner;

/**
 * NER object.
 *
 * @package Drupal\Ner
 */
class ObjectEntity
{

    /**
     * Object id
     *
     * @var int|string
     */
    private $id;

    /**
     * Object type
     *
     * @var string
     */
    private $type;

    /**
     * Map of map of definition for
     * current object.
     *
     * Explanation:
     *  - 1st map: Sub-object of current object: A partial text or
     *  object of a full object text where NER has definitions.
     *  - 2 nd map: Definitions for current partial of text
     *  of sub-object.
     *
     * [ text|object partial => DefinitionMap ]
     *
     * @var PartialObjectEntity[]
     */
    private $partialObjectMap;

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|string $id
     * @return ObjectEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ObjectEntity
     */
    public function setType(string $type): ObjectEntity
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return PartialObjectEntity[]
     */
    public function getPartialObjectMap(): array
    {
        return $this->partialObjectMap;
    }

    /**
     * @param PartialObjectEntity[] $partialObjectMap
     * @return ObjectEntity
     */
    public function setPartialObjectMap(array $partialObjectMap): ObjectEntity
    {
        $this->partialObjectMap = $partialObjectMap;
        return $this;
    }
}
