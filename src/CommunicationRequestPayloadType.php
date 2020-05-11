<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CommunicationRequestPayloadType
 *
 * A request to convey information; e.g. the CDS system proposes that an alert be sent to a responsible provider, the CDS system proposes that the public health agency be notified about a reportable condition.
 * XSD Type: CommunicationRequest.Payload
 */
class CommunicationRequestPayloadType extends BackboneElementType
{

    /**
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @var string $contentString
     */
    private $contentString = null;

    /**
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $contentAttachment
     */
    private $contentAttachment = null;

    /**
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $contentReference
     */
    private $contentReference = null;

    /**
     * Gets as contentString
     *
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @return string
     */
    public function getContentString()
    {
        return $this->contentString;
    }

    /**
     * Sets a new contentString
     *
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @param string $contentString
     * @return self
     */
    public function setContentString($contentString)
    {
        $this->contentString = $contentString;
        return $this;
    }

    /**
     * Gets as contentAttachment
     *
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }

    /**
     * Sets a new contentAttachment
     *
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $contentAttachment
     * @return self
     */
    public function setContentAttachment(\TKusy\Hl7FhirR4\AttachmentType $contentAttachment)
    {
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * Gets as contentReference
     *
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Sets a new contentReference
     *
     * The communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $contentReference
     * @return self
     */
    public function setContentReference(\TKusy\Hl7FhirR4\ReferenceType $contentReference)
    {
        $this->contentReference = $contentReference;
        return $this;
    }


}

