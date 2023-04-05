<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationRequestDispenseRequestType
 *
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * XSD Type: MedicationRequest.DispenseRequest
 */
class MedicationRequestDispenseRequestType extends BackboneElementType
{

    /**
     * Indicates the quantity or duration for the first dispense of the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationRequestInitialFillType $initialFill
     */
    private $initialFill = null;

    /**
     * The minimum period of time that must occur between dispenses of the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $dispenseInterval
     */
    private $dispenseInterval = null;

    /**
     * This indicates the validity period of a prescription (stale dating the Prescription).
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * An integer indicating the number of times, in addition to the original dispense, (aka refills or repeats) that the patient can receive the prescribed medication. Usage Notes: This integer does not include the original order dispense. This means that if an order indicates dispense 30 tablets plus "3 repeats", then the order can be dispensed a total of 4 times and the patient can receive a total of 120 tablets. A prescriber may explicitly say that zero refills are permitted after the initial dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfRepeatsAllowed
     */
    private $numberOfRepeatsAllowed = null;

    /**
     * The amount that is to be dispensed for one fill.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $expectedSupplyDuration
     */
    private $expectedSupplyDuration = null;

    /**
     * Indicates the intended performing Organization that will dispense the medication as specified by the prescriber.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $dispenser
     */
    private $dispenser = null;

    /**
     * Provides additional information to the dispenser, for example, counselling to be provided to the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $dispenserInstruction
     */
    private $dispenserInstruction = null;

    /**
     * Provides information about the type of adherence packaging to be supplied for the medication dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $doseAdministrationAid
     */
    private $doseAdministrationAid = null;

    /**
     * Gets as initialFill
     *
     * Indicates the quantity or duration for the first dispense of the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationRequestInitialFillType
     */
    public function getInitialFill()
    {
        return $this->initialFill;
    }

    /**
     * Sets a new initialFill
     *
     * Indicates the quantity or duration for the first dispense of the medication.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationRequestInitialFillType $initialFill
     * @return self
     */
    public function setInitialFill(?\TKusy\Hl7Fhir\R5\MedicationRequestInitialFillType $initialFill = null)
    {
        $this->initialFill = $initialFill;
        return $this;
    }

    /**
     * Gets as dispenseInterval
     *
     * The minimum period of time that must occur between dispenses of the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getDispenseInterval()
    {
        return $this->dispenseInterval;
    }

    /**
     * Sets a new dispenseInterval
     *
     * The minimum period of time that must occur between dispenses of the medication.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $dispenseInterval
     * @return self
     */
    public function setDispenseInterval(?\TKusy\Hl7Fhir\R5\DurationType $dispenseInterval = null)
    {
        $this->dispenseInterval = $dispenseInterval;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * This indicates the validity period of a prescription (stale dating the Prescription).
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * This indicates the validity period of a prescription (stale dating the Prescription).
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as numberOfRepeatsAllowed
     *
     * An integer indicating the number of times, in addition to the original dispense, (aka refills or repeats) that the patient can receive the prescribed medication. Usage Notes: This integer does not include the original order dispense. This means that if an order indicates dispense 30 tablets plus "3 repeats", then the order can be dispensed a total of 4 times and the patient can receive a total of 120 tablets. A prescriber may explicitly say that zero refills are permitted after the initial dispense.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberOfRepeatsAllowed()
    {
        return $this->numberOfRepeatsAllowed;
    }

    /**
     * Sets a new numberOfRepeatsAllowed
     *
     * An integer indicating the number of times, in addition to the original dispense, (aka refills or repeats) that the patient can receive the prescribed medication. Usage Notes: This integer does not include the original order dispense. This means that if an order indicates dispense 30 tablets plus "3 repeats", then the order can be dispensed a total of 4 times and the patient can receive a total of 120 tablets. A prescriber may explicitly say that zero refills are permitted after the initial dispense.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfRepeatsAllowed
     * @return self
     */
    public function setNumberOfRepeatsAllowed(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfRepeatsAllowed = null)
    {
        $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount that is to be dispensed for one fill.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount that is to be dispensed for one fill.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as expectedSupplyDuration
     *
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getExpectedSupplyDuration()
    {
        return $this->expectedSupplyDuration;
    }

    /**
     * Sets a new expectedSupplyDuration
     *
     * Identifies the period time over which the supplied product is expected to be used, or the length of time the dispense is expected to last.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $expectedSupplyDuration
     * @return self
     */
    public function setExpectedSupplyDuration(?\TKusy\Hl7Fhir\R5\DurationType $expectedSupplyDuration = null)
    {
        $this->expectedSupplyDuration = $expectedSupplyDuration;
        return $this;
    }

    /**
     * Gets as dispenser
     *
     * Indicates the intended performing Organization that will dispense the medication as specified by the prescriber.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDispenser()
    {
        return $this->dispenser;
    }

    /**
     * Sets a new dispenser
     *
     * Indicates the intended performing Organization that will dispense the medication as specified by the prescriber.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $dispenser
     * @return self
     */
    public function setDispenser(?\TKusy\Hl7Fhir\R5\ReferenceType $dispenser = null)
    {
        $this->dispenser = $dispenser;
        return $this;
    }

    /**
     * Adds as dispenserInstruction
     *
     * Provides additional information to the dispenser, for example, counselling to be provided to the patient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $dispenserInstruction
     */
    public function addToDispenserInstruction(\TKusy\Hl7Fhir\R5\AnnotationType $dispenserInstruction)
    {
        $this->dispenserInstruction[] = $dispenserInstruction;
        return $this;
    }

    /**
     * isset dispenserInstruction
     *
     * Provides additional information to the dispenser, for example, counselling to be provided to the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDispenserInstruction($index)
    {
        return isset($this->dispenserInstruction[$index]);
    }

    /**
     * unset dispenserInstruction
     *
     * Provides additional information to the dispenser, for example, counselling to be provided to the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDispenserInstruction($index)
    {
        unset($this->dispenserInstruction[$index]);
    }

    /**
     * Gets as dispenserInstruction
     *
     * Provides additional information to the dispenser, for example, counselling to be provided to the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getDispenserInstruction()
    {
        return $this->dispenserInstruction;
    }

    /**
     * Sets a new dispenserInstruction
     *
     * Provides additional information to the dispenser, for example, counselling to be provided to the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $dispenserInstruction
     * @return self
     */
    public function setDispenserInstruction(array $dispenserInstruction = null)
    {
        $this->dispenserInstruction = $dispenserInstruction;
        return $this;
    }

    /**
     * Gets as doseAdministrationAid
     *
     * Provides information about the type of adherence packaging to be supplied for the medication dispense.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDoseAdministrationAid()
    {
        return $this->doseAdministrationAid;
    }

    /**
     * Sets a new doseAdministrationAid
     *
     * Provides information about the type of adherence packaging to be supplied for the medication dispense.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $doseAdministrationAid
     * @return self
     */
    public function setDoseAdministrationAid(?\TKusy\Hl7Fhir\R5\CodeableConceptType $doseAdministrationAid = null)
    {
        $this->doseAdministrationAid = $doseAdministrationAid;
        return $this;
    }


}

