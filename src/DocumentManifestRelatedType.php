<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DocumentManifestRelatedType
 *
 * A collection of documents compiled for a purpose together with metadata that applies to the collection.
 * XSD Type: DocumentManifest.Related
 */
class DocumentManifestRelatedType extends BackboneElementType
{

    /**
     * Related identifier to this DocumentManifest. For example, Order numbers, accession numbers, XDW workflow numbers.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Related Resource to this DocumentManifest. For example, Order, ServiceRequest, Procedure, EligibilityRequest, etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $ref
     */
    private $ref = null;

    /**
     * Gets as identifier
     *
     * Related identifier to this DocumentManifest. For example, Order numbers, accession numbers, XDW workflow numbers.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Related identifier to this DocumentManifest. For example, Order numbers, accession numbers, XDW workflow numbers.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as ref
     *
     * Related Resource to this DocumentManifest. For example, Order, ServiceRequest, Procedure, EligibilityRequest, etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets a new ref
     *
     * Related Resource to this DocumentManifest. For example, Order, ServiceRequest, Procedure, EligibilityRequest, etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $ref
     * @return self
     */
    public function setRef(\TKusy\Hl7FhirR4\ReferenceType $ref)
    {
        $this->ref = $ref;
        return $this;
    }


}

