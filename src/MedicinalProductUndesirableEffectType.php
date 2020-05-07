<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductUndesirableEffectType
 *
 * Describe the undesirable effects of the medicinal product.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: MedicinalProductUndesirableEffect
 */
class MedicinalProductUndesirableEffectType extends DomainResourceType
{

    /**
     * The medication for which this is an indication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $subject
     */
    private $subject = [
        
    ];

    /**
     * The symptom, condition or undesirable effect.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $symptomConditionEffect
     */
    private $symptomConditionEffect = null;

    /**
     * Classification of the effect.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $classification
     */
    private $classification = null;

    /**
     * The frequency of occurrence of the effect.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $frequencyOfOccurrence
     */
    private $frequencyOfOccurrence = null;

    /**
     * The population group to which this applies.
     *
     * @var \TKusy\Hl7FhirR4\PopulationType[] $population
     */
    private $population = [
        
    ];

    /**
     * Adds as subject
     *
     * The medication for which this is an indication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * The medication for which this is an indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * The medication for which this is an indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * The medication for which this is an indication.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The medication for which this is an indication.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as symptomConditionEffect
     *
     * The symptom, condition or undesirable effect.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSymptomConditionEffect()
    {
        return $this->symptomConditionEffect;
    }

    /**
     * Sets a new symptomConditionEffect
     *
     * The symptom, condition or undesirable effect.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $symptomConditionEffect
     * @return self
     */
    public function setSymptomConditionEffect(\TKusy\Hl7FhirR4\CodeableConceptType $symptomConditionEffect)
    {
        $this->symptomConditionEffect = $symptomConditionEffect;
        return $this;
    }

    /**
     * Gets as classification
     *
     * Classification of the effect.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Classification of the effect.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $classification
     * @return self
     */
    public function setClassification(\TKusy\Hl7FhirR4\CodeableConceptType $classification)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as frequencyOfOccurrence
     *
     * The frequency of occurrence of the effect.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFrequencyOfOccurrence()
    {
        return $this->frequencyOfOccurrence;
    }

    /**
     * Sets a new frequencyOfOccurrence
     *
     * The frequency of occurrence of the effect.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $frequencyOfOccurrence
     * @return self
     */
    public function setFrequencyOfOccurrence(\TKusy\Hl7FhirR4\CodeableConceptType $frequencyOfOccurrence)
    {
        $this->frequencyOfOccurrence = $frequencyOfOccurrence;
        return $this;
    }

    /**
     * Adds as population
     *
     * The population group to which this applies.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PopulationType $population
     */
    public function addToPopulation(\TKusy\Hl7FhirR4\PopulationType $population)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * isset population
     *
     * The population group to which this applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPopulation($index)
    {
        return isset($this->population[$index]);
    }

    /**
     * unset population
     *
     * The population group to which this applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPopulation($index)
    {
        unset($this->population[$index]);
    }

    /**
     * Gets as population
     *
     * The population group to which this applies.
     *
     * @return \TKusy\Hl7FhirR4\PopulationType[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Sets a new population
     *
     * The population group to which this applies.
     *
     * @param \TKusy\Hl7FhirR4\PopulationType[] $population
     * @return self
     */
    public function setPopulation(array $population)
    {
        $this->population = $population;
        return $this;
    }


}

