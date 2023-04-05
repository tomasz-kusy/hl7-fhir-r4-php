<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionPropertyType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Property
 */
class DeviceDefinitionPropertyType extends BackboneElementType
{

    /**
     * Code that specifies the property such as a resolution or color being represented.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * Gets as type
     *
     * Code that specifies the property such as a resolution or color being represented.
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
     * Code that specifies the property such as a resolution or color being represented.
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
     * Gets as valueString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $valueString
     * @return self
     */
    public function setValueString(?\TKusy\Hl7Fhir\R5\StringType $valueString = null)
    {
        $this->valueString = $valueString;
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
     * Gets as valueInteger
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(?\TKusy\Hl7Fhir\R5\IntegerType $valueInteger = null)
    {
        $this->valueInteger = $valueInteger;
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
     * Gets as valueAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }


}

