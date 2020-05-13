<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CapabilityStatementInteraction1Type
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Interaction1
 */
class CapabilityStatementInteraction1Type extends BackboneElementType
{

    /**
     * A coded identifier of the operation, supported by the system.
     *
     * @var \TKusy\Hl7Fhir\R4\SystemRestfulInteractionType $code
     */
    private $code = null;

    /**
     * Guidance specific to the implementation of this operation, such as limitations on the kind of transactions allowed, or information about system wide search is implemented.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Gets as code
     *
     * A coded identifier of the operation, supported by the system.
     *
     * @return \TKusy\Hl7Fhir\R4\SystemRestfulInteractionType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A coded identifier of the operation, supported by the system.
     *
     * @param \TKusy\Hl7Fhir\R4\SystemRestfulInteractionType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\SystemRestfulInteractionType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Guidance specific to the implementation of this operation, such as limitations on the kind of transactions allowed, or information about system wide search is implemented.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Guidance specific to the implementation of this operation, such as limitations on the kind of transactions allowed, or information about system wide search is implemented.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7Fhir\R4\MarkdownType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

