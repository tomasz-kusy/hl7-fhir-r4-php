<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TerminologyCapabilitiesParameterType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Parameter
 */
class TerminologyCapabilitiesParameterType extends BackboneElementType
{

    /**
     * Name of the supported expansion parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $name
     */
    private $name = null;

    /**
     * Description of support for parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * Name of the supported expansion parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the supported expansion parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\CodeType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Description of support for parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Description of support for parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $documentation
     * @return self
     */
    public function setDocumentation(?\TKusy\Hl7Fhir\R5\StringType $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

