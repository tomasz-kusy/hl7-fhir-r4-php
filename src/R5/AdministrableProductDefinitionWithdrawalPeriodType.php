<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdministrableProductDefinitionWithdrawalPeriodType
 *
 * A medicinal product in the final form which is suitable for administering to a patient (after any mixing of multiple components, dissolution etc. has been performed).
 * XSD Type: AdministrableProductDefinition.WithdrawalPeriod
 */
class AdministrableProductDefinitionWithdrawalPeriodType extends BackboneElementType
{

    /**
     * Coded expression for the type of tissue for which the withdrawal period applies, e.g. meat, milk.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $tissue
     */
    private $tissue = null;

    /**
     * A value for the time.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $value
     */
    private $value = null;

    /**
     * Extra information about the withdrawal period.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Gets as tissue
     *
     * Coded expression for the type of tissue for which the withdrawal period applies, e.g. meat, milk.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTissue()
    {
        return $this->tissue;
    }

    /**
     * Sets a new tissue
     *
     * Coded expression for the type of tissue for which the withdrawal period applies, e.g. meat, milk.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $tissue
     * @return self
     */
    public function setTissue(\TKusy\Hl7Fhir\R5\CodeableConceptType $tissue)
    {
        $this->tissue = $tissue;
        return $this;
    }

    /**
     * Gets as value
     *
     * A value for the time.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A value for the time.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\QuantityType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as supportingInformation
     *
     * Extra information about the withdrawal period.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Extra information about the withdrawal period.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $supportingInformation
     * @return self
     */
    public function setSupportingInformation(?\TKusy\Hl7Fhir\R5\StringType $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }


}

