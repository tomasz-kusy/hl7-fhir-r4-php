<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DocumentReferenceProfileType
 *
 * A reference to a document of any kind for any purpose. While the term “document” implies a more narrow focus, for this resource this "document" encompasses *any* serialized object with a mime-type, it includes formal patient-centric documents (CDA), clinical notes, scanned paper, non-patient specific documents like policy text, as well as a photo, video, or audio recording acquired or used in healthcare. The DocumentReference resource provides metadata about the document so that the document can be discovered and managed. The actual content may be inline base64 encoded data or provided by direct reference.
 * XSD Type: DocumentReference.Profile
 */
class DocumentReferenceProfileType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     */
    private $valueCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $valueUri
     */
    private $valueUri = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueCanonical
     */
    private $valueCanonical = null;

    /**
     * Gets as valueCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * Sets a new valueCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $valueCoding
     * @return self
     */
    public function setValueCoding(?\TKusy\Hl7Fhir\R5\CodingType $valueCoding = null)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Gets as valueUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * Sets a new valueUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $valueUri
     * @return self
     */
    public function setValueUri(?\TKusy\Hl7Fhir\R5\UriType $valueUri = null)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * Gets as valueCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }

    /**
     * Sets a new valueCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueCanonical
     * @return self
     */
    public function setValueCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $valueCanonical = null)
    {
        $this->valueCanonical = $valueCanonical;
        return $this;
    }


}

