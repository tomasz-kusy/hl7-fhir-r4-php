<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ObservationType
 *
 * Measurements and simple assertions made about a patient, device or other subject.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Observation
 */
class ObservationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this observation.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event. For example, a MedicationRequest may require a patient to have laboratory test performed before it is dispensed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = [
        
    ];

    /**
     * A larger event of which this particular Observation is a component or step. For example, an observation as part of a procedure.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     */
    private $partOf = [
        
    ];

    /**
     * The status of the result value.
     *
     * @var \TKusy\Hl7FhirR4\ObservationStatusType $status
     */
    private $status = null;

    /**
     * A code that classifies the general type of observation being made.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The patient, or group of patients, location, or device this observation is about and into whose record the observation is placed. If the actual focus of the observation is different from the subject (or a sample of, part, or region of the subject), the `focus` element or the `code` itself specifies the actual focus of the observation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $focus
     */
    private $focus = [
        
    ];

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this observation is made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime
     */
    private $effectiveDateTime = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $effectiveTiming
     */
    private $effectiveTiming = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\InstantType $effectiveInstant
     */
    private $effectiveInstant = null;

    /**
     * The date and time this version of the observation was made available to providers, typically after the results have been reviewed and verified.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $issued
     */
    private $issued = null;

    /**
     * Who was responsible for asserting the observed value as "true".
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $performer
     */
    private $performer = [
        
    ];

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $valueString
     */
    private $valueString = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\SampledDataType $valueSampledData
     */
    private $valueSampledData = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason
     */
    private $dataAbsentReason = null;

    /**
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $interpretation
     */
    private $interpretation = [
        
    ];

    /**
     * Comments about the observation or the results.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * Indicates the mechanism used to perform the observation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The specimen that was used when this observation was made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $specimen
     */
    private $specimen = null;

    /**
     * The device used to generate the observation data.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $device
     */
    private $device = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range. Multiple reference ranges are interpreted as an "OR". In other words, to represent two distinct target populations, two `referenceRange` elements would be used.
     *
     * @var \TKusy\Hl7FhirR4\ObservationReferenceRangeType[] $referenceRange
     */
    private $referenceRange = [
        
    ];

    /**
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $hasMember
     */
    private $hasMember = [
        
    ];

    /**
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $derivedFrom
     */
    private $derivedFrom = [
        
    ];

    /**
     * Some observations have multiple component observations. These component observations are expressed as separate code value pairs that share the same attributes. Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     *
     * @var \TKusy\Hl7FhirR4\ObservationComponentType[] $component
     */
    private $component = [
        
    ];

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this observation.
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
     * A unique identifier assigned to this observation.
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
     * A unique identifier assigned to this observation.
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
     * A unique identifier assigned to this observation.
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
     * A unique identifier assigned to this observation.
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
     * Adds as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event. For example, a MedicationRequest may require a patient to have laboratory test performed before it is dispensed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7FhirR4\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event. For example, a MedicationRequest may require a patient to have laboratory test performed before it is dispensed.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event. For example, a MedicationRequest may require a patient to have laboratory test performed before it is dispensed.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event. For example, a MedicationRequest may require a patient to have laboratory test performed before it is dispensed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event. For example, a MedicationRequest may require a patient to have laboratory test performed before it is dispensed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A larger event of which this particular Observation is a component or step. For example, an observation as part of a procedure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger event of which this particular Observation is a component or step. For example, an observation as part of a procedure.
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
     * A larger event of which this particular Observation is a component or step. For example, an observation as part of a procedure.
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
     * A larger event of which this particular Observation is a component or step. For example, an observation as part of a procedure.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger event of which this particular Observation is a component or step. For example, an observation as part of a procedure.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the result value.
     *
     * @return \TKusy\Hl7FhirR4\ObservationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the result value.
     *
     * @param \TKusy\Hl7FhirR4\ObservationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ObservationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the general type of observation being made.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A code that classifies the general type of observation being made.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A code that classifies the general type of observation being made.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A code that classifies the general type of observation being made.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code that classifies the general type of observation being made.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * Describes what was observed. Sometimes this is called the observation "name".
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
     * Describes what was observed. Sometimes this is called the observation "name".
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
     * Gets as subject
     *
     * The patient, or group of patients, location, or device this observation is about and into whose record the observation is placed. If the actual focus of the observation is different from the subject (or a sample of, part, or region of the subject), the `focus` element or the `code` itself specifies the actual focus of the observation.
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
     * The patient, or group of patients, location, or device this observation is about and into whose record the observation is placed. If the actual focus of the observation is different from the subject (or a sample of, part, or region of the subject), the `focus` element or the `code` itself specifies the actual focus of the observation.
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
     * Adds as focus
     *
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7FhirR4\ReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocus($index)
    {
        return isset($this->focus[$index]);
    }

    /**
     * unset focus
     *
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocus($index)
    {
        unset($this->focus[$index]);
    }

    /**
     * Gets as focus
     *
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The actual focus of an observation when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, fetus, or donor. For example, fetus observations in a mother's record. The focus of an observation could also be an existing condition, an intervention, the subject's diet, another observation of the subject, or a body structure such as tumor or implanted device. An example use case would be using the Observation resource to capture whether the mother is trained to change her child's tracheostomy tube. In this example, the child is the patient of record and the mother is the focus.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this observation is made.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this observation is made.
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
     * Gets as effectiveDateTime
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * Sets a new effectiveDateTime
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime
     * @return self
     */
    public function setEffectiveDateTime(\TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\TKusy\Hl7FhirR4\PeriodType $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as effectiveTiming
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getEffectiveTiming()
    {
        return $this->effectiveTiming;
    }

    /**
     * Sets a new effectiveTiming
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $effectiveTiming
     * @return self
     */
    public function setEffectiveTiming(\TKusy\Hl7FhirR4\TimingType $effectiveTiming)
    {
        $this->effectiveTiming = $effectiveTiming;
        return $this;
    }

    /**
     * Gets as effectiveInstant
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getEffectiveInstant()
    {
        return $this->effectiveInstant;
    }

    /**
     * Sets a new effectiveInstant
     *
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\InstantType $effectiveInstant
     * @return self
     */
    public function setEffectiveInstant(\TKusy\Hl7FhirR4\InstantType $effectiveInstant)
    {
        $this->effectiveInstant = $effectiveInstant;
        return $this;
    }

    /**
     * Gets as issued
     *
     * The date and time this version of the observation was made available to providers, typically after the results have been reviewed and verified.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Sets a new issued
     *
     * The date and time this version of the observation was made available to providers, typically after the results have been reviewed and verified.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $issued
     * @return self
     */
    public function setIssued(\TKusy\Hl7FhirR4\InstantType $issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Who was responsible for asserting the observed value as "true".
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
     * Who was responsible for asserting the observed value as "true".
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
     * Who was responsible for asserting the observed value as "true".
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
     * Who was responsible for asserting the observed value as "true".
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
     * Who was responsible for asserting the observed value as "true".
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
     * Gets as valueQuantity
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(\TKusy\Hl7FhirR4\QuantityType $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $valueString
     * @return self
     */
    public function setValueString(\TKusy\Hl7FhirR4\StringType $valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(\TKusy\Hl7FhirR4\BooleanType $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(\TKusy\Hl7FhirR4\IntegerType $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $valueRange
     * @return self
     */
    public function setValueRange(\TKusy\Hl7FhirR4\RangeType $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueRatio
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(\TKusy\Hl7FhirR4\RatioType $valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueSampledData
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\SampledDataType
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Sets a new valueSampledData
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\SampledDataType $valueSampledData
     * @return self
     */
    public function setValueSampledData(\TKusy\Hl7FhirR4\SampledDataType $valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimeType
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * Sets a new valueTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimeType $valueTime
     * @return self
     */
    public function setValueTime(\TKusy\Hl7FhirR4\TimeType $valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Gets as valueDateTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(\TKusy\Hl7FhirR4\DateTimeType $valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(\TKusy\Hl7FhirR4\PeriodType $valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Gets as dataAbsentReason
     *
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * Sets a new dataAbsentReason
     *
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason
     * @return self
     */
    public function setDataAbsentReason(\TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason)
    {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Adds as interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $interpretation
     */
    public function addToInterpretation(\TKusy\Hl7FhirR4\CodeableConceptType $interpretation)
    {
        $this->interpretation[] = $interpretation;
        return $this;
    }

    /**
     * isset interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterpretation($index)
    {
        return isset($this->interpretation[$index]);
    }

    /**
     * unset interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterpretation($index)
    {
        unset($this->interpretation[$index]);
    }

    /**
     * Gets as interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * Sets a new interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $interpretation
     * @return self
     */
    public function setInterpretation(array $interpretation)
    {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments about the observation or the results.
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
     * Comments about the observation or the results.
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
     * Comments about the observation or the results.
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
     * Comments about the observation or the results.
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
     * Comments about the observation or the results.
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
     * Gets as bodySite
     *
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     * @return self
     */
    public function setBodySite(\TKusy\Hl7FhirR4\CodeableConceptType $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as method
     *
     * Indicates the mechanism used to perform the observation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * Indicates the mechanism used to perform the observation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as specimen
     *
     * The specimen that was used when this observation was made.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * The specimen that was used when this observation was made.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $specimen
     * @return self
     */
    public function setSpecimen(\TKusy\Hl7FhirR4\ReferenceType $specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Gets as device
     *
     * The device used to generate the observation data.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The device used to generate the observation data.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7FhirR4\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range. Multiple reference ranges are interpreted as an "OR". In other words, to represent two distinct target populations, two `referenceRange` elements would be used.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ObservationReferenceRangeType $referenceRange
     */
    public function addToReferenceRange(\TKusy\Hl7FhirR4\ObservationReferenceRangeType $referenceRange)
    {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * isset referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range. Multiple reference ranges are interpreted as an "OR". In other words, to represent two distinct target populations, two `referenceRange` elements would be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceRange($index)
    {
        return isset($this->referenceRange[$index]);
    }

    /**
     * unset referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range. Multiple reference ranges are interpreted as an "OR". In other words, to represent two distinct target populations, two `referenceRange` elements would be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceRange($index)
    {
        unset($this->referenceRange[$index]);
    }

    /**
     * Gets as referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range. Multiple reference ranges are interpreted as an "OR". In other words, to represent two distinct target populations, two `referenceRange` elements would be used.
     *
     * @return \TKusy\Hl7FhirR4\ObservationReferenceRangeType[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Sets a new referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range. Multiple reference ranges are interpreted as an "OR". In other words, to represent two distinct target populations, two `referenceRange` elements would be used.
     *
     * @param \TKusy\Hl7FhirR4\ObservationReferenceRangeType[] $referenceRange
     * @return self
     */
    public function setReferenceRange(array $referenceRange)
    {
        $this->referenceRange = $referenceRange;
        return $this;
    }

    /**
     * Adds as hasMember
     *
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $hasMember
     */
    public function addToHasMember(\TKusy\Hl7FhirR4\ReferenceType $hasMember)
    {
        $this->hasMember[] = $hasMember;
        return $this;
    }

    /**
     * isset hasMember
     *
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHasMember($index)
    {
        return isset($this->hasMember[$index]);
    }

    /**
     * unset hasMember
     *
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHasMember($index)
    {
        unset($this->hasMember[$index]);
    }

    /**
     * Gets as hasMember
     *
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getHasMember()
    {
        return $this->hasMember;
    }

    /**
     * Sets a new hasMember
     *
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $hasMember
     * @return self
     */
    public function setHasMember(array $hasMember)
    {
        $this->hasMember = $hasMember;
        return $this;
    }

    /**
     * Adds as derivedFrom
     *
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7FhirR4\ReferenceType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
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
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
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
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Adds as component
     *
     * Some observations have multiple component observations. These component observations are expressed as separate code value pairs that share the same attributes. Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ObservationComponentType $component
     */
    public function addToComponent(\TKusy\Hl7FhirR4\ObservationComponentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * Some observations have multiple component observations. These component observations are expressed as separate code value pairs that share the same attributes. Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * Some observations have multiple component observations. These component observations are expressed as separate code value pairs that share the same attributes. Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * Some observations have multiple component observations. These component observations are expressed as separate code value pairs that share the same attributes. Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     *
     * @return \TKusy\Hl7FhirR4\ObservationComponentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * Some observations have multiple component observations. These component observations are expressed as separate code value pairs that share the same attributes. Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     *
     * @param \TKusy\Hl7FhirR4\ObservationComponentType[] $component
     * @return self
     */
    public function setComponent(array $component)
    {
        $this->component = $component;
        return $this;
    }


}

