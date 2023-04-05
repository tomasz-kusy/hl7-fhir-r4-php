<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GenomicStudyOutputType
 *
 * A GenomicStudy is a set of analyses performed to analyze and generate genomic data.
 * XSD Type: GenomicStudy.Output
 */
class GenomicStudyOutputType extends BackboneElementType
{

    /**
     * File containing output data.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $file
     */
    private $file = null;

    /**
     * Type of output data, e.g., VCF, MAF, or BAM.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Gets as file
     *
     * File containing output data.
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
     * File containing output data.
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
     * Type of output data, e.g., VCF, MAF, or BAM.
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
     * Type of output data, e.g., VCF, MAF, or BAM.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }


}

