<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MeasureReportStratumType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Stratum
 */
class MeasureReportStratumType extends BackboneElementType
{

    /**
     * The value for this stratum, expressed as a CodeableConcept. When defining stratifiers on complex values, the value must be rendered such that the value for each stratum within the stratifier is unique.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $value
     */
    private $value = null;

    /**
     * A stratifier component value.
     *
     * @var \TKusy\Hl7Fhir\R4\MeasureReportComponentType[] $component
     */
    private $component = null;

    /**
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @var \TKusy\Hl7Fhir\R4\MeasureReportPopulation1Type[] $population
     */
    private $population = null;

    /**
     * The measure score for this stratum, calculated as appropriate for the measure type and scoring method, and based on only the members of this stratum.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $measureScore
     */
    private $measureScore = null;

    /**
     * Gets as value
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining stratifiers on complex values, the value must be rendered such that the value for each stratum within the stratifier is unique.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining stratifiers on complex values, the value must be rendered such that the value for each stratum within the stratifier is unique.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R4\CodeableConceptType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as component
     *
     * A stratifier component value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MeasureReportComponentType $component
     */
    public function addToComponent(\TKusy\Hl7Fhir\R4\MeasureReportComponentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * A stratifier component value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * A stratifier component value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * A stratifier component value.
     *
     * @return \TKusy\Hl7Fhir\R4\MeasureReportComponentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * A stratifier component value.
     *
     * @param \TKusy\Hl7Fhir\R4\MeasureReportComponentType[] $component
     * @return self
     */
    public function setComponent(array $component)
    {
        $this->component = $component;
        return $this;
    }

    /**
     * Adds as population
     *
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MeasureReportPopulation1Type $population
     */
    public function addToPopulation(\TKusy\Hl7Fhir\R4\MeasureReportPopulation1Type $population)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * isset population
     *
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPopulation($index)
    {
        return isset($this->population[$index]);
    }

    /**
     * unset population
     *
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPopulation($index)
    {
        unset($this->population[$index]);
    }

    /**
     * Gets as population
     *
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @return \TKusy\Hl7Fhir\R4\MeasureReportPopulation1Type[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Sets a new population
     *
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @param \TKusy\Hl7Fhir\R4\MeasureReportPopulation1Type[] $population
     * @return self
     */
    public function setPopulation(array $population)
    {
        $this->population = $population;
        return $this;
    }

    /**
     * Gets as measureScore
     *
     * The measure score for this stratum, calculated as appropriate for the measure type and scoring method, and based on only the members of this stratum.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getMeasureScore()
    {
        return $this->measureScore;
    }

    /**
     * Sets a new measureScore
     *
     * The measure score for this stratum, calculated as appropriate for the measure type and scoring method, and based on only the members of this stratum.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $measureScore
     * @return self
     */
    public function setMeasureScore(\TKusy\Hl7Fhir\R4\QuantityType $measureScore)
    {
        $this->measureScore = $measureScore;
        return $this;
    }


}

