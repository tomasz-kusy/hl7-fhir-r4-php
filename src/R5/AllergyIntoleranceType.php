<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AllergyIntoleranceType
 *
 * Risk of harmful or undesirable physiological response which is specific to an individual and associated with exposure to a substance.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AllergyIntolerance
 */
class AllergyIntoleranceType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The clinical status of the allergy or intolerance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $clinicalStatus
     */
    private $clinicalStatus = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product). The verification status pertains to the allergy or intolerance, itself, not to any specific AllergyIntolerance attribute.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $verificationStatus
     */
    private $verificationStatus = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Category of the identified substance.
     *
     * @var \TKusy\Hl7Fhir\R5\AllergyIntoleranceCategoryType[] $category
     */
    private $category = null;

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     *
     * @var \TKusy\Hl7Fhir\R5\AllergyIntoleranceCriticalityType $criticality
     */
    private $criticality = null;

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement). This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g., "No known allergy", "No known drug allergies"). Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'. If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The patient who has the allergy or intolerance.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The encounter when the allergy or intolerance was asserted.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $onsetDateTime
     */
    private $onsetDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $onsetAge
     */
    private $onsetAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod
     */
    private $onsetPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $onsetRange
     */
    private $onsetRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $onsetString
     */
    private $onsetString = null;

    /**
     * The recordedDate represents when this particular AllergyIntolerance record was created in the system, which is often a system-generated date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recordedDate
     */
    private $recordedDate = null;

    /**
     * Indicates who or what participated in the activities related to the allergy or intolerance and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R5\AllergyIntoleranceParticipantType[] $participant
     */
    private $participant = null;

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $lastOccurrence
     */
    private $lastOccurrence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     *
     * @var \TKusy\Hl7Fhir\R5\AllergyIntoleranceReactionType[] $reaction
     */
    private $reaction = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Gets as clinicalStatus
     *
     * The clinical status of the allergy or intolerance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * Sets a new clinicalStatus
     *
     * The clinical status of the allergy or intolerance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $clinicalStatus
     * @return self
     */
    public function setClinicalStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $clinicalStatus = null)
    {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * Gets as verificationStatus
     *
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product). The verification status pertains to the allergy or intolerance, itself, not to any specific AllergyIntolerance attribute.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * Sets a new verificationStatus
     *
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product). The verification status pertains to the allergy or intolerance, itself, not to any specific AllergyIntolerance attribute.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $verificationStatus
     * @return self
     */
    public function setVerificationStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $verificationStatus = null)
    {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * Gets as type
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as category
     *
     * Category of the identified substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceCategoryType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\AllergyIntoleranceCategoryType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Category of the identified substance.
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
     * Category of the identified substance.
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
     * Category of the identified substance.
     *
     * @return \TKusy\Hl7Fhir\R5\AllergyIntoleranceCategoryType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Category of the identified substance.
     *
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceCategoryType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as criticality
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     *
     * @return \TKusy\Hl7Fhir\R5\AllergyIntoleranceCriticalityType
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Sets a new criticality
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     *
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceCriticalityType $criticality
     * @return self
     */
    public function setCriticality(?\TKusy\Hl7Fhir\R5\AllergyIntoleranceCriticalityType $criticality = null)
    {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * Gets as code
     *
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement). This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g., "No known allergy", "No known drug allergies"). Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'. If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
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
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement). This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g., "No known allergy", "No known drug allergies"). Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'. If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
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
     * Gets as patient
     *
     * The patient who has the allergy or intolerance.
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
     * The patient who has the allergy or intolerance.
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
     * Gets as encounter
     *
     * The encounter when the allergy or intolerance was asserted.
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
     * The encounter when the allergy or intolerance was asserted.
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
     * Gets as onsetDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Sets a new onsetDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $onsetDateTime
     * @return self
     */
    public function setOnsetDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $onsetDateTime = null)
    {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Gets as onsetAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Sets a new onsetAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $onsetAge
     * @return self
     */
    public function setOnsetAge(?\TKusy\Hl7Fhir\R5\AgeType $onsetAge = null)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Gets as onsetPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Sets a new onsetPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod
     * @return self
     */
    public function setOnsetPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod = null)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Gets as onsetRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Sets a new onsetRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $onsetRange
     * @return self
     */
    public function setOnsetRange(?\TKusy\Hl7Fhir\R5\RangeType $onsetRange = null)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Gets as onsetString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Sets a new onsetString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $onsetString
     * @return self
     */
    public function setOnsetString(?\TKusy\Hl7Fhir\R5\StringType $onsetString = null)
    {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Gets as recordedDate
     *
     * The recordedDate represents when this particular AllergyIntolerance record was created in the system, which is often a system-generated date.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * Sets a new recordedDate
     *
     * The recordedDate represents when this particular AllergyIntolerance record was created in the system, which is often a system-generated date.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $recordedDate
     * @return self
     */
    public function setRecordedDate(?\TKusy\Hl7Fhir\R5\DateTimeType $recordedDate = null)
    {
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * Adds as participant
     *
     * Indicates who or what participated in the activities related to the allergy or intolerance and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\AllergyIntoleranceParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who or what participated in the activities related to the allergy or intolerance and how they were involved.
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
     * Indicates who or what participated in the activities related to the allergy or intolerance and how they were involved.
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
     * Indicates who or what participated in the activities related to the allergy or intolerance and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R5\AllergyIntoleranceParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who or what participated in the activities related to the allergy or intolerance and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as lastOccurrence
     *
     * Represents the date and/or time of the last known occurrence of a reaction event.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getLastOccurrence()
    {
        return $this->lastOccurrence;
    }

    /**
     * Sets a new lastOccurrence
     *
     * Represents the date and/or time of the last known occurrence of a reaction event.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $lastOccurrence
     * @return self
     */
    public function setLastOccurrence(?\TKusy\Hl7Fhir\R5\DateTimeType $lastOccurrence = null)
    {
        $this->lastOccurrence = $lastOccurrence;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
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
     * Adds as reaction
     *
     * Details about each adverse reaction event linked to exposure to the identified substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceReactionType $reaction
     */
    public function addToReaction(\TKusy\Hl7Fhir\R5\AllergyIntoleranceReactionType $reaction)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * isset reaction
     *
     * Details about each adverse reaction event linked to exposure to the identified substance.
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
     * Details about each adverse reaction event linked to exposure to the identified substance.
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
     * Details about each adverse reaction event linked to exposure to the identified substance.
     *
     * @return \TKusy\Hl7Fhir\R5\AllergyIntoleranceReactionType[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Sets a new reaction
     *
     * Details about each adverse reaction event linked to exposure to the identified substance.
     *
     * @param \TKusy\Hl7Fhir\R5\AllergyIntoleranceReactionType[] $reaction
     * @return self
     */
    public function setReaction(array $reaction = null)
    {
        $this->reaction = $reaction;
        return $this;
    }


}

