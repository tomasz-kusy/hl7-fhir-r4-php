<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapParameterType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Parameter
 */
class StructureMapParameterType extends BackboneElementType
{

    /**
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IdType $valueId
     */
    private $valueId = null;

    /**
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $valueString
     */
    private $valueString = null;

    /**
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * Gets as valueId
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Sets a new valueId
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IdType $valueId
     * @return self
     */
    public function setValueId(\TKusy\Hl7FhirR4\IdType $valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $valueString
     * @return self
     */
    public function setValueString(\TKusy\Hl7FhirR4\StringType $valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(\TKusy\Hl7FhirR4\BooleanType $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(\TKusy\Hl7FhirR4\IntegerType $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueDecimal
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Sets a new valueDecimal
     *
     * Parameter value - variable or literal. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $valueDecimal
     * @return self
     */
    public function setValueDecimal(\TKusy\Hl7FhirR4\DecimalType $valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }


}

