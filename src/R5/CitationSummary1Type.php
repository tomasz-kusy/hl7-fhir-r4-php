<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationSummary1Type
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Summary1
 */
class CitationSummary1Type extends BackboneElementType
{

    /**
     * Used most commonly to express an author list or a contributorship statement.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The format for the display string, such as author last name with first letter capitalized followed by forename initials.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $style
     */
    private $style = null;

    /**
     * Used to code the producer or rule for creating the display string.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $source
     */
    private $source = null;

    /**
     * The display string for the author list, contributor list, or contributorship statement.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $value
     */
    private $value = null;

    /**
     * Gets as type
     *
     * Used most commonly to express an author list or a contributorship statement.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used most commonly to express an author list or a contributorship statement.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as style
     *
     * The format for the display string, such as author last name with first letter capitalized followed by forename initials.
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
     * The format for the display string, such as author last name with first letter capitalized followed by forename initials.
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
     * Gets as source
     *
     * Used to code the producer or rule for creating the display string.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Used to code the producer or rule for creating the display string.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\CodeableConceptType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as value
     *
     * The display string for the author list, contributor list, or contributorship statement.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The display string for the author list, contributor list, or contributorship statement.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\MarkdownType $value)
    {
        $this->value = $value;
        return $this;
    }


}

