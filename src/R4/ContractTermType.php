<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ContractTermType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Term
 */
class ContractTermType extends BackboneElementType
{

    /**
     * Unique identifier for this particular Contract Provision.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * When this Contract Provision was issued.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $issued
     */
    private $issued = null;

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $applies
     */
    private $applies = null;

    /**
     * The entity that the term applies to. (choose any one of topic*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $topicCodeableConcept
     */
    private $topicCodeableConcept = null;

    /**
     * The entity that the term applies to. (choose any one of topic*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $topicReference
     */
    private $topicReference = null;

    /**
     * A legal clause or condition contained within a contract that requires one or both parties to perform a particular requirement by some specified time or prevents one or both parties from performing a particular requirement by some specified time.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A specialized legal clause or condition based on overarching contract type.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $subType
     */
    private $subType = null;

    /**
     * Statement of a provision in a policy or a contract.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $text
     */
    private $text = null;

    /**
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     *
     * @var \TKusy\Hl7Fhir\R4\ContractSecurityLabelType[] $securityLabel
     */
    private $securityLabel = null;

    /**
     * The matter of concern in the context of this provision of the agrement.
     *
     * @var \TKusy\Hl7Fhir\R4\ContractOfferType $offer
     */
    private $offer = null;

    /**
     * Contract Term Asset List.
     *
     * @var \TKusy\Hl7Fhir\R4\ContractAssetType[] $asset
     */
    private $asset = null;

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @var \TKusy\Hl7Fhir\R4\ContractActionType[] $action
     */
    private $action = null;

    /**
     * Nested group of Contract Provisions.
     *
     * @var \TKusy\Hl7Fhir\R4\ContractTermType[] $group
     */
    private $group = null;

    /**
     * Gets as identifier
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as issued
     *
     * When this Contract Provision was issued.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Sets a new issued
     *
     * When this Contract Provision was issued.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $issued
     * @return self
     */
    public function setIssued(\TKusy\Hl7Fhir\R4\DateTimeType $issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Gets as applies
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * Sets a new applies
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $applies
     * @return self
     */
    public function setApplies(\TKusy\Hl7Fhir\R4\PeriodType $applies)
    {
        $this->applies = $applies;
        return $this;
    }

    /**
     * Gets as topicCodeableConcept
     *
     * The entity that the term applies to. (choose any one of topic*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getTopicCodeableConcept()
    {
        return $this->topicCodeableConcept;
    }

    /**
     * Sets a new topicCodeableConcept
     *
     * The entity that the term applies to. (choose any one of topic*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $topicCodeableConcept
     * @return self
     */
    public function setTopicCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $topicCodeableConcept)
    {
        $this->topicCodeableConcept = $topicCodeableConcept;
        return $this;
    }

    /**
     * Gets as topicReference
     *
     * The entity that the term applies to. (choose any one of topic*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getTopicReference()
    {
        return $this->topicReference;
    }

    /**
     * Sets a new topicReference
     *
     * The entity that the term applies to. (choose any one of topic*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $topicReference
     * @return self
     */
    public function setTopicReference(\TKusy\Hl7Fhir\R4\ReferenceType $topicReference)
    {
        $this->topicReference = $topicReference;
        return $this;
    }

    /**
     * Gets as type
     *
     * A legal clause or condition contained within a contract that requires one or both parties to perform a particular requirement by some specified time or prevents one or both parties from performing a particular requirement by some specified time.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A legal clause or condition contained within a contract that requires one or both parties to perform a particular requirement by some specified time or prevents one or both parties from performing a particular requirement by some specified time.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subType
     *
     * A specialized legal clause or condition based on overarching contract type.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a new subType
     *
     * A specialized legal clause or condition based on overarching contract type.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $subType
     * @return self
     */
    public function setSubType(\TKusy\Hl7Fhir\R4\CodeableConceptType $subType)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Gets as text
     *
     * Statement of a provision in a policy or a contract.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Statement of a provision in a policy or a contract.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as securityLabel
     *
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContractSecurityLabelType $securityLabel
     */
    public function addToSecurityLabel(\TKusy\Hl7Fhir\R4\ContractSecurityLabelType $securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * isset securityLabel
     *
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
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
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
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
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     *
     * @return \TKusy\Hl7Fhir\R4\ContractSecurityLabelType[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Sets a new securityLabel
     *
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     *
     * @param \TKusy\Hl7Fhir\R4\ContractSecurityLabelType[] $securityLabel
     * @return self
     */
    public function setSecurityLabel(array $securityLabel)
    {
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Gets as offer
     *
     * The matter of concern in the context of this provision of the agrement.
     *
     * @return \TKusy\Hl7Fhir\R4\ContractOfferType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * The matter of concern in the context of this provision of the agrement.
     *
     * @param \TKusy\Hl7Fhir\R4\ContractOfferType $offer
     * @return self
     */
    public function setOffer(\TKusy\Hl7Fhir\R4\ContractOfferType $offer)
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Adds as asset
     *
     * Contract Term Asset List.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContractAssetType $asset
     */
    public function addToAsset(\TKusy\Hl7Fhir\R4\ContractAssetType $asset)
    {
        $this->asset[] = $asset;
        return $this;
    }

    /**
     * isset asset
     *
     * Contract Term Asset List.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAsset($index)
    {
        return isset($this->asset[$index]);
    }

    /**
     * unset asset
     *
     * Contract Term Asset List.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAsset($index)
    {
        unset($this->asset[$index]);
    }

    /**
     * Gets as asset
     *
     * Contract Term Asset List.
     *
     * @return \TKusy\Hl7Fhir\R4\ContractAssetType[]
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Sets a new asset
     *
     * Contract Term Asset List.
     *
     * @param \TKusy\Hl7Fhir\R4\ContractAssetType[] $asset
     * @return self
     */
    public function setAsset(array $asset)
    {
        $this->asset = $asset;
        return $this;
    }

    /**
     * Adds as action
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContractActionType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R4\ContractActionType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
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
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
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
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @return \TKusy\Hl7Fhir\R4\ContractActionType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     *
     * @param \TKusy\Hl7Fhir\R4\ContractActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as group
     *
     * Nested group of Contract Provisions.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContractTermType $group
     */
    public function addToGroup(\TKusy\Hl7Fhir\R4\ContractTermType $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * Nested group of Contract Provisions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * Nested group of Contract Provisions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * Nested group of Contract Provisions.
     *
     * @return \TKusy\Hl7Fhir\R4\ContractTermType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * Nested group of Contract Provisions.
     *
     * @param \TKusy\Hl7Fhir\R4\ContractTermType[] $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;
        return $this;
    }


}

