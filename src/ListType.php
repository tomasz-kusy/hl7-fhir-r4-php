<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ListType
 *
 * A list is a curated collection of resources.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: List
 */
class ListType extends DomainResourceType
{

    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current state of this list.
     *
     * @var \TKusy\Hl7FhirR4\ListStatusType $status
     */
    private $status = null;

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @var \TKusy\Hl7FhirR4\ListModeType $mode
     */
    private $mode = null;

    /**
     * A label for the list assigned by the author.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * This code defines the purpose of the list - why it was created.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The common subject (or patient) of the resources that are in the list if there is one.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter that is the context in which this list was created.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date that the list was prepared.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $source
     */
    private $source = null;

    /**
     * What order applies to the items in the list.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $orderedBy
     */
    private $orderedBy = null;

    /**
     * Comments that apply to the overall list.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Entries in this list.
     *
     * @var \TKusy\Hl7FhirR4\ListEntryType[] $entry
     */
    private $entry = null;

    /**
     * If the list is empty, why the list is empty.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $emptyReason
     */
    private $emptyReason = null;

    /**
     * Adds as identifier
     *
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the current state of this list.
     *
     * @return \TKusy\Hl7FhirR4\ListStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current state of this list.
     *
     * @param \TKusy\Hl7FhirR4\ListStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ListStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as mode
     *
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @return \TKusy\Hl7FhirR4\ListModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @param \TKusy\Hl7FhirR4\ListModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7FhirR4\ListModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as title
     *
     * A label for the list assigned by the author.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A label for the list assigned by the author.
     *
     * @param \TKusy\Hl7FhirR4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7FhirR4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as code
     *
     * This code defines the purpose of the list - why it was created.
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
     * This code defines the purpose of the list - why it was created.
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
     * Gets as subject
     *
     * The common subject (or patient) of the resources that are in the list if there is one.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The common subject (or patient) of the resources that are in the list if there is one.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter that is the context in which this list was created.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The encounter that is the context in which this list was created.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date that the list was prepared.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date that the list was prepared.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as source
     *
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\ReferenceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as orderedBy
     *
     * What order applies to the items in the list.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * Sets a new orderedBy
     *
     * What order applies to the items in the list.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $orderedBy
     * @return self
     */
    public function setOrderedBy(\TKusy\Hl7FhirR4\CodeableConceptType $orderedBy)
    {
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments that apply to the overall list.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments that apply to the overall list.
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
     * Comments that apply to the overall list.
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
     * Comments that apply to the overall list.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments that apply to the overall list.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as entry
     *
     * Entries in this list.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ListEntryType $entry
     */
    public function addToEntry(\TKusy\Hl7FhirR4\ListEntryType $entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * isset entry
     *
     * Entries in this list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntry($index)
    {
        return isset($this->entry[$index]);
    }

    /**
     * unset entry
     *
     * Entries in this list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntry($index)
    {
        unset($this->entry[$index]);
    }

    /**
     * Gets as entry
     *
     * Entries in this list.
     *
     * @return \TKusy\Hl7FhirR4\ListEntryType[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Sets a new entry
     *
     * Entries in this list.
     *
     * @param \TKusy\Hl7FhirR4\ListEntryType[] $entry
     * @return self
     */
    public function setEntry(array $entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Gets as emptyReason
     *
     * If the list is empty, why the list is empty.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * Sets a new emptyReason
     *
     * If the list is empty, why the list is empty.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $emptyReason
     * @return self
     */
    public function setEmptyReason(\TKusy\Hl7FhirR4\CodeableConceptType $emptyReason)
    {
        $this->emptyReason = $emptyReason;
        return $this;
    }


}

