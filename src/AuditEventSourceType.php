<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AuditEventSourceType
 *
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * XSD Type: AuditEvent.Source
 */
class AuditEventSourceType extends BackboneElementType
{

    /**
     * Logical source location within the healthcare enterprise network. For example, a hospital or other provider location within a multi-entity provider group.
     *
     * @var \TKusy\Hl7FhirR4\StringType $site
     */
    private $site = null;

    /**
     * Identifier of the source where the event was detected.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $observer
     */
    private $observer = null;

    /**
     * Code specifying the type of source where event originated.
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $type
     */
    private $type = [
        
    ];

    /**
     * Gets as site
     *
     * Logical source location within the healthcare enterprise network. For example, a hospital or other provider location within a multi-entity provider group.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Logical source location within the healthcare enterprise network. For example, a hospital or other provider location within a multi-entity provider group.
     *
     * @param \TKusy\Hl7FhirR4\StringType $site
     * @return self
     */
    public function setSite(\TKusy\Hl7FhirR4\StringType $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as observer
     *
     * Identifier of the source where the event was detected.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getObserver()
    {
        return $this->observer;
    }

    /**
     * Sets a new observer
     *
     * Identifier of the source where the event was detected.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $observer
     * @return self
     */
    public function setObserver(\TKusy\Hl7FhirR4\ReferenceType $observer)
    {
        $this->observer = $observer;
        return $this;
    }

    /**
     * Adds as type
     *
     * Code specifying the type of source where event originated.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodingType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Code specifying the type of source where event originated.
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
     * Code specifying the type of source where event originated.
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
     * Code specifying the type of source where event originated.
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Code specifying the type of source where event originated.
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }


}

