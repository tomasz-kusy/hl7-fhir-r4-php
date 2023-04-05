<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceVariableTimeFromEventType
 *
 * The EvidenceVariable resource describes an element that knowledge (Evidence) is about.
 * XSD Type: EvidenceVariable.TimeFromEvent
 */
class EvidenceVariableTimeFromEventType extends BackboneElementType
{

    /**
     * Human readable description.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * A human-readable string to clarify or explain concepts about the timeFromEvent.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $eventCodeableConcept
     */
    private $eventCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $eventReference
     */
    private $eventReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $eventDateTime
     */
    private $eventDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdType $eventId
     */
    private $eventId = null;

    /**
     * Used to express the observation at a defined amount of time before or after the event.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Used to express the observation within a period before and/or after the event.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $range
     */
    private $range = null;

    /**
     * Gets as description
     *
     * Human readable description.
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
     * Human readable description.
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
     * A human-readable string to clarify or explain concepts about the timeFromEvent.
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
     * A human-readable string to clarify or explain concepts about the timeFromEvent.
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
     * A human-readable string to clarify or explain concepts about the timeFromEvent.
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
     * A human-readable string to clarify or explain concepts about the timeFromEvent.
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
     * A human-readable string to clarify or explain concepts about the timeFromEvent.
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
     * Gets as eventCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getEventCodeableConcept()
    {
        return $this->eventCodeableConcept;
    }

    /**
     * Sets a new eventCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $eventCodeableConcept
     * @return self
     */
    public function setEventCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $eventCodeableConcept = null)
    {
        $this->eventCodeableConcept = $eventCodeableConcept;
        return $this;
    }

    /**
     * Gets as eventReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEventReference()
    {
        return $this->eventReference;
    }

    /**
     * Sets a new eventReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $eventReference
     * @return self
     */
    public function setEventReference(?\TKusy\Hl7Fhir\R5\ReferenceType $eventReference = null)
    {
        $this->eventReference = $eventReference;
        return $this;
    }

    /**
     * Gets as eventDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getEventDateTime()
    {
        return $this->eventDateTime;
    }

    /**
     * Sets a new eventDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $eventDateTime
     * @return self
     */
    public function setEventDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $eventDateTime = null)
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    /**
     * Gets as eventId
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Sets a new eventId
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $eventId
     * @return self
     */
    public function setEventId(?\TKusy\Hl7Fhir\R5\IdType $eventId = null)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to express the observation at a defined amount of time before or after the event.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to express the observation at a defined amount of time before or after the event.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as range
     *
     * Used to express the observation within a period before and/or after the event.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * Used to express the observation within a period before and/or after the event.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $range
     * @return self
     */
    public function setRange(?\TKusy\Hl7Fhir\R5\RangeType $range = null)
    {
        $this->range = $range;
        return $this;
    }


}

