<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductPharmaceuticalTargetSpeciesType
 *
 * A pharmaceutical product described in terms of its composition and dose form.
 * XSD Type: MedicinalProductPharmaceutical.TargetSpecies
 */
class MedicinalProductPharmaceuticalTargetSpeciesType extends BackboneElementType
{

    /**
     * Coded expression for the species.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalWithdrawalPeriodType[] $withdrawalPeriod
     */
    private $withdrawalPeriod = null;

    /**
     * Gets as code
     *
     * Coded expression for the species.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Coded expression for the species.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as withdrawalPeriod
     *
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalWithdrawalPeriodType $withdrawalPeriod
     */
    public function addToWithdrawalPeriod(\TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalWithdrawalPeriodType $withdrawalPeriod)
    {
        $this->withdrawalPeriod[] = $withdrawalPeriod;
        return $this;
    }

    /**
     * isset withdrawalPeriod
     *
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWithdrawalPeriod($index)
    {
        return isset($this->withdrawalPeriod[$index]);
    }

    /**
     * unset withdrawalPeriod
     *
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWithdrawalPeriod($index)
    {
        unset($this->withdrawalPeriod[$index]);
    }

    /**
     * Gets as withdrawalPeriod
     *
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalWithdrawalPeriodType[]
     */
    public function getWithdrawalPeriod()
    {
        return $this->withdrawalPeriod;
    }

    /**
     * Sets a new withdrawalPeriod
     *
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPharmaceuticalWithdrawalPeriodType[] $withdrawalPeriod
     * @return self
     */
    public function setWithdrawalPeriod(array $withdrawalPeriod)
    {
        $this->withdrawalPeriod = $withdrawalPeriod;
        return $this;
    }


}

