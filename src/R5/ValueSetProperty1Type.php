<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetProperty1Type
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Property1
 */
class ValueSetProperty1Type extends BackboneElementType
{

    /**
     * A code that is a reference to ValueSet.expansion.property.code.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeType $valueCode
     */
    private $valueCode = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * A subproperty value for this concept.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetSubPropertyType[] $subProperty
     */
    private $subProperty = null;

    /**
     * Gets as code
     *
     * A code that is a reference to ValueSet.expansion.property.code.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that is a reference to ValueSet.expansion.property.code.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCode
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $valueCode
     * @return self
     */
    public function setValueCode(?\TKusy\Hl7Fhir\R5\CodeType $valueCode = null)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * Sets a new valueCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     * @return self
     */
    public function setValueCoding(?\TKusy\Hl7Fhir\R5\CodingType $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
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
     * Adds as subProperty
     *
     * A subproperty value for this concept.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetSubPropertyType $subProperty
     */
    public function addToSubProperty(\TKusy\Hl7Fhir\R5\ValueSetSubPropertyType $subProperty)
    {
        $this->subProperty[] = $subProperty;
        return $this;
    }

    /**
     * isset subProperty
     *
     * A subproperty value for this concept.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubProperty($index)
    {
        return isset($this->subProperty[$index]);
    }

    /**
     * unset subProperty
     *
     * A subproperty value for this concept.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubProperty($index)
    {
        unset($this->subProperty[$index]);
    }

    /**
     * Gets as subProperty
     *
     * A subproperty value for this concept.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetSubPropertyType[]
     */
    public function getSubProperty()
    {
        return $this->subProperty;
    }

    /**
     * Sets a new subProperty
     *
     * A subproperty value for this concept.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetSubPropertyType[] $subProperty
     * @return self
     */
    public function setSubProperty(array $subProperty = null)
    {
        $this->subProperty = $subProperty;
        return $this;
    }


}

