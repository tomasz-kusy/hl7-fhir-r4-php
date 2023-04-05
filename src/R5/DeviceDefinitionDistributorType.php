<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionDistributorType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Distributor
 */
class DeviceDefinitionDistributorType extends BackboneElementType
{

    /**
     * Distributor's human-readable name.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Distributor as an Organization resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $organizationReference
     */
    private $organizationReference = null;

    /**
     * Gets as name
     *
     * Distributor's human-readable name.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Distributor's human-readable name.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as organizationReference
     *
     * Distributor as an Organization resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organizationReference
     */
    public function addToOrganizationReference(\TKusy\Hl7Fhir\R5\ReferenceType $organizationReference)
    {
        $this->organizationReference[] = $organizationReference;
        return $this;
    }

    /**
     * isset organizationReference
     *
     * Distributor as an Organization resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganizationReference($index)
    {
        return isset($this->organizationReference[$index]);
    }

    /**
     * unset organizationReference
     *
     * Distributor as an Organization resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganizationReference($index)
    {
        unset($this->organizationReference[$index]);
    }

    /**
     * Gets as organizationReference
     *
     * Distributor as an Organization resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getOrganizationReference()
    {
        return $this->organizationReference;
    }

    /**
     * Sets a new organizationReference
     *
     * Distributor as an Organization resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $organizationReference
     * @return self
     */
    public function setOrganizationReference(array $organizationReference = null)
    {
        $this->organizationReference = $organizationReference;
        return $this;
    }


}

