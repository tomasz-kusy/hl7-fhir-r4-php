<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EvidenceVariableCharacteristicType
 *
 * The EvidenceVariable resource describes a "PICO" element that knowledge (evidence, assertion, recommendation) is about.
 * XSD Type: EvidenceVariable.Characteristic
 */
class EvidenceVariableCharacteristicType extends BackboneElementType
{

    /**
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $definitionReference
     */
    private $definitionReference = null;

    /**
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $definitionCodeableConcept
     */
    private $definitionCodeableConcept = null;

    /**
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ExpressionType $definitionExpression
     */
    private $definitionExpression = null;

    /**
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DataRequirementType $definitionDataRequirement
     */
    private $definitionDataRequirement = null;

    /**
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TriggerDefinitionType $definitionTriggerDefinition
     */
    private $definitionTriggerDefinition = null;

    /**
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @var \TKusy\Hl7Fhir\R4\UsageContextType[] $usageContext
     */
    private $usageContext = null;

    /**
     * When true, members with this characteristic are excluded from the element.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $exclude
     */
    private $exclude = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $participantEffectiveDateTime
     */
    private $participantEffectiveDateTime = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $participantEffectivePeriod
     */
    private $participantEffectivePeriod = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DurationType $participantEffectiveDuration
     */
    private $participantEffectiveDuration = null;

    /**
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimingType $participantEffectiveTiming
     */
    private $participantEffectiveTiming = null;

    /**
     * Indicates duration from the participant's study entry.
     *
     * @var \TKusy\Hl7Fhir\R4\DurationType $timeFromStart
     */
    private $timeFromStart = null;

    /**
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \TKusy\Hl7Fhir\R4\GroupMeasureType $groupMeasure
     */
    private $groupMeasure = null;

    /**
     * Gets as description
     *
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as definitionReference
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDefinitionReference()
    {
        return $this->definitionReference;
    }

    /**
     * Sets a new definitionReference
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $definitionReference
     * @return self
     */
    public function setDefinitionReference(\TKusy\Hl7Fhir\R4\ReferenceType $definitionReference)
    {
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * Gets as definitionCanonical
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * Sets a new definitionCanonical
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(\TKusy\Hl7Fhir\R4\CanonicalType $definitionCanonical)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as definitionCodeableConcept
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getDefinitionCodeableConcept()
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * Sets a new definitionCodeableConcept
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $definitionCodeableConcept
     * @return self
     */
    public function setDefinitionCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $definitionCodeableConcept)
    {
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * Gets as definitionExpression
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ExpressionType
     */
    public function getDefinitionExpression()
    {
        return $this->definitionExpression;
    }

    /**
     * Sets a new definitionExpression
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ExpressionType $definitionExpression
     * @return self
     */
    public function setDefinitionExpression(\TKusy\Hl7Fhir\R4\ExpressionType $definitionExpression)
    {
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Gets as definitionDataRequirement
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DataRequirementType
     */
    public function getDefinitionDataRequirement()
    {
        return $this->definitionDataRequirement;
    }

    /**
     * Sets a new definitionDataRequirement
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DataRequirementType $definitionDataRequirement
     * @return self
     */
    public function setDefinitionDataRequirement(\TKusy\Hl7Fhir\R4\DataRequirementType $definitionDataRequirement)
    {
        $this->definitionDataRequirement = $definitionDataRequirement;
        return $this;
    }

    /**
     * Gets as definitionTriggerDefinition
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TriggerDefinitionType
     */
    public function getDefinitionTriggerDefinition()
    {
        return $this->definitionTriggerDefinition;
    }

    /**
     * Sets a new definitionTriggerDefinition
     *
     * Define members of the evidence element using Codes (such as condition, medication, or observation), Expressions ( using an expression language such as FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the last year). (choose any one of definition*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TriggerDefinitionType $definitionTriggerDefinition
     * @return self
     */
    public function setDefinitionTriggerDefinition(\TKusy\Hl7Fhir\R4\TriggerDefinitionType $definitionTriggerDefinition)
    {
        $this->definitionTriggerDefinition = $definitionTriggerDefinition;
        return $this;
    }

    /**
     * Adds as usageContext
     *
     * Use UsageContext to define the members of the population, such as Age Ranges, Genders, Settings.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\UsageContextType $usageContext
     */
    public function addToUsageContext(\TKusy\Hl7Fhir\R4\UsageContextType $usageContext)
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
     * @return \TKusy\Hl7Fhir\R4\UsageContextType[]
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
     * @param \TKusy\Hl7Fhir\R4\UsageContextType[] $usageContext
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
     * @return \TKusy\Hl7Fhir\R4\BooleanType
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
     * @param \TKusy\Hl7Fhir\R4\BooleanType $exclude
     * @return self
     */
    public function setExclude(\TKusy\Hl7Fhir\R4\BooleanType $exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Gets as participantEffectiveDateTime
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $participantEffectiveDateTime
     * @return self
     */
    public function setParticipantEffectiveDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $participantEffectiveDateTime)
    {
        $this->participantEffectiveDateTime = $participantEffectiveDateTime;
        return $this;
    }

    /**
     * Gets as participantEffectivePeriod
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
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
     * @param \TKusy\Hl7Fhir\R4\PeriodType $participantEffectivePeriod
     * @return self
     */
    public function setParticipantEffectivePeriod(\TKusy\Hl7Fhir\R4\PeriodType $participantEffectivePeriod)
    {
        $this->participantEffectivePeriod = $participantEffectivePeriod;
        return $this;
    }

    /**
     * Gets as participantEffectiveDuration
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DurationType
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
     * @param \TKusy\Hl7Fhir\R4\DurationType $participantEffectiveDuration
     * @return self
     */
    public function setParticipantEffectiveDuration(\TKusy\Hl7Fhir\R4\DurationType $participantEffectiveDuration)
    {
        $this->participantEffectiveDuration = $participantEffectiveDuration;
        return $this;
    }

    /**
     * Gets as participantEffectiveTiming
     *
     * Indicates what effective period the study covers. (choose any one of participantEffective*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TimingType
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
     * @param \TKusy\Hl7Fhir\R4\TimingType $participantEffectiveTiming
     * @return self
     */
    public function setParticipantEffectiveTiming(\TKusy\Hl7Fhir\R4\TimingType $participantEffectiveTiming)
    {
        $this->participantEffectiveTiming = $participantEffectiveTiming;
        return $this;
    }

    /**
     * Gets as timeFromStart
     *
     * Indicates duration from the participant's study entry.
     *
     * @return \TKusy\Hl7Fhir\R4\DurationType
     */
    public function getTimeFromStart()
    {
        return $this->timeFromStart;
    }

    /**
     * Sets a new timeFromStart
     *
     * Indicates duration from the participant's study entry.
     *
     * @param \TKusy\Hl7Fhir\R4\DurationType $timeFromStart
     * @return self
     */
    public function setTimeFromStart(\TKusy\Hl7Fhir\R4\DurationType $timeFromStart)
    {
        $this->timeFromStart = $timeFromStart;
        return $this;
    }

    /**
     * Gets as groupMeasure
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return \TKusy\Hl7Fhir\R4\GroupMeasureType
     */
    public function getGroupMeasure()
    {
        return $this->groupMeasure;
    }

    /**
     * Sets a new groupMeasure
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param \TKusy\Hl7Fhir\R4\GroupMeasureType $groupMeasure
     * @return self
     */
    public function setGroupMeasure(\TKusy\Hl7Fhir\R4\GroupMeasureType $groupMeasure)
    {
        $this->groupMeasure = $groupMeasure;
        return $this;
    }


}

