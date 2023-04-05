<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionClassificationType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Classification
 */
class DeviceDefinitionClassificationType extends BackboneElementType
{

    /**
     * A classification or risk class of the device model.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Further information qualifying this classification of the device model.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $justification
     */
    private $justification = null;

    /**
     * Gets as type
     *
     * A classification or risk class of the device model.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A classification or risk class of the device model.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as justification
     *
     * Further information qualifying this classification of the device model.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $justification
     */
    public function addToJustification(\TKusy\Hl7Fhir\R5\RelatedArtifactType $justification)
    {
        $this->justification[] = $justification;
        return $this;
    }

    /**
     * isset justification
     *
     * Further information qualifying this classification of the device model.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustification($index)
    {
        return isset($this->justification[$index]);
    }

    /**
     * unset justification
     *
     * Further information qualifying this classification of the device model.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustification($index)
    {
        unset($this->justification[$index]);
    }

    /**
     * Gets as justification
     *
     * Further information qualifying this classification of the device model.
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * Further information qualifying this classification of the device model.
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $justification
     * @return self
     */
    public function setJustification(array $justification = null)
    {
        $this->justification = $justification;
        return $this;
    }


}

