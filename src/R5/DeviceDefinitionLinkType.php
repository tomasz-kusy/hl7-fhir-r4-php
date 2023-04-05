<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionLinkType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Link
 */
class DeviceDefinitionLinkType extends BackboneElementType
{

    /**
     * The type indicates the relationship of the related device to the device instance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $relation
     */
    private $relation = null;

    /**
     * A reference to the linked device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $relatedDevice
     */
    private $relatedDevice = null;

    /**
     * Gets as relation
     *
     * The type indicates the relationship of the related device to the device instance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * The type indicates the relationship of the related device to the device instance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $relation
     * @return self
     */
    public function setRelation(\TKusy\Hl7Fhir\R5\CodingType $relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as relatedDevice
     *
     * A reference to the linked device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getRelatedDevice()
    {
        return $this->relatedDevice;
    }

    /**
     * Sets a new relatedDevice
     *
     * A reference to the linked device.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $relatedDevice
     * @return self
     */
    public function setRelatedDevice(\TKusy\Hl7Fhir\R5\CodeableReferenceType $relatedDevice)
    {
        $this->relatedDevice = $relatedDevice;
        return $this;
    }


}

