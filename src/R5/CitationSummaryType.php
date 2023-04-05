<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationSummaryType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Summary
 */
class CitationSummaryType extends BackboneElementType
{

    /**
     * Format for display of the citation summary.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $style
     */
    private $style = null;

    /**
     * The human-readable display of the citation summary.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $text
     */
    private $text = null;

    /**
     * Gets as style
     *
     * Format for display of the citation summary.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Sets a new style
     *
     * Format for display of the citation summary.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $style
     * @return self
     */
    public function setStyle(?\TKusy\Hl7Fhir\R5\CodeableConceptType $style = null)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * Gets as text
     *
     * The human-readable display of the citation summary.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The human-readable display of the citation summary.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R5\MarkdownType $text)
    {
        $this->text = $text;
        return $this;
    }


}

