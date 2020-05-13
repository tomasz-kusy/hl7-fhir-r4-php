<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EncounterType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Encounter
 */
class EncounterType extends DomainResourceType
{

    /**
     * Identifier(s) by which this encounter is known.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterStatusType $status
     */
    private $status = null;

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterStatusHistoryType[] $statusHistory
     */
    private $statusHistory = null;

    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $class
     */
    private $class = null;

    /**
     * The class history permits the tracking of the encounters transitions without needing to go through the resource history. This would be used for a case where an admission starts of as an emergency encounter, then transitions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kind of discharge from emergency to inpatient.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterClassHistoryType[] $classHistory
     */
    private $classHistory = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $serviceType
     */
    private $serviceType = null;

    /**
     * Indicates the urgency of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * The patient or group present at the encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $episodeOfCare
     */
    private $episodeOfCare = null;

    /**
     * The request this encounter satisfies (e.g. incoming referral or procedure request).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The list of people responsible for providing the service.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterParticipantType[] $participant
     */
    private $participant = null;

    /**
     * The appointment that scheduled this encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $appointment
     */
    private $appointment = null;

    /**
     * The start and end time of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * @var \TKusy\Hl7Fhir\R4\DurationType $length
     */
    private $length = null;

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * The list of diagnosis relevant to this encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * The set of accounts that may be used for billing for this Encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $account
     */
    private $account = null;

    /**
     * Details about the admission to a healthcare service.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterHospitalizationType $hospitalization
     */
    private $hospitalization = null;

    /**
     * List of locations where the patient has been during this encounter.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterLocationType[] $location
     */
    private $location = null;

    /**
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation. Refer to the example bundle showing an abbreviated set of Encounters for a colonoscopy.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $serviceProvider
     */
    private $serviceProvider = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * Adds as identifier
     *
     * Identifier(s) by which this encounter is known.
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
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
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @return \TKusy\Hl7Fhir\R4\EncounterStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @param \TKusy\Hl7Fhir\R4\EncounterStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\EncounterStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as statusHistory
     *
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EncounterStatusHistoryType $statusHistory
     */
    public function addToStatusHistory(\TKusy\Hl7Fhir\R4\EncounterStatusHistoryType $statusHistory)
    {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * isset statusHistory
     *
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusHistory($index)
    {
        return isset($this->statusHistory[$index]);
    }

    /**
     * unset statusHistory
     *
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusHistory($index)
    {
        unset($this->statusHistory[$index]);
    }

    /**
     * Gets as statusHistory
     *
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     *
     * @return \TKusy\Hl7Fhir\R4\EncounterStatusHistoryType[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * Sets a new statusHistory
     *
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     *
     * @param \TKusy\Hl7Fhir\R4\EncounterStatusHistoryType[] $statusHistory
     * @return self
     */
    public function setStatusHistory(array $statusHistory)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }

