<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceAssociationOperationType
 *
 * A record of association or dissociation of a device with a patient.
 * XSD Type: DeviceAssociation.Operation
 */
class DeviceAssociationOperationType extends BackboneElementType
{

    /**
     * Device operational condition corresponding to the association.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The individual performing the action enabled by the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $operator
     */
    private $operator = null;

    /**
     * Begin and end dates and times for the device's operation.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as status
     *
     * Device operational condition corresponding to the association.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Device operational condition corresponding to the association.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as operator
     *
     * The individual performing the action enabled by the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $operator
     */
    public function addToOperator(\TKusy\Hl7Fhir\R5\ReferenceType $operator)
    {
        $this->operator[] = $operator;
        return $this;
    }

    /**
     * isset operator
     *
     * The individual performing the action enabled by the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperator($index)
    {
        return isset($this->operator[$index]);
    }

    /**
     * unset operator
     *
     * The individual performing the action enabled by the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperator($index)
    {
        unset($this->operator[$index]);
    }

    /**
     * Gets as operator
     *
     * The individual performing the action enabled by the device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * The individual performing the action enabled by the device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $operator
     * @return self
     */
    public function setOperator(array $operator = null)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as period
     *
     * Begin and end dates and times for the device's operation.
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
     * Begin and end dates and times for the device's operation.
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

