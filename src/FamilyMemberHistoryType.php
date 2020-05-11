<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing FamilyMemberHistoryType
 *
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: FamilyMemberHistory
 */
class FamilyMemberHistoryType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     *
     * @var \TKusy\Hl7FhirR4\FamilyHistoryStatusType $status
     */
    private $status = null;

    /**
     * Describes why the family member's history is not available.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason
     */
    private $dataAbsentReason = null;

    /**
     * The person who this history concerns.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date (and possibly time) when the family member history was recorded or last updated.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * The birth sex of the family member.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $sex
     */
    private $sex = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $bornPeriod
     */
    private $bornPeriod = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $bornDate
     */
    private $bornDate = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $bornString
     */
    private $bornString = null;

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AgeType $ageAge
     */
    private $ageAge = null;

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $ageRange
     */
    private $ageRange = null;

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $ageString
     */
    private $ageString = null;

    /**
     * If true, indicates that the age value specified is an estimated value.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $estimatedAge
     */
    private $estimatedAge = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $deceasedBoolean
     */
    private $deceasedBoolean = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AgeType $deceasedAge
     */
    private $deceasedAge = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $deceasedRange
     */
    private $deceasedRange = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $deceasedDate
     */
    private $deceasedDate = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $deceasedString
     */
    private $deceasedString = null;

    /**
     * Describes why the family member history occurred in coded or textual form.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     *
     * @var \TKusy\Hl7FhirR4\FamilyMemberHistoryConditionType[] $condition
     */
    private $condition = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
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
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
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
     * @return \TKusy\Hl7FhirR4\UriType[]
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
     * @param \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the status of the record of the family history of a specific family member.
     *
     * @return \TKusy\Hl7FhirR4\FamilyHistoryStatusType
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
     * @param \TKusy\Hl7FhirR4\FamilyHistoryStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FamilyHistoryStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as dataAbsentReason
     *
     * Describes why the family member's history is not available.
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
     * Describes why the family member's history is not available.
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
     * Gets as patient
     *
     * The person who this history concerns.
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
     * The person who this history concerns.
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
     * Gets as date
     *
     * The date (and possibly time) when the family member history was recorded or last updated.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as name
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7FhirR4\CodeableConceptType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as sex
     *
     * The birth sex of the family member.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $sex
     * @return self
     */
    public function setSex(\TKusy\Hl7FhirR4\CodeableConceptType $sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Gets as bornPeriod
     *
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * Sets a new bornPeriod
     *
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $bornPeriod
     * @return self
     */
    public function setBornPeriod(\TKusy\Hl7FhirR4\PeriodType $bornPeriod)
    {
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * Gets as bornDate
     *
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * Sets a new bornDate
     *
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $bornDate
     * @return self
     */
    public function setBornDate(\TKusy\Hl7FhirR4\DateType $bornDate)
    {
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * Gets as bornString
     *
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * Sets a new bornString
     *
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $bornString
     * @return self
     */
    public function setBornString(\TKusy\Hl7FhirR4\StringType $bornString)
    {
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * Gets as ageAge
     *
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AgeType
     */
    public function getAgeAge()
    {
        return $this->ageAge;
    }

    /**
     * Sets a new ageAge
     *
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AgeType $ageAge
     * @return self
     */
    public function setAgeAge(\TKusy\Hl7FhirR4\AgeType $ageAge)
    {
        $this->ageAge = $ageAge;
        return $this;
    }

    /**
     * Gets as ageRange
     *
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * Sets a new ageRange
     *
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $ageRange
     * @return self
     */
    public function setAgeRange(\TKusy\Hl7FhirR4\RangeType $ageRange)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * Gets as ageString
     *
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAgeString()
    {
        return $this->ageString;
    }

    /**
     * Sets a new ageString
     *
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $ageString
     * @return self
     */
    public function setAgeString(\TKusy\Hl7FhirR4\StringType $ageString)
    {
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * Gets as estimatedAge
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $estimatedAge
     * @return self
     */
    public function setEstimatedAge(\TKusy\Hl7FhirR4\BooleanType $estimatedAge)
    {
        $this->estimatedAge = $estimatedAge;
        return $this;
    }

    /**
     * Gets as deceasedBoolean
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Sets a new deceasedBoolean
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $deceasedBoolean
     * @return self
     */
    public function setDeceasedBoolean(\TKusy\Hl7FhirR4\BooleanType $deceasedBoolean)
    {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Gets as deceasedAge
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AgeType
     */
    public function getDeceasedAge()
    {
        return $this->deceasedAge;
    }

    /**
     * Sets a new deceasedAge
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AgeType $deceasedAge
     * @return self
     */
    public function setDeceasedAge(\TKusy\Hl7FhirR4\AgeType $deceasedAge)
    {
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * Gets as deceasedRange
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * Sets a new deceasedRange
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $deceasedRange
     * @return self
     */
    public function setDeceasedRange(\TKusy\Hl7FhirR4\RangeType $deceasedRange)
    {
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * Gets as deceasedDate
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * Sets a new deceasedDate
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $deceasedDate
     * @return self
     */
    public function setDeceasedDate(\TKusy\Hl7FhirR4\DateType $deceasedDate)
    {
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * Gets as deceasedString
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
     * Sets a new deceasedString
     *
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $deceasedString
     * @return self
     */
    public function setDeceasedString(\TKusy\Hl7FhirR4\StringType $deceasedString)
    {
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Describes why the family member history occurred in coded or textual form.
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
     * Describes why the family member history occurred in coded or textual form.
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
     * Describes why the family member history occurred in coded or textual form.
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
     * Describes why the family member history occurred in coded or textual form.
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
     * Describes why the family member history occurred in coded or textual form.
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
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
     * @param \TKusy\Hl7FhirR4\FamilyMemberHistoryConditionType $condition
     */
    public function addToCondition(\TKusy\Hl7FhirR4\FamilyMemberHistoryConditionType $condition)
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
     * @return \TKusy\Hl7FhirR4\FamilyMemberHistoryConditionType[]
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
     * @param \TKusy\Hl7FhirR4\FamilyMemberHistoryConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

