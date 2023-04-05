<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationAbstractType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Abstract
 */
class CitationAbstractType extends BackboneElementType
{

    /**
     * Used to express the reason for or classification of the abstract.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Used to express the specific language of the abstract.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    private $language = null;

    /**
     * Abstract content.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $text
     */
    private $text = null;

    /**
     * Copyright notice for the abstract.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * Gets as type
     *
     * Used to express the reason for or classification of the abstract.
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
     * Used to express the reason for or classification of the abstract.
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
     * Gets as language
     *
     * Used to express the specific language of the abstract.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Used to express the specific language of the abstract.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeableConceptType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as text
     *
     * Abstract content.
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
     * Abstract content.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R5\MarkdownType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * Copyright notice for the abstract.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * Copyright notice for the abstract.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(?\TKusy\Hl7Fhir\R5\MarkdownType $copyright = null)
    {
        $this->copyright = $copyright;
        return $this;
    }


}

