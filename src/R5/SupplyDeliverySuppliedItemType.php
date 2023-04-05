<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SupplyDeliverySuppliedItemType
 *
 * Record of delivery of what is supplied.
 * XSD Type: SupplyDelivery.SuppliedItem
 */
class SupplyDeliverySuppliedItemType extends BackboneElementType
{

    /**
     * The amount of the item that has been supplied. Unit of measure may be included.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * Gets as quantity
     *
     * The amount of the item that has been supplied. Unit of measure may be included.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of the item that has been supplied. Unit of measure may be included.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as itemCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept = null)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Gets as itemReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(?\TKusy\Hl7Fhir\R5\ReferenceType $itemReference = null)
    {
        $this->itemReference = $itemReference;
        return $this;
    }


}

