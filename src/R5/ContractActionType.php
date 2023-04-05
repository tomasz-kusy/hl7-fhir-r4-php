<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractActionType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Action
 */
class ContractActionType extends BackboneElementType
{

    /**
     * True if the term prohibits the action.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Entity of the action.
     *
     * @var \TKusy\Hl7Fhir\R5\ContractSubjectType[] $subject
     */
    private $subject = null;

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $intent
     */
    private $intent = null;

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $linkId
     */
    private $linkId = null;

    /**
     * Current state of the term action.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Encounter or Episode with primary association to the specified term activity.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $context
     */
    private $context = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $contextLinkId
     */
    private $contextLinkId = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $requester
     */
    private $requester = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $requesterLinkId
     */
    private $requesterLinkId = null;

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $performerType
     */
    private $performerType = null;

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $performerRole
     */
    private $performerRole = null;

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $performerLinkId
     */
    private $performerLinkId = null;

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited. Either a coded concept, or another resource whose existence justifies permitting or not permitting this action.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $reasonLinkId
     */
    private $reasonLinkId = null;

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Security labels that protects the action.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType[] $securityLabelNumber
     */
    private $securityLabelNumber = null;

    /**
     * Gets as doNotPerform
     *
     * True if the term prohibits the action.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * True if the term prohibits the action.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(?\TKusy\Hl7Fhir\R5\BooleanType $doNotPerform = null)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as type
     *
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as subject
     *
     * Entity of the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContractSubjectType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\ContractSubjectType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * Entity of the action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * Entity of the action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * Entity of the action.
     *
     * @return \TKusy\Hl7Fhir\R5\ContractSubjectType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Entity of the action.
     *
     * @param \TKusy\Hl7Fhir\R5\ContractSubjectType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\CodeableConceptType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Adds as linkId
     *
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    public function addToLinkId(\TKusy\Hl7Fhir\R5\StringType $linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * isset linkId
     *
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
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
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
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
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $linkId
     * @return self
     */
    public function setLinkId(array $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as status
     *
     * Current state of the term action.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Current state of the term action.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as context
     *
     * Encounter or Episode with primary association to the specified term activity.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Encounter or Episode with primary association to the specified term activity.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $context
     * @return self
     */
    public function setContext(?\TKusy\Hl7Fhir\R5\ReferenceType $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as contextLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $contextLinkId
     */
    public function addToContextLinkId(\TKusy\Hl7Fhir\R5\StringType $contextLinkId)
    {
        $this->contextLinkId[] = $contextLinkId;
        return $this;
    }

    /**
     * isset contextLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContextLinkId($index)
    {
        return isset($this->contextLinkId[$index]);
    }

    /**
     * unset contextLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContextLinkId($index)
    {
        unset($this->contextLinkId[$index]);
    }

    /**
     * Gets as contextLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getContextLinkId()
    {
        return $this->contextLinkId;
    }

    /**
     * Sets a new contextLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $contextLinkId
     * @return self
     */
    public function setContextLinkId(array $contextLinkId = null)
    {
        $this->contextLinkId = $contextLinkId;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime = null)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod = null)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(?\TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Adds as requester
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    public function addToRequester(\TKusy\Hl7Fhir\R5\ReferenceType $requester)
    {
        $this->requester[] = $requester;
        return $this;
    }

    /**
     * isset requester
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequester($index)
    {
        return isset($this->requester[$index]);
    }

    /**
     * unset requester
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequester($index)
    {
        unset($this->requester[$index]);
    }

    /**
     * Gets as requester
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Sets a new requester
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $requester
     * @return self
     */
    public function setRequester(array $requester = null)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Adds as requesterLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $requesterLinkId
     */
    public function addToRequesterLinkId(\TKusy\Hl7Fhir\R5\StringType $requesterLinkId)
    {
        $this->requesterLinkId[] = $requesterLinkId;
        return $this;
    }

    /**
     * isset requesterLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequesterLinkId($index)
    {
        return isset($this->requesterLinkId[$index]);
    }

    /**
     * unset requesterLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequesterLinkId($index)
    {
        unset($this->requesterLinkId[$index]);
    }

    /**
     * Gets as requesterLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getRequesterLinkId()
    {
        return $this->requesterLinkId;
    }

    /**
     * Sets a new requesterLinkId
     *
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $requesterLinkId
     * @return self
     */
    public function setRequesterLinkId(array $requesterLinkId = null)
    {
        $this->requesterLinkId = $requesterLinkId;
        return $this;
    }

    /**
     * Adds as performerType
     *
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     */
    public function addToPerformerType(\TKusy\Hl7Fhir\R5\CodeableConceptType $performerType)
    {
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * isset performerType
     *
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformerType($index)
    {
        return isset($this->performerType[$index]);
    }

    /**
     * unset performerType
     *
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformerType($index)
    {
        unset($this->performerType[$index]);
    }

    /**
     * Gets as performerType
     *
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Sets a new performerType
     *
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $performerType
     * @return self
     */
    public function setPerformerType(array $performerType = null)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Gets as performerRole
     *
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPerformerRole()
    {
        return $this->performerRole;
    }

    /**
     * Sets a new performerRole
     *
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $performerRole
     * @return self
     */
    public function setPerformerRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $performerRole = null)
    {
        $this->performerRole = $performerRole;
        return $this;
    }

    /**
     * Gets as performer
     *
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $performer
     * @return self
     */
    public function setPerformer(?\TKusy\Hl7Fhir\R5\ReferenceType $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as performerLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $performerLinkId
     */
    public function addToPerformerLinkId(\TKusy\Hl7Fhir\R5\StringType $performerLinkId)
    {
        $this->performerLinkId[] = $performerLinkId;
        return $this;
    }

    /**
     * isset performerLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformerLinkId($index)
    {
        return isset($this->performerLinkId[$index]);
    }

    /**
     * unset performerLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformerLinkId($index)
    {
        unset($this->performerLinkId[$index]);
    }

    /**
     * Gets as performerLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getPerformerLinkId()
    {
        return $this->performerLinkId;
    }

    /**
     * Sets a new performerLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $performerLinkId
     * @return self
     */
    public function setPerformerLinkId(array $performerLinkId = null)
    {
        $this->performerLinkId = $performerLinkId;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited. Either a coded concept, or another resource whose existence justifies permitting or not permitting this action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableReferenceType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited. Either a coded concept, or another resource whose existence justifies permitting or not permitting this action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited. Either a coded concept, or another resource whose existence justifies permitting or not permitting this action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited. Either a coded concept, or another resource whose existence justifies permitting or not permitting this action.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited. Either a coded concept, or another resource whose existence justifies permitting or not permitting this action.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as reasonLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $reasonLinkId
     */
    public function addToReasonLinkId(\TKusy\Hl7Fhir\R5\StringType $reasonLinkId)
    {
        $this->reasonLinkId[] = $reasonLinkId;
        return $this;
    }

    /**
     * isset reasonLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonLinkId($index)
    {
        return isset($this->reasonLinkId[$index]);
    }

    /**
     * unset reasonLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonLinkId($index)
    {
        unset($this->reasonLinkId[$index]);
    }

    /**
     * Gets as reasonLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getReasonLinkId()
    {
        return $this->reasonLinkId;
    }

    /**
     * Sets a new reasonLinkId
     *
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $reasonLinkId
     * @return self
     */
    public function setReasonLinkId(array $reasonLinkId = null)
    {
        $this->reasonLinkId = $reasonLinkId;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as securityLabelNumber
     *
     * Security labels that protects the action.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $securityLabelNumber
     */
    public function addToSecurityLabelNumber(\TKusy\Hl7Fhir\R5\UnsignedIntType $securityLabelNumber)
    {
        $this->securityLabelNumber[] = $securityLabelNumber;
        return $this;
    }

    /**
     * isset securityLabelNumber
     *
     * Security labels that protects the action.
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
     * Security labels that protects the action.
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
     * Security labels that protects the action.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * Sets a new securityLabelNumber
     *
     * Security labels that protects the action.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType[] $securityLabelNumber
     * @return self
     */
    public function setSecurityLabelNumber(array $securityLabelNumber = null)
    {
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }


}

