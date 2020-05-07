<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductManufacturingBusinessOperationType
 *
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * XSD Type: MedicinalProduct.ManufacturingBusinessOperation
 */
class MedicinalProductManufacturingBusinessOperationType extends BackboneElementType
{

    /**
     * The type of manufacturing operation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $operationType
     */
    private $operationType = null;

    /**
     * Regulatory authorization reference number.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $authorisationReferenceNumber
     */
    private $authorisationReferenceNumber = null;

    /**
     * Regulatory authorization date.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * To indicate if this proces is commercially confidential.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $confidentialityIndicator
     */
    private $confidentialityIndicator = null;

    /**
     * The manufacturer or establishment associated with the process.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     */
    private $manufacturer = [
        
    ];

    /**
     * A regulator which oversees the operation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $regulator
     */
    private $regulator = null;

    /**
     * Gets as operationType
     *
     * The type of manufacturing operation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Sets a new operationType
     *
     * The type of manufacturing operation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $operationType
     * @return self
     */
    public function setOperationType(\TKusy\Hl7FhirR4\CodeableConceptType $operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * Gets as authorisationReferenceNumber
     *
     * Regulatory authorization reference number.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getAuthorisationReferenceNumber()
    {
        return $this->authorisationReferenceNumber;
    }

    /**
     * Sets a new authorisationReferenceNumber
     *
     * Regulatory authorization reference number.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $authorisationReferenceNumber
     * @return self
     */
    public function setAuthorisationReferenceNumber(\TKusy\Hl7FhirR4\IdentifierType $authorisationReferenceNumber)
    {
        $this->authorisationReferenceNumber = $authorisationReferenceNumber;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Regulatory authorization date.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Regulatory authorization date.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\TKusy\Hl7FhirR4\DateTimeType $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as confidentialityIndicator
     *
     * To indicate if this proces is commercially confidential.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getConfidentialityIndicator()
    {
        return $this->confidentialityIndicator;
    }

    /**
     * Sets a new confidentialityIndicator
     *
     * To indicate if this proces is commercially confidential.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $confidentialityIndicator
     * @return self
     */
    public function setConfidentialityIndicator(\TKusy\Hl7FhirR4\CodeableConceptType $confidentialityIndicator)
    {
        $this->confidentialityIndicator = $confidentialityIndicator;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * The manufacturer or establishment associated with the process.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7FhirR4\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * The manufacturer or establishment associated with the process.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturer($index)
    {
        return isset($this->manufacturer[$index]);
    }

    /**
     * unset manufacturer
     *
     * The manufacturer or establishment associated with the process.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturer($index)
    {
        unset($this->manufacturer[$index]);
    }

    /**
     * Gets as manufacturer
     *
     * The manufacturer or establishment associated with the process.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * The manufacturer or establishment associated with the process.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as regulator
     *
     * A regulator which oversees the operation.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * Sets a new regulator
     *
     * A regulator which oversees the operation.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $regulator
     * @return self
     */
    public function setRegulator(\TKusy\Hl7FhirR4\ReferenceType $regulator)
    {
        $this->regulator = $regulator;
        return $this;
    }


}

