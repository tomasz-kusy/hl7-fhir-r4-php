<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceSpecificationRepresentationType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Representation
 */
class SubstanceSpecificationRepresentationType extends BackboneElementType
{

    /**
     * The type of structure (e.g. Full, Partial, Representative).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The structural representation as text string in a format e.g. InChI, SMILES, MOLFILE, CDX.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $representation
     */
    private $representation = null;

    /**
     * An attached file with the structural representation.
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType $attachment
     */
    private $attachment = null;

    /**
     * Gets as type
     *
     * The type of structure (e.g. Full, Partial, Representative).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of structure (e.g. Full, Partial, Representative).
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as representation
     *
     * The structural representation as text string in a format e.g. InChI, SMILES, MOLFILE, CDX.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Sets a new representation
     *
     * The structural representation as text string in a format e.g. InChI, SMILES, MOLFILE, CDX.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $representation
     * @return self
     */
    public function setRepresentation(\TKusy\Hl7Fhir\R4\StringType $representation)
    {
        $this->representation = $representation;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * An attached file with the structural representation.
     *
     * @return \TKusy\Hl7Fhir\R4\AttachmentType
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * An attached file with the structural representation.
     *
     * @param \TKusy\Hl7Fhir\R4\AttachmentType $attachment
     * @return self
     */
    public function setAttachment(\TKusy\Hl7Fhir\R4\AttachmentType $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }


}

