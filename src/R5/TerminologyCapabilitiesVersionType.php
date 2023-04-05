<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TerminologyCapabilitiesVersionType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Version
 */
class TerminologyCapabilitiesVersionType extends BackboneElementType
{

    /**
     * For version-less code systems, there should be a single version with no identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $code
     */
    private $code = null;

    /**
     * If this is the default version for this code system.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isDefault
     */
    private $isDefault = null;

    /**
     * If the compositional grammar defined by the code system is supported.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $compositional
     */
    private $compositional = null;

    /**
     * Language Displays supported.
     *
     * @var \TKusy\Hl7Fhir\R5\CommonLanguagesType[] $language
     */
    private $language = null;

    /**
     * Filter Properties supported.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesFilterType[] $filter
     */
    private $filter = null;

    /**
     * Properties supported for $lookup.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $property
     */
    private $property = null;

    /**
     * Gets as code
     *
     * For version-less code systems, there should be a single version with no identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * For version-less code systems, there should be a single version with no identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\StringType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * If this is the default version for this code system.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * If this is the default version for this code system.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isDefault
     * @return self
     */
    public function setIsDefault(?\TKusy\Hl7Fhir\R5\BooleanType $isDefault = null)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as compositional
     *
     * If the compositional grammar defined by the code system is supported.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getCompositional()
    {
        return $this->compositional;
    }

    /**
     * Sets a new compositional
     *
     * If the compositional grammar defined by the code system is supported.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $compositional
     * @return self
     */
    public function setCompositional(?\TKusy\Hl7Fhir\R5\BooleanType $compositional = null)
    {
        $this->compositional = $compositional;
        return $this;
    }

    /**
     * Adds as language
     *
     * Language Displays supported.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CommonLanguagesType $language
     */
    public function addToLanguage(\TKusy\Hl7Fhir\R5\CommonLanguagesType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * Language Displays supported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * Language Displays supported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * Language Displays supported.
     *
     * @return \TKusy\Hl7Fhir\R5\CommonLanguagesType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language Displays supported.
     *
     * @param \TKusy\Hl7Fhir\R5\CommonLanguagesType[] $language
     * @return self
     */
    public function setLanguage(array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as filter
     *
     * Filter Properties supported.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesFilterType $filter
     */
    public function addToFilter(\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesFilterType $filter)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * isset filter
     *
     * Filter Properties supported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFilter($index)
    {
        return isset($this->filter[$index]);
    }

    /**
     * unset filter
     *
     * Filter Properties supported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFilter($index)
    {
        unset($this->filter[$index]);
    }

    /**
     * Gets as filter
     *
     * Filter Properties supported.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesFilterType[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Filter Properties supported.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesFilterType[] $filter
     * @return self
     */
    public function setFilter(array $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Adds as property
     *
     * Properties supported for $lookup.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\CodeType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * Properties supported for $lookup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * Properties supported for $lookup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * Properties supported for $lookup.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Properties supported for $lookup.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }


}

