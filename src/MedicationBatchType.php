<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationBatchType
 *
 * This resource is primarily used for the identification and definition of a medication for the purposes of prescribing, dispensing, and administering a medication as well as for making statements about medication use.
 * XSD Type: Medication.Batch
 */
class MedicationBatchType extends BackboneElementType
{

    /**
     * The assigned lot number of a batch of the specified product.
     *
     * @var string $lotNumber
     */
    private $lotNumber = null;

    /**
     * When this specific batch of product will expire.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $expirationDate
     */
    private $expirationDate = null;

    /**
     * Gets as lotNumber
     *
     * The assigned lot number of a batch of the specified product.
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * The assigned lot number of a batch of the specified product.
     *
     * @param string $lotNumber
     * @return self
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * When this specific batch of product will expire.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * When this specific batch of product will expire.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $expirationDate
     * @return self
     */
    public function setExpirationDate(\TKusy\Hl7FhirR4\DateTimeType $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }


}

