<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImmunizationType
 *
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Immunization
 */
class ImmunizationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this immunization record.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current status of the immunization event.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationStatusCodesType $status
     */
    private $status = null;

    /**
     * Indicates the reason the immunization event was not performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Vaccine that was administered or was to be administered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $vaccineCode
     */
    private $vaccineCode = null;

    /**
     * The patient who either received or did not receive the immunization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Date vaccine administered or was to be administered. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * Date vaccine administered or was to be administered. (choose any one of occurrence*, but only one)
     *
     * @var string $occurrenceString
     */
    private $occurrenceString = null;

    /**
     * The date the occurrence of the immunization was first captured in the record - potentially significantly after the occurrence of the event.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $recorded
     */
    private $recorded = null;

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     *
     * @var bool $primarySource
     */
    private $primarySource = null;

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $reportOrigin
     */
    private $reportOrigin = null;

    /**
     * The service delivery location where the vaccine administration occurred.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * Name of vaccine manufacturer.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     */
    private $manufacturer = null;

    /**
     * Lot number of the vaccine product.
     *
     * @var string $lotNumber
     */
    private $lotNumber = null;

    /**
     * Date vaccine batch expires.
     *
     * @var \TKusy\Hl7FhirR4\DateType $expirationDate
     */
    private $expirationDate = null;

    /**
     * Body site where vaccine was administered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $site
     */
    private $site = null;

    /**
     * The path by which the vaccine product is taken into the body.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $route
     */
    private $route = null;

    /**
     * The quantity of vaccine product that was administered.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $doseQuantity
     */
    private $doseQuantity = null;

    /**
     * Indicates who performed the immunization event.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationPerformerType[] $performer
     */
    private $performer = null;

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Reasons why the vaccine was administered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     *
     * @var bool $isSubpotent
     */
    private $isSubpotent = null;

    /**
     * Reason why a dose is considered to be subpotent.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $subpotentReason
     */
    private $subpotentReason = null;

    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationEducationType[] $education
     */
    private $education = null;

    /**
     * Indicates a patient's eligibility for a funding program.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $programEligibility
     */
    private $programEligibility = null;

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $fundingSource
     */
    private $fundingSource = null;

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationReactionType[] $reaction
     */
    private $reaction = null;

    /**
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationProtocolAppliedType[] $protocolApplied
     */
    private $protocolApplied = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * Gets as status
     *
     * Indicates the current status of the immunization event.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current status of the immunization event.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ImmunizationStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Indicates the reason the immunization event was not performed.
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
     * Indicates the reason the immunization event was not performed.
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
     * Gets as vaccineCode
     *
     * Vaccine that was administered or was to be administered.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * Sets a new vaccineCode
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $vaccineCode
     * @return self
     */
    public function setVaccineCode(\TKusy\Hl7FhirR4\CodeableConceptType $vaccineCode)
    {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient who either received or did not receive the immunization.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient who either received or did not receive the immunization.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
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
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
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
     * Date vaccine administered or was to be administered. (choose any one of occurrence*, but only one)
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
     * Date vaccine administered or was to be administered. (choose any one of occurrence*, but only one)
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
     * Gets as occurrenceString
     *
     * Date vaccine administered or was to be administered. (choose any one of occurrence*, but only one)
     *
     * @return string
     */
    public function getOccurrenceString()
    {
        return $this->occurrenceString;
    }

    /**
     * Sets a new occurrenceString
     *
     * Date vaccine administered or was to be administered. (choose any one of occurrence*, but only one)
     *
     * @param string $occurrenceString
     * @return self
     */
    public function setOccurrenceString($occurrenceString)
    {
        $this->occurrenceString = $occurrenceString;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The date the occurrence of the immunization was first captured in the record - potentially significantly after the occurrence of the event.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * Sets a new recorded
     *
     * The date the occurrence of the immunization was first captured in the record - potentially significantly after the occurrence of the event.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $recorded
     * @return self
     */
    public function setRecorded(\TKusy\Hl7FhirR4\DateTimeType $recorded)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Gets as primarySource
     *
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     *
     * @return bool
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Sets a new primarySource
     *
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     *
     * @param bool $primarySource
     * @return self
     */
    public function setPrimarySource($primarySource)
    {
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * Gets as reportOrigin
     *
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getReportOrigin()
    {
        return $this->reportOrigin;
    }

    /**
     * Sets a new reportOrigin
     *
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reportOrigin
     * @return self
     */
    public function setReportOrigin(\TKusy\Hl7FhirR4\CodeableConceptType $reportOrigin)
    {
        $this->reportOrigin = $reportOrigin;
        return $this;
    }

    /**
     * Gets as location
     *
     * The service delivery location where the vaccine administration occurred.
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
     * The service delivery location where the vaccine administration occurred.
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
     * Gets as manufacturer
     *
     * Name of vaccine manufacturer.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Name of vaccine manufacturer.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     * @return self
     */
    public function setManufacturer(\TKusy\Hl7FhirR4\ReferenceType $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * Lot number of the vaccine product.
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * Lot number of the vaccine product.
     *
     * @param string $lotNumber
     * @return self
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * Date vaccine batch expires.
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * Date vaccine batch expires.
     *
     * @param \TKusy\Hl7FhirR4\DateType $expirationDate
     * @return self
     */
    public function setExpirationDate(\TKusy\Hl7FhirR4\DateType $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as site
     *
     * Body site where vaccine was administered.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Body site where vaccine was administered.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $site
     * @return self
     */
    public function setSite(\TKusy\Hl7FhirR4\CodeableConceptType $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as route
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $route
     * @return self
     */
    public function setRoute(\TKusy\Hl7FhirR4\CodeableConceptType $route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as doseQuantity
     *
     * The quantity of vaccine product that was administered.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * Sets a new doseQuantity
     *
     * The quantity of vaccine product that was administered.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $doseQuantity
     * @return self
     */
    public function setDoseQuantity(\TKusy\Hl7FhirR4\QuantityType $doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Indicates who performed the immunization event.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImmunizationPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\ImmunizationPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who performed the immunization event.
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
     * Indicates who performed the immunization event.
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
     * Indicates who performed the immunization event.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who performed the immunization event.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as note
     *
     * Extra information about the immunization that is not conveyed by the other attributes.
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
     * Extra information about the immunization that is not conveyed by the other attributes.
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
     * Extra information about the immunization that is not conveyed by the other attributes.
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
     * Extra information about the immunization that is not conveyed by the other attributes.
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
     * Extra information about the immunization that is not conveyed by the other attributes.
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
     * Adds as reasonCode
     *
     * Reasons why the vaccine was administered.
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
     * Reasons why the vaccine was administered.
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
     * Reasons why the vaccine was administered.
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
     * Reasons why the vaccine was administered.
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
     * Reasons why the vaccine was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
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
     * Gets as isSubpotent
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     *
     * @return bool
     */
    public function getIsSubpotent()
    {
        return $this->isSubpotent;
    }

    /**
     * Sets a new isSubpotent
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     *
     * @param bool $isSubpotent
     * @return self
     */
    public function setIsSubpotent($isSubpotent)
    {
        $this->isSubpotent = $isSubpotent;
        return $this;
    }

    /**
     * Adds as subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subpotentReason
     */
    public function addToSubpotentReason(\TKusy\Hl7FhirR4\CodeableConceptType $subpotentReason)
    {
        $this->subpotentReason[] = $subpotentReason;
        return $this;
    }

    /**
     * isset subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubpotentReason($index)
    {
        return isset($this->subpotentReason[$index]);
    }

    /**
     * unset subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubpotentReason($index)
    {
        unset($this->subpotentReason[$index]);
    }

    /**
     * Gets as subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSubpotentReason()
    {
        return $this->subpotentReason;
    }

    /**
     * Sets a new subpotentReason
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $subpotentReason
     * @return self
     */
    public function setSubpotentReason(array $subpotentReason)
    {
        $this->subpotentReason = $subpotentReason;
        return $this;
    }

    /**
     * Adds as education
     *
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImmunizationEducationType $education
     */
    public function addToEducation(\TKusy\Hl7FhirR4\ImmunizationEducationType $education)
    {
        $this->education[] = $education;
        return $this;
    }

    /**
     * isset education
     *
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEducation($index)
    {
        return isset($this->education[$index]);
    }

    /**
     * unset education
     *
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEducation($index)
    {
        unset($this->education[$index]);
    }

    /**
     * Gets as education
     *
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationEducationType[]
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Sets a new education
     *
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationEducationType[] $education
     * @return self
     */
    public function setEducation(array $education)
    {
        $this->education = $education;
        return $this;
    }

    /**
     * Adds as programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $programEligibility
     */
    public function addToProgramEligibility(\TKusy\Hl7FhirR4\CodeableConceptType $programEligibility)
    {
        $this->programEligibility[] = $programEligibility;
        return $this;
    }

    /**
     * isset programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgramEligibility($index)
    {
        return isset($this->programEligibility[$index]);
    }

    /**
     * unset programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgramEligibility($index)
    {
        unset($this->programEligibility[$index]);
    }

    /**
     * Gets as programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProgramEligibility()
    {
        return $this->programEligibility;
    }

    /**
     * Sets a new programEligibility
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $programEligibility
     * @return self
     */
    public function setProgramEligibility(array $programEligibility)
    {
        $this->programEligibility = $programEligibility;
        return $this;
    }

    /**
     * Gets as fundingSource
     *
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFundingSource()
    {
        return $this->fundingSource;
    }

    /**
     * Sets a new fundingSource
     *
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $fundingSource
     * @return self
     */
    public function setFundingSource(\TKusy\Hl7FhirR4\CodeableConceptType $fundingSource)
    {
        $this->fundingSource = $fundingSource;
        return $this;
    }

    /**
     * Adds as reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImmunizationReactionType $reaction
     */
    public function addToReaction(\TKusy\Hl7FhirR4\ImmunizationReactionType $reaction)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * isset reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReaction($index)
    {
        return isset($this->reaction[$index]);
    }

    /**
     * unset reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReaction($index)
    {
        unset($this->reaction[$index]);
    }

    /**
     * Gets as reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationReactionType[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Sets a new reaction
     *
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationReactionType[] $reaction
     * @return self
     */
    public function setReaction(array $reaction)
    {
        $this->reaction = $reaction;
        return $this;
    }

    /**
     * Adds as protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImmunizationProtocolAppliedType $protocolApplied
     */
    public function addToProtocolApplied(\TKusy\Hl7FhirR4\ImmunizationProtocolAppliedType $protocolApplied)
    {
        $this->protocolApplied[] = $protocolApplied;
        return $this;
    }

    /**
     * isset protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProtocolApplied($index)
    {
        return isset($this->protocolApplied[$index]);
    }

    /**
     * unset protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProtocolApplied($index)
    {
        unset($this->protocolApplied[$index]);
    }

    /**
     * Gets as protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationProtocolAppliedType[]
     */
    public function getProtocolApplied()
    {
        return $this->protocolApplied;
    }

    /**
     * Sets a new protocolApplied
     *
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationProtocolAppliedType[] $protocolApplied
     * @return self
     */
    public function setProtocolApplied(array $protocolApplied)
    {
        $this->protocolApplied = $protocolApplied;
        return $this;
    }


}

