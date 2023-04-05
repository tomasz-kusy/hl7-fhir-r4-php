<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionIntakeType
 *
 * A record of food or fluid that is being consumed by a patient. A NutritionIntake may indicate that the patient may be consuming the food or fluid now or has consumed the food or fluid in the past. The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician. A common scenario where this information is captured is during the history taking process during a patient visit or stay or through an app that tracks food or fluids consumed. The consumption information may come from sources such as the patient's memory, from a nutrition label, or from a clinician documenting observed intake.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: NutritionIntake
 */
class NutritionIntakeType extends DomainResourceType
{

    /**
     * Identifiers associated with this Nutrition Intake that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Instantiates FHIR protocol or definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * Instantiates external protocol or definition.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code representing the patient or other source's judgment about the state of the intake that this assertion is about. Generally, this will be active or completed.
     *
     * @var \TKusy\Hl7Fhir\R5\EventStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the NutritionIntake.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $statusReason
     */
    private $statusReason = null;

    /**
     * Overall type of nutrition intake.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The person, animal or group who is/was consuming the food or fluid.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter that establishes the context for this NutritionIntake.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * The date when the Nutrition Intake was asserted by the information source.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     */
    private $recorded = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $reportedBoolean
     */
    private $reportedBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reportedReference
     */
    private $reportedReference = null;

    /**
     * What food or fluid product or item was consumed.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionIntakeConsumedItemType[] $consumedItem
     */
    private $consumedItem = null;

    /**
     * Total nutrient amounts for the whole meal, product, serving, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionIntakeIngredientLabelType[] $ingredientLabel
     */
    private $ingredientLabel = null;

    /**
     * Who performed the intake and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionIntakePerformerType[] $performer
     */
    private $performer = null;

    /**
     * Where the intake occurred.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Allows linking the NutritionIntake to the underlying NutritionOrder, or to other information, such as AllergyIntolerance, that supports or is used to derive the NutritionIntake.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * A reason, Condition or observation for why the food or fluid is /was consumed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Provides extra information about the Nutrition Intake that is not conveyed by the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this Nutrition Intake that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Nutrition Intake that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Nutrition Intake that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Nutrition Intake that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Nutrition Intake that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Adds as instantiatesCanonical
     *
     * Instantiates FHIR protocol or definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * Instantiates FHIR protocol or definition.
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
     * Instantiates FHIR protocol or definition.
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
     * Instantiates FHIR protocol or definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * Instantiates FHIR protocol or definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * Instantiates external protocol or definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7Fhir\R5\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * Instantiates external protocol or definition.
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
     * Instantiates external protocol or definition.
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
     * Instantiates external protocol or definition.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * Instantiates external protocol or definition.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartOf($index)
    {
        return isset($this->partOf[$index]);
    }

    /**
     * unset partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartOf($index)
    {
        unset($this->partOf[$index]);
    }

    /**
     * Gets as partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code representing the patient or other source's judgment about the state of the intake that this assertion is about. Generally, this will be active or completed.
     *
     * @return \TKusy\Hl7Fhir\R5\EventStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code representing the patient or other source's judgment about the state of the intake that this assertion is about. Generally, this will be active or completed.
     *
     * @param \TKusy\Hl7Fhir\R5\EventStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EventStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as statusReason
     *
     * Captures the reason for the current state of the NutritionIntake.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    public function addToStatusReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * isset statusReason
     *
     * Captures the reason for the current state of the NutritionIntake.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusReason($index)
    {
        return isset($this->statusReason[$index]);
    }

    /**
     * unset statusReason
     *
     * Captures the reason for the current state of the NutritionIntake.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusReason($index)
    {
        unset($this->statusReason[$index]);
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the NutritionIntake.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Captures the reason for the current state of the NutritionIntake.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $statusReason
     * @return self
     */
    public function setStatusReason(array $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as code
     *
     * Overall type of nutrition intake.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Overall type of nutrition intake.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The person, animal or group who is/was consuming the food or fluid.
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
     * The person, animal or group who is/was consuming the food or fluid.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter that establishes the context for this NutritionIntake.
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
     * The encounter that establishes the context for this NutritionIntake.
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
     * Gets as recorded
     *
     * The date when the Nutrition Intake was asserted by the information source.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * Sets a new recorded
     *
     * The date when the Nutrition Intake was asserted by the information source.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     * @return self
     */
    public function setRecorded(?\TKusy\Hl7Fhir\R5\DateTimeType $recorded = null)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Gets as reportedBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getReportedBoolean()
    {
        return $this->reportedBoolean;
    }

    /**
     * Sets a new reportedBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $reportedBoolean
     * @return self
     */
    public function setReportedBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $reportedBoolean = null)
    {
        $this->reportedBoolean = $reportedBoolean;
        return $this;
    }

    /**
     * Gets as reportedReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReportedReference()
    {
        return $this->reportedReference;
    }

    /**
     * Sets a new reportedReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reportedReference
     * @return self
     */
    public function setReportedReference(?\TKusy\Hl7Fhir\R5\ReferenceType $reportedReference = null)
    {
        $this->reportedReference = $reportedReference;
        return $this;
    }

