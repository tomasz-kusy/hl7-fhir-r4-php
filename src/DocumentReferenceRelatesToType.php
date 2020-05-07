<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DocumentReferenceRelatesToType
 *
 * A reference to a document of any kind for any purpose. Provides metadata about the document so that the document can be discovered and managed. The scope of a document is any seralized object with a mime-type, so includes formal patient centric documents (CDA), cliical notes, scanned paper, and non-patient specific documents like policy text.
 * XSD Type: DocumentReference.RelatesTo
 */
class DocumentReferenceRelatesToType extends BackboneElementType
{

    /**
     * The type of relationship that this document has with anther document.
     *
     * @var \TKusy\Hl7FhirR4\DocumentRelationshipTypeType $code
     */
    private $code = null;

    /**
     * The target document of this relationship.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $target
     */
    private $target = null;

    /**
     * Gets as code
     *
     * The type of relationship that this document has with anther document.
     *
     * @return \TKusy\Hl7FhirR4\DocumentRelationshipTypeType
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
     * @param \TKusy\Hl7FhirR4\DocumentRelationshipTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\DocumentRelationshipTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as target
     *
     * The target document of this relationship.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $target
     * @return self
     */
    public function setTarget(\TKusy\Hl7FhirR4\ReferenceType $target)
    {
        $this->target = $target;
        return $this;
    }


}

