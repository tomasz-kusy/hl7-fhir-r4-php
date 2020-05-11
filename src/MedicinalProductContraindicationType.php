<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductContraindicationType
 *
 * The clinical particulars - indications, contraindications etc. of a medicinal product, including for regulatory purposes.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductContraindication
 */
class MedicinalProductContraindicationType extends DomainResourceType
{

    /**
     * The medication for which this is an indication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $subject
     */
    private $subject = [
        
    ];

    /**
     * The disease, symptom or procedure for the contraindication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $disease
     */
    private $disease = null;

    /**
     * The status of the disease or symptom for the contraindication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $diseaseStatus
     */
    private $diseaseStatus = null;

    /**
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $comorbidity
     */
    private $comorbidity = [
        
    ];

    /**
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $therapeuticIndication
     */
    private $therapeuticIndication = [
        
    ];

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductContraindicationOtherTherapyType[] $otherTherapy
     */
    private $otherTherapy = [
        
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
     * Gets as disease
     *
     * The disease, symptom or procedure for the contraindication.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDisease()
    {
        return $this->disease;
    }

    /**
     * Sets a new disease
     *
     * The disease, symptom or procedure for the contraindication.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $disease
     * @return self
     */
    public function setDisease(\TKusy\Hl7FhirR4\CodeableConceptType $disease)
    {
        $this->disease = $disease;
        return $this;
    }

    /**
     * Gets as diseaseStatus
     *
     * The status of the disease or symptom for the contraindication.
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
     * The status of the disease or symptom for the contraindication.
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
     * A comorbidity (concurrent condition) or coinfection.
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
     * A comorbidity (concurrent condition) or coinfection.
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
     * A comorbidity (concurrent condition) or coinfection.
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
     * A comorbidity (concurrent condition) or coinfection.
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
     * A comorbidity (concurrent condition) or coinfection.
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
     * Adds as therapeuticIndication
     *
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $therapeuticIndication
     */
    public function addToTherapeuticIndication(\TKusy\Hl7FhirR4\ReferenceType $therapeuticIndication)
    {
        $this->therapeuticIndication[] = $therapeuticIndication;
        return $this;
    }

    /**
     * isset therapeuticIndication
     *
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTherapeuticIndication($index)
    {
        return isset($this->therapeuticIndication[$index]);
    }

    /**
     * unset therapeuticIndication
     *
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTherapeuticIndication($index)
    {
        unset($this->therapeuticIndication[$index]);
    }

    /**
     * Gets as therapeuticIndication
     *
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getTherapeuticIndication()
    {
        return $this->therapeuticIndication;
    }

    /**
     * Sets a new therapeuticIndication
     *
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $therapeuticIndication
     * @return self
     */
    public function setTherapeuticIndication(array $therapeuticIndication)
    {
        $this->therapeuticIndication = $therapeuticIndication;
        return $this;
    }

    /**
     * Adds as otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductContraindicationOtherTherapyType $otherTherapy
     */
    public function addToOtherTherapy(\TKusy\Hl7FhirR4\MedicinalProductContraindicationOtherTherapyType $otherTherapy)
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
     * @return \TKusy\Hl7FhirR4\MedicinalProductContraindicationOtherTherapyType[]
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
     * @param \TKusy\Hl7FhirR4\MedicinalProductContraindicationOtherTherapyType[] $otherTherapy
     * @return self
     */
    public function setOtherTherapy(array $otherTherapy)
    {
        $this->otherTherapy = $otherTherapy;
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

