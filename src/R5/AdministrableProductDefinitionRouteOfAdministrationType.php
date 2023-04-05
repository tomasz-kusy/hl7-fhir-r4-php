<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdministrableProductDefinitionRouteOfAdministrationType
 *
 * A medicinal product in the final form which is suitable for administering to a patient (after any mixing of multiple components, dissolution etc. has been performed).
 * XSD Type: AdministrableProductDefinition.RouteOfAdministration
 */
class AdministrableProductDefinitionRouteOfAdministrationType extends BackboneElementType
{

    /**
     * Coded expression for the route.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The first dose (dose quantity) administered can be specified for the product, using a numerical value and its unit of measurement.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $firstDose
     */
    private $firstDose = null;

    /**
     * The maximum single dose that can be administered, specified using a numerical value and its unit of measurement.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $maxSingleDose
     */
    private $maxSingleDose = null;

    /**
     * The maximum dose per day (maximum dose quantity to be administered in any one 24-h period) that can be administered.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $maxDosePerDay
     */
    private $maxDosePerDay = null;

    /**
     * The maximum dose per treatment period that can be administered.
     *
     * @var \TKusy\Hl7Fhir\R5\RatioType $maxDosePerTreatmentPeriod
     */
    private $maxDosePerTreatmentPeriod = null;

    /**
     * The maximum treatment period during which the product can be administered.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $maxTreatmentPeriod
     */
    private $maxTreatmentPeriod = null;

    /**
     * A species for which this route applies.
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionTargetSpeciesType[] $targetSpecies
     */
    private $targetSpecies = null;

    /**
     * Gets as code
     *
     * Coded expression for the route.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as firstDose
     *
     * The first dose (dose quantity) administered can be specified for the product, using a numerical value and its unit of measurement.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getFirstDose()
    {
        return $this->firstDose;
    }

    /**
     * Sets a new firstDose
     *
     * The first dose (dose quantity) administered can be specified for the product, using a numerical value and its unit of measurement.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $firstDose
     * @return self
     */
    public function setFirstDose(?\TKusy\Hl7Fhir\R5\QuantityType $firstDose = null)
    {
        $this->firstDose = $firstDose;
        return $this;
    }

    /**
     * Gets as maxSingleDose
     *
     * The maximum single dose that can be administered, specified using a numerical value and its unit of measurement.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getMaxSingleDose()
    {
        return $this->maxSingleDose;
    }

    /**
     * Sets a new maxSingleDose
     *
     * The maximum single dose that can be administered, specified using a numerical value and its unit of measurement.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $maxSingleDose
     * @return self
     */
    public function setMaxSingleDose(?\TKusy\Hl7Fhir\R5\QuantityType $maxSingleDose = null)
    {
        $this->maxSingleDose = $maxSingleDose;
        return $this;
    }

    /**
     * Gets as maxDosePerDay
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one 24-h period) that can be administered.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getMaxDosePerDay()
    {
        return $this->maxDosePerDay;
    }

    /**
     * Sets a new maxDosePerDay
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one 24-h period) that can be administered.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $maxDosePerDay
     * @return self
     */
    public function setMaxDosePerDay(?\TKusy\Hl7Fhir\R5\QuantityType $maxDosePerDay = null)
    {
        $this->maxDosePerDay = $maxDosePerDay;
        return $this;
    }

    /**
     * Gets as maxDosePerTreatmentPeriod
     *
     * The maximum dose per treatment period that can be administered.
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getMaxDosePerTreatmentPeriod()
    {
        return $this->maxDosePerTreatmentPeriod;
    }

    /**
     * Sets a new maxDosePerTreatmentPeriod
     *
     * The maximum dose per treatment period that can be administered.
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $maxDosePerTreatmentPeriod
     * @return self
     */
    public function setMaxDosePerTreatmentPeriod(?\TKusy\Hl7Fhir\R5\RatioType $maxDosePerTreatmentPeriod = null)
    {
        $this->maxDosePerTreatmentPeriod = $maxDosePerTreatmentPeriod;
        return $this;
    }

    /**
     * Gets as maxTreatmentPeriod
     *
     * The maximum treatment period during which the product can be administered.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getMaxTreatmentPeriod()
    {
        return $this->maxTreatmentPeriod;
    }

    /**
     * Sets a new maxTreatmentPeriod
     *
     * The maximum treatment period during which the product can be administered.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $maxTreatmentPeriod
     * @return self
     */
    public function setMaxTreatmentPeriod(?\TKusy\Hl7Fhir\R5\DurationType $maxTreatmentPeriod = null)
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
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionTargetSpeciesType $targetSpecies
     */
    public function addToTargetSpecies(\TKusy\Hl7Fhir\R5\AdministrableProductDefinitionTargetSpeciesType $targetSpecies)
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
     * @return \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionTargetSpeciesType[]
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
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionTargetSpeciesType[] $targetSpecies
     * @return self
     */
    public function setTargetSpecies(array $targetSpecies = null)
    {
        $this->targetSpecies = $targetSpecies;
        return $this;
    }


}

