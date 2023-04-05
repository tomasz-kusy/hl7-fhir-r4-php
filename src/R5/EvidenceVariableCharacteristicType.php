<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceVariableCharacteristicType
 *
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is about.
 * XSD Type: EvidenceVariable.Characteristic
 */
class EvidenceVariableCharacteristicType extends BackboneElementType
{

    /**
     * Label used for when a characteristic refers to another characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $linkId
     */
    private $linkId = null;

    /**
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * When true, this characteristic is an exclusion criterion. In other words, not matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $exclude
     */
    private $exclude = null;

    /**
     * Defines the characteristic using a Reference.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $definitionReference
     */
    private $definitionReference = null;

    /**
     * Defines the characteristic using Canonical.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * Defines the characteristic using CodeableConcept.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $definitionCodeableConcept
     */
    private $definitionCodeableConcept = null;

    /**
     * Defines the characteristic using Expression.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $definitionExpression
     */
    private $definitionExpression = null;

    /**
     * Defines the characteristic using id.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $definitionId
     */
    private $definitionId = null;

    /**
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByTypeAndValueType $definitionByTypeAndValue
     */
    private $definitionByTypeAndValue = null;

    /**
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByCombinationType $definitionByCombination
     */
    private $definitionByCombination = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $instancesQuantity
     */
    private $instancesQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $instancesRange
     */
    private $instancesRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $durationQuantity
     */
    private $durationQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $durationRange
     */
    private $durationRange = null;

    /**
     * Timing in which the characteristic is determined.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceVariableTimeFromEventType[] $timeFromEvent
     */
    private $timeFromEvent = null;

    /**
     * Gets as linkId
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * Label used for when a characteristic refers to another characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\IdType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as description
     *
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
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
     * A short, natural language description of the characteristic that could be used to communicate the criteria to an end-user.
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
     * Adds as note
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * A human-readable string to clarify or explain concepts about the characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as exclude
     *
     * When true, this characteristic is an exclusion criterion. In other words, not matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Sets a new exclude
     *
     * When true, this characteristic is an exclusion criterion. In other words, not matching this characteristic definition is equivalent to meeting this criterion.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $exclude
     * @return self
     */
    public function setExclude(?\TKusy\Hl7Fhir\R5\BooleanType $exclude = null)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Gets as definitionReference
     *
     * Defines the characteristic using a Reference.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDefinitionReference()
    {
        return $this->definitionReference;
    }

