<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EncounterType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient. Encounter is primarily used to record information about the actual activities that occurred, where Appointment is used to record planned activities.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Encounter
 */
class EncounterType extends DomainResourceType
{

    /**
     * Identifier(s) by which this encounter is known.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the encounter (not the state of the patient within the encounter - that is subjectState).
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterStatusType $status
     */
    private $status = null;

    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $class
     */
    private $class = null;

    /**
     * Indicates the urgency of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $serviceType
     */
    private $serviceType = null;

    /**
     * The patient or group related to this encounter. In some use-cases the patient MAY not be present, such as a case meeting about a patient between several practitioners or a careteam.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The subjectStatus value can be used to track the patient's status within the encounter. It details whether the patient has arrived or departed, has been triaged or is currently in a waiting status.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectStatus
     */
    private $subjectStatus = null;

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $episodeOfCare
     */
    private $episodeOfCare = null;

    /**
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The group(s) of individuals, organizations that are allocated to participate in this encounter. The participants backbone will record the actuals of when these individuals participated during the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $careTeam
     */
    private $careTeam = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation. Refer to the colonoscopy example on the Encounter examples tab.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $serviceProvider
     */
    private $serviceProvider = null;

    /**
     * The list of people responsible for providing the service.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterParticipantType[] $participant
     */
    private $participant = null;

    /**
     * The appointment that scheduled this encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $appointment
     */
    private $appointment = null;

    /**
     * Connection details of a virtual service (e.g. conference call).
     *
     * @var \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[] $virtualService
     */
    private $virtualService = null;

    /**
     * The actual start and end time of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $actualPeriod
     */
    private $actualPeriod = null;

    /**
     * The planned start date/time (or admission date) of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $plannedStartDate
     */
    private $plannedStartDate = null;

    /**
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $plannedEndDate
     */
    private $plannedEndDate = null;

    /**
     * Actual quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * When missing it is the time in between the start and end values.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $length
     */
    private $length = null;

    /**
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterReasonType[] $reason
     */
    private $reason = null;

    /**
     * The list of diagnosis relevant to this encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     */
    private $account = null;

    /**
     * Diet preferences reported by the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $dietPreference
     */
    private $dietPreference = null;

    /**
     * Any special requests that have been made for this encounter, such as the provision of specific equipment or other things.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialArrangement
     */
    private $specialArrangement = null;

    /**
     * Special courtesies that may be provided to the patient during the encounter (VIP, board member, professional courtesy).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialCourtesy
     */
    private $specialCourtesy = null;

    /**
     * Details about the stay during which a healthcare service is provided.
     *
     * This does not describe the event of admitting the patient, but rather any information that is relevant from the time of admittance until the time of discharge.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterAdmissionType $admission
     */
    private $admission = null;

    /**
     * List of locations where the patient has been during this encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterLocationType[] $location
     */
    private $location = null;

