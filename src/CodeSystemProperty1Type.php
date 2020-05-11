<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeSystemProperty1Type
 *
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 * XSD Type: CodeSystem.Property1
 */
class CodeSystemProperty1Type extends BackboneElementType
{

    /**
     * A code that is a reference to CodeSystem.property.code.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeType $valueCode
     */
    private $valueCode = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var string $valueString
     */
    private $valueString = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var \integer $valueInteger
     */
    private $valueInteger = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var bool $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The value of this property. (choose any one of value*, but only one)
     *
     * @var float $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * Gets as code
     *
     * A code that is a reference to CodeSystem.property.code.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that is a reference to CodeSystem.property.code.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueCode
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeType $valueCode
     * @return self
     */
    public function setValueCode(\TKusy\Hl7FhirR4\CodeType $valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * Gets as valueCoding
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * Sets a new valueCoding
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodingType $valueCoding
     * @return self
     */
    public function setValueCoding(\TKusy\Hl7FhirR4\CodingType $valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param string $valueString
     * @return self
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return \integer
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param \integer $valueInteger
     * @return self
     */
    public function setValueInteger(\integer $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return bool
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param bool $valueBoolean
     * @return self
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueDateTime
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(\TKusy\Hl7FhirR4\DateTimeType $valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valueDecimal
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @return float
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * The value of this property. (choose any one of value*, but only one)
     *
     * @param float $valueDecimal
     * @return self
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }


}

