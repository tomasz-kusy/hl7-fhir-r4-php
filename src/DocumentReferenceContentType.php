<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DocumentReferenceContentType
 *
 * A reference to a document of any kind for any purpose. Provides metadata about the document so that the document can be discovered and managed. The scope of a document is any seralized object with a mime-type, so includes formal patient centric documents (CDA), cliical notes, scanned paper, and non-patient specific documents like policy text.
 * XSD Type: DocumentReference.Content
 */
class DocumentReferenceContentType extends BackboneElementType
{

    /**
     * The document or URL of the document along with critical metadata to prove content has integrity.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $attachment
     */
    private $attachment = null;

    /**
     * An identifier of the document encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $format
     */
    private $format = null;

    /**
     * Gets as attachment
     *
     * The document or URL of the document along with critical metadata to prove content has integrity.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * The document or URL of the document along with critical metadata to prove content has integrity.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $attachment
     * @return self
     */
    public function setAttachment(\TKusy\Hl7FhirR4\AttachmentType $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Gets as format
     *
     * An identifier of the document encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * An identifier of the document encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $format
     * @return self
     */
    public function setFormat(\TKusy\Hl7FhirR4\CodingType $format)
    {
        $this->format = $format;
        return $this;
    }


}

