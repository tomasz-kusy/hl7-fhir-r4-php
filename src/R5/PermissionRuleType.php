<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PermissionRuleType
 *
 * Permission resource holds access rules for a given data and context.
 * XSD Type: Permission.Rule
 */
class PermissionRuleType extends BackboneElementType
{

    /**
     * deny | permit.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentProvisionTypeType $type
     */
    private $type = null;

    /**
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionDataType[] $data
     */
    private $data = null;

    /**
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionActivityType[] $activity
     */
    private $activity = null;

    /**
     * What limits apply to the use of the data.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $limit
     */
    private $limit = null;

    /**
     * Gets as type
     *
     * deny | permit.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentProvisionTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * deny | permit.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentProvisionTypeType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\ConsentProvisionTypeType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as data
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PermissionDataType $data
     */
    public function addToData(\TKusy\Hl7Fhir\R5\PermissionDataType $data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * isset data
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetData($index)
    {
        return isset($this->data[$index]);
    }

    /**
     * unset data
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetData($index)
    {
        unset($this->data[$index]);
    }

    /**
     * Gets as data
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionDataType[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionDataType[] $data
     * @return self
     */
    public function setData(array $data = null)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Adds as activity
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PermissionActivityType $activity
     */
    public function addToActivity(\TKusy\Hl7Fhir\R5\PermissionActivityType $activity)
    {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * isset activity
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivity($index)
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionActivityType[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * A description or definition of which activities are allowed to be done on the data.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionActivityType[] $activity
     * @return self
     */
    public function setActivity(array $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Adds as limit
     *
     * What limits apply to the use of the data.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $limit
     */
    public function addToLimit(\TKusy\Hl7Fhir\R5\CodeableConceptType $limit)
    {
        $this->limit[] = $limit;
        return $this;
    }

    /**
     * isset limit
     *
     * What limits apply to the use of the data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLimit($index)
    {
        return isset($this->limit[$index]);
    }

    /**
     * unset limit
     *
     * What limits apply to the use of the data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLimit($index)
    {
        unset($this->limit[$index]);
    }

    /**
     * Gets as limit
     *
     * What limits apply to the use of the data.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit
     *
     * What limits apply to the use of the data.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $limit
     * @return self
     */
    public function setLimit(array $limit = null)
    {
        $this->limit = $limit;
        return $this;
    }


}

