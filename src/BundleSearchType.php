<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BundleSearchType
 *
 * A container for a collection of resources.
 * XSD Type: Bundle.Search
 */
class BundleSearchType extends BackboneElementType
{

    /**
     * Why this entry is in the result set - whether it's included as a match or because of an _include requirement, or to convey information or warning information about the search process.
     *
     * @var \TKusy\Hl7FhirR4\SearchEntryModeType $mode
     */
    private $mode = null;

    /**
     * When searching, the server's search ranking score for the entry.
     *
     * @var float $score
     */
    private $score = null;

    /**
     * Gets as mode
     *
     * Why this entry is in the result set - whether it's included as a match or because of an _include requirement, or to convey information or warning information about the search process.
     *
     * @return \TKusy\Hl7FhirR4\SearchEntryModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Why this entry is in the result set - whether it's included as a match or because of an _include requirement, or to convey information or warning information about the search process.
     *
     * @param \TKusy\Hl7FhirR4\SearchEntryModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7FhirR4\SearchEntryModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as score
     *
     * When searching, the server's search ranking score for the entry.
     *
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * When searching, the server's search ranking score for the entry.
     *
     * @param float $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }


}

