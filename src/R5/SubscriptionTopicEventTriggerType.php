<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionTopicEventTriggerType
 *
 * Describes a stream of resource state changes or events and annotated with labels useful to filter projections from this topic.
 * XSD Type: SubscriptionTopic.EventTrigger
 */
class SubscriptionTopicEventTriggerType extends BackboneElementType
{

    /**
     * The human readable description of an event to trigger a notification for the SubscriptionTopic - for example, "Patient Admission, as defined in HL7v2 via message ADT^A01". Multiple values are considered OR joined (e.g., matching any single event listed).
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * A well-defined event which can be used to trigger notifications from the SubscriptionTopic.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $event
     */
    private $event = null;

    /**
     * URL of the Resource that is the focus type used in this event trigger. Relative URLs are relative to the StructureDefinition root of the implemented FHIR version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient" maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information, see <a href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $resource
     */
    private $resource = null;

    /**
     * Gets as description
     *
     * The human readable description of an event to trigger a notification for the SubscriptionTopic - for example, "Patient Admission, as defined in HL7v2 via message ADT^A01". Multiple values are considered OR joined (e.g., matching any single event listed).
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
     * The human readable description of an event to trigger a notification for the SubscriptionTopic - for example, "Patient Admission, as defined in HL7v2 via message ADT^A01". Multiple values are considered OR joined (e.g., matching any single event listed).
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
     * Gets as event
     *
     * A well-defined event which can be used to trigger notifications from the SubscriptionTopic.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * A well-defined event which can be used to trigger notifications from the SubscriptionTopic.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $event
     * @return self
     */
    public function setEvent(\TKusy\Hl7Fhir\R5\CodeableConceptType $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as resource
     *
     * URL of the Resource that is the focus type used in this event trigger. Relative URLs are relative to the StructureDefinition root of the implemented FHIR version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient" maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information, see <a href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
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
     * URL of the Resource that is the focus type used in this event trigger. Relative URLs are relative to the StructureDefinition root of the implemented FHIR version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient" maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information, see <a href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7Fhir\R5\UriType $resource)
    {
        $this->resource = $resource;
        return $this;
    }


}

