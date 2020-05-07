<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CompositionRelatesToType
 *
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 * XSD Type: Composition.RelatesTo
 */
class CompositionRelatesToType extends BackboneElementType
{

    /**
     * The type of relationship that this composition has with anther composition or document.
     *
     * @var \TKusy\Hl7FhirR4\DocumentRelationshipType $code
     */
    private $code = null;

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $targetIdentifier
     */
    private $targetIdentifier = null;

    /**
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $targetReference
     */
    private $targetReference = null;

    /**
     * Gets as code
     *
     * The type of relationship that this composition has with anther composition or document.
     *
     * @return \TKusy\Hl7FhirR4\DocumentRelationshipType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of relationship that this composition has with anther composition or document.
     *
     * @param \TKusy\Hl7FhirR4\DocumentRelationshipType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\DocumentRelationshipType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as targetIdentifier
     *
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getTargetIdentifier()
    {
        return $this->targetIdentifier;
    }

    /**
     * Sets a new targetIdentifier
     *
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $targetIdentifier
     * @return self
     */
    public function setTargetIdentifier(\TKusy\Hl7FhirR4\IdentifierType $targetIdentifier)
    {
        $this->targetIdentifier = $targetIdentifier;
        return $this;
    }

    /**
     * Gets as targetReference
     *
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getTargetReference()
    {
        return $this->targetReference;
    }

    /**
     * Sets a new targetReference
     *
     * The target composition/document of this relationship. (choose any one of target*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $targetReference
     * @return self
     */
    public function setTargetReference(\TKusy\Hl7FhirR4\ReferenceType $targetReference)
    {
        $this->targetReference = $targetReference;
        return $this;
    }


}

