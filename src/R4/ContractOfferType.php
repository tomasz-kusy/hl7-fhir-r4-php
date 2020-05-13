<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ContractOfferType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Offer
 */
class ContractOfferType extends BackboneElementType
{

    /**
     * Unique identifier for this particular Contract Provision.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Offer Recipient.
     *
     * @var \TKusy\Hl7Fhir\R4\ContractPartyType[] $party
     */
    private $party = null;

    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $topic
     */
    private $topic = null;

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $decision
     */
    private $decision = null;

    /**
     * How the decision about a Contract was conveyed.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $decisionMode
     */
    private $decisionMode = null;

    /**
     * Response to offer text.
     *
     * @var \TKusy\Hl7Fhir\R4\ContractAnswerType[] $answer
     */
    private $answer = null;

    /**
     * Human readable form of this Contract Offer.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $text
     */
    private $text = null;

    /**
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType[] $linkId
     */
    private $linkId = null;

    /**
     * Security labels that protects the offer.
     *
     * @var \TKusy\Hl7Fhir\R4\UnsignedIntType[] $securityLabelNumber
     */
    private $securityLabelNumber = null;

    /**
     * Adds as identifier
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as party
     *
     * Offer Recipient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContractPartyType $party
     */
    public function addToParty(\TKusy\Hl7Fhir\R4\ContractPartyType $party)
    {
        $this->party[] = $party;
        return $this;
    }

    /**
     * isset party
     *
     * Offer Recipient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParty($index)
    {
        return isset($this->party[$index]);
    }

    /**
     * unset party
     *
     * Offer Recipient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParty($index)
    {
        unset($this->party[$index]);
    }

    /**
     * Gets as party
     *
     * Offer Recipient.
     *
     * @return \TKusy\Hl7Fhir\R4\ContractPartyType[]
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * Offer Recipient.
     *
     * @param \TKusy\Hl7Fhir\R4\ContractPartyType[] $party
     * @return self
     */
    public function setParty(array $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as topic
     *
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $topic
     * @return self
     */
    public function setTopic(\TKusy\Hl7Fhir\R4\ReferenceType $topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
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
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
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
     * Gets as decision
     *
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Sets a new decision
     *
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $decision
     * @return self
     */
    public function setDecision(\TKusy\Hl7Fhir\R4\CodeableConceptType $decision)
    {
        $this->decision = $decision;
        return $this;
    }

    /**
     * Adds as decisionMode
     *
     * How the decision about a Contract was conveyed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $decisionMode
     */
    public function addToDecisionMode(\TKusy\Hl7Fhir\R4\CodeableConceptType $decisionMode)
    {
        $this->decisionMode[] = $decisionMode;
        return $this;
    }

    /**
     * isset decisionMode
     *
     * How the decision about a Contract was conveyed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDecisionMode($index)
    {
        return isset($this->decisionMode[$index]);
    }

    /**
     * unset decisionMode
     *
     * How the decision about a Contract was conveyed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDecisionMode($index)
    {
        unset($this->decisionMode[$index]);
    }

    /**
     * Gets as decisionMode
     *
     * How the decision about a Contract was conveyed.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getDecisionMode()
    {
        return $this->decisionMode;
    }

    /**
     * Sets a new decisionMode
     *
     * How the decision about a Contract was conveyed.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $decisionMode
     * @return self
     */
    public function setDecisionMode(array $decisionMode)
    {
        $this->decisionMode = $decisionMode;
        return $this;
    }

    /**
     * Adds as answer
     *
     * Response to offer text.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContractAnswerType $answer
     */
    public function addToAnswer(\TKusy\Hl7Fhir\R4\ContractAnswerType $answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * isset answer
     *
     * Response to offer text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * Response to offer text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * Response to offer text.
     *
     * @return \TKusy\Hl7Fhir\R4\ContractAnswerType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * Response to offer text.
     *
     * @param \TKusy\Hl7Fhir\R4\ContractAnswerType[] $answer
     * @return self
     */
    public function setAnswer(array $answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Gets as text
     *
     * Human readable form of this Contract Offer.
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
     * Human readable form of this Contract Offer.
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
     * Adds as linkId
     *
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\StringType $linkId
     */
    public function addToLinkId(\TKusy\Hl7Fhir\R4\StringType $linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * isset linkId
     *
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkId($index)
    {
        return isset($this->linkId[$index]);
    }

    /**
     * unset linkId
     *
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkId($index)
    {
        unset($this->linkId[$index]);
    }

    /**
     * Gets as linkId
     *
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType[] $linkId
     * @return self
     */
    public function setLinkId(array $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Adds as securityLabelNumber
     *
     * Security labels that protects the offer.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType $securityLabelNumber
     */
    public function addToSecurityLabelNumber(\TKusy\Hl7Fhir\R4\UnsignedIntType $securityLabelNumber)
    {
        $this->securityLabelNumber[] = $securityLabelNumber;
        return $this;
    }

    /**
     * isset securityLabelNumber
     *
     * Security labels that protects the offer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabelNumber($index)
    {
        return isset($this->securityLabelNumber[$index]);
    }

    /**
     * unset securityLabelNumber
     *
     * Security labels that protects the offer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabelNumber($index)
    {
        unset($this->securityLabelNumber[$index]);
    }

    /**
     * Gets as securityLabelNumber
     *
     * Security labels that protects the offer.
     *
     * @return \TKusy\Hl7Fhir\R4\UnsignedIntType[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * Sets a new securityLabelNumber
     *
     * Security labels that protects the offer.
     *
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType[] $securityLabelNumber
     * @return self
     */
    public function setSecurityLabelNumber(array $securityLabelNumber)
    {
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }


}

