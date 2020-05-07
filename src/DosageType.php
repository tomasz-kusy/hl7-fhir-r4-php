<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DosageType
 *
 * Indicates how the medication is/was taken or should be taken by the patient.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: Dosage
 */
class DosageType extends BackboneElementType
{

    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $sequence
     */
    private $sequence = null;

    /**
     * Free text dosage instructions e.g. SIG.
     *
     * @var \TKusy\Hl7FhirR4\StringType $text
     */
    private $text = null;

    /**
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $additionalInstruction
     */
    private $additionalInstruction = [
        
    ];

    /**
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var \TKusy\Hl7FhirR4\StringType $patientInstruction
     */
    private $patientInstruction = null;

    /**
     * When medication should be administered.
     *
     * @var \TKusy\Hl7FhirR4\TimingType $timing
     */
    private $timing = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $asNeededBoolean
     */
    private $asNeededBoolean = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $asNeededCodeableConcept
     */
    private $asNeededCodeableConcept = null;

    /**
     * Body site to administer to.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $site
     */
    private $site = null;

    /**
     * How drug should enter body.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $route
     */
    private $route = null;

    /**
     * Technique for administering medication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The amount of medication administered.
     *
     * @var \TKusy\Hl7FhirR4\DosageDoseAndRateType[] $doseAndRate
     */
    private $doseAndRate = [
        
    ];

    /**
     * Upper limit on medication per unit of time.
     *
     * @var \TKusy\Hl7FhirR4\RatioType $maxDosePerPeriod
     */
    private $maxDosePerPeriod = null;

    /**
     * Upper limit on medication per administration.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $maxDosePerAdministration
     */
    private $maxDosePerAdministration = null;

    /**
     * Upper limit on medication per lifetime of the patient.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $maxDosePerLifetime
     */
    private $maxDosePerLifetime = null;

    /**
     * Gets as sequence
     *
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7FhirR4\IntegerType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as text
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @param \TKusy\Hl7FhirR4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as additionalInstruction
     *
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $additionalInstruction
     */
    public function addToAdditionalInstruction(\TKusy\Hl7FhirR4\CodeableConceptType $additionalInstruction)
    {
        $this->additionalInstruction[] = $additionalInstruction;
        return $this;
    }

    /**
     * isset additionalInstruction
     *
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInstruction($index)
    {
        return isset($this->additionalInstruction[$index]);
    }

    /**
     * unset additionalInstruction
     *
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInstruction($index)
    {
        unset($this->additionalInstruction[$index]);
    }

    /**
     * Gets as additionalInstruction
     *
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }

    /**
     * Sets a new additionalInstruction
     *
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $additionalInstruction
     * @return self
     */
    public function setAdditionalInstruction(array $additionalInstruction)
    {
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }

    /**
     * Gets as patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * Sets a new patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param \TKusy\Hl7FhirR4\StringType $patientInstruction
     * @return self
     */
    public function setPatientInstruction(\TKusy\Hl7FhirR4\StringType $patientInstruction)
    {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Gets as timing
     *
     * When medication should be administered.
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Sets a new timing
     *
     * When medication should be administered.
     *
     * @param \TKusy\Hl7FhirR4\TimingType $timing
     * @return self
     */
    public function setTiming(\TKusy\Hl7FhirR4\TimingType $timing)
    {
        $this->timing = $timing;
        return $this;
    }

    /**
     * Gets as asNeededBoolean
     *
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Sets a new asNeededBoolean
     *
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $asNeededBoolean
     * @return self
     */
    public function setAsNeededBoolean(\TKusy\Hl7FhirR4\BooleanType $asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * Gets as asNeededCodeableConcept
     *
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * Sets a new asNeededCodeableConcept
     *
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $asNeededCodeableConcept
     * @return self
     */
    public function setAsNeededCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * Gets as site
     *
     * Body site to administer to.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Body site to administer to.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $site
     * @return self
     */
    public function setSite(\TKusy\Hl7FhirR4\CodeableConceptType $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as route
     *
     * How drug should enter body.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * How drug should enter body.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $route
     * @return self
     */
    public function setRoute(\TKusy\Hl7FhirR4\CodeableConceptType $route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as method
     *
     * Technique for administering medication.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * Technique for administering medication.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Adds as doseAndRate
     *
     * The amount of medication administered.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DosageDoseAndRateType $doseAndRate
     */
    public function addToDoseAndRate(\TKusy\Hl7FhirR4\DosageDoseAndRateType $doseAndRate)
    {
        $this->doseAndRate[] = $doseAndRate;
        return $this;
    }

    /**
     * isset doseAndRate
     *
     * The amount of medication administered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDoseAndRate($index)
    {
        return isset($this->doseAndRate[$index]);
    }

    /**
     * unset doseAndRate
     *
     * The amount of medication administered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDoseAndRate($index)
    {
        unset($this->doseAndRate[$index]);
    }

    /**
     * Gets as doseAndRate
     *
     * The amount of medication administered.
     *
     * @return \TKusy\Hl7FhirR4\DosageDoseAndRateType[]
     */
    public function getDoseAndRate()
    {
        return $this->doseAndRate;
    }

    /**
     * Sets a new doseAndRate
     *
     * The amount of medication administered.
     *
     * @param \TKusy\Hl7FhirR4\DosageDoseAndRateType[] $doseAndRate
     * @return self
     */
    public function setDoseAndRate(array $doseAndRate)
    {
        $this->doseAndRate = $doseAndRate;
        return $this;
    }

    /**
     * Gets as maxDosePerPeriod
     *
     * Upper limit on medication per unit of time.
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * Sets a new maxDosePerPeriod
     *
     * Upper limit on medication per unit of time.
     *
     * @param \TKusy\Hl7FhirR4\RatioType $maxDosePerPeriod
     * @return self
     */
    public function setMaxDosePerPeriod(\TKusy\Hl7FhirR4\RatioType $maxDosePerPeriod)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /**
     * Gets as maxDosePerAdministration
     *
     * Upper limit on medication per administration.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getMaxDosePerAdministration()
    {
        return $this->maxDosePerAdministration;
    }

    /**
     * Sets a new maxDosePerAdministration
     *
     * Upper limit on medication per administration.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $maxDosePerAdministration
     * @return self
     */
    public function setMaxDosePerAdministration(\TKusy\Hl7FhirR4\QuantityType $maxDosePerAdministration)
    {
        $this->maxDosePerAdministration = $maxDosePerAdministration;
        return $this;
    }

    /**
     * Gets as maxDosePerLifetime
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getMaxDosePerLifetime()
    {
        return $this->maxDosePerLifetime;
    }

    /**
     * Sets a new maxDosePerLifetime
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $maxDosePerLifetime
     * @return self
     */
    public function setMaxDosePerLifetime(\TKusy\Hl7FhirR4\QuantityType $maxDosePerLifetime)
    {
        $this->maxDosePerLifetime = $maxDosePerLifetime;
        return $this;
    }


}

