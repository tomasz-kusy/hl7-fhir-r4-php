<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesParameterType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Parameter
 */
class TerminologyCapabilitiesParameterType extends BackboneElementType
{

    /**
     * Expansion Parameter name.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $name
     */
    private $name = null;

    /**
     * Description of support for parameter.
     *
     * @var \TKusy\Hl7FhirR4\StringType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * Expansion Parameter name.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Expansion Parameter name.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\CodeType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Description of support for parameter.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\StringType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

