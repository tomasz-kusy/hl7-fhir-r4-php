<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PermissionType
 *
 * Permission resource holds access rules for a given data and context.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Permission
 */
class PermissionType extends DomainResourceType
{

    /**
     * Status.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionStatusType $status
     */
    private $status = null;

    /**
     * The person or entity that asserts the permission.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $asserter
     */
    private $asserter = null;

    /**
     * The date that permission was asserted.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType[] $date
     */
    private $date = null;

    /**
     * The period in which the permission is active.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $validity
     */
    private $validity = null;

    /**
     * The asserted justification for using the data.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionJustificationType $justification
     */
    private $justification = null;

    /**
     * Defines a procedure for arriving at an access decision given the set of rules.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionRuleCombiningType $combining
     */
    private $combining = null;

    /**
     * A set of rules.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionRuleType[] $rule
     */
    private $rule = null;

    /**
     * Gets as status
     *
     * Status.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\PermissionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as asserter
     *
     * The person or entity that asserts the permission.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Sets a new asserter
     *
     * The person or entity that asserts the permission.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $asserter
     * @return self
     */
    public function setAsserter(?\TKusy\Hl7Fhir\R5\ReferenceType $asserter = null)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Adds as date
     *
     * The date that permission was asserted.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    public function addToDate(\TKusy\Hl7Fhir\R5\DateTimeType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * The date that permission was asserted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * The date that permission was asserted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * The date that permission was asserted.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date that permission was asserted.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType[] $date
     * @return self
     */
    public function setDate(array $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as validity
     *
     * The period in which the permission is active.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Sets a new validity
     *
     * The period in which the permission is active.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $validity
     * @return self
     */
    public function setValidity(?\TKusy\Hl7Fhir\R5\PeriodType $validity = null)
    {
        $this->validity = $validity;
        return $this;
    }

    /**
     * Gets as justification
     *
     * The asserted justification for using the data.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionJustificationType
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * The asserted justification for using the data.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionJustificationType $justification
     * @return self
     */
    public function setJustification(?\TKusy\Hl7Fhir\R5\PermissionJustificationType $justification = null)
    {
        $this->justification = $justification;
        return $this;
    }

    /**
     * Gets as combining
     *
     * Defines a procedure for arriving at an access decision given the set of rules.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionRuleCombiningType
     */
    public function getCombining()
    {
        return $this->combining;
    }

    /**
     * Sets a new combining
     *
     * Defines a procedure for arriving at an access decision given the set of rules.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionRuleCombiningType $combining
     * @return self
     */
    public function setCombining(\TKusy\Hl7Fhir\R5\PermissionRuleCombiningType $combining)
    {
        $this->combining = $combining;
        return $this;
    }

    /**
     * Adds as rule
     *
     * A set of rules.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PermissionRuleType $rule
     */
    public function addToRule(\TKusy\Hl7Fhir\R5\PermissionRuleType $rule)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * isset rule
     *
     * A set of rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRule($index)
    {
        return isset($this->rule[$index]);
    }

    /**
     * unset rule
     *
     * A set of rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRule($index)
    {
        unset($this->rule[$index]);
    }

    /**
     * Gets as rule
     *
     * A set of rules.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionRuleType[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * A set of rules.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionRuleType[] $rule
     * @return self
     */
    public function setRule(array $rule = null)
    {
        $this->rule = $rule;
        return $this;
    }


}

