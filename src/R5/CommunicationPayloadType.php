<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CommunicationPayloadType
 *
 * A clinical or business level record of information being transmitted or shared; e.g. an alert that was sent to a responsible provider, a public health agency communication to a provider/reporter in response to a case report for a reportable condition.
 * XSD Type: Communication.Payload
 */
class CommunicationPayloadType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $contentAttachment
     */
    private $contentAttachment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $contentReference
     */
    private $contentReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $contentCodeableConcept
     */
    private $contentCodeableConcept = null;

    /**
     * Gets as contentAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }

    /**
     * Sets a new contentAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $contentAttachment
     * @return self
     */
    public function setContentAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $contentAttachment = null)
    {
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * Gets as contentReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Sets a new contentReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $contentReference
     * @return self
     */
    public function setContentReference(?\TKusy\Hl7Fhir\R5\ReferenceType $contentReference = null)
    {
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * Gets as contentCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getContentCodeableConcept()
    {
        return $this->contentCodeableConcept;
    }

    /**
     * Sets a new contentCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $contentCodeableConcept
     * @return self
     */
    public function setContentCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $contentCodeableConcept = null)
    {
        $this->contentCodeableConcept = $contentCodeableConcept;
        return $this;
    }


}

