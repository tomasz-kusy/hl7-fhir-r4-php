<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ListType
 *
 * A List is a curated collection of resources, for things such as problem lists, allergy lists, facility list, organization list, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: List
 */
class ListType extends DomainResourceType
{

    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current state of this list.
     *
     * @var \TKusy\Hl7Fhir\R5\ListStatusType $status
     */
    private $status = null;

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @var \TKusy\Hl7Fhir\R5\ListModeType $mode
     */
    private $mode = null;

    /**
     * A label for the list assigned by the author.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * This code defines the purpose of the list - why it was created.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The common subject(s) (or patient(s)) of the resources that are in the list if there is one (or a set of subjects).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * The encounter that is the context in which this list was created.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Date list was last reviewed/revised and determined to be 'current'.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    private $source = null;

    /**
     * What order applies to the items in the list.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $orderedBy
     */
    private $orderedBy = null;

    /**
     * Comments that apply to the overall list.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Entries in this list.
     *
     * @var \TKusy\Hl7Fhir\R5\ListEntryType[] $entry
     */
    private $entry = null;

    /**
     * If the list is empty, why the list is empty.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $emptyReason
     */
    private $emptyReason = null;

    /**
     * Adds as identifier
     *
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the current state of this list.
     *
     * @return \TKusy\Hl7Fhir\R5\ListStatusType
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
     * @param \TKusy\Hl7Fhir\R5\ListStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ListStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as mode
     *
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @return \TKusy\Hl7Fhir\R5\ListModeType
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
     * @param \TKusy\Hl7Fhir\R5\ListModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R5\ListModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as title
     *
     * A label for the list assigned by the author.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as code
     *
     * This code defines the purpose of the list - why it was created.
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
     * This code defines the purpose of the list - why it was created.
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
     * Adds as subject
     *
     * The common subject(s) (or patient(s)) of the resources that are in the list if there is one (or a set of subjects).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * The common subject(s) (or patient(s)) of the resources that are in the list if there is one (or a set of subjects).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * The common subject(s) (or patient(s)) of the resources that are in the list if there is one (or a set of subjects).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * The common subject(s) (or patient(s)) of the resources that are in the list if there is one (or a set of subjects).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The common subject(s) (or patient(s)) of the resources that are in the list if there is one (or a set of subjects).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter that is the context in which this list was created.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as date
     *
     * Date list was last reviewed/revised and determined to be 'current'.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date list was last reviewed/revised and determined to be 'current'.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as source
     *
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\ReferenceType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as orderedBy
     *
     * What order applies to the items in the list.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $orderedBy
     * @return self
     */
    public function setOrderedBy(?\TKusy\Hl7Fhir\R5\CodeableConceptType $orderedBy = null)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
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
     * @param \TKusy\Hl7Fhir\R5\ListEntryType $entry
     */
    public function addToEntry(\TKusy\Hl7Fhir\R5\ListEntryType $entry)
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
     * @return \TKusy\Hl7Fhir\R5\ListEntryType[]
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
     * @param \TKusy\Hl7Fhir\R5\ListEntryType[] $entry
     * @return self
     */
    public function setEntry(array $entry = null)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Gets as emptyReason
     *
     * If the list is empty, why the list is empty.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $emptyReason
     * @return self
     */
    public function setEmptyReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $emptyReason = null)
    {
        $this->emptyReason = $emptyReason;
        return $this;
    }


}

