<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EpisodeOfCareDiagnosisType
 *
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * XSD Type: EpisodeOfCare.Diagnosis
 */
class EpisodeOfCareDiagnosisType extends BackboneElementType
{

    /**
     * The medical condition that was addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $condition
     */
    private $condition = null;

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $use
     */
    private $use = null;

    /**
     * Adds as condition
     *
     * The medical condition that was addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\CodeableReferenceType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * The medical condition that was addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * The medical condition that was addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * The medical condition that was addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The medical condition that was addressed during the episode of care, expressed as a text, code or a reference to another resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as use
     *
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
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
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $use
     * @return self
     */
    public function setUse(?\TKusy\Hl7Fhir\R5\CodeableConceptType $use = null)
    {
        $this->use = $use;
        return $this;
    }


}

