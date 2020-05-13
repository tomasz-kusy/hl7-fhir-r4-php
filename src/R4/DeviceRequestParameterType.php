<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing DeviceRequestParameterType
 *
 * Represents a request for a patient to employ a medical device. The device may be an implantable device, or an external assistive device, such as a walker.
 * XSD Type: DeviceRequest.Parameter
 */
class DeviceRequestParameterType extends BackboneElementType
{

    /**
     * A code or string that identifies the device detail being asserted.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * Gets as code
     *
     * A code or string that identifies the device detail being asserted.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(\TKusy\Hl7Fhir\R4\QuantityType $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $valueRange
     * @return self
     */
    public function setValueRange(\TKusy\Hl7Fhir\R4\RangeType $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The value of the device detail. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(\TKusy\Hl7Fhir\R4\BooleanType $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }


}

