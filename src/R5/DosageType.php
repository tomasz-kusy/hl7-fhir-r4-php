<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DosageType
 *
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Dosage
 */
class DosageType extends BackboneTypeType
{

    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $sequence
     */
    private $sequence = null;

    /**
     * Free text dosage instructions e.g. SIG.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $text
     */
    private $text = null;

    /**
     * Supplemental instructions to the patient on how to take the medication (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $additionalInstruction
     */
    private $additionalInstruction = null;

    /**
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $patientInstruction
     */
    private $patientInstruction = null;

    /**
     * When medication should be administered.
     *
     * @var \TKusy\Hl7Fhir\R5\TimingType $timing
     */
    private $timing = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $asNeeded
     */
    private $asNeeded = null;

    /**
     * Indicates whether the Medication is only taken based on a precondition for taking the Medication (CodeableConcept).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $asNeededFor
     */
    private $asNeededFor = null;

    /**
     * Body site to administer to.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $site
     */
    private $site = null;

    /**
     * How drug should enter body.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $route
     */
    private $route = null;

    /**
     * Technique for administering medication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     */
    private $method = null;

    /**
     * Depending on the resource,this is the amount of medication administered, to be administered or typical amount to be administered.
     *
     * @var \TKusy\Hl7Fhir\R5\DosageDoseAndRateType[] $doseAndRate
     */
    private $doseAndRate = null;

    /**
     * Upper limit on medication per unit of time.
     *
     * @var \TKusy\Hl7Fhir\R5\RatioType[] $maxDosePerPeriod
     */
    private $maxDosePerPeriod = null;

    /**
     * Upper limit on medication per administration.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $maxDosePerAdministration
     */
    private $maxDosePerAdministration = null;

    /**
     * Upper limit on medication per lifetime of the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $maxDosePerLifetime
     */
    private $maxDosePerLifetime = null;

