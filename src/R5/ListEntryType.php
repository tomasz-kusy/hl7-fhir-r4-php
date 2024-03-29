<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ListEntryType
 *
 * A List is a curated collection of resources, for things such as problem lists, allergy lists, facility list, organization list, etc.
 * XSD Type: List.Entry
 */
class ListEntryType extends BackboneElementType
{

    /**
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $flag
     */
    private $flag = null;

    /**
     * True if this item is marked as deleted in the list.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $deleted
     */
    private $deleted = null;

    /**
     * When this item was added to the list.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * A reference to the actual resource from which data was derived.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $item
     */
    private $item = null;

    /**
     * Gets as flag
     *
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets a new flag
     *
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $flag
     * @return self
     */
    public function setFlag(?\TKusy\Hl7Fhir\R5\CodeableConceptType $flag = null)
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Gets as deleted
     *
     * True if this item is marked as deleted in the list.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Sets a new deleted
     *
     * True if this item is marked as deleted in the list.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $deleted
     * @return self
     */
    public function setDeleted(?\TKusy\Hl7Fhir\R5\BooleanType $deleted = null)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Gets as date
     *
     * When this item was added to the list.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * When this item was added to the list.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as item
     *
     * A reference to the actual resource from which data was derived.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * A reference to the actual resource from which data was derived.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $item
     * @return self
     */
    public function setItem(\TKusy\Hl7Fhir\R5\ReferenceType $item)
    {
        $this->item = $item;
        return $this;
    }


}

