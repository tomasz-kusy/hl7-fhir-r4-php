<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TransportRestrictionType
 *
 * Record of transport of item.
 * XSD Type: Transport.Restriction
 */
class TransportRestrictionType extends BackboneElementType
{

    /**
     * Indicates the number of times the requested action should occur.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $repetitions
     */
    private $repetitions = null;

    /**
     * Over what time-period is fulfillment sought.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * For requests that are targeted to more than one potential recipient/target, to identify who is fulfillment is sought for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $recipient
     */
    private $recipient = null;

    /**
     * Gets as repetitions
     *
     * Indicates the number of times the requested action should occur.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getRepetitions()
    {
        return $this->repetitions;
    }

    /**
     * Sets a new repetitions
     *
     * Indicates the number of times the requested action should occur.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $repetitions
     * @return self
     */
    public function setRepetitions(?\TKusy\Hl7Fhir\R5\PositiveIntType $repetitions = null)
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    /**
     * Gets as period
     *
     * Over what time-period is fulfillment sought.
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
     * Over what time-period is fulfillment sought.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as recipient
     *
     * For requests that are targeted to more than one potential recipient/target, to identify who is fulfillment is sought for.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $recipient
     */
    public function addToRecipient(\TKusy\Hl7Fhir\R5\ReferenceType $recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * isset recipient
     *
     * For requests that are targeted to more than one potential recipient/target, to identify who is fulfillment is sought for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecipient($index)
    {
        return isset($this->recipient[$index]);
    }

    /**
     * unset recipient
     *
     * For requests that are targeted to more than one potential recipient/target, to identify who is fulfillment is sought for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecipient($index)
    {
        unset($this->recipient[$index]);
    }

    /**
     * Gets as recipient
     *
     * For requests that are targeted to more than one potential recipient/target, to identify who is fulfillment is sought for.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * For requests that are targeted to more than one potential recipient/target, to identify who is fulfillment is sought for.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $recipient
     * @return self
     */
    public function setRecipient(array $recipient = null)
    {
        $this->recipient = $recipient;
        return $this;
    }


}

