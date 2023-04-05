<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionTopicCanFilterByType
 *
 * Describes a stream of resource state changes or events and annotated with labels useful to filter projections from this topic.
 * XSD Type: SubscriptionTopic.CanFilterBy
 */
class SubscriptionTopicCanFilterByType extends BackboneElementType
{

    /**
     * Description of how this filtering parameter is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * URL of the Resource that is the type used in this filter. This is the "focus" of the topic (or one of them if there are more than one). It will be the same, a generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $resource
     */
    private $resource = null;

    /**
     * Either the canonical URL to a search parameter (like "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined parameter (like "hub.event") which is a label for the filter.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $filterParameter
     */
    private $filterParameter = null;

    /**
     * Either the canonical URL to a search parameter (like "http://hl7.org/fhir/SearchParameter/encounter-patient") or the officially-defined URI for a shared filter concept (like "http://example.org/concepts/shared-common-event").
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $filterDefinition
     */
    private $filterDefinition = null;

    /**
     * Comparators allowed for the filter parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\SearchComparatorType[] $comparator
     */
    private $comparator = null;

    /**
     * Modifiers allowed for the filter parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\SearchModifierCodeType[] $modifier
     */
    private $modifier = null;

    /**
     * Gets as description
     *
     * Description of how this filtering parameter is intended to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of how this filtering parameter is intended to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as resource
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of the topic (or one of them if there are more than one). It will be the same, a generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of the topic (or one of them if there are more than one). It will be the same, a generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $resource
     * @return self
     */
    public function setResource(?\TKusy\Hl7Fhir\R5\UriType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as filterParameter
     *
     * Either the canonical URL to a search parameter (like "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined parameter (like "hub.event") which is a label for the filter.
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
     * Either the canonical URL to a search parameter (like "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined parameter (like "hub.event") which is a label for the filter.
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
     * Gets as filterDefinition
     *
     * Either the canonical URL to a search parameter (like "http://hl7.org/fhir/SearchParameter/encounter-patient") or the officially-defined URI for a shared filter concept (like "http://example.org/concepts/shared-common-event").
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getFilterDefinition()
    {
        return $this->filterDefinition;
    }

    /**
     * Sets a new filterDefinition
     *
     * Either the canonical URL to a search parameter (like "http://hl7.org/fhir/SearchParameter/encounter-patient") or the officially-defined URI for a shared filter concept (like "http://example.org/concepts/shared-common-event").
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $filterDefinition
     * @return self
     */
    public function setFilterDefinition(?\TKusy\Hl7Fhir\R5\UriType $filterDefinition = null)
    {
        $this->filterDefinition = $filterDefinition;
        return $this;
    }

    /**
     * Adds as comparator
     *
     * Comparators allowed for the filter parameter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SearchComparatorType $comparator
     */
    public function addToComparator(\TKusy\Hl7Fhir\R5\SearchComparatorType $comparator)
    {
        $this->comparator[] = $comparator;
        return $this;
    }

    /**
     * isset comparator
     *
     * Comparators allowed for the filter parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComparator($index)
    {
        return isset($this->comparator[$index]);
    }

    /**
     * unset comparator
     *
     * Comparators allowed for the filter parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComparator($index)
    {
        unset($this->comparator[$index]);
    }

    /**
     * Gets as comparator
     *
     * Comparators allowed for the filter parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\SearchComparatorType[]
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Sets a new comparator
     *
     * Comparators allowed for the filter parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\SearchComparatorType[] $comparator
     * @return self
     */
    public function setComparator(array $comparator = null)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Adds as modifier
     *
     * Modifiers allowed for the filter parameter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SearchModifierCodeType $modifier
     */
    public function addToModifier(\TKusy\Hl7Fhir\R5\SearchModifierCodeType $modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * isset modifier
     *
     * Modifiers allowed for the filter parameter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifier($index)
    {
        return isset($this->modifier[$index]);
    }

    /**
     * unset modifier
     *
     * Modifiers allowed for the filter parameter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifier($index)
    {
        unset($this->modifier[$index]);
    }

    /**
     * Gets as modifier
     *
     * Modifiers allowed for the filter parameter.
     *
     * @return \TKusy\Hl7Fhir\R5\SearchModifierCodeType[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * Modifiers allowed for the filter parameter.
     *
     * @param \TKusy\Hl7Fhir\R5\SearchModifierCodeType[] $modifier
     * @return self
     */
    public function setModifier(array $modifier = null)
    {
        $this->modifier = $modifier;
        return $this;
    }


}

