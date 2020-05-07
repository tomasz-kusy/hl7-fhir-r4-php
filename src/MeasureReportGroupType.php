<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureReportGroupType
 *
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * XSD Type: MeasureReport.Group
 */
class MeasureReportGroupType extends BackboneElementType
{

    /**
     * The meaning of the population group as defined in the measure definition.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     *
     * @var \TKusy\Hl7FhirR4\MeasureReportPopulationType[] $population
     */
    private $population = [
        
    ];

    /**
     * The measure score for this population group, calculated as appropriate for the measure type and scoring method, and based on the contents of the populations defined in the group.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $measureScore
     */
    private $measureScore = null;

    /**
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @var \TKusy\Hl7FhirR4\MeasureReportStratifierType[] $stratifier
     */
    private $stratifier = [
        
    ];

    /**
     * Gets as code
     *
     * The meaning of the population group as defined in the measure definition.
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
     * The meaning of the population group as defined in the measure definition.
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
     * Adds as population
     *
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MeasureReportPopulationType $population
     */
    public function addToPopulation(\TKusy\Hl7FhirR4\MeasureReportPopulationType $population)
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
     * @return \TKusy\Hl7FhirR4\MeasureReportPopulationType[]
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
     * @param \TKusy\Hl7FhirR4\MeasureReportPopulationType[] $population
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
     * The measure score for this population group, calculated as appropriate for the measure type and scoring method, and based on the contents of the populations defined in the group.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getMeasureScore()
    {
        return $this->measureScore;
    }

    /**
     * Sets a new measureScore
     *
     * The measure score for this population group, calculated as appropriate for the measure type and scoring method, and based on the contents of the populations defined in the group.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $measureScore
     * @return self
     */
    public function setMeasureScore(\TKusy\Hl7FhirR4\QuantityType $measureScore)
    {
        $this->measureScore = $measureScore;
        return $this;
    }

    /**
     * Adds as stratifier
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MeasureReportStratifierType $stratifier
     */
    public function addToStratifier(\TKusy\Hl7FhirR4\MeasureReportStratifierType $stratifier)
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
     * @return \TKusy\Hl7FhirR4\MeasureReportStratifierType[]
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
     * @param \TKusy\Hl7FhirR4\MeasureReportStratifierType[] $stratifier
     * @return self
     */
    public function setStratifier(array $stratifier)
    {
        $this->stratifier = $stratifier;
        return $this;
    }


}

