<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationTitleType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Title
 */
class CitationTitleType extends BackboneElementType
{

    /**
     * Used to express the reason for or classification of the title.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Used to express the specific language of the title.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    private $language = null;

    /**
     * The title of the article or artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $text
     */
    private $text = null;

    /**
     * Adds as type
     *
     * Used to express the reason for or classification of the title.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Used to express the reason for or classification of the title.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Used to express the reason for or classification of the title.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Used to express the reason for or classification of the title.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to express the reason for or classification of the title.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as language
     *
     * Used to express the specific language of the title.
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
     * Used to express the specific language of the title.
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
     * The title of the article or artifact.
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
     * The title of the article or artifact.
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

