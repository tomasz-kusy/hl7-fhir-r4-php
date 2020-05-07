<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductPharmaceuticalRouteOfAdministrationType
 *
 * A pharmaceutical product described in terms of its composition and dose form.
 * XSD Type: MedicinalProductPharmaceutical.RouteOfAdministration
 */
class MedicinalProductPharmaceuticalRouteOfAdministrationType extends BackboneElementType
{

    /**
     * Coded expression for the route.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The first dose (dose quantity) administered in humans can be specified, for a product under investigation, using a numerical value and its unit of measurement.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $firstDose
     */
    private $firstDose = null;

    /**
     * The maximum single dose that can be administered as per the protocol of a clinical trial can be specified using a numerical value and its unit of measurement.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $maxSingleDose
     */
    private $maxSingleDose = null;

    /**
     * The maximum dose per day (maximum dose quantity to be administered in any one 24-h period) that can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $maxDosePerDay
     */
    private $maxDosePerDay = null;

    /**
     * The maximum dose per treatment period that can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @var \TKusy\Hl7FhirR4\RatioType $maxDosePerTreatmentPeriod
     */
    private $maxDosePerTreatmentPeriod = null;

    /**
     * The maximum treatment period during which an Investigational Medicinal Product can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $maxTreatmentPeriod
     */
    private $maxTreatmentPeriod = null;

    /**
     * A species for which this route applies.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalTargetSpeciesType[] $targetSpecies
     */
    private $targetSpecies = [
        
    ];

    /**
     * Gets as code
     *
     * Coded expression for the route.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Coded expression for the route.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as firstDose
     *
     * The first dose (dose quantity) administered in humans can be specified, for a product under investigation, using a numerical value and its unit of measurement.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getFirstDose()
    {
        return $this->firstDose;
    }

    /**
     * Sets a new firstDose
     *
     * The first dose (dose quantity) administered in humans can be specified, for a product under investigation, using a numerical value and its unit of measurement.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $firstDose
     * @return self
     */
    public function setFirstDose(\TKusy\Hl7FhirR4\QuantityType $firstDose)
    {
        $this->firstDose = $firstDose;
        return $this;
    }

    /**
     * Gets as maxSingleDose
     *
     * The maximum single dose that can be administered as per the protocol of a clinical trial can be specified using a numerical value and its unit of measurement.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getMaxSingleDose()
    {
        return $this->maxSingleDose;
    }

    /**
     * Sets a new maxSingleDose
     *
     * The maximum single dose that can be administered as per the protocol of a clinical trial can be specified using a numerical value and its unit of measurement.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $maxSingleDose
     * @return self
     */
    public function setMaxSingleDose(\TKusy\Hl7FhirR4\QuantityType $maxSingleDose)
    {
        $this->maxSingleDose = $maxSingleDose;
        return $this;
    }

    /**
     * Gets as maxDosePerDay
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one 24-h period) that can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getMaxDosePerDay()
    {
        return $this->maxDosePerDay;
    }

    /**
     * Sets a new maxDosePerDay
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one 24-h period) that can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $maxDosePerDay
     * @return self
     */
    public function setMaxDosePerDay(\TKusy\Hl7FhirR4\QuantityType $maxDosePerDay)
    {
        $this->maxDosePerDay = $maxDosePerDay;
        return $this;
    }

    /**
     * Gets as maxDosePerTreatmentPeriod
     *
     * The maximum dose per treatment period that can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getMaxDosePerTreatmentPeriod()
    {
        return $this->maxDosePerTreatmentPeriod;
    }

    /**
     * Sets a new maxDosePerTreatmentPeriod
     *
     * The maximum dose per treatment period that can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @param \TKusy\Hl7FhirR4\RatioType $maxDosePerTreatmentPeriod
     * @return self
     */
    public function setMaxDosePerTreatmentPeriod(\TKusy\Hl7FhirR4\RatioType $maxDosePerTreatmentPeriod)
    {
        $this->maxDosePerTreatmentPeriod = $maxDosePerTreatmentPeriod;
        return $this;
    }

    /**
     * Gets as maxTreatmentPeriod
     *
     * The maximum treatment period during which an Investigational Medicinal Product can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getMaxTreatmentPeriod()
    {
        return $this->maxTreatmentPeriod;
    }

    /**
     * Sets a new maxTreatmentPeriod
     *
     * The maximum treatment period during which an Investigational Medicinal Product can be administered as per the protocol referenced in the clinical trial authorisation.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $maxTreatmentPeriod
     * @return self
     */
    public function setMaxTreatmentPeriod(\TKusy\Hl7FhirR4\DurationType $maxTreatmentPeriod)
    {
        $this->maxTreatmentPeriod = $maxTreatmentPeriod;
        return $this;
    }

    /**
     * Adds as targetSpecies
     *
     * A species for which this route applies.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalTargetSpeciesType $targetSpecies
     */
    public function addToTargetSpecies(\TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalTargetSpeciesType $targetSpecies)
    {
        $this->targetSpecies[] = $targetSpecies;
        return $this;
    }

    /**
     * isset targetSpecies
     *
     * A species for which this route applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetSpecies($index)
    {
        return isset($this->targetSpecies[$index]);
    }

    /**
     * unset targetSpecies
     *
     * A species for which this route applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetSpecies($index)
    {
        unset($this->targetSpecies[$index]);
    }

    /**
     * Gets as targetSpecies
     *
     * A species for which this route applies.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalTargetSpeciesType[]
     */
    public function getTargetSpecies()
    {
        return $this->targetSpecies;
    }

    /**
     * Sets a new targetSpecies
     *
     * A species for which this route applies.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalTargetSpeciesType[] $targetSpecies
     * @return self
     */
    public function setTargetSpecies(array $targetSpecies)
    {
        $this->targetSpecies = $targetSpecies;
        return $this;
    }


}

