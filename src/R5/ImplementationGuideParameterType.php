<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImplementationGuideParameterType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Parameter
 */
class ImplementationGuideParameterType extends BackboneElementType
{

    /**
     * A tool-specific code that defines the parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $code
     */
    private $code = null;

    /**
     * Value for named type.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as code
     *
     * A tool-specific code that defines the parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A tool-specific code that defines the parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodingType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * Value for named type.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Value for named type.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

