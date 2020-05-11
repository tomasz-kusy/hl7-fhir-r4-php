<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ContactPointType
 *
 * Details for all kinds of technology mediated contact points for a person or organization, including telephone, email, etc.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ContactPoint
 */
class ContactPointType extends ElementType
{

    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointSystemType $system
     */
    private $system = null;

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Identifies the purpose for the contact point.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointUseType $use
     */
    private $use = null;

    /**
     * Specifies a preferred order in which to use a set of contacts. ContactPoints with lower rank values are more preferred than those with higher rank values.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $rank
     */
    private $rank = null;

    /**
     * Time period when the contact point was/is in use.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as system
     *
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointSystemType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointSystemType $system
     * @return self
     */
    public function setSystem(\TKusy\Hl7FhirR4\ContactPointSystemType $system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as value
     *
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as use
     *
     * Identifies the purpose for the contact point.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointUseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * Identifies the purpose for the contact point.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointUseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\ContactPointUseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as rank
     *
     * Specifies a preferred order in which to use a set of contacts. ContactPoints with lower rank values are more preferred than those with higher rank values.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets a new rank
     *
     * Specifies a preferred order in which to use a set of contacts. ContactPoints with lower rank values are more preferred than those with higher rank values.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $rank
     * @return self
     */
    public function setRank(\TKusy\Hl7FhirR4\PositiveIntType $rank)
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * Gets as period
     *
     * Time period when the contact point was/is in use.
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
     * Time period when the contact point was/is in use.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

