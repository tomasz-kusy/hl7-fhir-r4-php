<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuidePage1Type
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Page1
 */
class ImplementationGuidePage1Type extends BackboneElementType
{

    /**
     * Relative path to the page.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Label for the page intended for human display.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The name of an anchor available on the page.
     *
     * @var string[] $anchor
     */
    private $anchor = null;

    /**
     * Gets as name
     *
     * Relative path to the page.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Relative path to the page.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * Label for the page intended for human display.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Label for the page intended for human display.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as anchor
     *
     * The name of an anchor available on the page.
     *
     * @return self
     * @param string $anchor
     */
    public function addToAnchor($anchor)
    {
        $this->anchor[] = $anchor;
        return $this;
    }

    /**
     * isset anchor
     *
     * The name of an anchor available on the page.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnchor($index)
    {
        return isset($this->anchor[$index]);
    }

    /**
     * unset anchor
     *
     * The name of an anchor available on the page.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnchor($index)
    {
        unset($this->anchor[$index]);
    }

    /**
     * Gets as anchor
     *
     * The name of an anchor available on the page.
     *
     * @return string[]
     */
    public function getAnchor()
    {
        return $this->anchor;
    }

    /**
     * Sets a new anchor
     *
     * The name of an anchor available on the page.
     *
     * @param string[] $anchor
     * @return self
     */
    public function setAnchor(array $anchor)
    {
        $this->anchor = $anchor;
        return $this;
    }


}

