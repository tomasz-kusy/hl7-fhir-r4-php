<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationDispenseType
 *
 * Indicates that a medication product is to be or has been dispensed for a named person/patient. This includes a description of the medication product (supply) provided and the instructions for administering the medication. The medication dispense is the result of a pharmacy system responding to a medication order.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationDispense
 */
class MedicationDispenseType extends DomainResourceType
{

    /**
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan that is fulfilled in whole or in part by this MedicationDispense.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The procedure or medication administration that triggered the dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the set of dispense events.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationDispenseStatusCodesType $status
     */
    private $status = null;

    /**
     * Indicates the reason why a dispense was not performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $notPerformedReason
     */
    private $notPerformedReason = null;

    /**
     * The date (and maybe time) when the status of the dispense record changed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $statusChanged
     */
    private $statusChanged = null;

    /**
     * Indicates the type of medication dispense (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Identifies the medication supplied. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $medication
     */
    private $medication = null;

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter that establishes the context for this event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Additional information that supports the medication being dispensed. For example, there may be requirements that a specific lab test has been completed prior to dispensing or the patient's weight at the time of dispensing is documented.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Indicates who or what performed the event.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationDispensePerformerType[] $performer
     */
    private $performer = null;

    /**
     * The principal physical location where the dispense was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Indicates the medication order that is being dispensed against.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $authorizingPrescription
     */
    private $authorizingPrescription = null;

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $daysSupply
     */
    private $daysSupply = null;

    /**
     * The date (and maybe time) when the dispense activity started if whenPrepared or whenHandedOver is not populated.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     */
    private $recorded = null;

    /**
     * The time when the dispensed product was packaged and reviewed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $whenPrepared
     */
    private $whenPrepared = null;

    /**
     * The time the dispensed product was provided to the patient or their representative.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver
     */
    private $whenHandedOver = null;

    /**
     * Identification of the facility/location where the medication was/will be shipped to, as part of the dispense event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Identifies the person who picked up the medication or the location of where the medication was delivered. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $receiver
     */
    private $receiver = null;

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction
     */
    private $renderedDosageInstruction = null;

    /**
     * Indicates how the medication is to be used by the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\DosageType[] $dosageInstruction
     */
    private $dosageInstruction = null;

    /**
     * Indicates whether or not substitution was made as part of the dispense. In some cases, substitution will be expected but does not happen, in other cases substitution is not expected but does happen. This block explains what substitution did or did not happen and why. If nothing is specified, substitution was not done.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationDispenseSubstitutionType $substitution
     */
    private $substitution = null;

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     */
    private $eventHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Adds as basedOn
     *
     * A plan that is fulfilled in whole or in part by this MedicationDispense.
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
     * A plan that is fulfilled in whole or in part by this MedicationDispense.
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
     * A plan that is fulfilled in whole or in part by this MedicationDispense.
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
     * A plan that is fulfilled in whole or in part by this MedicationDispense.
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
     * A plan that is fulfilled in whole or in part by this MedicationDispense.
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
     * Adds as partOf
     *
     * The procedure or medication administration that triggered the dispense.
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
     * The procedure or medication administration that triggered the dispense.
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
     * The procedure or medication administration that triggered the dispense.
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
     * The procedure or medication administration that triggered the dispense.
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
     * The procedure or medication administration that triggered the dispense.
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
     * A code specifying the state of the set of dispense events.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationDispenseStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the state of the set of dispense events.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationDispenseStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\MedicationDispenseStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as notPerformedReason
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getNotPerformedReason()
    {
        return $this->notPerformedReason;
    }

    /**
     * Sets a new notPerformedReason
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $notPerformedReason
     * @return self
     */
    public function setNotPerformedReason(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $notPerformedReason = null)
    {
        $this->notPerformedReason = $notPerformedReason;
        return $this;
    }

    /**
     * Gets as statusChanged
     *
     * The date (and maybe time) when the status of the dispense record changed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStatusChanged()
    {
        return $this->statusChanged;
    }

    /**
     * Sets a new statusChanged
     *
     * The date (and maybe time) when the status of the dispense record changed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $statusChanged
     * @return self
     */
    public function setStatusChanged(?\TKusy\Hl7Fhir\R5\DateTimeType $statusChanged = null)
    {
        $this->statusChanged = $statusChanged;
        return $this;
    }

    /**
     * Adds as category
     *
     * Indicates the type of medication dispense (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Indicates the type of medication dispense (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Indicates the type of medication dispense (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Indicates the type of medication dispense (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Indicates the type of medication dispense (for example, drug classification like ATC, where meds would be administered, legal category of the medication.).
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
     * Identifies the medication supplied. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication supplied. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
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
     * A link to a resource representing the person or the group to whom the medication will be given.
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
     * A link to a resource representing the person or the group to whom the medication will be given.
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
     * The encounter that establishes the context for this event.
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
     * The encounter that establishes the context for this event.
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
     * Adds as supportingInformation
     *
     * Additional information that supports the medication being dispensed. For example, there may be requirements that a specific lab test has been completed prior to dispensing or the patient's weight at the time of dispensing is documented.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Additional information that supports the medication being dispensed. For example, there may be requirements that a specific lab test has been completed prior to dispensing or the patient's weight at the time of dispensing is documented.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInformation($index)
    {
        return isset($this->supportingInformation[$index]);
    }

    /**
     * unset supportingInformation
     *
     * Additional information that supports the medication being dispensed. For example, there may be requirements that a specific lab test has been completed prior to dispensing or the patient's weight at the time of dispensing is documented.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInformation($index)
    {
        unset($this->supportingInformation[$index]);
    }

    /**
     * Gets as supportingInformation
     *
     * Additional information that supports the medication being dispensed. For example, there may be requirements that a specific lab test has been completed prior to dispensing or the patient's weight at the time of dispensing is documented.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Additional information that supports the medication being dispensed. For example, there may be requirements that a specific lab test has been completed prior to dispensing or the patient's weight at the time of dispensing is documented.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Indicates who or what performed the event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationDispensePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\MedicationDispensePerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed the event.
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
     * Indicates who or what performed the event.
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
     * Indicates who or what performed the event.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationDispensePerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed the event.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationDispensePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * The principal physical location where the dispense was performed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The principal physical location where the dispense was performed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as authorizingPrescription
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $authorizingPrescription
     */
    public function addToAuthorizingPrescription(\TKusy\Hl7Fhir\R5\ReferenceType $authorizingPrescription)
    {
        $this->authorizingPrescription[] = $authorizingPrescription;
        return $this;
    }

