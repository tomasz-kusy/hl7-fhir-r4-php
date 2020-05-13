<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductPharmaceuticalCharacteristicsType
 *
 * A pharmaceutical product described in terms of its composition and dose form.
 * XSD Type: MedicinalProductPharmaceutical.Characteristics
 */
class MedicinalProductPharmaceuticalCharacteristicsType extends BackboneElementType
{

    /**
     * A coded characteristic.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The status of characteristic e.g. assigned or pending.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Gets as code
     *
     * A coded characteristic.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A coded characteristic.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of characteristic e.g. assigned or pending.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of characteristic e.g. assigned or pending.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }


}