    /**
     * Gets as sequence
     *
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
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
     * @param \TKusy\Hl7Fhir\R5\IntegerType $sequence
     * @return self
     */
    public function setSequence(?\TKusy\Hl7Fhir\R5\IntegerType $sequence = null)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as text
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $text
     * @return self
     */
    public function setText(?\TKusy\Hl7Fhir\R5\StringType $text = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $additionalInstruction
     */
    public function addToAdditionalInstruction(\TKusy\Hl7Fhir\R5\CodeableConceptType $additionalInstruction)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $additionalInstruction
     * @return self
     */
    public function setAdditionalInstruction(array $additionalInstruction = null)
    {
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }

    /**
     * Gets as patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $patientInstruction
     * @return self
     */
    public function setPatientInstruction(?\TKusy\Hl7Fhir\R5\StringType $patientInstruction = null)
    {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Gets as timing
     *
     * When medication should be administered.
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
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
     * @param \TKusy\Hl7Fhir\R5\TimingType $timing
     * @return self
     */
    public function setTiming(?\TKusy\Hl7Fhir\R5\TimingType $timing = null)
    {
        $this->timing = $timing;
        return $this;
    }

    /**
     * Gets as asNeeded
     *
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAsNeeded()
    {
        return $this->asNeeded;
    }

    /**
     * Sets a new asNeeded
     *
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $asNeeded
     * @return self
     */
    public function setAsNeeded(?\TKusy\Hl7Fhir\R5\BooleanType $asNeeded = null)
    {
        $this->asNeeded = $asNeeded;
        return $this;
    }

    /**
     * Adds as asNeededFor
     *
     * Indicates whether the Medication is only taken based on a precondition for taking the Medication (CodeableConcept).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor
     */
    public function addToAsNeededFor(\TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor)
    {
        $this->asNeededFor[] = $asNeededFor;
        return $this;
    }

    /**
     * isset asNeededFor
     *
     * Indicates whether the Medication is only taken based on a precondition for taking the Medication (CodeableConcept).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAsNeededFor($index)
    {
        return isset($this->asNeededFor[$index]);
    }

    /**
     * unset asNeededFor
     *
     * Indicates whether the Medication is only taken based on a precondition for taking the Medication (CodeableConcept).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAsNeededFor($index)
    {
        unset($this->asNeededFor[$index]);
    }

    /**
     * Gets as asNeededFor
     *
     * Indicates whether the Medication is only taken based on a precondition for taking the Medication (CodeableConcept).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAsNeededFor()
    {
        return $this->asNeededFor;
    }

    /**
     * Sets a new asNeededFor
     *
     * Indicates whether the Medication is only taken based on a precondition for taking the Medication (CodeableConcept).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $asNeededFor
     * @return self
     */
    public function setAsNeededFor(array $asNeededFor = null)
    {
        $this->asNeededFor = $asNeededFor;
        return $this;
    }

    /**
     * Gets as site
     *
     * Body site to administer to.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $site
     * @return self
     */
    public function setSite(?\TKusy\Hl7Fhir\R5\CodeableConceptType $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as route
     *
     * How drug should enter body.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $route
     * @return self
     */
    public function setRoute(?\TKusy\Hl7Fhir\R5\CodeableConceptType $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as method
     *
     * Technique for administering medication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     * @return self
     */
    public function setMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Adds as doseAndRate
     *
     * Depending on the resource,this is the amount of medication administered, to be administered or typical amount to be administered.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DosageDoseAndRateType $doseAndRate
     */
    public function addToDoseAndRate(\TKusy\Hl7Fhir\R5\DosageDoseAndRateType $doseAndRate)
    {
        $this->doseAndRate[] = $doseAndRate;
        return $this;
    }

    /**
     * isset doseAndRate
     *
     * Depending on the resource,this is the amount of medication administered, to be administered or typical amount to be administered.
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
     * Depending on the resource,this is the amount of medication administered, to be administered or typical amount to be administered.
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
     * Depending on the resource,this is the amount of medication administered, to be administered or typical amount to be administered.
     *
     * @return \TKusy\Hl7Fhir\R5\DosageDoseAndRateType[]
     */
    public function getDoseAndRate()
    {
        return $this->doseAndRate;
    }

    /**
     * Sets a new doseAndRate
     *
     * Depending on the resource,this is the amount of medication administered, to be administered or typical amount to be administered.
     *
     * @param \TKusy\Hl7Fhir\R5\DosageDoseAndRateType[] $doseAndRate
     * @return self
     */
    public function setDoseAndRate(array $doseAndRate = null)
    {
        $this->doseAndRate = $doseAndRate;
        return $this;
    }

    /**
     * Adds as maxDosePerPeriod
     *
     * Upper limit on medication per unit of time.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RatioType $maxDosePerPeriod
     */
    public function addToMaxDosePerPeriod(\TKusy\Hl7Fhir\R5\RatioType $maxDosePerPeriod)
    {
        $this->maxDosePerPeriod[] = $maxDosePerPeriod;
        return $this;
    }

    /**
     * isset maxDosePerPeriod
     *
     * Upper limit on medication per unit of time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMaxDosePerPeriod($index)
    {
        return isset($this->maxDosePerPeriod[$index]);
    }

    /**
     * unset maxDosePerPeriod
     *
     * Upper limit on medication per unit of time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMaxDosePerPeriod($index)
    {
        unset($this->maxDosePerPeriod[$index]);
    }

    /**
     * Gets as maxDosePerPeriod
     *
     * Upper limit on medication per unit of time.
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType[]
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
     * @param \TKusy\Hl7Fhir\R5\RatioType[] $maxDosePerPeriod
     * @return self
     */
    public function setMaxDosePerPeriod(array $maxDosePerPeriod = null)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /**
     * Gets as maxDosePerAdministration
     *
     * Upper limit on medication per administration.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $maxDosePerAdministration
     * @return self
     */
    public function setMaxDosePerAdministration(?\TKusy\Hl7Fhir\R5\QuantityType $maxDosePerAdministration = null)
    {
        $this->maxDosePerAdministration = $maxDosePerAdministration;
        return $this;
    }

    /**
     * Gets as maxDosePerLifetime
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $maxDosePerLifetime
     * @return self
     */
    public function setMaxDosePerLifetime(?\TKusy\Hl7Fhir\R5\QuantityType $maxDosePerLifetime = null)
    {
        $this->maxDosePerLifetime = $maxDosePerLifetime;
        return $this;
    }


}

