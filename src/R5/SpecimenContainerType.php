<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenContainerType
 *
 * A sample to be used for analysis.
 * XSD Type: Specimen.Container
 */
class SpecimenContainerType extends BackboneElementType
{

    /**
     * The device resource for the the container holding the specimen. If the container is in a holder then the referenced device will point to a parent device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * The location of the container holding the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $specimenQuantity
     */
    private $specimenQuantity = null;

    /**
     * Gets as device
     *
     * The device resource for the the container holding the specimen. If the container is in a holder then the referenced device will point to a parent device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The device resource for the the container holding the specimen. If the container is in a holder then the referenced device will point to a parent device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7Fhir\R5\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location of the container holding the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the container holding the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as specimenQuantity
     *
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getSpecimenQuantity()
    {
        return $this->specimenQuantity;
    }

    /**
     * Sets a new specimenQuantity
     *
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $specimenQuantity
     * @return self
     */
    public function setSpecimenQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $specimenQuantity = null)
    {
        $this->specimenQuantity = $specimenQuantity;
        return $this;
    }


}

