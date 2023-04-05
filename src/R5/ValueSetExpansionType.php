<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetExpansionType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Expansion
 */
class ValueSetExpansionType extends BackboneElementType
{

    /**
     * An identifier that uniquely identifies this expansion of the valueset, based on a unique combination of the provided parameters, the system default parameters, and the underlying system code system versions etc. Systems may re-use the same identifier as long as those factors remain the same, and the expansion is the same, but are not required to do so. This is a business identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $identifier
     */
    private $identifier = null;

    /**
     * As per paging Search results, the next URLs are opaque to the client, have no dictated structure, and only the server understands them.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $next
     */
    private $next = null;

    /**
     * The time at which the expansion was produced by the expanding system.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $timestamp
     */
    private $timestamp = null;

    /**
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $total
     */
    private $total = null;

    /**
     * If paging is being used, the offset at which this resource starts. I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL NOT be present.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $offset
     */
    private $offset = null;

    /**
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetPropertyType[] $property
     */
    private $property = null;

    /**
     * The codes that are contained in the value set expansion.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetContainsType[] $contains
     */
    private $contains = null;

    /**
     * Gets as identifier
     *
     * An identifier that uniquely identifies this expansion of the valueset, based on a unique combination of the provided parameters, the system default parameters, and the underlying system code system versions etc. Systems may re-use the same identifier as long as those factors remain the same, and the expansion is the same, but are not required to do so. This is a business identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * An identifier that uniquely identifies this expansion of the valueset, based on a unique combination of the provided parameters, the system default parameters, and the underlying system code system versions etc. Systems may re-use the same identifier as long as those factors remain the same, and the expansion is the same, but are not required to do so. This is a business identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\UriType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as next
     *
     * As per paging Search results, the next URLs are opaque to the client, have no dictated structure, and only the server understands them.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Sets a new next
     *
     * As per paging Search results, the next URLs are opaque to the client, have no dictated structure, and only the server understands them.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $next
     * @return self
     */
    public function setNext(?\TKusy\Hl7Fhir\R5\UriType $next = null)
    {
        $this->next = $next;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * The time at which the expansion was produced by the expanding system.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $timestamp
     * @return self
     */
    public function setTimestamp(\TKusy\Hl7Fhir\R5\DateTimeType $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total number of concepts in the expansion. If the number of concept nodes in this resource is less than the stated number, then the server can return more using the offset parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $total
     * @return self
     */
    public function setTotal(?\TKusy\Hl7Fhir\R5\IntegerType $total = null)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as offset
     *
     * If paging is being used, the offset at which this resource starts. I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL NOT be present.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * If paging is being used, the offset at which this resource starts. I.e. this resource is a partial view into the expansion. If paging is not being used, this element SHALL NOT be present.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $offset
     * @return self
     */
    public function setOffset(?\TKusy\Hl7Fhir\R5\IntegerType $offset = null)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\ValueSetParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * A parameter that controlled the expansion process. These parameters may be used by users of expanded value sets to check whether the expansion is suitable for a particular purpose, or to pick the correct expansion.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Adds as property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\ValueSetPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
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
     * A property defines an additional slot through which additional information can be provided about a concept.
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
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as contains
     *
     * The codes that are contained in the value set expansion.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetContainsType $contains
     */
    public function addToContains(\TKusy\Hl7Fhir\R5\ValueSetContainsType $contains)
    {
        $this->contains[] = $contains;
        return $this;
    }

    /**
     * isset contains
     *
     * The codes that are contained in the value set expansion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContains($index)
    {
        return isset($this->contains[$index]);
    }

    /**
     * unset contains
     *
     * The codes that are contained in the value set expansion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContains($index)
    {
        unset($this->contains[$index]);
    }

    /**
     * Gets as contains
     *
     * The codes that are contained in the value set expansion.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetContainsType[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * Sets a new contains
     *
     * The codes that are contained in the value set expansion.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetContainsType[] $contains
     * @return self
     */
    public function setContains(array $contains = null)
    {
        $this->contains = $contains;
        return $this;
    }


}

