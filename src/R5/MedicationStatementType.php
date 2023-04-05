<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationStatementType
 *
 * A record of a medication that is being consumed by a patient. A MedicationStatement may indicate that the patient may be taking the medication now or has taken the medication in the past or will be taking the medication in the future. The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician. A common scenario where this information is captured is during the history taking process during a patient visit or stay. The medication information may come from sources such as the patient's memory, from a prescription bottle, or from a list of medications the patient, clinician or other party maintains. 
 *
 * The primary difference between a medicationstatement and a medicationadministration is that the medication administration has complete administration information and is based on actual administration information from the person who administered the medication. A medicationstatement is often, if not always, less specific. There is no required date/time when the medication was administered, in fact we only know that a source has reported the patient is taking this medication, where details such as time, quantity, or rate or even medication product may be incomplete or missing or less precise. As stated earlier, the Medication Statement information may come from the patient's memory, from a prescription bottle or from a list of medications the patient, clinician or other party maintains. Medication administration is more formal and is not missing detailed information.
 *
 * The MedicationStatement resource was previously called MedicationStatement.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationStatement
 */
class MedicationStatementType extends DomainResourceType
{

    /**
     * Identifiers associated with this Medication Statement that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A larger event of which this particular MedicationStatement is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code representing the status of recording the medication statement.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationStatementStatusCodesType $status
     */
    private $status = null;

    /**
     * Type of medication statement (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $medication
     */
    private $medication = null;

    /**
     * The person, animal or group who is/was taking the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter that establishes the context for this MedicationStatement.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $effectiveDateTime
     */
    private $effectiveDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $effectiveTiming
     */
    private $effectiveTiming = null;

    /**
     * The date when the Medication Statement was asserted by the information source.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateAsserted
     */
    private $dateAsserted = null;

    /**
     * The person or organization that provided the information about the taking of this medication. Note: Use derivedFrom when a MedicationStatement is derived from other resources, e.g. Claim or MedicationRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $informationSource
     */
    private $informationSource = null;

    /**
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or to other information that supports or is used to derive the MedicationStatement.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * A concept, Condition or observation that supports why the medication is being/was taken.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Provides extra information about the Medication Statement that is not conveyed by the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Link to information that is relevant to a medication statement, for example, illicit drug use, gestational age, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $relatedClinicalInformation
     */
    private $relatedClinicalInformation = null;

    /**
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction
     */
    private $renderedDosageInstruction = null;

    /**
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\DosageType[] $dosage
     */
    private $dosage = null;

