<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductPackagedBatchIdentifierType
 *
 * A medicinal product in a container or package.
 * XSD Type: MedicinalProductPackaged.BatchIdentifier
 */
class MedicinalProductPackagedBatchIdentifierType extends BackboneElementType
{

    /**
     * A number appearing on the outer packaging of a specific batch.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $outerPackaging
     */
    private $outerPackaging = null;

    /**
     * A number appearing on the immediate packaging (and not the outer packaging).
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $immediatePackaging
     */
    private $immediatePackaging = null;

    /**
     * Gets as outerPackaging
     *
     * A number appearing on the outer packaging of a specific batch.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getOuterPackaging()
    {
        return $this->outerPackaging;
    }

    /**
     * Sets a new outerPackaging
     *
     * A number appearing on the outer packaging of a specific batch.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $outerPackaging
     * @return self
     */
    public function setOuterPackaging(\TKusy\Hl7Fhir\R4\IdentifierType $outerPackaging)
    {
        $this->outerPackaging = $outerPackaging;
        return $this;
    }

    /**
     * Gets as immediatePackaging
     *
     * A number appearing on the immediate packaging (and not the outer packaging).
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getImmediatePackaging()
    {
        return $this->immediatePackaging;
    }

    /**
     * Sets a new immediatePackaging
     *
     * A number appearing on the immediate packaging (and not the outer packaging).
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $immediatePackaging
     * @return self
     */
    public function setImmediatePackaging(\TKusy\Hl7Fhir\R4\IdentifierType $immediatePackaging)
    {
        $this->immediatePackaging = $immediatePackaging;
        return $this;
    }


}

