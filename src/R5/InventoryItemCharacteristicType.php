<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemCharacteristicType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * XSD Type: InventoryItem.Characteristic
 */
class InventoryItemCharacteristicType extends BackboneElementType
{

    /**
     * The type of characteristic that is being defined.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $characteristicType
     */
    private $characteristicType = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UrlType $valueUrl
     */
    private $valueUrl = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AnnotationType $valueAnnotation
     */
    private $valueAnnotation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AddressType $valueAddress
     */
    private $valueAddress = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $valueDuration
     */
    private $valueDuration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * Gets as characteristicType
     *
     * The type of characteristic that is being defined.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCharacteristicType()
    {
        return $this->characteristicType;
    }

    /**
     * Sets a new characteristicType
     *
     * The type of characteristic that is being defined.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $characteristicType
     * @return self
     */
    public function setCharacteristicType(\TKusy\Hl7Fhir\R5\CodeableConceptType $characteristicType)
    {
        $this->characteristicType = $characteristicType;
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
     * Gets as valueDecimal
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $valueDecimal
     * @return self
     */
    public function setValueDecimal(?\TKusy\Hl7Fhir\R5\DecimalType $valueDecimal = null)
    {
        $this->valueDecimal = $valueDecimal;
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
     * Gets as valueUrl
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }

    /**
     * Sets a new valueUrl
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $valueUrl
     * @return self
     */
    public function setValueUrl(?\TKusy\Hl7Fhir\R5\UrlType $valueUrl = null)
    {
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * Gets as valueDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime = null)
    {
        $this->valueDateTime = $valueDateTime;
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
     * Gets as valueRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(?\TKusy\Hl7Fhir\R5\RatioType $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueAnnotation
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * Sets a new valueAnnotation
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $valueAnnotation
     * @return self
     */
    public function setValueAnnotation(?\TKusy\Hl7Fhir\R5\AnnotationType $valueAnnotation = null)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * Gets as valueAddress
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * Sets a new valueAddress
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType $valueAddress
     * @return self
     */
    public function setValueAddress(?\TKusy\Hl7Fhir\R5\AddressType $valueAddress = null)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * Gets as valueDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * Sets a new valueDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $valueDuration
     * @return self
     */
    public function setValueDuration(?\TKusy\Hl7Fhir\R5\DurationType $valueDuration = null)
    {
        $this->valueDuration = $valueDuration;
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


}

