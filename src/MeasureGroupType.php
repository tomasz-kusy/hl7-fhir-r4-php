<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureGroupType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Group
 */
class MeasureGroupType extends BackboneElementType
{

    /**
     * Indicates a meaning for the group. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing groups to be correlated across measures.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this population group.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * A population criteria for the measure.
     *
     * @var \TKusy\Hl7FhirR4\MeasurePopulationType[] $population
     */
    private $population = [
        
    ];

    /**
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @var \TKusy\Hl7FhirR4\MeasureStratifierType[] $stratifier
     */
    private $stratifier = [
        
    ];

    /**
     * Gets as code
     *
     * Indicates a meaning for the group. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing groups to be correlated across measures.
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
     * Indicates a meaning for the group. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing groups to be correlated across measures.
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
     * Gets as description
     *
     * The human readable description of this population group.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The human readable description of this population group.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as population
     *
     * A population criteria for the measure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MeasurePopulationType $population
     */
    public function addToPopulation(\TKusy\Hl7FhirR4\MeasurePopulationType $population)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * isset population
     *
     * A population criteria for the measure.
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
     * A population criteria for the measure.
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
     * A population criteria for the measure.
     *
     * @return \TKusy\Hl7FhirR4\MeasurePopulationType[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Sets a new population
     *
     * A population criteria for the measure.
     *
     * @param \TKusy\Hl7FhirR4\MeasurePopulationType[] $population
     * @return self
     */
    public function setPopulation(array $population)
    {
        $this->population = $population;
        return $this;
    }

    /**
     * Adds as stratifier
     *
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MeasureStratifierType $stratifier
     */
    public function addToStratifier(\TKusy\Hl7FhirR4\MeasureStratifierType $stratifier)
    {
        $this->stratifier[] = $stratifier;
        return $this;
    }

    /**
     * isset stratifier
     *
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
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
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
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
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @return \TKusy\Hl7FhirR4\MeasureStratifierType[]
     */
    public function getStratifier()
    {
        return $this->stratifier;
    }

    /**
     * Sets a new stratifier
     *
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @param \TKusy\Hl7FhirR4\MeasureStratifierType[] $stratifier
     * @return self
     */
    public function setStratifier(array $stratifier)
    {
        $this->stratifier = $stratifier;
        return $this;
    }


}

