<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryReportInventoryListingType
 *
 * A report of inventory or stock items.
 * XSD Type: InventoryReport.InventoryListing
 */
class InventoryReportInventoryListingType extends BackboneElementType
{

    /**
     * Location of the inventory items.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * The status of the items.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $itemStatus
     */
    private $itemStatus = null;

    /**
     * The date and time when the items were counted.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $countingDateTime
     */
    private $countingDateTime = null;

    /**
     * The item or items in this listing.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryReportItemType[] $item
     */
    private $item = null;

    /**
     * Gets as location
     *
     * Location of the inventory items.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Location of the inventory items.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as itemStatus
     *
     * The status of the items.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }

    /**
     * Sets a new itemStatus
     *
     * The status of the items.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $itemStatus
     * @return self
     */
    public function setItemStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $itemStatus = null)
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }

    /**
     * Gets as countingDateTime
     *
     * The date and time when the items were counted.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCountingDateTime()
    {
        return $this->countingDateTime;
    }

    /**
     * Sets a new countingDateTime
     *
     * The date and time when the items were counted.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $countingDateTime
     * @return self
     */
    public function setCountingDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $countingDateTime = null)
    {
        $this->countingDateTime = $countingDateTime;
        return $this;
    }

    /**
     * Adds as item
     *
     * The item or items in this listing.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InventoryReportItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\InventoryReportItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * The item or items in this listing.
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
     * The item or items in this listing.
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
     * The item or items in this listing.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryReportItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * The item or items in this listing.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryReportItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}

