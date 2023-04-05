<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionUndesirableEffectType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * XSD Type: ClinicalUseDefinition.UndesirableEffect
 */
class ClinicalUseDefinitionUndesirableEffectType extends BackboneElementType
{

    /**
     * The situation in which the undesirable effect may manifest.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $symptomConditionEffect
     */
    private $symptomConditionEffect = null;

    /**
     * High level classification of the effect.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $classification
     */
    private $classification = null;

    /**
     * How often the effect is seen.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $frequencyOfOccurrence
     */
    private $frequencyOfOccurrence = null;

    /**
     * Gets as symptomConditionEffect
     *
     * The situation in which the undesirable effect may manifest.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getSymptomConditionEffect()
    {
        return $this->symptomConditionEffect;
    }

    /**
     * Sets a new symptomConditionEffect
     *
     * The situation in which the undesirable effect may manifest.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $symptomConditionEffect
     * @return self
     */
    public function setSymptomConditionEffect(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $symptomConditionEffect = null)
    {
        $this->symptomConditionEffect = $symptomConditionEffect;
        return $this;
    }

    /**
     * Gets as classification
     *
     * High level classification of the effect.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * High level classification of the effect.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classification
     * @return self
     */
    public function setClassification(?\TKusy\Hl7Fhir\R5\CodeableConceptType $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as frequencyOfOccurrence
     *
     * How often the effect is seen.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFrequencyOfOccurrence()
    {
        return $this->frequencyOfOccurrence;
    }

    /**
     * Sets a new frequencyOfOccurrence
     *
     * How often the effect is seen.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $frequencyOfOccurrence
     * @return self
     */
    public function setFrequencyOfOccurrence(?\TKusy\Hl7Fhir\R5\CodeableConceptType $frequencyOfOccurrence = null)
    {
        $this->frequencyOfOccurrence = $frequencyOfOccurrence;
        return $this;
    }


}

