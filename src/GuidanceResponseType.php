<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GuidanceResponseType
 *
 * A guidance response is the formal response to a guidance request, including any output parameters returned by the evaluation, as well as the description of any proposed actions to be taken.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: GuidanceResponse
 */
class GuidanceResponseType extends DomainResourceType
{

    /**
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $requestIdentifier
     */
    private $requestIdentifier = null;

    /**
     * Allows a service to provide unique, business identifiers for the response.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UriType $moduleUri
     */
    private $moduleUri = null;

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $moduleCanonical
     */
    private $moduleCanonical = null;

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $moduleCodeableConcept
     */
    private $moduleCodeableConcept = null;

    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     *
     * @var \TKusy\Hl7FhirR4\GuidanceResponseStatusType $status
     */
    private $status = null;

    /**
     * The patient for which the request was processed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter during which this response was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates when the guidance response was processed.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * Provides a reference to the device that performed the guidance.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Describes the reason for the guidance response in coded or textual form.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Provides a mechanism to communicate additional information about the response.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $evaluationMessage
     */
    private $evaluationMessage = null;

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $outputParameters
     */
    private $outputParameters = null;

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $result
     */
    private $result = null;

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType[] $dataRequirement
     */
    private $dataRequirement = null;

    /**
     * Gets as requestIdentifier
     *
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
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
     * @param \TKusy\Hl7FhirR4\IdentifierType $requestIdentifier
     * @return self
     */
    public function setRequestIdentifier(\TKusy\Hl7FhirR4\IdentifierType $requestIdentifier)
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
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as moduleUri
     *
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getModuleUri()
    {
        return $this->moduleUri;
    }

    /**
     * Sets a new moduleUri
     *
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UriType $moduleUri
     * @return self
     */
    public function setModuleUri(\TKusy\Hl7FhirR4\UriType $moduleUri)
    {
        $this->moduleUri = $moduleUri;
        return $this;
    }

    /**
     * Gets as moduleCanonical
     *
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getModuleCanonical()
    {
        return $this->moduleCanonical;
    }

    /**
     * Sets a new moduleCanonical
     *
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $moduleCanonical
     * @return self
     */
    public function setModuleCanonical(\TKusy\Hl7FhirR4\CanonicalType $moduleCanonical)
    {
        $this->moduleCanonical = $moduleCanonical;
        return $this;
    }

    /**
     * Gets as moduleCodeableConcept
     *
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getModuleCodeableConcept()
    {
        return $this->moduleCodeableConcept;
    }

    /**
     * Sets a new moduleCodeableConcept
     *
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested. (choose any one of module*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $moduleCodeableConcept
     * @return self
     */
    public function setModuleCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $moduleCodeableConcept)
    {
        $this->moduleCodeableConcept = $moduleCodeableConcept;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     *
     * @return \TKusy\Hl7FhirR4\GuidanceResponseStatusType
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
     * @param \TKusy\Hl7FhirR4\GuidanceResponseStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\GuidanceResponseStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient for which the request was processed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter during which this response was created or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * Indicates when the guidance response was processed.
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
     * Indicates when the guidance response was processed.
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
     * Gets as performer
     *
     * Provides a reference to the device that performed the guidance.
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
     * Provides a reference to the device that performed the guidance.
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
     * Adds as reasonCode
     *
     * Describes the reason for the guidance response in coded or textual form.
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
     * Describes the reason for the guidance response in coded or textual form.
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
     * Describes the reason for the guidance response in coded or textual form.
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
     * Describes the reason for the guidance response in coded or textual form.
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
     * Describes the reason for the guidance response in coded or textual form.
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
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Adds as note
     *
     * Provides a mechanism to communicate additional information about the response.
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as evaluationMessage
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $evaluationMessage
     */
    public function addToEvaluationMessage(\TKusy\Hl7FhirR4\ReferenceType $evaluationMessage)
    {
        $this->evaluationMessage[] = $evaluationMessage;
        return $this;
    }

    /**
     * isset evaluationMessage
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvaluationMessage($index)
    {
        return isset($this->evaluationMessage[$index]);
    }

    /**
     * unset evaluationMessage
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvaluationMessage($index)
    {
        unset($this->evaluationMessage[$index]);
    }

    /**
     * Gets as evaluationMessage
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $evaluationMessage
     * @return self
     */
    public function setEvaluationMessage(array $evaluationMessage)
    {
        $this->evaluationMessage = $evaluationMessage;
        return $this;
    }

    /**
     * Gets as outputParameters
     *
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $outputParameters
     * @return self
     */
    public function setOutputParameters(\TKusy\Hl7FhirR4\ReferenceType $outputParameters)
    {
        $this->outputParameters = $outputParameters;
        return $this;
    }

    /**
     * Gets as result
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $result
     * @return self
     */
    public function setResult(\TKusy\Hl7FhirR4\ReferenceType $result)
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType $dataRequirement
     */
    public function addToDataRequirement(\TKusy\Hl7FhirR4\DataRequirementType $dataRequirement)
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
     * @return \TKusy\Hl7FhirR4\DataRequirementType[]
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType[] $dataRequirement
     * @return self
     */
    public function setDataRequirement(array $dataRequirement)
    {
        $this->dataRequirement = $dataRequirement;
        return $this;
    }


}

