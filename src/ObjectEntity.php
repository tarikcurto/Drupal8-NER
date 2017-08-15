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
    protected $id;

    /**
     * Object type
     *
     * @var string
     */
    protected $type;

    /**
     * Analyzed content of current object.
     *
     * @var string|object
     */
    protected $content;

    /**
     * Map of map of definition for
     * current object.
     *
     * Explanation:
     *  - 1st map: Sub-object of current object: A partial text or
     *  object of a full object text where NER has definitions.
     *  Don't set id, type, subObject properties.
     *  - 2 nd map: Definitions for current partial of text
     *  of sub-object. Use $definitionMap property.
     *
     * If you don´t have a partial object for current object:
     *  $partialObjectMap = [] || null
     *  $definitionMap = [...]
     *
     * [ text|object partial => DefinitionMap ]
     *
     * @var ObjectEntity[]
     */
    protected $subObjectMap;

    /**
     * Map of definitions for current
     * text full || partial.
     *
     * [ definitionClassName => Definition ]
     *
     * @var DefinitionEntity[]
     */
    protected $definitionMap;

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
     * @return object|string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param object|string $content
     * @return ObjectEntity
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return ObjectEntity[]
     */
    public function getSubObjectMap(): array
    {
        return $this->subObjectMap;
    }

    /**
     * @param ObjectEntity[] $subObjectMap
     * @return ObjectEntity
     */
    public function setSubObjectMap(array $subObjectMap): ObjectEntity
    {
        $this->subObjectMap = $subObjectMap;
        return $this;
    }

    /**
     * @return DefinitionEntity[]
     */
    public function getDefinitionMap(): array
    {
        return $this->definitionMap;
    }

    /**
     * @param DefinitionEntity[] $definitionMap
     * @return ObjectEntity
     */
    public function setDefinitionMap(array $definitionMap): ObjectEntity
    {
        $this->definitionMap = $definitionMap;
        return $this;
    }
}
