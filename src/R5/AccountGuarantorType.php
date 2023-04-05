<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AccountGuarantorType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * XSD Type: Account.Guarantor
 */
class AccountGuarantorType extends BackboneElementType
{

    /**
     * The entity who is responsible.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $party
     */
    private $party = null;

    /**
     * A guarantor may be placed on credit hold or otherwise have their role temporarily suspended.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $onHold
     */
    private $onHold = null;

    /**
     * The timeframe during which the guarantor accepts responsibility for the account.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as party
     *
     * The entity who is responsible.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * The entity who is responsible.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $party
     * @return self
     */
    public function setParty(\TKusy\Hl7Fhir\R5\ReferenceType $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as onHold
     *
     * A guarantor may be placed on credit hold or otherwise have their role temporarily suspended.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getOnHold()
    {
        return $this->onHold;
    }

    /**
     * Sets a new onHold
     *
     * A guarantor may be placed on credit hold or otherwise have their role temporarily suspended.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $onHold
     * @return self
     */
    public function setOnHold(?\TKusy\Hl7Fhir\R5\BooleanType $onHold = null)
    {
        $this->onHold = $onHold;
        return $this;
    }

    /**
     * Gets as period
     *
     * The timeframe during which the guarantor accepts responsibility for the account.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The timeframe during which the guarantor accepts responsibility for the account.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }


}