    /**
     * Indicates whether the medication is or is not being consumed or administered.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationStatementAdherenceType $adherence
     */
    private $adherence = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this Medication Statement that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Statement that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Statement that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Statement that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Statement that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Adds as partOf
     *
     * A larger event of which this particular MedicationStatement is a component or step.
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
     * A larger event of which this particular MedicationStatement is a component or step.
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
     * A larger event of which this particular MedicationStatement is a component or step.
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
     * A larger event of which this particular MedicationStatement is a component or step.
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
     * A larger event of which this particular MedicationStatement is a component or step.
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
     * A code representing the status of recording the medication statement.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationStatementStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code representing the status of recording the medication statement.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationStatementStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\MedicationStatementStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * Type of medication statement (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Type of medication statement (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Type of medication statement (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Type of medication statement (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Type of medication statement (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Gets as medication
     *
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Sets a new medication
     *
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $medication
     * @return self
     */
    public function setMedication(\TKusy\Hl7Fhir\R5\CodeableReferenceType $medication)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The person, animal or group who is/was taking the medication.
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
     * The person, animal or group who is/was taking the medication.
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
     * The encounter that establishes the context for this MedicationStatement.
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
     * The encounter that establishes the context for this MedicationStatement.
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
     * Gets as effectiveDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * Sets a new effectiveDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $effectiveDateTime
     * @return self
     */
    public function setEffectiveDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $effectiveDateTime = null)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as effectiveTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getEffectiveTiming()
    {
        return $this->effectiveTiming;
    }

    /**
     * Sets a new effectiveTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $effectiveTiming
     * @return self
     */
    public function setEffectiveTiming(?\TKusy\Hl7Fhir\R5\TimingType $effectiveTiming = null)
    {
        $this->effectiveTiming = $effectiveTiming;
        return $this;
    }

    /**
     * Gets as dateAsserted
     *
     * The date when the Medication Statement was asserted by the information source.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * Sets a new dateAsserted
     *
     * The date when the Medication Statement was asserted by the information source.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateAsserted
     * @return self
     */
    public function setDateAsserted(?\TKusy\Hl7Fhir\R5\DateTimeType $dateAsserted = null)
    {
        $this->dateAsserted = $dateAsserted;
        return $this;
    }

    /**
     * Adds as informationSource
     *
     * The person or organization that provided the information about the taking of this medication. Note: Use derivedFrom when a MedicationStatement is derived from other resources, e.g. Claim or MedicationRequest.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $informationSource
     */
    public function addToInformationSource(\TKusy\Hl7Fhir\R5\ReferenceType $informationSource)
    {
        $this->informationSource[] = $informationSource;
        return $this;
    }

    /**
     * isset informationSource
     *
     * The person or organization that provided the information about the taking of this medication. Note: Use derivedFrom when a MedicationStatement is derived from other resources, e.g. Claim or MedicationRequest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationSource($index)
    {
        return isset($this->informationSource[$index]);
    }

    /**
     * unset informationSource
     *
     * The person or organization that provided the information about the taking of this medication. Note: Use derivedFrom when a MedicationStatement is derived from other resources, e.g. Claim or MedicationRequest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationSource($index)
    {
        unset($this->informationSource[$index]);
    }

    /**
     * Gets as informationSource
     *
     * The person or organization that provided the information about the taking of this medication. Note: Use derivedFrom when a MedicationStatement is derived from other resources, e.g. Claim or MedicationRequest.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * Sets a new informationSource
     *
     * The person or organization that provided the information about the taking of this medication. Note: Use derivedFrom when a MedicationStatement is derived from other resources, e.g. Claim or MedicationRequest.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $informationSource
     * @return self
     */
    public function setInformationSource(array $informationSource = null)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * Adds as derivedFrom
     *
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or to other information that supports or is used to derive the MedicationStatement.
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
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or to other information that supports or is used to derive the MedicationStatement.
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
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or to other information that supports or is used to derive the MedicationStatement.
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
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or to other information that supports or is used to derive the MedicationStatement.
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
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or to other information that supports or is used to derive the MedicationStatement.
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
     * A concept, Condition or observation that supports why the medication is being/was taken.
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
     * A concept, Condition or observation that supports why the medication is being/was taken.
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
     * A concept, Condition or observation that supports why the medication is being/was taken.
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
     * A concept, Condition or observation that supports why the medication is being/was taken.
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
     * A concept, Condition or observation that supports why the medication is being/was taken.
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
     * Provides extra information about the Medication Statement that is not conveyed by the other attributes.
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
     * Provides extra information about the Medication Statement that is not conveyed by the other attributes.
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
     * Provides extra information about the Medication Statement that is not conveyed by the other attributes.
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
     * Provides extra information about the Medication Statement that is not conveyed by the other attributes.
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
     * Provides extra information about the Medication Statement that is not conveyed by the other attributes.
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
     * Adds as relatedClinicalInformation
     *
     * Link to information that is relevant to a medication statement, for example, illicit drug use, gestational age, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $relatedClinicalInformation
     */
    public function addToRelatedClinicalInformation(\TKusy\Hl7Fhir\R5\ReferenceType $relatedClinicalInformation)
    {
        $this->relatedClinicalInformation[] = $relatedClinicalInformation;
        return $this;
    }

    /**
     * isset relatedClinicalInformation
     *
     * Link to information that is relevant to a medication statement, for example, illicit drug use, gestational age, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedClinicalInformation($index)
    {
        return isset($this->relatedClinicalInformation[$index]);
    }

    /**
     * unset relatedClinicalInformation
     *
     * Link to information that is relevant to a medication statement, for example, illicit drug use, gestational age, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedClinicalInformation($index)
    {
        unset($this->relatedClinicalInformation[$index]);
    }

    /**
     * Gets as relatedClinicalInformation
     *
     * Link to information that is relevant to a medication statement, for example, illicit drug use, gestational age, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRelatedClinicalInformation()
    {
        return $this->relatedClinicalInformation;
    }

    /**
     * Sets a new relatedClinicalInformation
     *
     * Link to information that is relevant to a medication statement, for example, illicit drug use, gestational age, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $relatedClinicalInformation
     * @return self
     */
    public function setRelatedClinicalInformation(array $relatedClinicalInformation = null)
    {
        $this->relatedClinicalInformation = $relatedClinicalInformation;
        return $this;
    }

    /**
     * Gets as renderedDosageInstruction
     *
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRenderedDosageInstruction()
    {
        return $this->renderedDosageInstruction;
    }

    /**
     * Sets a new renderedDosageInstruction
     *
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction
     * @return self
     */
    public function setRenderedDosageInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction = null)
    {
        $this->renderedDosageInstruction = $renderedDosageInstruction;
        return $this;
    }

    /**
     * Adds as dosage
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DosageType $dosage
     */
    public function addToDosage(\TKusy\Hl7Fhir\R5\DosageType $dosage)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * isset dosage
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDosage($index)
    {
        return isset($this->dosage[$index]);
    }

    /**
     * unset dosage
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDosage($index)
    {
        unset($this->dosage[$index]);
    }

    /**
     * Gets as dosage
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\DosageType[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Sets a new dosage
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\DosageType[] $dosage
     * @return self
     */
    public function setDosage(array $dosage = null)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Gets as adherence
     *
     * Indicates whether the medication is or is not being consumed or administered.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationStatementAdherenceType
     */
    public function getAdherence()
    {
        return $this->adherence;
    }

    /**
     * Sets a new adherence
     *
     * Indicates whether the medication is or is not being consumed or administered.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationStatementAdherenceType $adherence
     * @return self
     */
    public function setAdherence(?\TKusy\Hl7Fhir\R5\MedicationStatementAdherenceType $adherence = null)
    {
        $this->adherence = $adherence;
        return $this;
    }


}

