<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConsentProvisionType
 *
 * A record of a healthcare consumer’s choices or choices made on their behalf by a third party, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Provision
 */
class ConsentProvisionType extends BackboneElementType
{

    /**
     * Timeframe for this provision.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Who or what is controlled by this provision. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentActorType[] $actor
     */
    private $actor = null;

    /**
     * Actions controlled by this provision.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $action
     */
    private $action = null;

    /**
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $securityLabel
     */
    private $securityLabel = null;

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this provision.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $purpose
     */
    private $purpose = null;

    /**
     * The documentType(s) covered by this provision. The type can be a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $documentType
     */
    private $documentType = null;

    /**
     * The resourceType(s) covered by this provision. The type can be a FHIR resource type or a profile on a type that indicates what information the consent relates to.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $resourceType
     */
    private $resourceType = null;

    /**
     * If this code is found in an instance, then the provision applies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this provision.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $dataPeriod
     */
    private $dataPeriod = null;

    /**
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentDataType[] $data
     */
    private $data = null;

    /**
     * A computable (FHIRPath or other) definition of what is controlled by this consent.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $expression
     */
    private $expression = null;

    /**
     * Provisions which provide exceptions to the base provision or subprovisions.
     *
     * @var \TKusy\Hl7Fhir\R5\ConsentProvisionType[] $provision
     */
    private $provision = null;

    /**
     * Gets as period
     *
     * Timeframe for this provision.
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
     * Timeframe for this provision.
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
     * Adds as actor
     *
     * Who or what is controlled by this provision. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConsentActorType $actor
     */
    public function addToActor(\TKusy\Hl7Fhir\R5\ConsentActorType $actor)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * isset actor
     *
     * Who or what is controlled by this provision. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
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
     * Who or what is controlled by this provision. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
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
     * Who or what is controlled by this provision. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentActorType[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * Who or what is controlled by this provision. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentActorType[] $actor
     * @return self
     */
    public function setActor(array $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Adds as action
     *
     * Actions controlled by this provision.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R5\CodeableConceptType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * Actions controlled by this provision.
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
     * Actions controlled by this provision.
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
     * Actions controlled by this provision.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Actions controlled by this provision.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $action
     * @return self
     */
    public function setAction(array $action = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodingType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7Fhir\R5\CodingType $securityLabel)
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
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel = null)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Adds as purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this provision.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $purpose
     */
    public function addToPurpose(\TKusy\Hl7Fhir\R5\CodingType $purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * isset purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this provision.
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
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this provision.
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
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this provision.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this provision.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $purpose
     * @return self
     */
    public function setPurpose(array $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Adds as documentType
     *
     * The documentType(s) covered by this provision. The type can be a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $documentType
     */
    public function addToDocumentType(\TKusy\Hl7Fhir\R5\CodingType $documentType)
    {
        $this->documentType[] = $documentType;
        return $this;
    }

    /**
     * isset documentType
     *
     * The documentType(s) covered by this provision. The type can be a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentType($index)
    {
        return isset($this->documentType[$index]);
    }

    /**
     * unset documentType
     *
     * The documentType(s) covered by this provision. The type can be a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentType($index)
    {
        unset($this->documentType[$index]);
    }

    /**
     * Gets as documentType
     *
     * The documentType(s) covered by this provision. The type can be a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * The documentType(s) covered by this provision. The type can be a CDA document, or some other type that indicates what sort of information the consent relates to.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $documentType
     * @return self
     */
    public function setDocumentType(array $documentType = null)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Adds as resourceType
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource type or a profile on a type that indicates what information the consent relates to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $resourceType
     */
    public function addToResourceType(\TKusy\Hl7Fhir\R5\CodingType $resourceType)
    {
        $this->resourceType[] = $resourceType;
        return $this;
    }

    /**
     * isset resourceType
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource type or a profile on a type that indicates what information the consent relates to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceType($index)
    {
        return isset($this->resourceType[$index]);
    }

    /**
     * unset resourceType
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource type or a profile on a type that indicates what information the consent relates to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceType($index)
    {
        unset($this->resourceType[$index]);
    }

    /**
     * Gets as resourceType
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource type or a profile on a type that indicates what information the consent relates to.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * The resourceType(s) covered by this provision. The type can be a FHIR resource type or a profile on a type that indicates what information the consent relates to.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $resourceType
     * @return self
     */
    public function setResourceType(array $resourceType = null)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Adds as code
     *
     * If this code is found in an instance, then the provision applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * If this code is found in an instance, then the provision applies.
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
     * If this code is found in an instance, then the provision applies.
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
     * If this code is found in an instance, then the provision applies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * If this code is found in an instance, then the provision applies.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as dataPeriod
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this provision.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * Sets a new dataPeriod
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled by this provision.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $dataPeriod
     * @return self
     */
    public function setDataPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $dataPeriod = null)
    {
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * Adds as data
     *
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConsentDataType $data
     */
    public function addToData(\TKusy\Hl7Fhir\R5\ConsentDataType $data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * isset data
     *
     * The resources controlled by this provision if specific resources are referenced.
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
     * The resources controlled by this provision if specific resources are referenced.
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
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentDataType[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * The resources controlled by this provision if specific resources are referenced.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentDataType[] $data
     * @return self
     */
    public function setData(array $data = null)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as expression
     *
     * A computable (FHIRPath or other) definition of what is controlled by this consent.
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
     * A computable (FHIRPath or other) definition of what is controlled by this consent.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $expression
     * @return self
     */
    public function setExpression(?\TKusy\Hl7Fhir\R5\ExpressionType $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Adds as provision
     *
     * Provisions which provide exceptions to the base provision or subprovisions.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConsentProvisionType $provision
     */
    public function addToProvision(\TKusy\Hl7Fhir\R5\ConsentProvisionType $provision)
    {
        $this->provision[] = $provision;
        return $this;
    }

    /**
     * isset provision
     *
     * Provisions which provide exceptions to the base provision or subprovisions.
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
     * Provisions which provide exceptions to the base provision or subprovisions.
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
     * Provisions which provide exceptions to the base provision or subprovisions.
     *
     * @return \TKusy\Hl7Fhir\R5\ConsentProvisionType[]
     */
    public function getProvision()
    {
        return $this->provision;
    }

    /**
     * Sets a new provision
     *
     * Provisions which provide exceptions to the base provision or subprovisions.
     *
     * @param \TKusy\Hl7Fhir\R5\ConsentProvisionType[] $provision
     * @return self
     */
    public function setProvision(array $provision = null)
    {
        $this->provision = $provision;
        return $this;
    }


}