    /**
     * Adds as consumedItem
     *
     * What food or fluid product or item was consumed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionIntakeConsumedItemType $consumedItem
     */
    public function addToConsumedItem(\TKusy\Hl7Fhir\R5\NutritionIntakeConsumedItemType $consumedItem)
    {
        $this->consumedItem[] = $consumedItem;
        return $this;
    }

    /**
     * isset consumedItem
     *
     * What food or fluid product or item was consumed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumedItem($index)
    {
        return isset($this->consumedItem[$index]);
    }

    /**
     * unset consumedItem
     *
     * What food or fluid product or item was consumed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumedItem($index)
    {
        unset($this->consumedItem[$index]);
    }

    /**
     * Gets as consumedItem
     *
     * What food or fluid product or item was consumed.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionIntakeConsumedItemType[]
     */
    public function getConsumedItem()
    {
        return $this->consumedItem;
    }

    /**
     * Sets a new consumedItem
     *
     * What food or fluid product or item was consumed.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionIntakeConsumedItemType[] $consumedItem
     * @return self
     */
    public function setConsumedItem(array $consumedItem)
    {
        $this->consumedItem = $consumedItem;
        return $this;
    }

    /**
     * Adds as ingredientLabel
     *
     * Total nutrient amounts for the whole meal, product, serving, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionIntakeIngredientLabelType $ingredientLabel
     */
    public function addToIngredientLabel(\TKusy\Hl7Fhir\R5\NutritionIntakeIngredientLabelType $ingredientLabel)
    {
        $this->ingredientLabel[] = $ingredientLabel;
        return $this;
    }

    /**
     * isset ingredientLabel
     *
     * Total nutrient amounts for the whole meal, product, serving, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIngredientLabel($index)
    {
        return isset($this->ingredientLabel[$index]);
    }

    /**
     * unset ingredientLabel
     *
     * Total nutrient amounts for the whole meal, product, serving, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIngredientLabel($index)
    {
        unset($this->ingredientLabel[$index]);
    }

    /**
     * Gets as ingredientLabel
     *
     * Total nutrient amounts for the whole meal, product, serving, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionIntakeIngredientLabelType[]
     */
    public function getIngredientLabel()
    {
        return $this->ingredientLabel;
    }

    /**
     * Sets a new ingredientLabel
     *
     * Total nutrient amounts for the whole meal, product, serving, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionIntakeIngredientLabelType[] $ingredientLabel
     * @return self
     */
    public function setIngredientLabel(array $ingredientLabel = null)
    {
        $this->ingredientLabel = $ingredientLabel;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Who performed the intake and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionIntakePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\NutritionIntakePerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Who performed the intake and how they were involved.
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
     * Who performed the intake and how they were involved.
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
     * Who performed the intake and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionIntakePerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Who performed the intake and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionIntakePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * Where the intake occurred.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Where the intake occurred.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as derivedFrom
     *
     * Allows linking the NutritionIntake to the underlying NutritionOrder, or to other information, such as AllergyIntolerance, that supports or is used to derive the NutritionIntake.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7Fhir\R5\ReferenceType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * Allows linking the NutritionIntake to the underlying NutritionOrder, or to other information, such as AllergyIntolerance, that supports or is used to derive the NutritionIntake.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFrom($index)
    {
        return isset($this->derivedFrom[$index]);
    }

    /**
     * unset derivedFrom
     *
     * Allows linking the NutritionIntake to the underlying NutritionOrder, or to other information, such as AllergyIntolerance, that supports or is used to derive the NutritionIntake.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFrom($index)
    {
        unset($this->derivedFrom[$index]);
    }

    /**
     * Gets as derivedFrom
     *
     * Allows linking the NutritionIntake to the underlying NutritionOrder, or to other information, such as AllergyIntolerance, that supports or is used to derive the NutritionIntake.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * Allows linking the NutritionIntake to the underlying NutritionOrder, or to other information, such as AllergyIntolerance, that supports or is used to derive the NutritionIntake.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom = null)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Adds as reason
     *
     * A reason, Condition or observation for why the food or fluid is /was consumed.
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
     * A reason, Condition or observation for why the food or fluid is /was consumed.
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
     * A reason, Condition or observation for why the food or fluid is /was consumed.
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
     * A reason, Condition or observation for why the food or fluid is /was consumed.
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
     * A reason, Condition or observation for why the food or fluid is /was consumed.
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
     * Provides extra information about the Nutrition Intake that is not conveyed by the other attributes.
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
     * Provides extra information about the Nutrition Intake that is not conveyed by the other attributes.
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
     * Provides extra information about the Nutrition Intake that is not conveyed by the other attributes.
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
     * Provides extra information about the Nutrition Intake that is not conveyed by the other attributes.
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
     * Provides extra information about the Nutrition Intake that is not conveyed by the other attributes.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

