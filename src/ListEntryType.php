<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ListEntryType
 *
 * A list is a curated collection of resources.
 * XSD Type: List.Entry
 */
class ListEntryType extends BackboneElementType
{

    /**
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $flag
     */
    private $flag = null;

    /**
     * True if this item is marked as deleted in the list.
     *
     * @var bool $deleted
     */
    private $deleted = null;

    /**
     * When this item was added to the list.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * A reference to the actual resource from which data was derived.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $item
     */
    private $item = null;

    /**
     * Gets as flag
     *
     * The flag allows the system constructing the list to indicate the role and significance of the item in the list.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $flag
     * @return self
     */
    public function setFlag(\TKusy\Hl7FhirR4\CodeableConceptType $flag)
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Gets as deleted
     *
     * True if this item is marked as deleted in the list.
     *
     * @return bool
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
     * @param bool $deleted
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Gets as date
     *
     * When this item was added to the list.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as item
     *
     * A reference to the actual resource from which data was derived.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $item
     * @return self
     */
    public function setItem(\TKusy\Hl7FhirR4\ReferenceType $item)
    {
        $this->item = $item;
        return $this;
    }


}

