<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionTopicNotificationShapeType
 *
 * Describes a stream of resource state changes or events and annotated with labels useful to filter projections from this topic.
 * XSD Type: SubscriptionTopic.NotificationShape
 */
class SubscriptionTopicNotificationShapeType extends BackboneElementType
{

    /**
     * URL of the Resource that is the type used in this shape. This is the 'focus' resource of the topic (or one of them if there are more than one) and the root resource for this shape definition. It will be the same, a generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $resource
     */
    private $resource = null;

    /**
     * Search-style _include directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $include
     */
    private $include = null;

    /**
     * Search-style _revinclude directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $revInclude
     */
    private $revInclude = null;

    /**
     * Gets as resource
     *
     * URL of the Resource that is the type used in this shape. This is the 'focus' resource of the topic (or one of them if there are more than one) and the root resource for this shape definition. It will be the same, a generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or SubscriptionTopic.eventTrigger.resource when they are present.
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
     * URL of the Resource that is the type used in this shape. This is the 'focus' resource of the topic (or one of them if there are more than one) and the root resource for this shape definition. It will be the same, a generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or SubscriptionTopic.eventTrigger.resource when they are present.
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
     * Adds as include
     *
     * Search-style _include directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $include
     */
    public function addToInclude(\TKusy\Hl7Fhir\R5\StringType $include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * isset include
     *
     * Search-style _include directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInclude($index)
    {
        return isset($this->include[$index]);
    }

    /**
     * unset include
     *
     * Search-style _include directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInclude($index)
    {
        unset($this->include[$index]);
    }

    /**
     * Gets as include
     *
     * Search-style _include directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * Search-style _include directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $include
     * @return self
     */
    public function setInclude(array $include = null)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Adds as revInclude
     *
     * Search-style _revinclude directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $revInclude
     */
    public function addToRevInclude(\TKusy\Hl7Fhir\R5\StringType $revInclude)
    {
        $this->revInclude[] = $revInclude;
        return $this;
    }

    /**
     * isset revInclude
     *
     * Search-style _revinclude directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevInclude($index)
    {
        return isset($this->revInclude[$index]);
    }

    /**
     * unset revInclude
     *
     * Search-style _revinclude directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevInclude($index)
    {
        unset($this->revInclude[$index]);
    }

    /**
     * Gets as revInclude
     *
     * Search-style _revinclude directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getRevInclude()
    {
        return $this->revInclude;
    }

    /**
     * Sets a new revInclude
     *
     * Search-style _revinclude directives, rooted in the resource for this shape. Servers SHOULD include resources listed here, if they exist and the user is authorized to receive them. Clients SHOULD be prepared to receive these additional resources, but SHALL function properly without them.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $revInclude
     * @return self
     */
    public function setRevInclude(array $revInclude = null)
    {
        $this->revInclude = $revInclude;
        return $this;
    }


}

