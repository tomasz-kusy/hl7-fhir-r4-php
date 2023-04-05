<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SupplyRequestParameterType
 *
 * A record of a request to deliver a medication, substance or device used in the healthcare setting to a particular destination for a particular person or organization.
 * XSD Type: SupplyRequest.Parameter
 */
class SupplyRequestParameterType extends BackboneElementType
{

    /**
     * A code or string that identifies the device detail being asserted.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * Gets as code
     *
     * A code or string that identifies the device detail being asserted.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code or string that identifies the device detail being asserted.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $valueRange
     * @return self
     */
    public function setValueRange(?\TKusy\Hl7Fhir\R5\RangeType $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $valueBoolean = null)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }


}

