<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureGroupType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Group
 */
class MeasureGroupType extends BackboneElementType
{

    /**
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * Indicates a meaning for the group. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing groups to be correlated across measures.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this population group.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * The population basis specifies the type of elements in the population. For a subject-based measure, this is boolean (because the subject and the population basis are the same, and the population criteria define yes/no values for each individual in the population). For measures that have a population basis that is different than the subject, this element specifies the type of the population basis. For example, an encounter-based measure has a subject of Patient and a population basis of Encounter, and the population criteria all return lists of Encounters.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRTypesType $basis
     */
    private $basis = null;

    /**
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $scoring
     */
    private $scoring = null;

    /**
     * Defines the expected units of measure for the measure score. This element SHOULD be specified as a UCUM unit.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $scoringUnit
     */
    private $scoringUnit = null;

    /**
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $rateAggregation
     */
    private $rateAggregation = null;

    /**
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation
     */
    private $improvementNotation = null;

    /**
     * A reference to a Library resource containing the formal logic used by the measure group.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $library
     */
    private $library = null;

    /**
     * A population criteria for the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasurePopulationType[] $population
     */
    private $population = null;

    /**
     * The stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureStratifierType[] $stratifier
     */
    private $stratifier = null;

    /**
     * Gets as linkId
     *
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
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
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
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
     * Indicates a meaning for the group. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing groups to be correlated across measures.
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
     * Indicates a meaning for the group. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing groups to be correlated across measures.
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
     * Gets as description
     *
     * The human readable description of this population group.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subjectCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(?\TKusy\Hl7Fhir\R5\ReferenceType $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Gets as basis
     *
     * The population basis specifies the type of elements in the population. For a subject-based measure, this is boolean (because the subject and the population basis are the same, and the population criteria define yes/no values for each individual in the population). For measures that have a population basis that is different than the subject, this element specifies the type of the population basis. For example, an encounter-based measure has a subject of Patient and a population basis of Encounter, and the population criteria all return lists of Encounters.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRTypesType
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * The population basis specifies the type of elements in the population. For a subject-based measure, this is boolean (because the subject and the population basis are the same, and the population criteria define yes/no values for each individual in the population). For measures that have a population basis that is different than the subject, this element specifies the type of the population basis. For example, an encounter-based measure has a subject of Patient and a population basis of Encounter, and the population criteria all return lists of Encounters.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRTypesType $basis
     * @return self
     */
    public function setBasis(?\TKusy\Hl7Fhir\R5\FHIRTypesType $basis = null)
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Gets as scoring
     *
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Sets a new scoring
     *
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $scoring
     * @return self
     */
    public function setScoring(?\TKusy\Hl7Fhir\R5\CodeableConceptType $scoring = null)
    {
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * Gets as scoringUnit
     *
     * Defines the expected units of measure for the measure score. This element SHOULD be specified as a UCUM unit.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getScoringUnit()
    {
        return $this->scoringUnit;
    }

    /**
     * Sets a new scoringUnit
     *
     * Defines the expected units of measure for the measure score. This element SHOULD be specified as a UCUM unit.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $scoringUnit
     * @return self
     */
    public function setScoringUnit(?\TKusy\Hl7Fhir\R5\CodeableConceptType $scoringUnit = null)
    {
        $this->scoringUnit = $scoringUnit;
        return $this;
    }

    /**
     * Gets as rateAggregation
     *
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRateAggregation()
    {
        return $this->rateAggregation;
    }

    /**
     * Sets a new rateAggregation
     *
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $rateAggregation
     * @return self
     */
    public function setRateAggregation(?\TKusy\Hl7Fhir\R5\MarkdownType $rateAggregation = null)
    {
        $this->rateAggregation = $rateAggregation;
        return $this;
    }

    /**
     * Gets as improvementNotation
     *
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }

    /**
     * Sets a new improvementNotation
     *
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation
     * @return self
     */
    public function setImprovementNotation(?\TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation = null)
    {
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * Adds as library
     *
     * A reference to a Library resource containing the formal logic used by the measure group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $library
     */
    public function addToLibrary(\TKusy\Hl7Fhir\R5\CanonicalType $library)
    {
        $this->library[] = $library;
        return $this;
    }

    /**
     * isset library
     *
     * A reference to a Library resource containing the formal logic used by the measure group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLibrary($index)
    {
        return isset($this->library[$index]);
    }

    /**
     * unset library
     *
     * A reference to a Library resource containing the formal logic used by the measure group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLibrary($index)
    {
        unset($this->library[$index]);
    }

    /**
     * Gets as library
     *
     * A reference to a Library resource containing the formal logic used by the measure group.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Sets a new library
     *
     * A reference to a Library resource containing the formal logic used by the measure group.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $library
     * @return self
     */
    public function setLibrary(array $library = null)
    {
        $this->library = $library;
        return $this;
    }

    /**
     * Adds as population
     *
     * A population criteria for the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasurePopulationType $population
     */
    public function addToPopulation(\TKusy\Hl7Fhir\R5\MeasurePopulationType $population)
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
     * @return \TKusy\Hl7Fhir\R5\MeasurePopulationType[]
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
     * @param \TKusy\Hl7Fhir\R5\MeasurePopulationType[] $population
     * @return self
     */
    public function setPopulation(array $population = null)
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
     * @param \TKusy\Hl7Fhir\R5\MeasureStratifierType $stratifier
     */
    public function addToStratifier(\TKusy\Hl7Fhir\R5\MeasureStratifierType $stratifier)
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
     * @return \TKusy\Hl7Fhir\R5\MeasureStratifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\MeasureStratifierType[] $stratifier
     * @return self
     */
    public function setStratifier(array $stratifier = null)
    {
        $this->stratifier = $stratifier;
        return $this;
    }


}

