<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CommunicationPayloadType
 *
 * An occurrence of information being transmitted; e.g. an alert that was sent to a responsible provider, a public health agency that was notified about a reportable condition.
 * XSD Type: Communication.Payload
 */
class CommunicationPayloadType extends BackboneElementType
{

    /**
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @var string $contentString
     */
    private $contentString = null;

    /**
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $contentAttachment
     */
    private $contentAttachment = null;

    /**
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $contentReference
     */
    private $contentReference = null;

    /**
     * Gets as contentString
     *
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
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
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
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
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
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
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
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
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
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
     * A communicated content (or for multi-part communications, one portion of the communication). (choose any one of content*, but only one)
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

