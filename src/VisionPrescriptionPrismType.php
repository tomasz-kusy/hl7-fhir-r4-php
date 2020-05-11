<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing VisionPrescriptionPrismType
 *
 * An authorization for the provision of glasses and/or contact lenses to a patient.
 * XSD Type: VisionPrescription.Prism
 */
class VisionPrescriptionPrismType extends BackboneElementType
{

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * The relative base, or reference lens edge, for the prism.
     *
     * @var \TKusy\Hl7FhirR4\VisionBaseType $base
     */
    private $base = null;

    /**
     * Gets as amount
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as base
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @return \TKusy\Hl7FhirR4\VisionBaseType
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @param \TKusy\Hl7FhirR4\VisionBaseType $base
     * @return self
     */
    public function setBase(\TKusy\Hl7FhirR4\VisionBaseType $base)
    {
        $this->base = $base;
        return $this;
    }


}

