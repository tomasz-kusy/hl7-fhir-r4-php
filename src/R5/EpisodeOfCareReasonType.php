<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EpisodeOfCareReasonType
 *
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * XSD Type: EpisodeOfCare.Reason
 */
class EpisodeOfCareReasonType extends BackboneElementType
{

    /**
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $use
     */
    private $use = null;

    /**
     * The medical reason that is expected to be addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $value
     */
    private $value = null;

    /**
     * Gets as use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $use
     * @return self
     */
    public function setUse(?\TKusy\Hl7Fhir\R5\CodeableConceptType $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Adds as value
     *
     * The medical reason that is expected to be addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $value
     */
    public function addToValue(\TKusy\Hl7Fhir\R5\CodeableReferenceType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The medical reason that is expected to be addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The medical reason that is expected to be addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The medical reason that is expected to be addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The medical reason that is expected to be addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $value
     * @return self
     */
    public function setValue(array $value = null)
    {
        $this->value = $value;
        return $this;
    }


}

