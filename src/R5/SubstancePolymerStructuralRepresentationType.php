<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerStructuralRepresentationType
 *
 * Properties of a substance specific to it being a polymer.
 * XSD Type: SubstancePolymer.StructuralRepresentation
 */
class SubstancePolymerStructuralRepresentationType extends BackboneElementType
{

    /**
     * The type of structure (e.g. Full, Partial, Representative).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The structural representation as text string in a standard format e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $representation
     */
    private $representation = null;

    /**
     * The format of the representation e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $format
     */
    private $format = null;

    /**
     * An attached file with the structural representation.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $attachment
     */
    private $attachment = null;

    /**
     * Gets as type
     *
     * The type of structure (e.g. Full, Partial, Representative).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as representation
     *
     * The structural representation as text string in a standard format e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Sets a new representation
     *
     * The structural representation as text string in a standard format e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $representation
     * @return self
     */
    public function setRepresentation(?\TKusy\Hl7Fhir\R5\StringType $representation = null)
    {
        $this->representation = $representation;
        return $this;
    }

    /**
     * Gets as format
     *
     * The format of the representation e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * The format of the representation e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $format
     * @return self
     */
    public function setFormat(?\TKusy\Hl7Fhir\R5\CodeableConceptType $format = null)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * An attached file with the structural representation.
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
     * An attached file with the structural representation.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $attachment
     * @return self
     */
    public function setAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $attachment = null)
    {
        $this->attachment = $attachment;
        return $this;
    }


}

