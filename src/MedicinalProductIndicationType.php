<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductIndicationType
 *
 * Indication for the Medicinal Product.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductIndication
 */
class MedicinalProductIndicationType extends DomainResourceType
{

    /**
     * The medication for which this is an indication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $subject
     */
    private $subject = [
        
    ];

    /**
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $diseaseSymptomProcedure
     */
    private $diseaseSymptomProcedure = null;

    /**
     * The status of the disease or symptom for which the indication applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $diseaseStatus
     */
    private $diseaseStatus = null;

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $comorbidity
     */
    private $comorbidity = [
        
    ];

    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $intendedEffect
     */
    private $intendedEffect = null;

    /**
     * Timing or duration information as part of the indication.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $duration
     */
    private $duration = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductIndicationOtherTherapyType[] $otherTherapy
     */
    private $otherTherapy = [
        
    ];

    /**
     * Describe the undesirable effects of the medicinal product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $undesirableEffect
     */
    private $undesirableEffect = [
        
    ];

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
     * Gets as diseaseSymptomProcedure
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDiseaseSymptomProcedure()
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * Sets a new diseaseSymptomProcedure
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $diseaseSymptomProcedure
     * @return self
     */
    public function setDiseaseSymptomProcedure(\TKusy\Hl7FhirR4\CodeableConceptType $diseaseSymptomProcedure)
    {
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * Gets as diseaseStatus
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }

    /**
     * Sets a new diseaseStatus
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $diseaseStatus
     * @return self
     */
    public function setDiseaseStatus(\TKusy\Hl7FhirR4\CodeableConceptType $diseaseStatus)
    {
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * Adds as comorbidity
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $comorbidity
     */
    public function addToComorbidity(\TKusy\Hl7FhirR4\CodeableConceptType $comorbidity)
    {
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * isset comorbidity
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComorbidity($index)
    {
        return isset($this->comorbidity[$index]);
    }

    /**
     * unset comorbidity
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComorbidity($index)
    {
        unset($this->comorbidity[$index]);
    }

    /**
     * Gets as comorbidity
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }

    /**
     * Sets a new comorbidity
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $comorbidity
     * @return self
     */
    public function setComorbidity(array $comorbidity)
    {
        $this->comorbidity = $comorbidity;
        return $this;
    }

    /**
     * Gets as intendedEffect
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getIntendedEffect()
    {
        return $this->intendedEffect;
    }

    /**
     * Sets a new intendedEffect
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $intendedEffect
     * @return self
     */
    public function setIntendedEffect(\TKusy\Hl7FhirR4\CodeableConceptType $intendedEffect)
    {
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * Gets as duration
     *
     * Timing or duration information as part of the indication.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Timing or duration information as part of the indication.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $duration
     * @return self
     */
    public function setDuration(\TKusy\Hl7FhirR4\QuantityType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Adds as otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductIndicationOtherTherapyType $otherTherapy
     */
    public function addToOtherTherapy(\TKusy\Hl7FhirR4\MedicinalProductIndicationOtherTherapyType $otherTherapy)
    {
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * isset otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherTherapy($index)
    {
        return isset($this->otherTherapy[$index]);
    }

    /**
     * unset otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherTherapy($index)
    {
        unset($this->otherTherapy[$index]);
    }

    /**
     * Gets as otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductIndicationOtherTherapyType[]
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }

    /**
     * Sets a new otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductIndicationOtherTherapyType[] $otherTherapy
     * @return self
     */
    public function setOtherTherapy(array $otherTherapy)
    {
        $this->otherTherapy = $otherTherapy;
        return $this;
    }

    /**
     * Adds as undesirableEffect
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $undesirableEffect
     */
    public function addToUndesirableEffect(\TKusy\Hl7FhirR4\ReferenceType $undesirableEffect)
    {
        $this->undesirableEffect[] = $undesirableEffect;
        return $this;
    }

    /**
     * isset undesirableEffect
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUndesirableEffect($index)
    {
        return isset($this->undesirableEffect[$index]);
    }

    /**
     * unset undesirableEffect
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUndesirableEffect($index)
    {
        unset($this->undesirableEffect[$index]);
    }

    /**
     * Gets as undesirableEffect
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
    }

    /**
     * Sets a new undesirableEffect
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $undesirableEffect
     * @return self
     */
    public function setUndesirableEffect(array $undesirableEffect)
    {
        $this->undesirableEffect = $undesirableEffect;
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

