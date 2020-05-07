<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SupplyDeliverySuppliedItemType
 *
 * Record of delivery of what is supplied.
 * XSD Type: SupplyDelivery.SuppliedItem
 */
class SupplyDeliverySuppliedItemType extends BackboneElementType
{

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * Gets as quantity
     *
     * The amount of supply that has been dispensed. Includes unit of measure.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of supply that has been dispensed. Includes unit of measure.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as itemCodeableConcept
     *
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Gets as itemReference
     *
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(\TKusy\Hl7FhirR4\ReferenceType $itemReference)
    {
        $this->itemReference = $itemReference;
        return $this;
    }


}

