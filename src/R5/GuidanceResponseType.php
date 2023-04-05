<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GuidanceResponseType
 *
 * A guidance response is the formal response to a guidance request, including any output parameters returned by the evaluation, as well as the description of any proposed actions to be taken.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: GuidanceResponse
 */
class GuidanceResponseType extends DomainResourceType
{

    /**
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $requestIdentifier
     */
    private $requestIdentifier = null;

    /**
     * Allows a service to provide unique, business identifiers for the response.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $moduleUri
     */
    private $moduleUri = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $moduleCanonical
     */
    private $moduleCanonical = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $moduleCodeableConcept
     */
    private $moduleCodeableConcept = null;

    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     *
     * @var \TKusy\Hl7Fhir\R5\GuidanceResponseStatusType $status
     */
    private $status = null;

    /**
     * The patient for which the request was processed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter during which this response was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates when the guidance response was processed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * Provides a reference to the device that performed the guidance.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Describes the reason for the guidance response in coded or textual form, or Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Provides a mechanism to communicate additional information about the response.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $evaluationMessage
     */
    private $evaluationMessage = null;

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $outputParameters
     */
    private $outputParameters = null;

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $result
     */
    private $result = null;

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @var \TKusy\Hl7Fhir\R5\DataRequirementType[] $dataRequirement
     */
    private $dataRequirement = null;

    /**
     * Gets as requestIdentifier
     *
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getRequestIdentifier()
    {
        return $this->requestIdentifier;
    }

    /**
     * Sets a new requestIdentifier
     *
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $requestIdentifier
     * @return self
     */
    public function setRequestIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $requestIdentifier = null)
    {
        $this->requestIdentifier = $requestIdentifier;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * Allows a service to provide unique, business identifiers for the response.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Allows a service to provide unique, business identifiers for the response.
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
     * Allows a service to provide unique, business identifiers for the response.
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
     * Allows a service to provide unique, business identifiers for the response.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Allows a service to provide unique, business identifiers for the response.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as moduleUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getModuleUri()
    {
        return $this->moduleUri;
    }

    /**
     * Sets a new moduleUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $moduleUri
     * @return self
     */
    public function setModuleUri(?\TKusy\Hl7Fhir\R5\UriType $moduleUri = null)
    {
        $this->moduleUri = $moduleUri;
        return $this;
    }

    /**
     * Gets as moduleCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getModuleCanonical()
    {
        return $this->moduleCanonical;
    }

    /**
     * Sets a new moduleCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $moduleCanonical
     * @return self
     */
    public function setModuleCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $moduleCanonical = null)
    {
        $this->moduleCanonical = $moduleCanonical;
        return $this;
    }

    /**
     * Gets as moduleCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getModuleCodeableConcept()
    {
        return $this->moduleCodeableConcept;
    }

    /**
     * Sets a new moduleCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $moduleCodeableConcept
     * @return self
     */
    public function setModuleCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $moduleCodeableConcept = null)
    {
        $this->moduleCodeableConcept = $moduleCodeableConcept;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     *
     * @return \TKusy\Hl7Fhir\R5\GuidanceResponseStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     *
     * @param \TKusy\Hl7Fhir\R5\GuidanceResponseStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\GuidanceResponseStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient for which the request was processed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The patient for which the request was processed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter during which this response was created or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The encounter during which this response was created or to which the creation of this record is tightly associated.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * Indicates when the guidance response was processed.
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
     * Indicates when the guidance response was processed.
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
     * Gets as performer
     *
     * Provides a reference to the device that performed the guidance.
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
     * Provides a reference to the device that performed the guidance.
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
     * Adds as reason
     *
     * Describes the reason for the guidance response in coded or textual form, or Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Describes the reason for the guidance response in coded or textual form, or Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Describes the reason for the guidance response in coded or textual form, or Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Describes the reason for the guidance response in coded or textual form, or Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Describes the reason for the guidance response in coded or textual form, or Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Adds as note
     *
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Gets as evaluationMessage
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEvaluationMessage()
    {
        return $this->evaluationMessage;
    }

    /**
     * Sets a new evaluationMessage
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $evaluationMessage
     * @return self
     */
    public function setEvaluationMessage(?\TKusy\Hl7Fhir\R5\ReferenceType $evaluationMessage = null)
    {
        $this->evaluationMessage = $evaluationMessage;
        return $this;
    }

    /**
     * Gets as outputParameters
     *
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOutputParameters()
    {
        return $this->outputParameters;
    }

    /**
     * Sets a new outputParameters
     *
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $outputParameters
     * @return self
     */
    public function setOutputParameters(?\TKusy\Hl7Fhir\R5\ReferenceType $outputParameters = null)
    {
        $this->outputParameters = $outputParameters;
        return $this;
    }

    /**
     * Adds as result
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $result
     */
    public function addToResult(\TKusy\Hl7Fhir\R5\ReferenceType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $result
     * @return self
     */
    public function setResult(array $result = null)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Adds as dataRequirement
     *
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DataRequirementType $dataRequirement
     */
    public function addToDataRequirement(\TKusy\Hl7Fhir\R5\DataRequirementType $dataRequirement)
    {
        $this->dataRequirement[] = $dataRequirement;
        return $this;
    }

    /**
     * isset dataRequirement
     *
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataRequirement($index)
    {
        return isset($this->dataRequirement[$index]);
    }

    /**
     * unset dataRequirement
     *
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataRequirement($index)
    {
        unset($this->dataRequirement[$index]);
    }

    /**
     * Gets as dataRequirement
     *
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @return \TKusy\Hl7Fhir\R5\DataRequirementType[]
     */
    public function getDataRequirement()
    {
        return $this->dataRequirement;
    }

    /**
     * Sets a new dataRequirement
     *
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @param \TKusy\Hl7Fhir\R5\DataRequirementType[] $dataRequirement
     * @return self
     */
    public function setDataRequirement(array $dataRequirement = null)
    {
        $this->dataRequirement = $dataRequirement;
        return $this;
    }


}

