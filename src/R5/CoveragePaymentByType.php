<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoveragePaymentByType
 *
 * Financial instrument which may be used to reimburse or pay for health care products and services. Includes both insurance and self-payment.
 * XSD Type: Coverage.PaymentBy
 */
class CoveragePaymentByType extends BackboneElementType
{

    /**
     * The list of parties providing non-insurance payment for the treatment costs.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $party
     */
    private $party = null;

    /**
     * Description of the financial responsibility.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $responsibility
     */
    private $responsibility = null;

    /**
     * Gets as party
     *
     * The list of parties providing non-insurance payment for the treatment costs.
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
     * The list of parties providing non-insurance payment for the treatment costs.
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
     * Gets as responsibility
     *
     * Description of the financial responsibility.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getResponsibility()
    {
        return $this->responsibility;
    }

    /**
     * Sets a new responsibility
     *
     * Description of the financial responsibility.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $responsibility
     * @return self
     */
    public function setResponsibility(?\TKusy\Hl7Fhir\R5\StringType $responsibility = null)
    {
        $this->responsibility = $responsibility;
        return $this;
    }


}

