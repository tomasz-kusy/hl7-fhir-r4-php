<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceReportSectionType
 *
 * The EvidenceReport Resource is a specialized container for a collection of resources and codeable concepts, adapted to support compositions of Evidence, EvidenceVariable, and Citation resources and related concepts.
 * XSD Type: EvidenceReport.Section
 */
class EvidenceReportSectionType extends BackboneElementType
{

    /**
     * The label for this particular section. This will be part of the rendered content for the document, and is often used to build a table of contents.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A code identifying the kind of content contained within the section. This should be consistent with the section title.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $focus
     */
    private $focus = null;

    /**
     * A definitional Resource identifying the kind of content contained within the section. This should be consistent with the section title.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $focusReference
     */
    private $focusReference = null;

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $author
     */
    private $author = null;

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is peferred to contain sufficient detail to make it acceptable for a human to just read the narrative.
     *
     * @var \TKusy\Hl7Fhir\R5\NarrativeType $text
     */
    private $text = null;

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @var \TKusy\Hl7Fhir\R5\ListModeType $mode
     */
    private $mode = null;

    /**
     * Specifies the order applied to the items in the section entries.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $orderedBy
     */
    private $orderedBy = null;

    /**
     * Specifies any type of classification of the evidence report.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $entryClassifier
     */
    private $entryClassifier = null;

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $entryReference
     */
    private $entryReference = null;

    /**
     * Quantity as content.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType[] $entryQuantity
     */
    private $entryQuantity = null;

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $emptyReason
     */
    private $emptyReason = null;

    /**
     * A nested sub-section within this section.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceReportSectionType[] $section
     */
    private $section = null;

    /**
     * Gets as title
     *
     * The label for this particular section. This will be part of the rendered content for the document, and is often used to build a table of contents.
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
     * The label for this particular section. This will be part of the rendered content for the document, and is often used to build a table of contents.
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
     * Gets as focus
     *
     * A code identifying the kind of content contained within the section. This should be consistent with the section title.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * A code identifying the kind of content contained within the section. This should be consistent with the section title.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $focus
     * @return self
     */
    public function setFocus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as focusReference
     *
     * A definitional Resource identifying the kind of content contained within the section. This should be consistent with the section title.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getFocusReference()
    {
        return $this->focusReference;
    }

    /**
     * Sets a new focusReference
     *
     * A definitional Resource identifying the kind of content contained within the section. This should be consistent with the section title.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focusReference
     * @return self
     */
    public function setFocusReference(?\TKusy\Hl7Fhir\R5\ReferenceType $focusReference = null)
    {
        $this->focusReference = $focusReference;
        return $this;
    }

    /**
     * Adds as author
     *
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    public function addToAuthor(\TKusy\Hl7Fhir\R5\ReferenceType $author)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as text
     *
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is peferred to contain sufficient detail to make it acceptable for a human to just read the narrative.
     *
     * @return \TKusy\Hl7Fhir\R5\NarrativeType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is peferred to contain sufficient detail to make it acceptable for a human to just read the narrative.
     *
     * @param \TKusy\Hl7Fhir\R5\NarrativeType $text
     * @return self
     */
    public function setText(?\TKusy\Hl7Fhir\R5\NarrativeType $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as mode
     *
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
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
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     *
     * @param \TKusy\Hl7Fhir\R5\ListModeType $mode
     * @return self
     */
    public function setMode(?\TKusy\Hl7Fhir\R5\ListModeType $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as orderedBy
     *
     * Specifies the order applied to the items in the section entries.
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
     * Specifies the order applied to the items in the section entries.
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
     * Adds as entryClassifier
     *
     * Specifies any type of classification of the evidence report.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $entryClassifier
     */
    public function addToEntryClassifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $entryClassifier)
    {
        $this->entryClassifier[] = $entryClassifier;
        return $this;
    }

    /**
     * isset entryClassifier
     *
     * Specifies any type of classification of the evidence report.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntryClassifier($index)
    {
        return isset($this->entryClassifier[$index]);
    }

    /**
     * unset entryClassifier
     *
     * Specifies any type of classification of the evidence report.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntryClassifier($index)
    {
        unset($this->entryClassifier[$index]);
    }

    /**
     * Gets as entryClassifier
     *
     * Specifies any type of classification of the evidence report.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getEntryClassifier()
    {
        return $this->entryClassifier;
    }

    /**
     * Sets a new entryClassifier
     *
     * Specifies any type of classification of the evidence report.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $entryClassifier
     * @return self
     */
    public function setEntryClassifier(array $entryClassifier = null)
    {
        $this->entryClassifier = $entryClassifier;
        return $this;
    }

    /**
     * Adds as entryReference
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $entryReference
     */
    public function addToEntryReference(\TKusy\Hl7Fhir\R5\ReferenceType $entryReference)
    {
        $this->entryReference[] = $entryReference;
        return $this;
    }

    /**
     * isset entryReference
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntryReference($index)
    {
        return isset($this->entryReference[$index]);
    }

    /**
     * unset entryReference
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntryReference($index)
    {
        unset($this->entryReference[$index]);
    }

    /**
     * Gets as entryReference
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEntryReference()
    {
        return $this->entryReference;
    }

    /**
     * Sets a new entryReference
     *
     * A reference to the actual resource from which the narrative in the section is derived.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $entryReference
     * @return self
     */
    public function setEntryReference(array $entryReference = null)
    {
        $this->entryReference = $entryReference;
        return $this;
    }

    /**
     * Adds as entryQuantity
     *
     * Quantity as content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuantityType $entryQuantity
     */
    public function addToEntryQuantity(\TKusy\Hl7Fhir\R5\QuantityType $entryQuantity)
    {
        $this->entryQuantity[] = $entryQuantity;
        return $this;
    }

    /**
     * isset entryQuantity
     *
     * Quantity as content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntryQuantity($index)
    {
        return isset($this->entryQuantity[$index]);
    }

    /**
     * unset entryQuantity
     *
     * Quantity as content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntryQuantity($index)
    {
        unset($this->entryQuantity[$index]);
    }

    /**
     * Gets as entryQuantity
     *
     * Quantity as content.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType[]
     */
    public function getEntryQuantity()
    {
        return $this->entryQuantity;
    }

    /**
     * Sets a new entryQuantity
     *
     * Quantity as content.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType[] $entryQuantity
     * @return self
     */
    public function setEntryQuantity(array $entryQuantity = null)
    {
        $this->entryQuantity = $entryQuantity;
        return $this;
    }

    /**
     * Gets as emptyReason
     *
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
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
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $emptyReason
     * @return self
     */
    public function setEmptyReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $emptyReason = null)
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
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportSectionType $section
     */
    public function addToSection(\TKusy\Hl7Fhir\R5\EvidenceReportSectionType $section)
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
     * @return \TKusy\Hl7Fhir\R5\EvidenceReportSectionType[]
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
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportSectionType[] $section
     * @return self
     */
    public function setSection(array $section = null)
    {
        $this->section = $section;
        return $this;
    }


}

