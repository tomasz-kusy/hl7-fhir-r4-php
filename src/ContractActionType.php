<?php

namespace TKusy\Hl7FhirR4;

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
     * @var bool $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Entity of the action.
     *
     * @var \TKusy\Hl7FhirR4\ContractSubjectType[] $subject
     */
    private $subject = null;

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $intent
     */
    private $intent = null;

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     *
     * @var string[] $linkId
     */
    private $linkId = null;

    /**
     * Current state of the term action.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Encounter or Episode with primary association to specified term activity.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $context
     */
    private $context = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @var string[] $contextLinkId
     */
    private $contextLinkId = null;

    /**
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $requester
     */
    private $requester = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     *
     * @var string[] $requesterLinkId
     */
    private $requesterLinkId = null;

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $performerType
     */
    private $performerType = null;

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $performerRole
     */
    private $performerRole = null;

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @var string[] $performerLinkId
     */
    private $performerLinkId = null;

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @var string[] $reason
     */
    private $reason = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @var string[] $reasonLinkId
     */
    private $reasonLinkId = null;

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Security labels that protects the action.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType[] $securityLabelNumber
     */
    private $securityLabelNumber = null;

    /**
     * Gets as doNotPerform
     *
     * True if the term prohibits the action.
     *
     * @return bool
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
     * @param bool $doNotPerform
     * @return self
     */
    public function setDoNotPerform($doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as type
     *
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
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
     * @param \TKusy\Hl7FhirR4\ContractSubjectType $subject
     */
    public function addToSubject(\TKusy\Hl7FhirR4\ContractSubjectType $subject)
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
     * @return \TKusy\Hl7FhirR4\ContractSubjectType[]
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
     * @param \TKusy\Hl7FhirR4\ContractSubjectType[] $subject
     * @return self
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7FhirR4\CodeableConceptType $intent)
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
     * @param string $linkId
     */
    public function addToLinkId($linkId)
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
     * @return string[]
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
     * @param string[] $linkId
     * @return self
     */
    public function setLinkId(array $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as status
     *
     * Current state of the term action.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as context
     *
     * Encounter or Episode with primary association to specified term activity.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Encounter or Episode with primary association to specified term activity.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7FhirR4\ReferenceType $context)
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
     * @param string $contextLinkId
     */
    public function addToContextLinkId($contextLinkId)
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
     * @return string[]
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
     * @param string[] $contextLinkId
     * @return self
     */
    public function setContextLinkId(array $contextLinkId)
    {
        $this->contextLinkId = $contextLinkId;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(\TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(\TKusy\Hl7FhirR4\PeriodType $occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(\TKusy\Hl7FhirR4\TimingType $occurrenceTiming)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $requester
     */
    public function addToRequester(\TKusy\Hl7FhirR4\ReferenceType $requester)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $requester
     * @return self
     */
    public function setRequester(array $requester)
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
     * @param string $requesterLinkId
     */
    public function addToRequesterLinkId($requesterLinkId)
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
     * @return string[]
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
     * @param string[] $requesterLinkId
     * @return self
     */
    public function setRequesterLinkId(array $requesterLinkId)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     */
    public function addToPerformerType(\TKusy\Hl7FhirR4\CodeableConceptType $performerType)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $performerType
     * @return self
     */
    public function setPerformerType(array $performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Gets as performerRole
     *
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $performerRole
     * @return self
     */
    public function setPerformerRole(\TKusy\Hl7FhirR4\CodeableConceptType $performerRole)
    {
        $this->performerRole = $performerRole;
        return $this;
    }

    /**
     * Gets as performer
     *
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     * @return self
     */
    public function setPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
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
     * @param string $performerLinkId
     */
    public function addToPerformerLinkId($performerLinkId)
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
     * @return string[]
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
     * @param string[] $performerLinkId
     * @return self
     */
    public function setPerformerLinkId(array $performerLinkId)
    {
        $this->performerLinkId = $performerLinkId;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7FhirR4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonCode($index)
    {
        return isset($this->reasonCode[$index]);
    }

    /**
     * unset reasonCode
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonCode($index)
    {
        unset($this->reasonCode[$index]);
    }

    /**
     * Gets as reasonCode
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     * @return self
     */
    public function setReasonCode(array $reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Adds as reasonReference
     *
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7FhirR4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonReference($index)
    {
        return isset($this->reasonReference[$index]);
    }

    /**
     * unset reasonReference
     *
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonReference($index)
    {
        unset($this->reasonReference[$index]);
    }

    /**
     * Gets as reasonReference
     *
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @return self
     * @param string $reason
     */
    public function addToReason($reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Describes why the action is to be performed or not performed in textual form.
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
     * Describes why the action is to be performed or not performed in textual form.
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
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @return string[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @param string[] $reason
     * @return self
     */
    public function setReason(array $reason)
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
     * @param string $reasonLinkId
     */
    public function addToReasonLinkId($reasonLinkId)
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
     * @return string[]
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
     * @param string[] $reasonLinkId
     * @return self
     */
    public function setReasonLinkId(array $reasonLinkId)
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
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $securityLabelNumber
     */
    public function addToSecurityLabelNumber(\TKusy\Hl7FhirR4\UnsignedIntType $securityLabelNumber)
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
     * @return \TKusy\Hl7FhirR4\UnsignedIntType[]
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType[] $securityLabelNumber
     * @return self
     */
    public function setSecurityLabelNumber(array $securityLabelNumber)
    {
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }


}

