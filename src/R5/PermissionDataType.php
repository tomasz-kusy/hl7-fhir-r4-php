<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PermissionDataType
 *
 * Permission resource holds access rules for a given data and context.
 * XSD Type: Permission.Data
 */
class PermissionDataType extends BackboneElementType
{

    /**
     * Explicit FHIR Resource references.
     *
     * @var \TKusy\Hl7Fhir\R5\PermissionResourceType[] $resource
     */
    private $resource = null;

    /**
     * The data in scope are those with the given codes present in that data .meta.security element.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $security
     */
    private $security = null;

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType[] $period
     */
    private $period = null;

    /**
     * Used when other data selection elements are insufficient.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $expression
     */
    private $expression = null;

    /**
     * Adds as resource
     *
     * Explicit FHIR Resource references.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PermissionResourceType $resource
     */
    public function addToResource(\TKusy\Hl7Fhir\R5\PermissionResourceType $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * Explicit FHIR Resource references.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * Explicit FHIR Resource references.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * Explicit FHIR Resource references.
     *
     * @return \TKusy\Hl7Fhir\R5\PermissionResourceType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * Explicit FHIR Resource references.
     *
     * @param \TKusy\Hl7Fhir\R5\PermissionResourceType[] $resource
     * @return self
     */
    public function setResource(array $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as security
     *
     * The data in scope are those with the given codes present in that data .meta.security element.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $security
     */
    public function addToSecurity(\TKusy\Hl7Fhir\R5\CodingType $security)
    {
        $this->security[] = $security;
        return $this;
    }

    /**
     * isset security
     *
     * The data in scope are those with the given codes present in that data .meta.security element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurity($index)
    {
        return isset($this->security[$index]);
    }

    /**
     * unset security
     *
     * The data in scope are those with the given codes present in that data .meta.security element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurity($index)
    {
        unset($this->security[$index]);
    }

    /**
     * Gets as security
     *
     * The data in scope are those with the given codes present in that data .meta.security element.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Sets a new security
     *
     * The data in scope are those with the given codes present in that data .meta.security element.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $security
     * @return self
     */
    public function setSecurity(array $security = null)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * Adds as period
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    public function addToPeriod(\TKusy\Hl7Fhir\R5\PeriodType $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType[] $period
     * @return self
     */
    public function setPeriod(array $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as expression
     *
     * Used when other data selection elements are insufficient.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * Used when other data selection elements are insufficient.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $expression
     * @return self
     */
    public function setExpression(?\TKusy\Hl7Fhir\R5\ExpressionType $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }


}

