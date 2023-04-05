<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationContributorshipType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Contributorship
 */
class CitationContributorshipType extends BackboneElementType
{

    /**
     * Indicates if the list includes all authors and/or contributors.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $complete
     */
    private $complete = null;

    /**
     * An individual entity named as a contributor, for example in the author list or contributor list.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationEntryType[] $entry
     */
    private $entry = null;

    /**
     * Used to record a display of the author/contributor list without separate data element for each list member.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationSummary1Type[] $summary
     */
    private $summary = null;

    /**
     * Gets as complete
     *
     * Indicates if the list includes all authors and/or contributors.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Sets a new complete
     *
     * Indicates if the list includes all authors and/or contributors.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $complete
     * @return self
     */
    public function setComplete(?\TKusy\Hl7Fhir\R5\BooleanType $complete = null)
    {
        $this->complete = $complete;
        return $this;
    }

    /**
     * Adds as entry
     *
     * An individual entity named as a contributor, for example in the author list or contributor list.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationEntryType $entry
     */
    public function addToEntry(\TKusy\Hl7Fhir\R5\CitationEntryType $entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * isset entry
     *
     * An individual entity named as a contributor, for example in the author list or contributor list.
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
     * An individual entity named as a contributor, for example in the author list or contributor list.
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
     * An individual entity named as a contributor, for example in the author list or contributor list.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationEntryType[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Sets a new entry
     *
     * An individual entity named as a contributor, for example in the author list or contributor list.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationEntryType[] $entry
     * @return self
     */
    public function setEntry(array $entry = null)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adds as summary
     *
     * Used to record a display of the author/contributor list without separate data element for each list member.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationSummary1Type $summary
     */
    public function addToSummary(\TKusy\Hl7Fhir\R5\CitationSummary1Type $summary)
    {
        $this->summary[] = $summary;
        return $this;
    }

    /**
     * isset summary
     *
     * Used to record a display of the author/contributor list without separate data element for each list member.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSummary($index)
    {
        return isset($this->summary[$index]);
    }

    /**
     * unset summary
     *
     * Used to record a display of the author/contributor list without separate data element for each list member.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSummary($index)
    {
        unset($this->summary[$index]);
    }

    /**
     * Gets as summary
     *
     * Used to record a display of the author/contributor list without separate data element for each list member.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationSummary1Type[]
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Used to record a display of the author/contributor list without separate data element for each list member.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationSummary1Type[] $summary
     * @return self
     */
    public function setSummary(array $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }


}