    /**
     * isset authorizingPrescription
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizingPrescription($index)
    {
        return isset($this->authorizingPrescription[$index]);
    }

    /**
     * unset authorizingPrescription
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizingPrescription($index)
    {
        unset($this->authorizingPrescription[$index]);
    }

    /**
     * Gets as authorizingPrescription
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }

    /**
     * Sets a new authorizingPrescription
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $authorizingPrescription
     * @return self
     */
    public function setAuthorizingPrescription(array $authorizingPrescription = null)
    {
        $this->authorizingPrescription = $authorizingPrescription;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
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
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
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
     * Gets as quantity
     *
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as daysSupply
     *
     * The amount of medication expressed as a timing amount.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getDaysSupply()
    {
        return $this->daysSupply;
    }

    /**
     * Sets a new daysSupply
     *
     * The amount of medication expressed as a timing amount.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $daysSupply
     * @return self
     */
    public function setDaysSupply(?\TKusy\Hl7Fhir\R5\QuantityType $daysSupply = null)
    {
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The date (and maybe time) when the dispense activity started if whenPrepared or whenHandedOver is not populated.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * Sets a new recorded
     *
     * The date (and maybe time) when the dispense activity started if whenPrepared or whenHandedOver is not populated.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     * @return self
     */
    public function setRecorded(?\TKusy\Hl7Fhir\R5\DateTimeType $recorded = null)
    {
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * Gets as whenPrepared
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * Sets a new whenPrepared
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $whenPrepared
     * @return self
     */
    public function setWhenPrepared(?\TKusy\Hl7Fhir\R5\DateTimeType $whenPrepared = null)
    {
        $this->whenPrepared = $whenPrepared;
        return $this;
    }

    /**
     * Gets as whenHandedOver
     *
     * The time the dispensed product was provided to the patient or their representative.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * Sets a new whenHandedOver
     *
     * The time the dispensed product was provided to the patient or their representative.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver
     * @return self
     */
    public function setWhenHandedOver(?\TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver = null)
    {
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Identification of the facility/location where the medication was/will be shipped to, as part of the dispense event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Identification of the facility/location where the medication was/will be shipped to, as part of the dispense event.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $destination
     * @return self
     */
    public function setDestination(?\TKusy\Hl7Fhir\R5\ReferenceType $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Adds as receiver
     *
     * Identifies the person who picked up the medication or the location of where the medication was delivered. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $receiver
     */
    public function addToReceiver(\TKusy\Hl7Fhir\R5\ReferenceType $receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * isset receiver
     *
     * Identifies the person who picked up the medication or the location of where the medication was delivered. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiver($index)
    {
        return isset($this->receiver[$index]);
    }

    /**
     * unset receiver
     *
     * Identifies the person who picked up the medication or the location of where the medication was delivered. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiver($index)
    {
        unset($this->receiver[$index]);
    }

    /**
     * Gets as receiver
     *
     * Identifies the person who picked up the medication or the location of where the medication was delivered. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Identifies the person who picked up the medication or the location of where the medication was delivered. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $receiver
     * @return self
     */
    public function setReceiver(array $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Adds as note
     *
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Adds as dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DosageType $dosageInstruction
     */
    public function addToDosageInstruction(\TKusy\Hl7Fhir\R5\DosageType $dosageInstruction)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * isset dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDosageInstruction($index)
    {
        return isset($this->dosageInstruction[$index]);
    }

    /**
     * unset dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDosageInstruction($index)
    {
        unset($this->dosageInstruction[$index]);
    }

    /**
     * Gets as dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\DosageType[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Sets a new dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\DosageType[] $dosageInstruction
     * @return self
     */
    public function setDosageInstruction(array $dosageInstruction = null)
    {
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * Gets as substitution
     *
     * Indicates whether or not substitution was made as part of the dispense. In some cases, substitution will be expected but does not happen, in other cases substitution is not expected but does happen. This block explains what substitution did or did not happen and why. If nothing is specified, substitution was not done.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationDispenseSubstitutionType
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Sets a new substitution
     *
     * Indicates whether or not substitution was made as part of the dispense. In some cases, substitution will be expected but does not happen, in other cases substitution is not expected but does happen. This block explains what substitution did or did not happen and why. If nothing is specified, substitution was not done.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationDispenseSubstitutionType $substitution
     * @return self
     */
    public function setSubstitution(?\TKusy\Hl7Fhir\R5\MedicationDispenseSubstitutionType $substitution = null)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Adds as eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $eventHistory
     */
    public function addToEventHistory(\TKusy\Hl7Fhir\R5\ReferenceType $eventHistory)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * isset eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventHistory($index)
    {
        return isset($this->eventHistory[$index]);
    }

    /**
     * unset eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventHistory($index)
    {
        unset($this->eventHistory[$index]);
    }

    /**
     * Gets as eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * Sets a new eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory = null)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

