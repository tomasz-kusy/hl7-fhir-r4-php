<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureReportStratumType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Stratum
 */
class MeasureReportStratumType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * A stratifier component value.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportComponentType[] $component
     */
    private $component = null;

    /**
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportPopulation1Type[] $population
     */
    private $population = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $measureScoreQuantity
     */
    private $measureScoreQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $measureScoreDateTime
     */
    private $measureScoreDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $measureScoreCodeableConcept
     */
    private $measureScoreCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $measureScorePeriod
     */
    private $measureScorePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $measureScoreRange
     */
    private $measureScoreRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $measureScoreDuration
     */
    private $measureScoreDuration = null;

    /**
     * Gets as valueCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $valueBoolean = null)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $valueRange
     * @return self
     */
    public function setValueRange(?\TKusy\Hl7Fhir\R5\RangeType $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(?\TKusy\Hl7Fhir\R5\ReferenceType $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Adds as component
     *
     * A stratifier component value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureReportComponentType $component
     */
    public function addToComponent(\TKusy\Hl7Fhir\R5\MeasureReportComponentType $component)
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
     * @return \TKusy\Hl7Fhir\R5\MeasureReportComponentType[]
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportComponentType[] $component
     * @return self
     */
    public function setComponent(array $component = null)
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportPopulation1Type $population
     */
    public function addToPopulation(\TKusy\Hl7Fhir\R5\MeasureReportPopulation1Type $population)
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
     * @return \TKusy\Hl7Fhir\R5\MeasureReportPopulation1Type[]
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
     * @param \TKusy\Hl7Fhir\R5\MeasureReportPopulation1Type[] $population
     * @return self
     */
    public function setPopulation(array $population = null)
    {
        $this->population = $population;
        return $this;
    }

    /**
     * Gets as measureScoreQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getMeasureScoreQuantity()
    {
        return $this->measureScoreQuantity;
    }

    /**
     * Sets a new measureScoreQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $measureScoreQuantity
     * @return self
     */
    public function setMeasureScoreQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $measureScoreQuantity = null)
    {
        $this->measureScoreQuantity = $measureScoreQuantity;
        return $this;
    }

    /**
     * Gets as measureScoreDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getMeasureScoreDateTime()
    {
        return $this->measureScoreDateTime;
    }

    /**
     * Sets a new measureScoreDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $measureScoreDateTime
     * @return self
     */
    public function setMeasureScoreDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $measureScoreDateTime = null)
    {
        $this->measureScoreDateTime = $measureScoreDateTime;
        return $this;
    }

    /**
     * Gets as measureScoreCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMeasureScoreCodeableConcept()
    {
        return $this->measureScoreCodeableConcept;
    }

    /**
     * Sets a new measureScoreCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $measureScoreCodeableConcept
     * @return self
     */
    public function setMeasureScoreCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $measureScoreCodeableConcept = null)
    {
        $this->measureScoreCodeableConcept = $measureScoreCodeableConcept;
        return $this;
    }

    /**
     * Gets as measureScorePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getMeasureScorePeriod()
    {
        return $this->measureScorePeriod;
    }

    /**
     * Sets a new measureScorePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $measureScorePeriod
     * @return self
     */
    public function setMeasureScorePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $measureScorePeriod = null)
    {
        $this->measureScorePeriod = $measureScorePeriod;
        return $this;
    }

    /**
     * Gets as measureScoreRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getMeasureScoreRange()
    {
        return $this->measureScoreRange;
    }

    /**
     * Sets a new measureScoreRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $measureScoreRange
     * @return self
     */
    public function setMeasureScoreRange(?\TKusy\Hl7Fhir\R5\RangeType $measureScoreRange = null)
    {
        $this->measureScoreRange = $measureScoreRange;
        return $this;
    }

    /**
     * Gets as measureScoreDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getMeasureScoreDuration()
    {
        return $this->measureScoreDuration;
    }

    /**
     * Sets a new measureScoreDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $measureScoreDuration
     * @return self
     */
    public function setMeasureScoreDuration(?\TKusy\Hl7Fhir\R5\DurationType $measureScoreDuration = null)
    {
        $this->measureScoreDuration = $measureScoreDuration;
        return $this;
    }


}

