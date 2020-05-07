<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DosageDoseAndRateType
 *
 * Indicates how the medication is/was taken or should be taken by the patient.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: Dosage.DoseAndRate
 */
class DosageDoseAndRateType extends BackboneElementType
{

    /**
     * The kind of dose or rate specified, for example, ordered or calculated.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Amount of medication per dose. (choose any one of dose*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $doseRange
     */
    private $doseRange = null;

    /**
     * Amount of medication per dose. (choose any one of dose*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $doseQuantity
     */
    private $doseQuantity = null;

    /**
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $rateRatio
     */
    private $rateRatio = null;

    /**
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $rateRange
     */
    private $rateRange = null;

    /**
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $rateQuantity
     */
    private $rateQuantity = null;

    /**
     * Gets as type
     *
     * The kind of dose or rate specified, for example, ordered or calculated.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as doseRange
     *
     * Amount of medication per dose. (choose any one of dose*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getDoseRange()
    {
        return $this->doseRange;
    }

    /**
     * Sets a new doseRange
     *
     * Amount of medication per dose. (choose any one of dose*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $doseRange
     * @return self
     */
    public function setDoseRange(\TKusy\Hl7FhirR4\RangeType $doseRange)
    {
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * Gets as doseQuantity
     *
     * Amount of medication per dose. (choose any one of dose*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * Sets a new doseQuantity
     *
     * Amount of medication per dose. (choose any one of dose*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $doseQuantity
     * @return self
     */
    public function setDoseQuantity(\TKusy\Hl7FhirR4\QuantityType $doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Gets as rateRatio
     *
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Sets a new rateRatio
     *
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $rateRatio
     * @return self
     */
    public function setRateRatio(\TKusy\Hl7FhirR4\RatioType $rateRatio)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * Gets as rateRange
     *
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $rateRange
     * @return self
     */
    public function setRateRange(\TKusy\Hl7FhirR4\RangeType $rateRange)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Gets as rateQuantity
     *
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * Sets a new rateQuantity
     *
     * Amount of medication per unit of time. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $rateQuantity
     * @return self
     */
    public function setRateQuantity(\TKusy\Hl7FhirR4\QuantityType $rateQuantity)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }


}

