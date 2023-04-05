<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GenomicStudyInputType
 *
 * A GenomicStudy is a set of analyses performed to analyze and generate genomic data.
 * XSD Type: GenomicStudy.Input
 */
class GenomicStudyInputType extends BackboneElementType
{

    /**
     * File containing input data.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $file
     */
    private $file = null;

    /**
     * Type of input data, e.g., BAM, CRAM, or FASTA.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $generatedByIdentifier
     */
    private $generatedByIdentifier = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $generatedByReference
     */
    private $generatedByReference = null;

    /**
     * Gets as file
     *
     * File containing input data.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * File containing input data.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $file
     * @return self
     */
    public function setFile(?\TKusy\Hl7Fhir\R5\ReferenceType $file = null)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of input data, e.g., BAM, CRAM, or FASTA.
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
     * Type of input data, e.g., BAM, CRAM, or FASTA.
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
     * Gets as generatedByIdentifier
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getGeneratedByIdentifier()
    {
        return $this->generatedByIdentifier;
    }

    /**
     * Sets a new generatedByIdentifier
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $generatedByIdentifier
     * @return self
     */
    public function setGeneratedByIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $generatedByIdentifier = null)
    {
        $this->generatedByIdentifier = $generatedByIdentifier;
        return $this;
    }

    /**
     * Gets as generatedByReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getGeneratedByReference()
    {
        return $this->generatedByReference;
    }

    /**
     * Sets a new generatedByReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $generatedByReference
     * @return self
     */
    public function setGeneratedByReference(?\TKusy\Hl7Fhir\R5\ReferenceType $generatedByReference = null)
    {
        $this->generatedByReference = $generatedByReference;
        return $this;
    }


}

