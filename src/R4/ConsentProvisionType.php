<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ConsentProvisionType
 *
 * A record of a healthcare consumer’s choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Provision
 */
class ConsentProvisionType extends BackboneElementType
{

    /**
     * Action to take - permit or deny - when the rule conditions are met. Not permitted in root rule, required in all nested rules.
     *
     * @var \TKusy\Hl7Fhir\R4\ConsentProvisionTypeType $type
     */
    private $type = null;

    /**
     * The timeframe in this rule is valid.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @var \TKusy\Hl7Fhir\R4\ConsentActorType[] $actor
     */
    private $actor = null;

    /**
     * Actions controlled by this Rule.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $action
     */
    private $action = null;

    /**
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $securityLabel
     */
    private $securityLabel = null;

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $purpose
     */
    private $purpose = null;

    /**
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $class
     */
    private $class = null;

    /**
     * If this code is found in an instance, then the rule applies.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $dataPeriod
     */
    private $dataPeriod = null;

    /**
     * The resources controlled by this rule if specific resources are referenced.
     *
     * @var \TKusy\Hl7Fhir\R4\ConsentDataType[] $data
     */
    private $data = null;

    /**
     * Rules which provide exceptions to the base rule or subrules.
     *
     * @var \TKusy\Hl7Fhir\R4\ConsentProvisionType[] $provision
     */
    private $provision = null;

    /**
     * Gets as type
     *
     * Action to take - permit or deny - when the rule conditions are met. Not permitted in root rule, required in all nested rules.
     *
     * @return \TKusy\Hl7Fhir\R4\ConsentProvisionTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Action to take - permit or deny - when the rule conditions are met. Not permitted in root rule, required in all nested rules.
     *
     * @param \TKusy\Hl7Fhir\R4\ConsentProvisionTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\ConsentProvisionTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as period
     *
     * The timeframe in this rule is valid.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The timeframe in this rule is valid.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as actor
     *
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ConsentActorType $actor
     */
    public function addToActor(\TKusy\Hl7Fhir\R4\ConsentActorType $actor)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * isset actor
     *
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActor($index)
    {
        return isset($this->actor[$index]);
    }

    /**
     * unset actor
     *
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActor($index)
    {
        unset($this->actor[$index]);
    }

    /**
     * Gets as actor
     *
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @return \TKusy\Hl7Fhir\R4\ConsentActorType[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @param \TKusy\Hl7Fhir\R4\ConsentActorType[] $actor
     * @return self
     */
    public function setActor(array $actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Adds as action
     *
     * Actions controlled by this Rule.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R4\CodeableConceptType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * Actions controlled by this Rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * Actions controlled by this Rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * Actions controlled by this Rule.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Actions controlled by this Rule.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as securityLabel
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7Fhir\R4\CodingType $securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * isset securityLabel
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabel($index)
    {
        return isset($this->securityLabel[$index]);
    }

    /**
     * unset securityLabel
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabel($index)
    {
        unset($this->securityLabel[$index]);
    }

    /**
     * Gets as securityLabel
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Sets a new securityLabel
     *
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Adds as purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $purpose
     */
    public function addToPurpose(\TKusy\Hl7Fhir\R4\CodingType $purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * isset purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurpose($index)
    {
        return isset($this->purpose[$index]);
    }

    /**
     * unset purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurpose($index)
    {
        unset($this->purpose[$index]);
    }

    /**
     * Gets as purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $purpose
     * @return self
     */
    public function setPurpose(array $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Adds as class
     *
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $class
     */
    public function addToClass(\TKusy\Hl7Fhir\R4\CodingType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $class
     * @return self
     */
    public function setClass(array $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as code
     *
     * If this code is found in an instance, then the rule applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * If this code is found in an instance, then the rule applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * If this code is found in an instance, then the rule applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * If this code is found in an instance, then the rule applies.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * If this code is found in an instance, then the rule applies.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as dataPeriod
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * Sets a new dataPeriod
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $dataPeriod
     * @return self
     */
    public function setDataPeriod(\TKusy\Hl7Fhir\R4\PeriodType $dataPeriod)
    {
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * Adds as data
     *
     * The resources controlled by this rule if specific resources are referenced.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ConsentDataType $data
     */
    public function addToData(\TKusy\Hl7Fhir\R4\ConsentDataType $data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * isset data
     *
     * The resources controlled by this rule if specific resources are referenced.
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
     * The resources controlled by this rule if specific resources are referenced.
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
     * The resources controlled by this rule if specific resources are referenced.
     *
     * @return \TKusy\Hl7Fhir\R4\ConsentDataType[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * The resources controlled by this rule if specific resources are referenced.
     *
     * @param \TKusy\Hl7Fhir\R4\ConsentDataType[] $data
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Adds as provision
     *
     * Rules which provide exceptions to the base rule or subrules.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ConsentProvisionType $provision
     */
    public function addToProvision(\TKusy\Hl7Fhir\R4\ConsentProvisionType $provision)
    {
        $this->provision[] = $provision;
        return $this;
    }

    /**
     * isset provision
     *
     * Rules which provide exceptions to the base rule or subrules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProvision($index)
    {
        return isset($this->provision[$index]);
    }

    /**
     * unset provision
     *
     * Rules which provide exceptions to the base rule or subrules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProvision($index)
    {
        unset($this->provision[$index]);
    }

    /**
     * Gets as provision
     *
     * Rules which provide exceptions to the base rule or subrules.
     *
     * @return \TKusy\Hl7Fhir\R4\ConsentProvisionType[]
     */
    public function getProvision()
    {
        return $this->provision;
    }

    /**
     * Sets a new provision
     *
     * Rules which provide exceptions to the base rule or subrules.
     *
     * @param \TKusy\Hl7Fhir\R4\ConsentProvisionType[] $provision
     * @return self
     */
    public function setProvision(array $provision)
    {
        $this->provision = $provision;
        return $this;
    }


}

