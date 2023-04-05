<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemInstanceType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * XSD Type: InventoryItem.Instance
 */
class InventoryItemInstanceType extends BackboneElementType
{

    /**
     * The identifier for the physical instance, typically a serial number.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The lot or batch number of the item.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $lotNumber
     */
    private $lotNumber = null;

    /**
     * The expiry date or date and time for the product.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $expiry
     */
    private $expiry = null;

    /**
     * The subject that the item is associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The location that the item is associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Adds as identifier
     *
     * The identifier for the physical instance, typically a serial number.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * The identifier for the physical instance, typically a serial number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * The identifier for the physical instance, typically a serial number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * The identifier for the physical instance, typically a serial number.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The identifier for the physical instance, typically a serial number.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * The lot or batch number of the item.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * The lot or batch number of the item.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $lotNumber
     * @return self
     */
    public function setLotNumber(?\TKusy\Hl7Fhir\R5\StringType $lotNumber = null)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as expiry
     *
     * The expiry date or date and time for the product.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Sets a new expiry
     *
     * The expiry date or date and time for the product.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $expiry
     * @return self
     */
    public function setExpiry(?\TKusy\Hl7Fhir\R5\DateTimeType $expiry = null)
    {
        $this->expiry = $expiry;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The subject that the item is associated with.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The subject that the item is associated with.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location that the item is associated with.
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
     * The location that the item is associated with.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }


}

