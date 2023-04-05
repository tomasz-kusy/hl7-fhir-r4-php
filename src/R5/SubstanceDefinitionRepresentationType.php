<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionRepresentationType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Representation
 */
class SubstanceDefinitionRepresentationType extends BackboneElementType
{

    /**
     * The kind of structural representation (e.g. full, partial).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The structural representation as a text string in a standard format.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $representation
     */
    private $representation = null;

    /**
     * The format of the representation e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF. The logical content type rather than the physical file format of a document.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $format
     */
    private $format = null;

    /**
     * An attached file with the structural representation e.g. a molecular structure graphic of the substance, a JCAMP or AnIML file.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $document
     */
    private $document = null;

    /**
     * Gets as type
     *
     * The kind of structural representation (e.g. full, partial).
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
     * The kind of structural representation (e.g. full, partial).
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
     * The structural representation as a text string in a standard format.
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
     * The structural representation as a text string in a standard format.
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
     * The format of the representation e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF. The logical content type rather than the physical file format of a document.
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
     * The format of the representation e.g. InChI, SMILES, MOLFILE, CDX, SDF, PDB, mmCIF. The logical content type rather than the physical file format of a document.
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
     * Gets as document
     *
     * An attached file with the structural representation e.g. a molecular structure graphic of the substance, a JCAMP or AnIML file.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * An attached file with the structural representation e.g. a molecular structure graphic of the substance, a JCAMP or AnIML file.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $document
     * @return self
     */
    public function setDocument(?\TKusy\Hl7Fhir\R5\ReferenceType $document = null)
    {
        $this->document = $document;
        return $this;
    }


}

