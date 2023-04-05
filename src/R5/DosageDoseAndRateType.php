<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DosageDoseAndRateType
 *
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Dosage.DoseAndRate
 */
class DosageDoseAndRateType extends BackboneTypeType
{

    /**
     * The kind of dose or rate specified, for example, ordered or calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $doseRange
     */
    private $doseRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $doseQuantity
     */
    private $doseQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $rateRatio
     */
    private $rateRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $rateRange
     */
    private $rateRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $rateQuantity
     */
    private $rateQuantity = null;

    /**
     * Gets as type
     *
     * The kind of dose or rate specified, for example, ordered or calculated.
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
     * The kind of dose or rate specified, for example, ordered or calculated.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as doseRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getDoseRange()
    {
        return $this->doseRange;
    }

    /**
     * Sets a new doseRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $doseRange
     * @return self
     */
    public function setDoseRange(?\TKusy\Hl7Fhir\R5\RangeType $doseRange = null)
    {
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * Gets as doseQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * Sets a new doseQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $doseQuantity
     * @return self
     */
    public function setDoseQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $doseQuantity = null)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Gets as rateRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Sets a new rateRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $rateRatio
     * @return self
     */
    public function setRateRatio(?\TKusy\Hl7Fhir\R5\RatioType $rateRatio = null)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * Gets as rateRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $rateRange
     * @return self
     */
    public function setRateRange(?\TKusy\Hl7Fhir\R5\RangeType $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Gets as rateQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * Sets a new rateQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $rateQuantity
     * @return self
     */
    public function setRateQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $rateQuantity = null)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }


}

