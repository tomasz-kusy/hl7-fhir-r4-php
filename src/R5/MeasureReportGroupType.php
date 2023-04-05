<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureReportGroupType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Group
 */
class MeasureReportGroupType extends BackboneElementType
{

    /**
     * The group from the Measure that corresponds to this group in the MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * The meaning of the population group as defined in the measure definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportPopulationType[] $population
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
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureReportStratifierType[] $stratifier
     */
    private $stratifier = null;

    /**
     * Gets as linkId
     *
     * The group from the Measure that corresponds to this group in the MeasureReport resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The group from the Measure that corresponds to this group in the MeasureReport resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\StringType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as code
     *
     * The meaning of the population group as defined in the measure definition.
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
     * The meaning of the population group as defined in the measure definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Adds as population
     *
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureReportPopulationType $population
     */
    public function addToPopulation(\TKusy\Hl7Fhir\R5\MeasureReportPopulationType $population)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * isset population
     *
     * The populations that make up the population group, one for each type of population appropriate for the measure.
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
     * The populations that make up the population group, one for each type of population appropriate for the measure.
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
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureReportPopulationType[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Sets a new population
     *
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureReportPopulationType[] $population
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

    /**
     * Adds as stratifier
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureReportStratifierType $stratifier
     */
    public function addToStratifier(\TKusy\Hl7Fhir\R5\MeasureReportStratifierType $stratifier)
    {
        $this->stratifier[] = $stratifier;
        return $this;
    }

    /**
     * isset stratifier
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStratifier($index)
    {
        return isset($this->stratifier[$index]);
    }

    /**
     * unset stratifier
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStratifier($index)
    {
        unset($this->stratifier[$index]);
    }

    /**
     * Gets as stratifier
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureReportStratifierType[]
     */
    public function getStratifier()
    {
        return $this->stratifier;
    }

    /**
     * Sets a new stratifier
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureReportStratifierType[] $stratifier
     * @return self
     */
    public function setStratifier(array $stratifier = null)
    {
        $this->stratifier = $stratifier;
        return $this;
    }


}

