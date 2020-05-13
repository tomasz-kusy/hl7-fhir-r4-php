<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CompositionSectionType
 *
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 * XSD Type: Composition.Section
 */
class CompositionSectionType extends BackboneElementType
{

    /**
     * The label for this particular section. This will be part of the rendered content for the document, and is often used to build a table of contents.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $title
     */
    private $title = null;

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $author
     */
    private $author = null;

    /**
     * The actual focus of the section when it is not the subject of the composition, but instead represents something or someone associated with the subject such as (for a patient subject) a spouse, parent, fetus, or donor. If not focus is specified, the focus is assumed to be focus of the parent section, or, for a section in the Composition itself, the subject of the composition. Sections with a focus SHALL only include resources where the logical subject (patient, subject, focus, etc.) matches the section focus, or the resources have no logical subject (few resources).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $focus
     */
    private $focus = null;

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     *
     * @var \TKusy\Hl7Fhir\R4\NarrativeType $text
     */
    private $text = null;

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @var \TKusy\Hl7Fhir\R4\ListModeType $mode
     */
    private $mode = null;

    /**
     * Specifies the order applied to the items in the section entries.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $orderedBy
     */
    private $orderedBy = null;

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $entry
     */
    private $entry = null;

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $emptyReason
     */
    private $emptyReason = null;

    /**
     * A nested sub-section within this section.
     *
     * @var \TKusy\Hl7Fhir\R4\CompositionSectionType[] $section
     */
    private $section = null;

    /**
     * Gets as title
     *
     * The label for this particular section. This will be part of the rendered content for the document, and is often used to build a table of contents.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The label for this particular section. This will be part of the rendered content for the document, and is often used to build a table of contents.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as author
     *
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $author
     */
    public function addToAuthor(\TKusy\Hl7Fhir\R4\ReferenceType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $author
     * @return self
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as focus
     *
     * The actual focus of the section when it is not the subject of the composition, but instead represents something or someone associated with the subject such as (for a patient subject) a spouse, parent, fetus, or donor. If not focus is specified, the focus is assumed to be focus of the parent section, or, for a section in the Composition itself, the subject of the composition. Sections with a focus SHALL only include resources where the logical subject (patient, subject, focus, etc.) matches the section focus, or the resources have no logical subject (few resources).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The actual focus of the section when it is not the subject of the composition, but instead represents something or someone associated with the subject such as (for a patient subject) a spouse, parent, fetus, or donor. If not focus is specified, the focus is assumed to be focus of the parent section, or, for a section in the Composition itself, the subject of the composition. Sections with a focus SHALL only include resources where the logical subject (patient, subject, focus, etc.) matches the section focus, or the resources have no logical subject (few resources).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $focus
     * @return self
     */
    public function setFocus(\TKusy\Hl7Fhir\R4\ReferenceType $focus)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as text
     *
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     *
     * @return \TKusy\Hl7Fhir\R4\NarrativeType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     *
     * @param \TKusy\Hl7Fhir\R4\NarrativeType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R4\NarrativeType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as mode
     *
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @return \TKusy\Hl7Fhir\R4\ListModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @param \TKusy\Hl7Fhir\R4\ListModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R4\ListModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as orderedBy
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * Sets a new orderedBy
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $orderedBy
     * @return self
     */
    public function setOrderedBy(\TKusy\Hl7Fhir\R4\CodeableConceptType $orderedBy)
    {
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * Adds as entry
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $entry
     */
    public function addToEntry(\TKusy\Hl7Fhir\R4\ReferenceType $entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * isset entry
     *
     * A reference to the actual resource from which the narrative in the section is derived.
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
     * A reference to the actual resource from which the narrative in the section is derived.
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
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Sets a new entry
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $entry
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
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * Sets a new emptyReason
     *
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $emptyReason
     * @return self
     */
    public function setEmptyReason(\TKusy\Hl7Fhir\R4\CodeableConceptType $emptyReason)
    {
        $this->emptyReason = $emptyReason;
        return $this;
    }

    /**
     * Adds as section
     *
     * A nested sub-section within this section.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CompositionSectionType $section
     */
    public function addToSection(\TKusy\Hl7Fhir\R4\CompositionSectionType $section)
    {
        $this->section[] = $section;
        return $this;
    }

    /**
     * isset section
     *
     * A nested sub-section within this section.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSection($index)
    {
        return isset($this->section[$index]);
    }

    /**
     * unset section
     *
     * A nested sub-section within this section.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSection($index)
    {
        unset($this->section[$index]);
    }

    /**
     * Gets as section
     *
     * A nested sub-section within this section.
     *
     * @return \TKusy\Hl7Fhir\R4\CompositionSectionType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * A nested sub-section within this section.
     *
     * @param \TKusy\Hl7Fhir\R4\CompositionSectionType[] $section
     * @return self
     */
    public function setSection(array $section)
    {
        $this->section = $section;
        return $this;
    }


}

