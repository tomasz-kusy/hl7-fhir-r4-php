<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TaskRestrictionType
 *
 * A task to be performed.
 * XSD Type: Task.Restriction
 */
class TaskRestrictionType extends BackboneElementType
{

    /**
     * Indicates the number of times the requested action should occur.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $repetitions
     */
    private $repetitions = null;

    /**
     * Over what time-period is fulfillment sought.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * For requests that are targeted to more than on potential recipient/target, for whom is fulfillment sought?
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $recipient
     */
    private $recipient = [
        
    ];

    /**
     * Gets as repetitions
     *
     * Indicates the number of times the requested action should occur.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType $repetitions
     * @return self
     */
    public function setRepetitions(\TKusy\Hl7FhirR4\PositiveIntType $repetitions)
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    /**
     * Gets as period
     *
     * Over what time-period is fulfillment sought.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
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
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as recipient
     *
     * For requests that are targeted to more than on potential recipient/target, for whom is fulfillment sought?
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $recipient
     */
    public function addToRecipient(\TKusy\Hl7FhirR4\ReferenceType $recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * isset recipient
     *
     * For requests that are targeted to more than on potential recipient/target, for whom is fulfillment sought?
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
     * For requests that are targeted to more than on potential recipient/target, for whom is fulfillment sought?
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
     * For requests that are targeted to more than on potential recipient/target, for whom is fulfillment sought?
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * For requests that are targeted to more than on potential recipient/target, for whom is fulfillment sought?
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $recipient
     * @return self
     */
    public function setRecipient(array $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }


}

