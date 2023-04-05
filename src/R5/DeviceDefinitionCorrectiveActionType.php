<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionCorrectiveActionType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.CorrectiveAction
 */
class DeviceDefinitionCorrectiveActionType extends BackboneElementType
{

    /**
     * Whether the last corrective action known for this device was a recall.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $recall
     */
    private $recall = null;

    /**
     * The scope of the corrective action - whether the action targeted all units of a given device model, or only a specific set of batches identified by lot numbers, or individually identified devices identified by the serial name.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceCorrectiveActionScopeType $scope
     */
    private $scope = null;

    /**
     * Start and end dates of the corrective action.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as recall
     *
     * Whether the last corrective action known for this device was a recall.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * Sets a new recall
     *
     * Whether the last corrective action known for this device was a recall.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $recall
     * @return self
     */
    public function setRecall(\TKusy\Hl7Fhir\R5\BooleanType $recall)
    {
        $this->recall = $recall;
        return $this;
    }

    /**
     * Gets as scope
     *
     * The scope of the corrective action - whether the action targeted all units of a given device model, or only a specific set of batches identified by lot numbers, or individually identified devices identified by the serial name.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceCorrectiveActionScopeType
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * The scope of the corrective action - whether the action targeted all units of a given device model, or only a specific set of batches identified by lot numbers, or individually identified devices identified by the serial name.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceCorrectiveActionScopeType $scope
     * @return self
     */
    public function setScope(?\TKusy\Hl7Fhir\R5\DeviceCorrectiveActionScopeType $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as period
     *
     * Start and end dates of the corrective action.
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
     * Start and end dates of the corrective action.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R5\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

