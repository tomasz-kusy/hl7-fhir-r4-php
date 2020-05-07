<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementInteractionType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Interaction
 */
class CapabilityStatementInteractionType extends BackboneElementType
{

    /**
     * Coded identifier of the operation, supported by the system resource.
     *
     * @var \TKusy\Hl7FhirR4\TypeRestfulInteractionType $code
     */
    private $code = null;

    /**
     * Guidance specific to the implementation of this operation, such as 'delete is a logical delete' or 'updates are only allowed with version id' or 'creates permitted from pre-authorized certificates only'.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Gets as code
     *
     * Coded identifier of the operation, supported by the system resource.
     *
     * @return \TKusy\Hl7FhirR4\TypeRestfulInteractionType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Coded identifier of the operation, supported by the system resource.
     *
     * @param \TKusy\Hl7FhirR4\TypeRestfulInteractionType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\TypeRestfulInteractionType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Guidance specific to the implementation of this operation, such as 'delete is a logical delete' or 'updates are only allowed with version id' or 'creates permitted from pre-authorized certificates only'.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Guidance specific to the implementation of this operation, such as 'delete is a logical delete' or 'updates are only allowed with version id' or 'creates permitted from pre-authorized certificates only'.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\MarkdownType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

