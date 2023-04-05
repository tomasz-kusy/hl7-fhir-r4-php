<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceConformsToType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.ConformsTo
 */
class DeviceConformsToType extends BackboneElementType
{

    /**
     * Describes the type of the standard, specification, or formal guidance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Code that identifies the specific standard, specification, protocol, formal guidance, regulation, legislation, or certification scheme to which the device adheres.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $specification
     */
    private $specification = null;

    /**
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * Gets as category
     *
     * Describes the type of the standard, specification, or formal guidance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Describes the type of the standard, specification, or formal guidance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as specification
     *
     * Code that identifies the specific standard, specification, protocol, formal guidance, regulation, legislation, or certification scheme to which the device adheres.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Sets a new specification
     *
     * Code that identifies the specific standard, specification, protocol, formal guidance, regulation, legislation, or certification scheme to which the device adheres.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specification
     * @return self
     */
    public function setSpecification(\TKusy\Hl7Fhir\R5\CodeableConceptType $specification)
    {
        $this->specification = $specification;
        return $this;
    }

    /**
     * Gets as version
     *
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
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
     * Identifies the specific form or variant of the standard, specification, or formal guidance. This may be a 'version number', release, document edition, publication year, or other label.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }


}