    /**
     * Adds as identifier
     *
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Gets as status
     *
     * The current state of the encounter (not the state of the patient within the encounter - that is subjectState).
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the encounter (not the state of the patient within the encounter - that is subjectState).
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EncounterStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     */
    public function addToClass(\TKusy\Hl7Fhir\R5\CodeableConceptType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $class
     * @return self
     */
    public function setClass(array $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates the urgency of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates the urgency of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\CodeableConceptType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Adds as type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $serviceType
     */
    public function addToServiceType(\TKusy\Hl7Fhir\R5\CodeableReferenceType $serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType = null)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient or group related to this encounter. In some use-cases the patient MAY not be present, such as a case meeting about a patient between several practitioners or a careteam.
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
     * The patient or group related to this encounter. In some use-cases the patient MAY not be present, such as a case meeting about a patient between several practitioners or a careteam.
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
     * Gets as subjectStatus
     *
     * The subjectStatus value can be used to track the patient's status within the encounter. It details whether the patient has arrived or departed, has been triaged or is currently in a waiting status.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectStatus()
    {
        return $this->subjectStatus;
    }

    /**
     * Sets a new subjectStatus
     *
     * The subjectStatus value can be used to track the patient's status within the encounter. It details whether the patient has arrived or departed, has been triaged or is currently in a waiting status.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectStatus
     * @return self
     */
    public function setSubjectStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectStatus = null)
    {
        $this->subjectStatus = $subjectStatus;
        return $this;
    }

    /**
     * Adds as episodeOfCare
     *
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $episodeOfCare
     */
    public function addToEpisodeOfCare(\TKusy\Hl7Fhir\R5\ReferenceType $episodeOfCare)
    {
        $this->episodeOfCare[] = $episodeOfCare;
        return $this;
    }

    /**
     * isset episodeOfCare
     *
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEpisodeOfCare($index)
    {
        return isset($this->episodeOfCare[$index]);
    }

    /**
     * unset episodeOfCare
     *
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEpisodeOfCare($index)
    {
        unset($this->episodeOfCare[$index]);
    }

    /**
     * Gets as episodeOfCare
     *
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }

    /**
     * Sets a new episodeOfCare
     *
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $episodeOfCare
     * @return self
     */
    public function setEpisodeOfCare(array $episodeOfCare = null)
    {
        $this->episodeOfCare = $episodeOfCare;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
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
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
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
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
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
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
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
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
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
     * Adds as careTeam
     *
     * The group(s) of individuals, organizations that are allocated to participate in this encounter. The participants backbone will record the actuals of when these individuals participated during the encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7Fhir\R5\ReferenceType $careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * isset careTeam
     *
     * The group(s) of individuals, organizations that are allocated to participate in this encounter. The participants backbone will record the actuals of when these individuals participated during the encounter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCareTeam($index)
    {
        return isset($this->careTeam[$index]);
    }

    /**
     * unset careTeam
     *
     * The group(s) of individuals, organizations that are allocated to participate in this encounter. The participants backbone will record the actuals of when these individuals participated during the encounter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCareTeam($index)
    {
        unset($this->careTeam[$index]);
    }

    /**
     * Gets as careTeam
     *
     * The group(s) of individuals, organizations that are allocated to participate in this encounter. The participants backbone will record the actuals of when these individuals participated during the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * Sets a new careTeam
     *
     * The group(s) of individuals, organizations that are allocated to participate in this encounter. The participants backbone will record the actuals of when these individuals participated during the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $careTeam
     * @return self
     */
    public function setCareTeam(array $careTeam = null)
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * Another Encounter of which this encounter is a part of (administratively or in time).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * Another Encounter of which this encounter is a part of (administratively or in time).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(?\TKusy\Hl7Fhir\R5\ReferenceType $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as serviceProvider
     *
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation. Refer to the colonoscopy example on the Encounter examples tab.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation. Refer to the colonoscopy example on the Encounter examples tab.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $serviceProvider
     * @return self
     */
    public function setServiceProvider(?\TKusy\Hl7Fhir\R5\ReferenceType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Adds as participant
     *
     * The list of people responsible for providing the service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EncounterParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\EncounterParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * The list of people responsible for providing the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * The list of people responsible for providing the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * The list of people responsible for providing the service.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * The list of people responsible for providing the service.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Adds as appointment
     *
     * The appointment that scheduled this encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $appointment
     */
    public function addToAppointment(\TKusy\Hl7Fhir\R5\ReferenceType $appointment)
    {
        $this->appointment[] = $appointment;
        return $this;
    }

    /**
     * isset appointment
     *
     * The appointment that scheduled this encounter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAppointment($index)
    {
        return isset($this->appointment[$index]);
    }

    /**
     * unset appointment
     *
     * The appointment that scheduled this encounter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAppointment($index)
    {
        unset($this->appointment[$index]);
    }

    /**
     * Gets as appointment
     *
     * The appointment that scheduled this encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Sets a new appointment
     *
     * The appointment that scheduled this encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $appointment
     * @return self
     */
    public function setAppointment(array $appointment = null)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Adds as virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\VirtualServiceDetailType $virtualService
     */
    public function addToVirtualService(\TKusy\Hl7Fhir\R5\VirtualServiceDetailType $virtualService)
    {
        $this->virtualService[] = $virtualService;
        return $this;
    }

    /**
     * isset virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVirtualService($index)
    {
        return isset($this->virtualService[$index]);
    }

    /**
     * unset virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVirtualService($index)
    {
        unset($this->virtualService[$index]);
    }

    /**
     * Gets as virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @return \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[]
     */
    public function getVirtualService()
    {
        return $this->virtualService;
    }

    /**
     * Sets a new virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[] $virtualService
     * @return self
     */
    public function setVirtualService(array $virtualService = null)
    {
        $this->virtualService = $virtualService;
        return $this;
    }

    /**
     * Gets as actualPeriod
     *
     * The actual start and end time of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getActualPeriod()
    {
        return $this->actualPeriod;
    }

    /**
     * Sets a new actualPeriod
     *
     * The actual start and end time of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $actualPeriod
     * @return self
     */
    public function setActualPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $actualPeriod = null)
    {
        $this->actualPeriod = $actualPeriod;
        return $this;
    }

    /**
     * Gets as plannedStartDate
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPlannedStartDate()
    {
        return $this->plannedStartDate;
    }

    /**
     * Sets a new plannedStartDate
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $plannedStartDate
     * @return self
     */
    public function setPlannedStartDate(?\TKusy\Hl7Fhir\R5\DateTimeType $plannedStartDate = null)
    {
        $this->plannedStartDate = $plannedStartDate;
        return $this;
    }

    /**
     * Gets as plannedEndDate
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPlannedEndDate()
    {
        return $this->plannedEndDate;
    }

    /**
     * Sets a new plannedEndDate
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $plannedEndDate
     * @return self
     */
    public function setPlannedEndDate(?\TKusy\Hl7Fhir\R5\DateTimeType $plannedEndDate = null)
    {
        $this->plannedEndDate = $plannedEndDate;
        return $this;
    }

    /**
     * Gets as length
     *
     * Actual quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * When missing it is the time in between the start and end values.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Actual quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * When missing it is the time in between the start and end values.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $length
     * @return self
     */
    public function setLength(?\TKusy\Hl7Fhir\R5\DurationType $length = null)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EncounterReasonType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\EncounterReasonType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The list of medical reasons that are expected to be addressed during the episode of care.
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
     * The list of medical reasons that are expected to be addressed during the episode of care.
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
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterReasonType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterReasonType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EncounterDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R5\EncounterDiagnosisType $diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * isset diagnosis
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiagnosis($index)
    {
        return isset($this->diagnosis[$index]);
    }

    /**
     * unset diagnosis
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiagnosis($index)
    {
        unset($this->diagnosis[$index]);
    }

    /**
     * Gets as diagnosis
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterDiagnosisType[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Sets a new diagnosis
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis = null)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * Adds as account
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R5\ReferenceType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Adds as dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $dietPreference
     */
    public function addToDietPreference(\TKusy\Hl7Fhir\R5\CodeableConceptType $dietPreference)
    {
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * isset dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDietPreference($index)
    {
        return isset($this->dietPreference[$index]);
    }

    /**
     * unset dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDietPreference($index)
    {
        unset($this->dietPreference[$index]);
    }

    /**
     * Gets as dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getDietPreference()
    {
        return $this->dietPreference;
    }

    /**
     * Sets a new dietPreference
     *
     * Diet preferences reported by the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $dietPreference
     * @return self
     */
    public function setDietPreference(array $dietPreference = null)
    {
        $this->dietPreference = $dietPreference;
        return $this;
    }

    /**
     * Adds as specialArrangement
     *
     * Any special requests that have been made for this encounter, such as the provision of specific equipment or other things.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialArrangement
     */
    public function addToSpecialArrangement(\TKusy\Hl7Fhir\R5\CodeableConceptType $specialArrangement)
    {
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * isset specialArrangement
     *
     * Any special requests that have been made for this encounter, such as the provision of specific equipment or other things.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialArrangement($index)
    {
        return isset($this->specialArrangement[$index]);
    }

    /**
     * unset specialArrangement
     *
     * Any special requests that have been made for this encounter, such as the provision of specific equipment or other things.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialArrangement($index)
    {
        unset($this->specialArrangement[$index]);
    }

    /**
     * Gets as specialArrangement
     *
     * Any special requests that have been made for this encounter, such as the provision of specific equipment or other things.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }

    /**
     * Sets a new specialArrangement
     *
     * Any special requests that have been made for this encounter, such as the provision of specific equipment or other things.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialArrangement
     * @return self
     */
    public function setSpecialArrangement(array $specialArrangement = null)
    {
        $this->specialArrangement = $specialArrangement;
        return $this;
    }

    /**
     * Adds as specialCourtesy
     *
     * Special courtesies that may be provided to the patient during the encounter (VIP, board member, professional courtesy).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialCourtesy
     */
    public function addToSpecialCourtesy(\TKusy\Hl7Fhir\R5\CodeableConceptType $specialCourtesy)
    {
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * isset specialCourtesy
     *
     * Special courtesies that may be provided to the patient during the encounter (VIP, board member, professional courtesy).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialCourtesy($index)
    {
        return isset($this->specialCourtesy[$index]);
    }

    /**
     * unset specialCourtesy
     *
     * Special courtesies that may be provided to the patient during the encounter (VIP, board member, professional courtesy).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialCourtesy($index)
    {
        unset($this->specialCourtesy[$index]);
    }

    /**
     * Gets as specialCourtesy
     *
     * Special courtesies that may be provided to the patient during the encounter (VIP, board member, professional courtesy).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
    }

    /**
     * Sets a new specialCourtesy
     *
     * Special courtesies that may be provided to the patient during the encounter (VIP, board member, professional courtesy).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialCourtesy
     * @return self
     */
    public function setSpecialCourtesy(array $specialCourtesy = null)
    {
        $this->specialCourtesy = $specialCourtesy;
        return $this;
    }

    /**
     * Gets as admission
     *
     * Details about the stay during which a healthcare service is provided.
     *
     * This does not describe the event of admitting the patient, but rather any information that is relevant from the time of admittance until the time of discharge.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterAdmissionType
     */
    public function getAdmission()
    {
        return $this->admission;
    }

    /**
     * Sets a new admission
     *
     * Details about the stay during which a healthcare service is provided.
     *
     * This does not describe the event of admitting the patient, but rather any information that is relevant from the time of admittance until the time of discharge.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterAdmissionType $admission
     * @return self
     */
    public function setAdmission(?\TKusy\Hl7Fhir\R5\EncounterAdmissionType $admission = null)
    {
        $this->admission = $admission;
        return $this;
    }

    /**
     * Adds as location
     *
     * List of locations where the patient has been during this encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EncounterLocationType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R5\EncounterLocationType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * List of locations where the patient has been during this encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterLocationType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * List of locations where the patient has been during this encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterLocationType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }


}

