<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ElementDefinitionMappingType
 *
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Mapping
 */
class ElementDefinitionMappingType extends BackboneTypeType
{

    /**
     * An internal reference to the definition of a mapping.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $identity
     */
    private $identity = null;

    /**
     * Identifies the computable language in which mapping.map is expressed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $language
     */
    private $language = null;

    /**
     * Expresses what part of the target specification corresponds to this element.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $map
     */
    private $map = null;

    /**
     * Comments that provide information about the mapping or its use.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $comment
     */
    private $comment = null;

    /**
     * Gets as identity
     *
     * An internal reference to the definition of a mapping.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets a new identity
     *
     * An internal reference to the definition of a mapping.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $identity
     * @return self
     */
    public function setIdentity(\TKusy\Hl7Fhir\R5\IdType $identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * Gets as language
     *
     * Identifies the computable language in which mapping.map is expressed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Identifies the computable language in which mapping.map is expressed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as map
     *
     * Expresses what part of the target specification corresponds to this element.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Sets a new map
     *
     * Expresses what part of the target specification corresponds to this element.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $map
     * @return self
     */
    public function setMap(\TKusy\Hl7Fhir\R5\StringType $map)
    {
        $this->map = $map;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Comments that provide information about the mapping or its use.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments that provide information about the mapping or its use.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\MarkdownType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }


}

