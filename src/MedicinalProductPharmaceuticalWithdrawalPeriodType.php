<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductPharmaceuticalWithdrawalPeriodType
 *
 * A pharmaceutical product described in terms of its composition and dose form.
 * XSD Type: MedicinalProductPharmaceutical.WithdrawalPeriod
 */
class MedicinalProductPharmaceuticalWithdrawalPeriodType extends BackboneElementType
{

    /**
     * Coded expression for the type of tissue for which the withdrawal period applues, e.g. meat, milk.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $tissue
     */
    private $tissue = null;

    /**
     * A value for the time.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $value
     */
    private $value = null;

    /**
     * Extra information about the withdrawal period.
     *
     * @var string $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Gets as tissue
     *
     * Coded expression for the type of tissue for which the withdrawal period applues, e.g. meat, milk.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getTissue()
    {
        return $this->tissue;
    }

    /**
     * Sets a new tissue
     *
     * Coded expression for the type of tissue for which the withdrawal period applues, e.g. meat, milk.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $tissue
     * @return self
     */
    public function setTissue(\TKusy\Hl7FhirR4\CodeableConceptType $tissue)
    {
        $this->tissue = $tissue;
        return $this;
    }

    /**
     * Gets as value
     *
     * A value for the time.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\QuantityType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as supportingInformation
     *
     * Extra information about the withdrawal period.
     *
     * @return string
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
     * @param string $supportingInformation
     * @return self
     */
    public function setSupportingInformation($supportingInformation)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }


}

