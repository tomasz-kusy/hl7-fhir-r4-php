<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CareTeamType
 *
 * The Care Team includes all the people and organizations who plan to participate in the coordination and delivery of care for a patient.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CareTeam
 */
class CareTeamType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current state of the care team.
     *
     * @var \TKusy\Hl7Fhir\R4\CareTeamStatusType $status
     */
    private $status = null;

    /**
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A label for human use intended to distinguish like teams. E.g. the "red" vs. "green" trauma teams.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * Identifies the patient or group whose intended care is handled by the team.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this CareTeam was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates when the team did (or is intended to) come into effect and end.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Identifies all people and organizations who are expected to be involved in the care team.
     *
     * @var \TKusy\Hl7Fhir\R4\CareTeamParticipantType[] $participant
     */
    private $participant = null;

    /**
     * Describes why the care team exists.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Condition(s) that this care team addresses.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * The organization responsible for the care team.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * A central contact detail for the care team (that applies to all members).
     *
     * @var \TKusy\Hl7Fhir\R4\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Comments made about the CareTeam.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Indicates the current state of the care team.
     *
     * @return \TKusy\Hl7Fhir\R4\CareTeamStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current state of the care team.
     *
     * @param \TKusy\Hl7Fhir\R4\CareTeamStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\CareTeamStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
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
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
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
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as name
     *
     * A label for human use intended to distinguish like teams. E.g. the "red" vs. "green" trauma teams.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A label for human use intended to distinguish like teams. E.g. the "red" vs. "green" trauma teams.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Identifies the patient or group whose intended care is handled by the team.
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
     * Identifies the patient or group whose intended care is handled by the team.
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
     * Gets as encounter
     *
     * The Encounter during which this CareTeam was created or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter during which this CareTeam was created or to which the creation of this record is tightly associated.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7Fhir\R4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as period
     *
     * Indicates when the team did (or is intended to) come into effect and end.
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
     * Indicates when the team did (or is intended to) come into effect and end.
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
     * Adds as participant
     *
     * Identifies all people and organizations who are expected to be involved in the care team.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CareTeamParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R4\CareTeamParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Identifies all people and organizations who are expected to be involved in the care team.
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
     * Identifies all people and organizations who are expected to be involved in the care team.
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
     * Identifies all people and organizations who are expected to be involved in the care team.
     *
     * @return \TKusy\Hl7Fhir\R4\CareTeamParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Identifies all people and organizations who are expected to be involved in the care team.
     *
     * @param \TKusy\Hl7Fhir\R4\CareTeamParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Condition(s) that this care team addresses.
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
     * Condition(s) that this care team addresses.
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
     * Condition(s) that this care team addresses.
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
     * Condition(s) that this care team addresses.
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
     * Condition(s) that this care team addresses.
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
     * Adds as managingOrganization
     *
     * The organization responsible for the care team.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $managingOrganization
     */
    public function addToManagingOrganization(\TKusy\Hl7Fhir\R4\ReferenceType $managingOrganization)
    {
        $this->managingOrganization[] = $managingOrganization;
        return $this;
    }

    /**
     * isset managingOrganization
     *
     * The organization responsible for the care team.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManagingOrganization($index)
    {
        return isset($this->managingOrganization[$index]);
    }

    /**
     * unset managingOrganization
     *
     * The organization responsible for the care team.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManagingOrganization($index)
    {
        unset($this->managingOrganization[$index]);
    }

    /**
     * Gets as managingOrganization
     *
     * The organization responsible for the care team.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * The organization responsible for the care team.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $managingOrganization
     * @return self
     */
    public function setManagingOrganization(array $managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * A central contact detail for the care team (that applies to all members).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7Fhir\R4\ContactPointType $telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * isset telecom
     *
     * A central contact detail for the care team (that applies to all members).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecom($index)
    {
        return isset($this->telecom[$index]);
    }

    /**
     * unset telecom
     *
     * A central contact detail for the care team (that applies to all members).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecom($index)
    {
        unset($this->telecom[$index]);
    }

    /**
     * Gets as telecom
     *
     * A central contact detail for the care team (that applies to all members).
     *
     * @return \TKusy\Hl7Fhir\R4\ContactPointType[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Sets a new telecom
     *
     * A central contact detail for the care team (that applies to all members).
     *
     * @param \TKusy\Hl7Fhir\R4\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the CareTeam.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments made about the CareTeam.
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
     * Comments made about the CareTeam.
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
     * Comments made about the CareTeam.
     *
     * @return \TKusy\Hl7Fhir\R4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments made about the CareTeam.
     *
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

