<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionTopicResourceTriggerType
 *
 * Describes a stream of resource state changes or events and annotated with labels useful to filter projections from this topic.
 * XSD Type: SubscriptionTopic.ResourceTrigger
 */
class SubscriptionTopicResourceTriggerType extends BackboneElementType
{

    /**
     * The human readable description of this resource trigger for the SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * URL of the Resource that is the type used in this resource trigger. Relative URLs are relative to the StructureDefinition root of the implemented FHIR version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient" maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information, see <a href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $resource
     */
    private $resource = null;

    /**
     * The FHIR RESTful interaction which can be used to trigger a notification for the SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or UPDATE). If not present, all supported interactions are assumed.
     *
     * @var \TKusy\Hl7Fhir\R5\InteractionTriggerType[] $supportedInteraction
     */
    private $supportedInteraction = null;

    /**
     * The FHIR query based rules that the server should use to determine when to trigger a notification for this subscription topic.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionTopicQueryCriteriaType $queryCriteria
     */
    private $queryCriteria = null;

    /**
     * The FHIRPath based rules that the server should use to determine when to trigger a notification for this topic.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $fhirPathCriteria
     */
    private $fhirPathCriteria = null;

    /**
     * Gets as description
     *
     * The human readable description of this resource trigger for the SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
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
     * The human readable description of this resource trigger for the SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
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
     * URL of the Resource that is the type used in this resource trigger. Relative URLs are relative to the StructureDefinition root of the implemented FHIR version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient" maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information, see <a href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
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
     * URL of the Resource that is the type used in this resource trigger. Relative URLs are relative to the StructureDefinition root of the implemented FHIR version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient" maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information, see <a href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7Fhir\R5\UriType $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as supportedInteraction
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or UPDATE). If not present, all supported interactions are assumed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InteractionTriggerType $supportedInteraction
     */
    public function addToSupportedInteraction(\TKusy\Hl7Fhir\R5\InteractionTriggerType $supportedInteraction)
    {
        $this->supportedInteraction[] = $supportedInteraction;
        return $this;
    }

    /**
     * isset supportedInteraction
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or UPDATE). If not present, all supported interactions are assumed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedInteraction($index)
    {
        return isset($this->supportedInteraction[$index]);
    }

    /**
     * unset supportedInteraction
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or UPDATE). If not present, all supported interactions are assumed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedInteraction($index)
    {
        unset($this->supportedInteraction[$index]);
    }

    /**
     * Gets as supportedInteraction
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or UPDATE). If not present, all supported interactions are assumed.
     *
     * @return \TKusy\Hl7Fhir\R5\InteractionTriggerType[]
     */
    public function getSupportedInteraction()
    {
        return $this->supportedInteraction;
    }

    /**
     * Sets a new supportedInteraction
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or UPDATE). If not present, all supported interactions are assumed.
     *
     * @param \TKusy\Hl7Fhir\R5\InteractionTriggerType[] $supportedInteraction
     * @return self
     */
    public function setSupportedInteraction(array $supportedInteraction = null)
    {
        $this->supportedInteraction = $supportedInteraction;
        return $this;
    }

    /**
     * Gets as queryCriteria
     *
     * The FHIR query based rules that the server should use to determine when to trigger a notification for this subscription topic.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionTopicQueryCriteriaType
     */
    public function getQueryCriteria()
    {
        return $this->queryCriteria;
    }

    /**
     * Sets a new queryCriteria
     *
     * The FHIR query based rules that the server should use to determine when to trigger a notification for this subscription topic.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionTopicQueryCriteriaType $queryCriteria
     * @return self
     */
    public function setQueryCriteria(?\TKusy\Hl7Fhir\R5\SubscriptionTopicQueryCriteriaType $queryCriteria = null)
    {
        $this->queryCriteria = $queryCriteria;
        return $this;
    }

    /**
     * Gets as fhirPathCriteria
     *
     * The FHIRPath based rules that the server should use to determine when to trigger a notification for this topic.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getFhirPathCriteria()
    {
        return $this->fhirPathCriteria;
    }

    /**
     * Sets a new fhirPathCriteria
     *
     * The FHIRPath based rules that the server should use to determine when to trigger a notification for this topic.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $fhirPathCriteria
     * @return self
     */
    public function setFhirPathCriteria(?\TKusy\Hl7Fhir\R5\StringType $fhirPathCriteria = null)
    {
        $this->fhirPathCriteria = $fhirPathCriteria;
        return $this;
    }


}

