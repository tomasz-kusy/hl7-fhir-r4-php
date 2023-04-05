<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetScopeType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Scope
 */
class ValueSetScopeType extends BackboneElementType
{

    /**
     * Criteria describing which concepts or codes should be included and why.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $inclusionCriteria
     */
    private $inclusionCriteria = null;

    /**
     * Criteria describing which concepts or codes should be excluded and why.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $exclusionCriteria
     */
    private $exclusionCriteria = null;

    /**
     * Gets as inclusionCriteria
     *
     * Criteria describing which concepts or codes should be included and why.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getInclusionCriteria()
    {
        return $this->inclusionCriteria;
    }

    /**
     * Sets a new inclusionCriteria
     *
     * Criteria describing which concepts or codes should be included and why.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $inclusionCriteria
     * @return self
     */
    public function setInclusionCriteria(?\TKusy\Hl7Fhir\R5\StringType $inclusionCriteria = null)
    {
        $this->inclusionCriteria = $inclusionCriteria;
        return $this;
    }

    /**
     * Gets as exclusionCriteria
     *
     * Criteria describing which concepts or codes should be excluded and why.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getExclusionCriteria()
    {
        return $this->exclusionCriteria;
    }

    /**
     * Sets a new exclusionCriteria
     *
     * Criteria describing which concepts or codes should be excluded and why.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $exclusionCriteria
     * @return self
     */
    public function setExclusionCriteria(?\TKusy\Hl7Fhir\R5\StringType $exclusionCriteria = null)
    {
        $this->exclusionCriteria = $exclusionCriteria;
        return $this;
    }


}

