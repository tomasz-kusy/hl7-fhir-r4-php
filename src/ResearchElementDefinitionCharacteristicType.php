<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ResearchElementDefinitionCharacteristicType
 *
 * The ResearchElementDefinition resource describes a "PICO" element that knowledge (evidence, assertion, recommendation) is about.
 * XSD Type: ResearchElementDefinition.Characteristic
 */
class ResearchElementDefinitionCharacteristicType extends BackboneElementType
{

    /**
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $definitionCodeableConcept
     */
    private $definitionCodeableConcept = null;

    /**
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $definitionExpression
     */
    private $definitionExpression = null;

    /**
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType $definitionDataRequirement
     */
    private $definitionDataRequirement = null;

    /**
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $usageContext
     */
    private $usageContext = null;

    /**
     * When true, members with this characteristic are excluded from the element.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $exclude
     */
    private $exclude = null;

    /**
     * Specifies the UCUM unit for the outcome.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * A narrative description of the time period the study covers.
     *
     * @var \TKusy\Hl7FhirR4\StringType $studyEffectiveDescription
     */
    private $studyEffectiveDescription = null;

    /**
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $studyEffectiveDateTime
     */
    private $studyEffectiveDateTime = null;

    /**
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $studyEffectivePeriod
     */
    private $studyEffectivePeriod = null;

    /**
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $studyEffectiveDuration
     */
    private $studyEffectiveDuration = null;

    /**
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $studyEffectiveTiming
     */
    private $studyEffectiveTiming = null;

    /**
     * Indicates duration from the study initiation.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $studyEffectiveTimeFromStart
     */
    private $studyEffectiveTimeFromStart = null;

    /**
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \TKusy\Hl7FhirR4\GroupMeasureType $studyEffectiveGroupMeasure
     */
    private $studyEffectiveGroupMeasure = null;

    /**
     * A narrative description of the time period the study covers.
     *
     * @var \TKusy\Hl7FhirR4\StringType $participantEffectiveDescription
     */
    private $participantEffectiveDescription = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $participantEffectiveDateTime
     */
    private $participantEffectiveDateTime = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $participantEffectivePeriod
     */
    private $participantEffectivePeriod = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $participantEffectiveDuration
     */
    private $participantEffectiveDuration = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $participantEffectiveTiming
     */
    private $participantEffectiveTiming = null;

    /**
     * Indicates duration from the participant's study entry.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $participantEffectiveTimeFromStart
     */
    private $participantEffectiveTimeFromStart = null;

    /**
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \TKusy\Hl7FhirR4\GroupMeasureType $participantEffectiveGroupMeasure
     */
    private $participantEffectiveGroupMeasure = null;

