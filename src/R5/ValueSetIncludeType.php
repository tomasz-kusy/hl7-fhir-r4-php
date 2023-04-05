<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetIncludeType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Include
 */
class ValueSetIncludeType extends BackboneElementType
{

    /**
     * An absolute URI which is the code system from which the selected codes come from.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $system
     */
    private $system = null;

    /**
     * The version of the code system that the codes are selected from, or the special version '*' for all versions.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * Specifies a concept to be included or excluded.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetConceptType[] $concept
     */
    private $concept = null;

    /**
     * Select concepts by specifying a matching criterion based on the properties (including relationships) defined by the system, or on filters defined by the system. If multiple filters are specified within the include, they SHALL all be true.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetFilterType[] $filter
     */
    private $filter = null;

    /**
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url. If multiple value sets are specified this includes the intersection of the contents of all of the referenced value sets.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $valueSet
     */
    private $valueSet = null;

    /**
     * A copyright statement for the specific code system asserted by the containing ValueSet.compose.include element's system value (if the associated ValueSet.compose.include.version element is not present); or the code system and version combination (if the associated ValueSet.compose.include.version element is present).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $copyright
     */
    private $copyright = null;

    /**
     * Gets as system
     *
     * An absolute URI which is the code system from which the selected codes come from.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * An absolute URI which is the code system from which the selected codes come from.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $system
     * @return self
     */
    public function setSystem(?\TKusy\Hl7Fhir\R5\UriType $system = null)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the code system that the codes are selected from, or the special version '*' for all versions.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the code system that the codes are selected from, or the special version '*' for all versions.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as concept
     *
     * Specifies a concept to be included or excluded.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetConceptType $concept
     */
    public function addToConcept(\TKusy\Hl7Fhir\R5\ValueSetConceptType $concept)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * isset concept
     *
     * Specifies a concept to be included or excluded.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConcept($index)
    {
        return isset($this->concept[$index]);
    }

    /**
     * unset concept
     *
     * Specifies a concept to be included or excluded.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConcept($index)
    {
        unset($this->concept[$index]);
    }

    /**
     * Gets as concept
     *
     * Specifies a concept to be included or excluded.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetConceptType[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Sets a new concept
     *
     * Specifies a concept to be included or excluded.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetConceptType[] $concept
     * @return self
     */
    public function setConcept(array $concept = null)
    {
        $this->concept = $concept;
        return $this;
    }

    /**
     * Adds as filter
     *
     * Select concepts by specifying a matching criterion based on the properties (including relationships) defined by the system, or on filters defined by the system. If multiple filters are specified within the include, they SHALL all be true.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetFilterType $filter
     */
    public function addToFilter(\TKusy\Hl7Fhir\R5\ValueSetFilterType $filter)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * isset filter
     *
     * Select concepts by specifying a matching criterion based on the properties (including relationships) defined by the system, or on filters defined by the system. If multiple filters are specified within the include, they SHALL all be true.
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
     * Select concepts by specifying a matching criterion based on the properties (including relationships) defined by the system, or on filters defined by the system. If multiple filters are specified within the include, they SHALL all be true.
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
     * Select concepts by specifying a matching criterion based on the properties (including relationships) defined by the system, or on filters defined by the system. If multiple filters are specified within the include, they SHALL all be true.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetFilterType[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Select concepts by specifying a matching criterion based on the properties (including relationships) defined by the system, or on filters defined by the system. If multiple filters are specified within the include, they SHALL all be true.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetFilterType[] $filter
     * @return self
     */
    public function setFilter(array $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Adds as valueSet
     *
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url. If multiple value sets are specified this includes the intersection of the contents of all of the referenced value sets.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     */
    public function addToValueSet(\TKusy\Hl7Fhir\R5\CanonicalType $valueSet)
    {
        $this->valueSet[] = $valueSet;
        return $this;
    }

    /**
     * isset valueSet
     *
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url. If multiple value sets are specified this includes the intersection of the contents of all of the referenced value sets.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueSet($index)
    {
        return isset($this->valueSet[$index]);
    }

    /**
     * unset valueSet
     *
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url. If multiple value sets are specified this includes the intersection of the contents of all of the referenced value sets.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueSet($index)
    {
        unset($this->valueSet[$index]);
    }

    /**
     * Gets as valueSet
     *
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url. If multiple value sets are specified this includes the intersection of the contents of all of the referenced value sets.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * Selects the concepts found in this value set (based on its value set definition). This is an absolute URI that is a reference to ValueSet.url. If multiple value sets are specified this includes the intersection of the contents of all of the referenced value sets.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $valueSet
     * @return self
     */
    public function setValueSet(array $valueSet = null)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement for the specific code system asserted by the containing ValueSet.compose.include element's system value (if the associated ValueSet.compose.include.version element is not present); or the code system and version combination (if the associated ValueSet.compose.include.version element is present).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * A copyright statement for the specific code system asserted by the containing ValueSet.compose.include element's system value (if the associated ValueSet.compose.include.version element is not present); or the code system and version combination (if the associated ValueSet.compose.include.version element is present).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $copyright
     * @return self
     */
    public function setCopyright(?\TKusy\Hl7Fhir\R5\StringType $copyright = null)
    {
        $this->copyright = $copyright;
        return $this;
    }


}

