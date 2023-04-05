<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CareTeamType
 *
 * The Care Team includes all the people and organizations who plan to participate in the coordination and delivery of care.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CareTeam
 */
class CareTeamType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current state of the care team.
     *
     * @var \TKusy\Hl7Fhir\R5\CareTeamStatusType $status
     */
    private $status = null;

    /**
     * Identifies what kind of team. This is to support differentiation between multiple co-existing teams, such as care plan team, episode of care team, longitudinal care team.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A label for human use intended to distinguish like teams. E.g. the "red" vs. "green" trauma teams.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Identifies the patient or group whose intended care is handled by the team.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Indicates when the team did (or is intended to) come into effect and end.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Identifies all people and organizations who are expected to be involved in the care team.
     *
     * @var \TKusy\Hl7Fhir\R5\CareTeamParticipantType[] $participant
     */
    private $participant = null;

    /**
     * Describes why the care team exists.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * The organization responsible for the care team.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * A central contact detail for the care team (that applies to all members).
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Comments made about the CareTeam.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this care team by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * Indicates the current state of the care team.
     *
     * @return \TKusy\Hl7Fhir\R5\CareTeamStatusType
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
     * @param \TKusy\Hl7Fhir\R5\CareTeamStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CareTeamStatusType $status = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as name
     *
     * A label for human use intended to distinguish like teams. E.g. the "red" vs. "green" trauma teams.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Identifies the patient or group whose intended care is handled by the team.
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
     * Identifies the patient or group whose intended care is handled by the team.
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
     * Gets as period
     *
     * Indicates when the team did (or is intended to) come into effect and end.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
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
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
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
     * @param \TKusy\Hl7Fhir\R5\CareTeamParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\CareTeamParticipantType $participant)
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
     * @return \TKusy\Hl7Fhir\R5\CareTeamParticipantType[]
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
     * @param \TKusy\Hl7Fhir\R5\CareTeamParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Describes why the care team exists.
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
     * Adds as managingOrganization
     *
     * The organization responsible for the care team.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     */
    public function addToManagingOrganization(\TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $managingOrganization
     * @return self
     */
    public function setManagingOrganization(array $managingOrganization = null)
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
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7Fhir\R5\ContactPointType $telecom)
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
     * @return \TKusy\Hl7Fhir\R5\ContactPointType[]
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
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom = null)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

