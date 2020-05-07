<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CarePlanDetailType
 *
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * XSD Type: CarePlan.Detail
 */
class CarePlanDetailType extends BackboneElementType
{

    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing. The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @var \TKusy\Hl7FhirR4\CarePlanActivityKindType $kind
     */
    private $kind = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = [
        
    ];

    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     */
    private $instantiatesUri = [
        
    ];

    /**
     * Detailed description of the type of planned activity; e.g. what lab test, what procedure, what kind of encounter.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = [
        
    ];

    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = [
        
    ];

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $goal
     */
    private $goal = [
        
    ];

    /**
     * Identifies what progress is being made for the specific activity.
     *
     * @var \TKusy\Hl7FhirR4\CarePlanActivityStatusType $status
     */
    private $status = null;

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan. If false, or missing, indicates that the described activity is one that should be engaged in when following the plan.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $scheduledTiming
     */
    private $scheduledTiming = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $scheduledPeriod
     */
    private $scheduledPeriod = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $scheduledString
     */
    private $scheduledString = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $performer
     */
    private $performer = [
        
    ];

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $productCodeableConcept
     */
    private $productCodeableConcept = null;

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $productReference
     */
    private $productReference = null;

    /**
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $dailyAmount
     */
    private $dailyAmount = null;

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities. It may also include objectives, pre-conditions and end-conditions. Finally, it may convey specifics about the activity such as body site, method, route, etc.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Gets as kind
     *
     * A description of the kind of resource the in-line definition of a care plan activity is representing. The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @return \TKusy\Hl7FhirR4\CarePlanActivityKindType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * A description of the kind of resource the in-line definition of a care plan activity is representing. The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @param \TKusy\Hl7FhirR4\CarePlanActivityKindType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7FhirR4\CarePlanActivityKindType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesCanonical($index)
    {
        return isset($this->instantiatesCanonical[$index]);
    }

    /**
     * unset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesCanonical($index)
    {
        unset($this->instantiatesCanonical[$index]);
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7FhirR4\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesUri($index)
    {
        return isset($this->instantiatesUri[$index]);
    }

    /**
     * unset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesUri($index)
    {
        unset($this->instantiatesUri[$index]);
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Gets as code
     *
     * Detailed description of the type of planned activity; e.g. what lab test, what procedure, what kind of encounter.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Detailed description of the type of planned activity; e.g. what lab test, what procedure, what kind of encounter.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
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
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
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
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
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
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
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
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
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
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
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
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
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
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
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
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
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
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
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
     * Adds as goal
     *
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $goal
     */
    public function addToGoal(\TKusy\Hl7FhirR4\ReferenceType $goal)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * isset goal
     *
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoal($index)
    {
        return isset($this->goal[$index]);
    }

    /**
     * unset goal
     *
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoal($index)
    {
        unset($this->goal[$index]);
    }

    /**
     * Gets as goal
     *
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Sets a new goal
     *
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $goal
     * @return self
     */
    public function setGoal(array $goal)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Gets as status
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @return \TKusy\Hl7FhirR4\CarePlanActivityStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @param \TKusy\Hl7FhirR4\CarePlanActivityStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CarePlanActivityStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(\TKusy\Hl7FhirR4\CodeableConceptType $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as doNotPerform
     *
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan. If false, or missing, indicates that the described activity is one that should be engaged in when following the plan.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan. If false, or missing, indicates that the described activity is one that should be engaged in when following the plan.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(\TKusy\Hl7FhirR4\BooleanType $doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as scheduledTiming
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getScheduledTiming()
    {
        return $this->scheduledTiming;
    }

    /**
     * Sets a new scheduledTiming
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $scheduledTiming
     * @return self
     */
    public function setScheduledTiming(\TKusy\Hl7FhirR4\TimingType $scheduledTiming)
    {
        $this->scheduledTiming = $scheduledTiming;
        return $this;
    }

    /**
     * Gets as scheduledPeriod
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

    /**
     * Sets a new scheduledPeriod
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $scheduledPeriod
     * @return self
     */
    public function setScheduledPeriod(\TKusy\Hl7FhirR4\PeriodType $scheduledPeriod)
    {
        $this->scheduledPeriod = $scheduledPeriod;
        return $this;
    }

    /**
     * Gets as scheduledString
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getScheduledString()
    {
        return $this->scheduledString;
    }

    /**
     * Sets a new scheduledString
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $scheduledString
     * @return self
     */
    public function setScheduledString(\TKusy\Hl7FhirR4\StringType $scheduledString)
    {
        $this->scheduledString = $scheduledString;
        return $this;
    }

    /**
     * Gets as location
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as productCodeableConcept
     *
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * Sets a new productCodeableConcept
     *
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productCodeableConcept
     * @return self
     */
    public function setProductCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $productCodeableConcept)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Gets as productReference
     *
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Sets a new productReference
     *
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $productReference
     * @return self
     */
    public function setProductReference(\TKusy\Hl7FhirR4\ReferenceType $productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Gets as dailyAmount
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDailyAmount()
    {
        return $this->dailyAmount;
    }

    /**
     * Sets a new dailyAmount
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $dailyAmount
     * @return self
     */
    public function setDailyAmount(\TKusy\Hl7FhirR4\QuantityType $dailyAmount)
    {
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as description
     *
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities. It may also include objectives, pre-conditions and end-conditions. Finally, it may convey specifics about the activity such as body site, method, route, etc.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities. It may also include objectives, pre-conditions and end-conditions. Finally, it may convey specifics about the activity such as body site, method, route, etc.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }


}

