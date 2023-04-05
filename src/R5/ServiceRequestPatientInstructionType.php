<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ServiceRequestPatientInstructionType
 *
 * A record of a request for service such as diagnostic investigations, treatments, or operations to be performed.
 * XSD Type: ServiceRequest.PatientInstruction
 */
class ServiceRequestPatientInstructionType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $instructionMarkdown
     */
    private $instructionMarkdown = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $instructionReference
     */
    private $instructionReference = null;

    /**
     * Gets as instructionMarkdown
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getInstructionMarkdown()
    {
        return $this->instructionMarkdown;
    }

    /**
     * Sets a new instructionMarkdown
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $instructionMarkdown
     * @return self
     */
    public function setInstructionMarkdown(?\TKusy\Hl7Fhir\R5\MarkdownType $instructionMarkdown = null)
    {
        $this->instructionMarkdown = $instructionMarkdown;
        return $this;
    }

    /**
     * Gets as instructionReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInstructionReference()
    {
        return $this->instructionReference;
    }

    /**
     * Sets a new instructionReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $instructionReference
     * @return self
     */
    public function setInstructionReference(?\TKusy\Hl7Fhir\R5\ReferenceType $instructionReference = null)
    {
        $this->instructionReference = $instructionReference;
        return $this;
    }


}

