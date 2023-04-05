<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DocumentReferenceRelatesToType
 *
 * A reference to a document of any kind for any purpose. While the term “document” implies a more narrow focus, for this resource this "document" encompasses *any* serialized object with a mime-type, it includes formal patient-centric documents (CDA), clinical notes, scanned paper, non-patient specific documents like policy text, as well as a photo, video, or audio recording acquired or used in healthcare. The DocumentReference resource provides metadata about the document so that the document can be discovered and managed. The actual content may be inline base64 encoded data or provided by direct reference.
 * XSD Type: DocumentReference.RelatesTo
 */
class DocumentReferenceRelatesToType extends BackboneElementType
{

    /**
     * The type of relationship that this document has with anther document.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The target document of this relationship.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $target
     */
    private $target = null;

    /**
     * Gets as code
     *
     * The type of relationship that this document has with anther document.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of relationship that this document has with anther document.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as target
     *
     * The target document of this relationship.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * The target document of this relationship.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $target
     * @return self
     */
    public function setTarget(\TKusy\Hl7Fhir\R5\ReferenceType $target)
    {
        $this->target = $target;
        return $this;
    }


}

