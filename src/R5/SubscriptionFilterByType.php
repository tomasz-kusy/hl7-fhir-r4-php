<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionFilterByType
 *
 * The subscription resource describes a particular client's request to be notified about a SubscriptionTopic.
 * XSD Type: Subscription.FilterBy
 */
class SubscriptionFilterByType extends BackboneElementType
{

    /**
     * A resource listed in the `SubscriptionTopic` this `Subscription` references (`SubscriptionTopic.canFilterBy.resource`). This element can be used to differentiate filters for topics that include more than one resource type.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $resourceType
     */
    private $resourceType = null;

    /**
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter` element.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $filterParameter
     */
    private $filterParameter = null;

    /**
     * Comparator applied to this filter parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\SearchComparatorType $comparator
     */
    private $comparator = null;

    /**
     * Modifier applied to this filter parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\SearchModifierCodeType $modifier
     */
    private $modifier = null;

    /**
     * The literal value or resource path as is legal in search - for example, `Patient/123` or `le1950`.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as resourceType
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references (`SubscriptionTopic.canFilterBy.resource`). This element can be used to differentiate filters for topics that include more than one resource type.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A resource listed in the `SubscriptionTopic` this `Subscription` references (`SubscriptionTopic.canFilterBy.resource`). This element can be used to differentiate filters for topics that include more than one resource type.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $resourceType
     * @return self
     */
    public function setResourceType(?\TKusy\Hl7Fhir\R5\UriType $resourceType = null)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Gets as filterParameter
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter` element.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getFilterParameter()
    {
        return $this->filterParameter;
    }

    /**
     * Sets a new filterParameter
     *
     * The filter as defined in the `SubscriptionTopic.canFilterBy.filterParameter` element.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $filterParameter
     * @return self
     */
    public function setFilterParameter(\TKusy\Hl7Fhir\R5\StringType $filterParameter)
    {
        $this->filterParameter = $filterParameter;
        return $this;
    }

    /**
     * Gets as comparator
     *
     * Comparator applied to this filter parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\SearchComparatorType
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Sets a new comparator
     *
     * Comparator applied to this filter parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\SearchComparatorType $comparator
     * @return self
     */
    public function setComparator(?\TKusy\Hl7Fhir\R5\SearchComparatorType $comparator = null)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Gets as modifier
     *
     * Modifier applied to this filter parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\SearchModifierCodeType
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * Modifier applied to this filter parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\SearchModifierCodeType $modifier
     * @return self
     */
    public function setModifier(?\TKusy\Hl7Fhir\R5\SearchModifierCodeType $modifier = null)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as value
     *
     * The literal value or resource path as is legal in search - for example, `Patient/123` or `le1950`.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The literal value or resource path as is legal in search - for example, `Patient/123` or `le1950`.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

