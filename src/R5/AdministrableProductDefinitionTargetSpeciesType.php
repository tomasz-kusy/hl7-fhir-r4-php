<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdministrableProductDefinitionTargetSpeciesType
 *
 * A medicinal product in the final form which is suitable for administering to a patient (after any mixing of multiple components, dissolution etc. has been performed).
 * XSD Type: AdministrableProductDefinition.TargetSpecies
 */
class AdministrableProductDefinitionTargetSpeciesType extends BackboneElementType
{

    /**
     * Coded expression for the species.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A species specific time during which consumption of animal product is not appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionWithdrawalPeriodType[] $withdrawalPeriod
     */
    private $withdrawalPeriod = null;

    /**
     * Gets as code
     *
     * Coded expression for the species.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
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
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionWithdrawalPeriodType $withdrawalPeriod
     */
    public function addToWithdrawalPeriod(\TKusy\Hl7Fhir\R5\AdministrableProductDefinitionWithdrawalPeriodType $withdrawalPeriod)
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
     * @return \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionWithdrawalPeriodType[]
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
     * @param \TKusy\Hl7Fhir\R5\AdministrableProductDefinitionWithdrawalPeriodType[] $withdrawalPeriod
     * @return self
     */
    public function setWithdrawalPeriod(array $withdrawalPeriod = null)
    {
        $this->withdrawalPeriod = $withdrawalPeriod;
        return $this;
    }


}