    /**
     * Gets as definitionCodeableConcept
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDefinitionCodeableConcept()
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * Sets a new definitionCodeableConcept
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $definitionCodeableConcept
     * @return self
     */
    public function setDefinitionCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $definitionCodeableConcept)
    {
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * Gets as definitionCanonical
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * Sets a new definitionCanonical
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(\TKusy\Hl7FhirR4\CanonicalType $definitionCanonical)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as definitionExpression
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ExpressionType
     */
    public function getDefinitionExpression()
    {
        return $this->definitionExpression;
    }

    /**
     * Sets a new definitionExpression
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ExpressionType $definitionExpression
     * @return self
     */
    public function setDefinitionExpression(\TKusy\Hl7FhirR4\ExpressionType $definitionExpression)
    {
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Gets as definitionDataRequirement
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DataRequirementType
     */
    public function getDefinitionDataRequirement()
    {
        return $this->definitionDataRequirement;
    }

    /**
     * Sets a new definitionDataRequirement
     *
     * Define members of the research element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DataRequirementType $definitionDataRequirement
     * @return self
     */
    public function setDefinitionDataRequirement(\TKusy\Hl7FhirR4\DataRequirementType $definitionDataRequirement)
    {
        $this->definitionDataRequirement = $definitionDataRequirement;
        return $this;
    }

    /**
     * Adds as usageContext
     *
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UsageContextType $usageContext
     */
    public function addToUsageContext(\TKusy\Hl7FhirR4\UsageContextType $usageContext)
    {
        $this->usageContext[] = $usageContext;
        return $this;
    }

    /**
     * isset usageContext
     *
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsageContext($index)
    {
        return isset($this->usageContext[$index]);
    }

    /**
     * unset usageContext
     *
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsageContext($index)
    {
        unset($this->usageContext[$index]);
    }

    /**
     * Gets as usageContext
     *
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @return \TKusy\Hl7FhirR4\UsageContextType[]
     */
    public function getUsageContext()
    {
        return $this->usageContext;
    }

    /**
     * Sets a new usageContext
     *
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @param \TKusy\Hl7FhirR4\UsageContextType[] $usageContext
     * @return self
     */
    public function setUsageContext(array $usageContext)
    {
        $this->usageContext = $usageContext;
        return $this;
    }

    /**
     * Gets as exclude
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Sets a new exclude
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $exclude
     * @return self
     */
    public function setExclude(\TKusy\Hl7FhirR4\BooleanType $exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure(\TKusy\Hl7FhirR4\CodeableConceptType $unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as studyEffectiveDescription
     *
     * A narrative description of the time period the study covers.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getStudyEffectiveDescription()
    {
        return $this->studyEffectiveDescription;
    }

    /**
     * Sets a new studyEffectiveDescription
     *
     * A narrative description of the time period the study covers.
     *
     * @param \TKusy\Hl7FhirR4\StringType $studyEffectiveDescription
     * @return self
     */
    public function setStudyEffectiveDescription(\TKusy\Hl7FhirR4\StringType $studyEffectiveDescription)
    {
        $this->studyEffectiveDescription = $studyEffectiveDescription;
        return $this;
    }

    /**
     * Gets as studyEffectiveDateTime
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getStudyEffectiveDateTime()
    {
        return $this->studyEffectiveDateTime;
    }

    /**
     * Sets a new studyEffectiveDateTime
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $studyEffectiveDateTime
     * @return self
     */
    public function setStudyEffectiveDateTime(\TKusy\Hl7FhirR4\DateTimeType $studyEffectiveDateTime)
    {
        $this->studyEffectiveDateTime = $studyEffectiveDateTime;
        return $this;
    }

    /**
     * Gets as studyEffectivePeriod
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getStudyEffectivePeriod()
    {
        return $this->studyEffectivePeriod;
    }

    /**
     * Sets a new studyEffectivePeriod
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $studyEffectivePeriod
     * @return self
     */
    public function setStudyEffectivePeriod(\TKusy\Hl7FhirR4\PeriodType $studyEffectivePeriod)
    {
        $this->studyEffectivePeriod = $studyEffectivePeriod;
        return $this;
    }

    /**
     * Gets as studyEffectiveDuration
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getStudyEffectiveDuration()
    {
        return $this->studyEffectiveDuration;
    }

    /**
     * Sets a new studyEffectiveDuration
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $studyEffectiveDuration
     * @return self
     */
    public function setStudyEffectiveDuration(\TKusy\Hl7FhirR4\DurationType $studyEffectiveDuration)
    {
        $this->studyEffectiveDuration = $studyEffectiveDuration;
        return $this;
    }

    /**
     * Gets as studyEffectiveTiming
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getStudyEffectiveTiming()
    {
        return $this->studyEffectiveTiming;
    }

    /**
     * Sets a new studyEffectiveTiming
     *
     * Indicates what effective period the study covers. (choose any one of studyEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $studyEffectiveTiming
     * @return self
     */
    public function setStudyEffectiveTiming(\TKusy\Hl7FhirR4\TimingType $studyEffectiveTiming)
    {
        $this->studyEffectiveTiming = $studyEffectiveTiming;
        return $this;
    }

    /**
     * Gets as studyEffectiveTimeFromStart
     *
     * Indicates duration from the study initiation.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getStudyEffectiveTimeFromStart()
    {
        return $this->studyEffectiveTimeFromStart;
    }

    /**
     * Sets a new studyEffectiveTimeFromStart
     *
     * Indicates duration from the study initiation.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $studyEffectiveTimeFromStart
     * @return self
     */
    public function setStudyEffectiveTimeFromStart(\TKusy\Hl7FhirR4\DurationType $studyEffectiveTimeFromStart)
    {
        $this->studyEffectiveTimeFromStart = $studyEffectiveTimeFromStart;
        return $this;
    }

    /**
     * Gets as studyEffectiveGroupMeasure
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return \TKusy\Hl7FhirR4\GroupMeasureType
     */
    public function getStudyEffectiveGroupMeasure()
    {
        return $this->studyEffectiveGroupMeasure;
    }

    /**
     * Sets a new studyEffectiveGroupMeasure
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param \TKusy\Hl7FhirR4\GroupMeasureType $studyEffectiveGroupMeasure
     * @return self
     */
    public function setStudyEffectiveGroupMeasure(\TKusy\Hl7FhirR4\GroupMeasureType $studyEffectiveGroupMeasure)
    {
        $this->studyEffectiveGroupMeasure = $studyEffectiveGroupMeasure;
        return $this;
    }

    /**
     * Gets as participantEffectiveDescription
     *
     * A narrative description of the time period the study covers.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getParticipantEffectiveDescription()
    {
        return $this->participantEffectiveDescription;
    }

    /**
     * Sets a new participantEffectiveDescription
     *
     * A narrative description of the time period the study covers.
     *
     * @param \TKusy\Hl7FhirR4\StringType $participantEffectiveDescription
     * @return self
     */
    public function setParticipantEffectiveDescription(\TKusy\Hl7FhirR4\StringType $participantEffectiveDescription)
    {
        $this->participantEffectiveDescription = $participantEffectiveDescription;
        return $this;
    }

    /**
     * Gets as participantEffectiveDateTime
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getParticipantEffectiveDateTime()
    {
        return $this->participantEffectiveDateTime;
    }

    /**
     * Sets a new participantEffectiveDateTime
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $participantEffectiveDateTime
     * @return self
     */
    public function setParticipantEffectiveDateTime(\TKusy\Hl7FhirR4\DateTimeType $participantEffectiveDateTime)
    {
        $this->participantEffectiveDateTime = $participantEffectiveDateTime;
        return $this;
    }

    /**
     * Gets as participantEffectivePeriod
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getParticipantEffectivePeriod()
    {
        return $this->participantEffectivePeriod;
    }

    /**
     * Sets a new participantEffectivePeriod
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $participantEffectivePeriod
     * @return self
     */
    public function setParticipantEffectivePeriod(\TKusy\Hl7FhirR4\PeriodType $participantEffectivePeriod)
    {
        $this->participantEffectivePeriod = $participantEffectivePeriod;
        return $this;
    }

    /**
     * Gets as participantEffectiveDuration
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getParticipantEffectiveDuration()
    {
        return $this->participantEffectiveDuration;
    }

    /**
     * Sets a new participantEffectiveDuration
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $participantEffectiveDuration
     * @return self
     */
    public function setParticipantEffectiveDuration(\TKusy\Hl7FhirR4\DurationType $participantEffectiveDuration)
    {
        $this->participantEffectiveDuration = $participantEffectiveDuration;
        return $this;
    }

    /**
     * Gets as participantEffectiveTiming
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getParticipantEffectiveTiming()
    {
        return $this->participantEffectiveTiming;
    }

    /**
     * Sets a new participantEffectiveTiming
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $participantEffectiveTiming
     * @return self
     */
    public function setParticipantEffectiveTiming(\TKusy\Hl7FhirR4\TimingType $participantEffectiveTiming)
    {
        $this->participantEffectiveTiming = $participantEffectiveTiming;
        return $this;
    }

    /**
     * Gets as participantEffectiveTimeFromStart
     *
     * Indicates duration from the participant's study entry.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getParticipantEffectiveTimeFromStart()
    {
        return $this->participantEffectiveTimeFromStart;
    }

    /**
     * Sets a new participantEffectiveTimeFromStart
     *
     * Indicates duration from the participant's study entry.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $participantEffectiveTimeFromStart
     * @return self
     */
    public function setParticipantEffectiveTimeFromStart(\TKusy\Hl7FhirR4\DurationType $participantEffectiveTimeFromStart)
    {
        $this->participantEffectiveTimeFromStart = $participantEffectiveTimeFromStart;
        return $this;
    }

    /**
     * Gets as participantEffectiveGroupMeasure
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return \TKusy\Hl7FhirR4\GroupMeasureType
     */
    public function getParticipantEffectiveGroupMeasure()
    {
        return $this->participantEffectiveGroupMeasure;
    }

    /**
     * Sets a new participantEffectiveGroupMeasure
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param \TKusy\Hl7FhirR4\GroupMeasureType $participantEffectiveGroupMeasure
     * @return self
     */
    public function setParticipantEffectiveGroupMeasure(\TKusy\Hl7FhirR4\GroupMeasureType $participantEffectiveGroupMeasure)
    {
        $this->participantEffectiveGroupMeasure = $participantEffectiveGroupMeasure;
        return $this;
    }


}

