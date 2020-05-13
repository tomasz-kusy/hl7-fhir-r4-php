<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ParameterDefinitionType
 *
 * The parameters to the module. This collection specifies both the input and output parameters. Input parameters are provided by the caller as part of the $evaluate operation. Output parameters are included in the GuidanceResponse.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ParameterDefinition
 */
class ParameterDefinitionType extends ElementType
{

    /**
     * The name of the parameter used to allow access to the value of the parameter in evaluation contexts.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $name
     */
    private $name = null;

    /**
     * Whether the parameter is input or output for the module.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $use
     */
    private $use = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     *
     * @var \TKusy\Hl7Fhir\R4\IntegerType $min
     */
    private $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $max
     */
    private $max = null;

    /**
     * A brief discussion of what the parameter is for and how it is used by the module.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $documentation
     */
    private $documentation = null;

    /**
     * The type of the parameter.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $type
     */
    private $type = null;

    /**
     * If specified, this indicates a profile that the input data must conform to, or that the output data will conform to.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Gets as name
     *
     * The name of the parameter used to allow access to the value of the parameter in evaluation contexts.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the parameter used to allow access to the value of the parameter in evaluation contexts.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\CodeType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as use
     *
     * Whether the parameter is input or output for the module.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * Whether the parameter is input or output for the module.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7Fhir\R4\CodeType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as min
     *
     * The minimum number of times this parameter SHALL appear in the request or response.
     *
     * @return \TKusy\Hl7Fhir\R4\IntegerType
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * The minimum number of times this parameter SHALL appear in the request or response.
     *
     * @param \TKusy\Hl7Fhir\R4\IntegerType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7Fhir\R4\IntegerType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * The maximum number of times this element is permitted to appear in the request or response.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * The maximum number of times this element is permitted to appear in the request or response.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $max
     * @return self
     */
    public function setMax(\TKusy\Hl7Fhir\R4\StringType $max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * A brief discussion of what the parameter is for and how it is used by the module.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * A brief discussion of what the parameter is for and how it is used by the module.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7Fhir\R4\StringType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the parameter.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the parameter.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as profile
     *
     * If specified, this indicates a profile that the input data must conform to, or that the output data will conform to.
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * If specified, this indicates a profile that the input data must conform to, or that the output data will conform to.
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7Fhir\R4\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

