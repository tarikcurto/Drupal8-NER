<?php

namespace Drupal\Ner;

/**
 * NER data group
 *
 * @package Drupal\Ner
 */
class ObjectEntity {

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $text;

    /**
     * @var DefinitionMap
     */
    private $source;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return DefinitionMap
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param DefinitionMap $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }


}