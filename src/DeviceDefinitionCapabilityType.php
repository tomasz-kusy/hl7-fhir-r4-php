<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDefinitionCapabilityType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Capability
 */
class DeviceDefinitionCapabilityType extends BackboneElementType
{

    /**
     * Type of capability.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Description of capability.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $description
     */
    private $description = null;

    /**
     * Gets as type
     *
     * Type of capability.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of capability.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as description
     *
     * Description of capability.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $description
     */
    public function addToDescription(\TKusy\Hl7FhirR4\CodeableConceptType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Description of capability.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Description of capability.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Description of capability.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of capability.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