    /**
     * Gets as class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
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
     * @param \TKusy\Hl7Fhir\R4\CodingType $class
     * @return self
     */
    public function setClass(\TKusy\Hl7Fhir\R4\CodingType $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as classHistory
     *
     * The class history permits the tracking of the encounters transitions without needing to go through the resource history. This would be used for a case where an admission starts of as an emergency encounter, then transitions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kind of discharge from emergency to inpatient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EncounterClassHistoryType $classHistory
     */
    public function addToClassHistory(\TKusy\Hl7Fhir\R4\EncounterClassHistoryType $classHistory)
    {
        $this->classHistory[] = $classHistory;
        return $this;
    }

    /**
     * isset classHistory
     *
     * The class history permits the tracking of the encounters transitions without needing to go through the resource history. This would be used for a case where an admission starts of as an emergency encounter, then transitions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kind of discharge from emergency to inpatient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassHistory($index)
    {
        return isset($this->classHistory[$index]);
    }

    /**
     * unset classHistory
     *
     * The class history permits the tracking of the encounters transitions without needing to go through the resource history. This would be used for a case where an admission starts of as an emergency encounter, then transitions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kind of discharge from emergency to inpatient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassHistory($index)
    {
        unset($this->classHistory[$index]);
    }

    /**
     * Gets as classHistory
     *
     * The class history permits the tracking of the encounters transitions without needing to go through the resource history. This would be used for a case where an admission starts of as an emergency encounter, then transitions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kind of discharge from emergency to inpatient.
     *
     * @return \TKusy\Hl7Fhir\R4\EncounterClassHistoryType[]
     */
    public function getClassHistory()
    {
        return $this->classHistory;
    }

    /**
     * Sets a new classHistory
     *
     * The class history permits the tracking of the encounters transitions without needing to go through the resource history. This would be used for a case where an admission starts of as an emergency encounter, then transitions into an inpatient scenario. Doing this and not restarting a new encounter ensures that any lab/diagnostic results can more easily follow the patient and not require re-processing and not get lost or cancelled during a kind of discharge from emergency to inpatient.
     *
     * @param \TKusy\Hl7Fhir\R4\EncounterClassHistoryType[] $classHistory
     * @return self
     */
    public function setClassHistory(array $classHistory)
    {
        $this->classHistory = $classHistory;
        return $this;
    }

    /**
     * Adds as type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $serviceType
     * @return self
     */
    public function setServiceType(\TKusy\Hl7Fhir\R4\CodeableConceptType $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates the urgency of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7Fhir\R4\CodeableConceptType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient or group present at the encounter.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The patient or group present at the encounter.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Adds as episodeOfCare
     *
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem. The association is recorded on the encounter as these are typically created after the episode of care and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $episodeOfCare
     */
    public function addToEpisodeOfCare(\TKusy\Hl7Fhir\R4\ReferenceType $episodeOfCare)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $episodeOfCare
     * @return self
     */
    public function setEpisodeOfCare(array $episodeOfCare)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R4\ReferenceType $basedOn)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Adds as participant
     *
     * The list of people responsible for providing the service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EncounterParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R4\EncounterParticipantType $participant)
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
     * @return \TKusy\Hl7Fhir\R4\EncounterParticipantType[]
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
     * @param \TKusy\Hl7Fhir\R4\EncounterParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $appointment
     */
    public function addToAppointment(\TKusy\Hl7Fhir\R4\ReferenceType $appointment)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $appointment
     * @return self
     */
    public function setAppointment(array $appointment)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Gets as period
     *
     * The start and end time of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The start and end time of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as length
     *
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * @return \TKusy\Hl7Fhir\R4\DurationType
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * @param \TKusy\Hl7Fhir\R4\DurationType $length
     * @return self
     */
    public function setLength(\TKusy\Hl7Fhir\R4\DurationType $length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
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
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
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
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
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
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7Fhir\R4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
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
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
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
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * The list of diagnosis relevant to this encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EncounterDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R4\EncounterDiagnosisType $diagnosis)
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
     * @return \TKusy\Hl7Fhir\R4\EncounterDiagnosisType[]
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
     * @param \TKusy\Hl7Fhir\R4\EncounterDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R4\ReferenceType $account)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as hospitalization
     *
     * Details about the admission to a healthcare service.
     *
     * @return \TKusy\Hl7Fhir\R4\EncounterHospitalizationType
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * Sets a new hospitalization
     *
     * Details about the admission to a healthcare service.
     *
     * @param \TKusy\Hl7Fhir\R4\EncounterHospitalizationType $hospitalization
     * @return self
     */
    public function setHospitalization(\TKusy\Hl7Fhir\R4\EncounterHospitalizationType $hospitalization)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * Adds as location
     *
     * List of locations where the patient has been during this encounter.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EncounterLocationType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R4\EncounterLocationType $location)
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
     * @return \TKusy\Hl7Fhir\R4\EncounterLocationType[]
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
     * @param \TKusy\Hl7Fhir\R4\EncounterLocationType[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as serviceProvider
     *
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation. Refer to the example bundle showing an abbreviated set of Encounters for a colonoscopy.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * The organization that is primarily responsible for this Encounter's services. This MAY be the same as the organization on the Patient record, however it could be different, such as if the actor performing the services was from an external organization (which may be billed seperately) for an external consultation. Refer to the example bundle showing an abbreviated set of Encounters for a colonoscopy.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $serviceProvider
     * @return self
     */
    public function setServiceProvider(\TKusy\Hl7Fhir\R4\ReferenceType $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * Another Encounter of which this encounter is a part of (administratively or in time).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(\TKusy\Hl7Fhir\R4\ReferenceType $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }


}