    /**
     * Sets a new definitionReference
     *
     * Defines the characteristic using a Reference.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $definitionReference
     * @return self
     */
    public function setDefinitionReference(?\TKusy\Hl7Fhir\R5\ReferenceType $definitionReference = null)
    {
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * Gets as definitionCanonical
     *
     * Defines the characteristic using Canonical.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * Sets a new definitionCanonical
     *
     * Defines the characteristic using Canonical.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical = null)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as definitionCodeableConcept
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDefinitionCodeableConcept()
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * Sets a new definitionCodeableConcept
     *
     * Defines the characteristic using CodeableConcept.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $definitionCodeableConcept
     * @return self
     */
    public function setDefinitionCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $definitionCodeableConcept = null)
    {
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * Gets as definitionExpression
     *
     * Defines the characteristic using Expression.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getDefinitionExpression()
    {
        return $this->definitionExpression;
    }

    /**
     * Sets a new definitionExpression
     *
     * Defines the characteristic using Expression.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $definitionExpression
     * @return self
     */
    public function setDefinitionExpression(?\TKusy\Hl7Fhir\R5\ExpressionType $definitionExpression = null)
    {
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Gets as definitionId
     *
     * Defines the characteristic using id.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getDefinitionId()
    {
        return $this->definitionId;
    }

    /**
     * Sets a new definitionId
     *
     * Defines the characteristic using id.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $definitionId
     * @return self
     */
    public function setDefinitionId(?\TKusy\Hl7Fhir\R5\IdType $definitionId = null)
    {
        $this->definitionId = $definitionId;
        return $this;
    }

    /**
     * Gets as definitionByTypeAndValue
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByTypeAndValueType
     */
    public function getDefinitionByTypeAndValue()
    {
        return $this->definitionByTypeAndValue;
    }

    /**
     * Sets a new definitionByTypeAndValue
     *
     * Defines the characteristic using both a type and value[x] elements.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByTypeAndValueType $definitionByTypeAndValue
     * @return self
     */
    public function setDefinitionByTypeAndValue(?\TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByTypeAndValueType $definitionByTypeAndValue = null)
    {
        $this->definitionByTypeAndValue = $definitionByTypeAndValue;
        return $this;
    }

    /**
     * Gets as definitionByCombination
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByCombinationType
     */
    public function getDefinitionByCombination()
    {
        return $this->definitionByCombination;
    }

    /**
     * Sets a new definitionByCombination
     *
     * Defines the characteristic as a combination of two or more characteristics.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByCombinationType $definitionByCombination
     * @return self
     */
    public function setDefinitionByCombination(?\TKusy\Hl7Fhir\R5\EvidenceVariableDefinitionByCombinationType $definitionByCombination = null)
    {
        $this->definitionByCombination = $definitionByCombination;
        return $this;
    }

    /**
     * Gets as instancesQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getInstancesQuantity()
    {
        return $this->instancesQuantity;
    }

    /**
     * Sets a new instancesQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $instancesQuantity
     * @return self
     */
    public function setInstancesQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $instancesQuantity = null)
    {
        $this->instancesQuantity = $instancesQuantity;
        return $this;
    }

    /**
     * Gets as instancesRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getInstancesRange()
    {
        return $this->instancesRange;
    }

    /**
     * Sets a new instancesRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $instancesRange
     * @return self
     */
    public function setInstancesRange(?\TKusy\Hl7Fhir\R5\RangeType $instancesRange = null)
    {
        $this->instancesRange = $instancesRange;
        return $this;
    }

    /**
     * Gets as durationQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getDurationQuantity()
    {
        return $this->durationQuantity;
    }

    /**
     * Sets a new durationQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $durationQuantity
     * @return self
     */
    public function setDurationQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $durationQuantity = null)
    {
        $this->durationQuantity = $durationQuantity;
        return $this;
    }

    /**
     * Gets as durationRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getDurationRange()
    {
        return $this->durationRange;
    }

    /**
     * Sets a new durationRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $durationRange
     * @return self
     */
    public function setDurationRange(?\TKusy\Hl7Fhir\R5\RangeType $durationRange = null)
    {
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * Adds as timeFromEvent
     *
     * Timing in which the characteristic is determined.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableTimeFromEventType $timeFromEvent
     */
    public function addToTimeFromEvent(\TKusy\Hl7Fhir\R5\EvidenceVariableTimeFromEventType $timeFromEvent)
    {
        $this->timeFromEvent[] = $timeFromEvent;
        return $this;
    }

    /**
     * isset timeFromEvent
     *
     * Timing in which the characteristic is determined.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeFromEvent($index)
    {
        return isset($this->timeFromEvent[$index]);
    }

    /**
     * unset timeFromEvent
     *
     * Timing in which the characteristic is determined.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeFromEvent($index)
    {
        unset($this->timeFromEvent[$index]);
    }

    /**
     * Gets as timeFromEvent
     *
     * Timing in which the characteristic is determined.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceVariableTimeFromEventType[]
     */
    public function getTimeFromEvent()
    {
        return $this->timeFromEvent;
    }

    /**
     * Sets a new timeFromEvent
     *
     * Timing in which the characteristic is determined.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceVariableTimeFromEventType[] $timeFromEvent
     * @return self
     */
    public function setTimeFromEvent(array $timeFromEvent = null)
    {
        $this->timeFromEvent = $timeFromEvent;
        return $this;
    }


}

