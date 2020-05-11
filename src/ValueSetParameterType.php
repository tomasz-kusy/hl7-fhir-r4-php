<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ValueSetParameterType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Parameter
 */
class ValueSetParameterType extends BackboneElementType
{

    /**
     * Name of the input parameter to the $expand operation; may be a server-assigned name for additional default or other server-supplied parameters used to control the expansion process.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $valueString
     */
    private $valueString = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $valueDecimal
     */
    private $valueDecimal = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeType $valueCode
     */
    private $valueCode = null;

    /**
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * Gets as name
     *
     * Name of the input parameter to the $expand operation; may be a server-assigned name for additional default or other server-supplied parameters used to control the expansion process.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the input parameter to the $expand operation; may be a server-assigned name for additional default or other server-supplied parameters used to control the expansion process.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $valueDecimal
     * @return self
     */
    public function setValueDecimal(\TKusy\Hl7FhirR4\DecimalType $valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * Gets as valueUri
     *
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * Sets a new valueUri
     *
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UriType $valueUri
     * @return self
     */
    public function setValueUri(\TKusy\Hl7FhirR4\UriType $valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * Gets as valueCode
     *
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
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
     * Gets as valueDateTime
     *
     * The value of the parameter. (choose any one of value*, but only one)
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
     * The value of the parameter. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(\TKusy\Hl7FhirR4\DateTimeType $valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }


}

