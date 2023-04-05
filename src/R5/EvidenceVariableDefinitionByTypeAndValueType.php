<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceVariableDefinitionByTypeAndValueType
 *
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is about.
 * XSD Type: EvidenceVariable.DefinitionByTypeAndValue
 */
class EvidenceVariableDefinitionByTypeAndValueType extends BackboneElementType
{

    /**
     * Used to express the type of characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Method for how the characteristic value was determined.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $method
     */
    private $method = null;

    /**
     * Device used for determining characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdType $valueId
     */
    private $valueId = null;

    /**
     * Defines the reference point for comparison when valueQuantity or valueRange is not compared to zero.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $offset
     */
    private $offset = null;

    /**
     * Gets as type
     *
     * Used to express the type of characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to express the type of characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as method
     *
     * Method for how the characteristic value was determined.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     */
    public function addToMethod(\TKusy\Hl7Fhir\R5\CodeableConceptType $method)
    {
        $this->method[] = $method;
        return $this;
    }

    /**
     * isset method
     *
     * Method for how the characteristic value was determined.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMethod($index)
    {
        return isset($this->method[$index]);
    }

    /**
     * unset method
     *
     * Method for how the characteristic value was determined.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMethod($index)
    {
        unset($this->method[$index]);
    }

    /**
     * Gets as method
     *
     * Method for how the characteristic value was determined.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * Method for how the characteristic value was determined.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $method
     * @return self
     */
    public function setMethod(array $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as device
     *
     * Device used for determining characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Device used for determining characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(?\TKusy\Hl7Fhir\R5\ReferenceType $device = null)
    {
        $this->device = $device;
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
     * Gets as valueReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(?\TKusy\Hl7Fhir\R5\ReferenceType $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as valueId
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Sets a new valueId
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $valueId
     * @return self
     */
    public function setValueId(?\TKusy\Hl7Fhir\R5\IdType $valueId = null)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * Gets as offset
     *
     * Defines the reference point for comparison when valueQuantity or valueRange is not compared to zero.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * Defines the reference point for comparison when valueQuantity or valueRange is not compared to zero.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $offset
     * @return self
     */
    public function setOffset(?\TKusy\Hl7Fhir\R5\CodeableConceptType $offset = null)
    {
        $this->offset = $offset;
        return $this;
    }


}

