<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing FamilyMemberHistoryType
 *
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: FamilyMemberHistory
 */
class FamilyMemberHistoryType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     *
     * @var \TKusy\Hl7Fhir\R5\FamilyHistoryStatusType $status
     */
    private $status = null;

    /**
     * Describes why the family member's history is not available.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $dataAbsentReason
     */
    private $dataAbsentReason = null;

    /**
     * The person who this history concerns.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date (and possibly time) when the family member history was recorded or last updated.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Indicates who or what participated in the activities related to the family member history and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R5\FamilyMemberHistoryParticipantType[] $participant
     */
    private $participant = null;

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * The birth sex of the family member.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $sex
     */
    private $sex = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $bornPeriod
     */
    private $bornPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $bornDate
     */
    private $bornDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $bornString
     */
    private $bornString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $ageAge
     */
    private $ageAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $ageRange
     */
    private $ageRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $ageString
     */
    private $ageString = null;

    /**
     * If true, indicates that the age value specified is an estimated value.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $estimatedAge
     */
    private $estimatedAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $deceasedBoolean
     */
    private $deceasedBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $deceasedAge
     */
    private $deceasedAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $deceasedRange
     */
    private $deceasedRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $deceasedDate
     */
    private $deceasedDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $deceasedString
     */
    private $deceasedString = null;

    /**
     * Describes why the family member history occurred in coded or textual form, or Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @var \TKusy\Hl7Fhir\R5\FamilyMemberHistoryConditionType[] $condition
     */
    private $condition = null;

    /**
     * The significant Procedures (or procedure) that the family member had. This is a repeating section to allow a system to represent more than one procedure per resource, though there is nothing stopping multiple resources - one per procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\FamilyMemberHistoryProcedureType[] $procedure
     */
    private $procedure = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * Gets as status
     *
     * A code specifying the status of the record of the family history of a specific family member.
     *
     * @return \TKusy\Hl7Fhir\R5\FamilyHistoryStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the status of the record of the family history of a specific family member.
     *
     * @param \TKusy\Hl7Fhir\R5\FamilyHistoryStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\FamilyHistoryStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as dataAbsentReason
     *
     * Describes why the family member's history is not available.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * Sets a new dataAbsentReason
     *
     * Describes why the family member's history is not available.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $dataAbsentReason
     * @return self
     */
    public function setDataAbsentReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $dataAbsentReason = null)
    {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The person who this history concerns.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The person who this history concerns.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R5\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and possibly time) when the family member history was recorded or last updated.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date (and possibly time) when the family member history was recorded or last updated.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as participant
     *
     * Indicates who or what participated in the activities related to the family member history and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistoryParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\FamilyMemberHistoryParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who or what participated in the activities related to the family member history and how they were involved.
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
     * Indicates who or what participated in the activities related to the family member history and how they were involved.
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
     * Indicates who or what participated in the activities related to the family member history and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R5\FamilyMemberHistoryParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who or what participated in the activities related to the family member history and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistoryParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as name
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
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
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
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
     * Gets as relationship
     *
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7Fhir\R5\CodeableConceptType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as sex
     *
     * The birth sex of the family member.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets a new sex
     *
     * The birth sex of the family member.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $sex
     * @return self
     */
    public function setSex(?\TKusy\Hl7Fhir\R5\CodeableConceptType $sex = null)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Gets as bornPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * Sets a new bornPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $bornPeriod
     * @return self
     */
    public function setBornPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $bornPeriod = null)
    {
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * Gets as bornDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * Sets a new bornDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $bornDate
     * @return self
     */
    public function setBornDate(?\TKusy\Hl7Fhir\R5\DateType $bornDate = null)
    {
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * Gets as bornString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * Sets a new bornString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $bornString
     * @return self
     */
    public function setBornString(?\TKusy\Hl7Fhir\R5\StringType $bornString = null)
    {
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * Gets as ageAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getAgeAge()
    {
        return $this->ageAge;
    }

    /**
     * Sets a new ageAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $ageAge
     * @return self
     */
    public function setAgeAge(?\TKusy\Hl7Fhir\R5\AgeType $ageAge = null)
    {
        $this->ageAge = $ageAge;
        return $this;
    }

    /**
     * Gets as ageRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * Sets a new ageRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $ageRange
     * @return self
     */
    public function setAgeRange(?\TKusy\Hl7Fhir\R5\RangeType $ageRange = null)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * Gets as ageString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAgeString()
    {
        return $this->ageString;
    }

    /**
     * Sets a new ageString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $ageString
     * @return self
     */
    public function setAgeString(?\TKusy\Hl7Fhir\R5\StringType $ageString = null)
    {
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * Gets as estimatedAge
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getEstimatedAge()
    {
        return $this->estimatedAge;
    }

    /**
     * Sets a new estimatedAge
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $estimatedAge
     * @return self
     */
    public function setEstimatedAge(?\TKusy\Hl7Fhir\R5\BooleanType $estimatedAge = null)
    {
        $this->estimatedAge = $estimatedAge;
        return $this;
    }

    /**
     * Gets as deceasedBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Sets a new deceasedBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $deceasedBoolean
     * @return self
     */
    public function setDeceasedBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $deceasedBoolean = null)
    {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Gets as deceasedAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getDeceasedAge()
    {
        return $this->deceasedAge;
    }

    /**
     * Sets a new deceasedAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $deceasedAge
     * @return self
     */
    public function setDeceasedAge(?\TKusy\Hl7Fhir\R5\AgeType $deceasedAge = null)
    {
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * Gets as deceasedRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * Sets a new deceasedRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $deceasedRange
     * @return self
     */
    public function setDeceasedRange(?\TKusy\Hl7Fhir\R5\RangeType $deceasedRange = null)
    {
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * Gets as deceasedDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * Sets a new deceasedDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $deceasedDate
     * @return self
     */
    public function setDeceasedDate(?\TKusy\Hl7Fhir\R5\DateType $deceasedDate = null)
    {
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * Gets as deceasedString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
     * Sets a new deceasedString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $deceasedString
     * @return self
     */
    public function setDeceasedString(?\TKusy\Hl7Fhir\R5\StringType $deceasedString = null)
    {
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes why the family member history occurred in coded or textual form, or Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Describes why the family member history occurred in coded or textual form, or Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Describes why the family member history occurred in coded or textual form, or Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Describes why the family member history occurred in coded or textual form, or Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Describes why the family member history occurred in coded or textual form, or Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * Adds as condition
     *
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistoryConditionType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\FamilyMemberHistoryConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @return \TKusy\Hl7Fhir\R5\FamilyMemberHistoryConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistoryConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as procedure
     *
     * The significant Procedures (or procedure) that the family member had. This is a repeating section to allow a system to represent more than one procedure per resource, though there is nothing stopping multiple resources - one per procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistoryProcedureType $procedure
     */
    public function addToProcedure(\TKusy\Hl7Fhir\R5\FamilyMemberHistoryProcedureType $procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * isset procedure
     *
     * The significant Procedures (or procedure) that the family member had. This is a repeating section to allow a system to represent more than one procedure per resource, though there is nothing stopping multiple resources - one per procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcedure($index)
    {
        return isset($this->procedure[$index]);
    }

    /**
     * unset procedure
     *
     * The significant Procedures (or procedure) that the family member had. This is a repeating section to allow a system to represent more than one procedure per resource, though there is nothing stopping multiple resources - one per procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcedure($index)
    {
        unset($this->procedure[$index]);
    }

    /**
     * Gets as procedure
     *
     * The significant Procedures (or procedure) that the family member had. This is a repeating section to allow a system to represent more than one procedure per resource, though there is nothing stopping multiple resources - one per procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\FamilyMemberHistoryProcedureType[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * The significant Procedures (or procedure) that the family member had. This is a repeating section to allow a system to represent more than one procedure per resource, though there is nothing stopping multiple resources - one per procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\FamilyMemberHistoryProcedureType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }


}

