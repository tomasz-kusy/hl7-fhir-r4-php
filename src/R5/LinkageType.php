<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing LinkageType
 *
 * Identifies two or more records (resource instances) that refer to the same real-world "occurrence".
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Linkage
 */
class LinkageType extends DomainResourceType
{

    /**
     * Indicates whether the asserted set of linkages are considered to be "in effect".
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * Identifies the user or organization responsible for asserting the linkages as well as the user or organization who establishes the context in which the nature of each linkage is evaluated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * Identifies which record considered as the reference to the same real-world occurrence as well as how the items should be evaluated within the collection of linked items.
     *
     * @var \TKusy\Hl7Fhir\R5\LinkageItemType[] $item
     */
    private $item = null;

    /**
     * Gets as active
     *
     * Indicates whether the asserted set of linkages are considered to be "in effect".
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Indicates whether the asserted set of linkages are considered to be "in effect".
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $active
     * @return self
     */
    public function setActive(?\TKusy\Hl7Fhir\R5\BooleanType $active = null)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as author
     *
     * Identifies the user or organization responsible for asserting the linkages as well as the user or organization who establishes the context in which the nature of each linkage is evaluated.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Identifies the user or organization responsible for asserting the linkages as well as the user or organization who establishes the context in which the nature of each linkage is evaluated.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as item
     *
     * Identifies which record considered as the reference to the same real-world occurrence as well as how the items should be evaluated within the collection of linked items.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\LinkageItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\LinkageItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Identifies which record considered as the reference to the same real-world occurrence as well as how the items should be evaluated within the collection of linked items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Identifies which record considered as the reference to the same real-world occurrence as well as how the items should be evaluated within the collection of linked items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Identifies which record considered as the reference to the same real-world occurrence as well as how the items should be evaluated within the collection of linked items.
     *
     * @return \TKusy\Hl7Fhir\R5\LinkageItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Identifies which record considered as the reference to the same real-world occurrence as well as how the items should be evaluated within the collection of linked items.
     *
     * @param \TKusy\Hl7Fhir\R5\LinkageItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

