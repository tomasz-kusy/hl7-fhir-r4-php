<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DocumentReferenceContentType
 *
 * A reference to a document of any kind for any purpose. While the term “document” implies a more narrow focus, for this resource this "document" encompasses *any* serialized object with a mime-type, it includes formal patient-centric documents (CDA), clinical notes, scanned paper, non-patient specific documents like policy text, as well as a photo, video, or audio recording acquired or used in healthcare. The DocumentReference resource provides metadata about the document so that the document can be discovered and managed. The actual content may be inline base64 encoded data or provided by direct reference.
 * XSD Type: DocumentReference.Content
 */
class DocumentReferenceContentType extends BackboneElementType
{

    /**
     * The document or URL of the document along with critical metadata to prove content has integrity.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $attachment
     */
    private $attachment = null;

    /**
     * An identifier of the document constraints, encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @var \TKusy\Hl7Fhir\R5\DocumentReferenceProfileType[] $profile
     */
    private $profile = null;

    /**
     * Gets as attachment
     *
     * The document or URL of the document along with critical metadata to prove content has integrity.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
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
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $attachment
     * @return self
     */
    public function setAttachment(\TKusy\Hl7Fhir\R5\AttachmentType $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Adds as profile
     *
     * An identifier of the document constraints, encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceProfileType $profile
     */
    public function addToProfile(\TKusy\Hl7Fhir\R5\DocumentReferenceProfileType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * An identifier of the document constraints, encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * An identifier of the document constraints, encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * An identifier of the document constraints, encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @return \TKusy\Hl7Fhir\R5\DocumentReferenceProfileType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * An identifier of the document constraints, encoding, structure, and template that the document conforms to beyond the base format indicated in the mimeType.
     *
     * @param \TKusy\Hl7Fhir\R5\DocumentReferenceProfileType[] $profile
     * @return self
     */
    public function setProfile(array $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }


}

