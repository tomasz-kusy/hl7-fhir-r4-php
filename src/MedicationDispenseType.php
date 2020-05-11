<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationDispenseType
 *
 * Indicates that a medication product is to be or has been dispensed for a named person/patient. This includes a description of the medication product (supply) provided and the instructions for administering the medication. The medication dispense is the result of a pharmacy system responding to a medication order.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationDispense
 */
class MedicationDispenseType extends DomainResourceType
{

    /**
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The procedure that trigger the dispense.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the set of dispense events.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $status
     */
    private $status = null;

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of statusReason*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReasonCodeableConcept
     */
    private $statusReasonCodeableConcept = null;

    /**
     * Indicates the reason why a dispense was not performed. (choose any one of statusReason*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $statusReasonReference
     */
    private $statusReasonReference = null;

    /**
     * Indicates the type of medication dispense (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $medicationCodeableConcept
     */
    private $medicationCodeableConcept = null;

    /**
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $medicationReference
     */
    private $medicationReference = null;

    /**
     * A link to a resource representing the person or the group to whom the medication will be given.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $context
     */
    private $context = null;

    /**
     * Additional information that supports the medication being dispensed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Indicates who or what performed the event.
     *
     * @var \TKusy\Hl7FhirR4\MedicationDispensePerformerType[] $performer
     */
    private $performer = null;

    /**
     * The principal physical location where the dispense was performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * Indicates the medication order that is being dispensed against.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $authorizingPrescription
     */
    private $authorizingPrescription = null;

    /**
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The amount of medication expressed as a timing amount.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $daysSupply
     */
    private $daysSupply = null;

    /**
     * The time when the dispensed product was packaged and reviewed.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $whenPrepared
     */
    private $whenPrepared = null;

    /**
     * The time the dispensed product was provided to the patient or their representative.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $whenHandedOver
     */
    private $whenHandedOver = null;

    /**
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Identifies the person who picked up the medication. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $receiver
     */
    private $receiver = null;

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Indicates how the medication is to be used by the patient.
     *
     * @var \TKusy\Hl7FhirR4\DosageType[] $dosageInstruction
     */
    private $dosageInstruction = null;

    /**
     * Indicates whether or not substitution was made as part of the dispense. In some cases, substitution will be expected but does not happen, in other cases substitution is not expected but does happen. This block explains what substitution did or did not happen and why. If nothing is specified, substitution was not done.
     *
     * @var \TKusy\Hl7FhirR4\MedicationDispenseSubstitutionType $substitution
     */
    private $substitution = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $detectedIssue
     */
    private $detectedIssue = null;

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $eventHistory
     */
    private $eventHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this Medication Dispense that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * The procedure that trigger the dispense.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * The procedure that trigger the dispense.
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
     * The procedure that trigger the dispense.
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
     * The procedure that trigger the dispense.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * The procedure that trigger the dispense.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the state of the set of dispense events.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
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
     * @param \TKusy\Hl7FhirR4\CodeType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReasonCodeableConcept
     *
     * Indicates the reason why a dispense was not performed. (choose any one of statusReason*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatusReasonCodeableConcept()
    {
        return $this->statusReasonCodeableConcept;
    }

    /**
     * Sets a new statusReasonCodeableConcept
     *
     * Indicates the reason why a dispense was not performed. (choose any one of statusReason*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $statusReasonCodeableConcept
     * @return self
     */
    public function setStatusReasonCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $statusReasonCodeableConcept)
    {
        $this->statusReasonCodeableConcept = $statusReasonCodeableConcept;
        return $this;
    }

    /**
     * Gets as statusReasonReference
     *
     * Indicates the reason why a dispense was not performed. (choose any one of statusReason*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getStatusReasonReference()
    {
        return $this->statusReasonReference;
    }

    /**
     * Sets a new statusReasonReference
     *
     * Indicates the reason why a dispense was not performed. (choose any one of statusReason*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $statusReasonReference
     * @return self
     */
    public function setStatusReasonReference(\TKusy\Hl7FhirR4\ReferenceType $statusReasonReference)
    {
        $this->statusReasonReference = $statusReasonReference;
        return $this;
    }

    /**
     * Gets as category
     *
     * Indicates the type of medication dispense (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Indicates the type of medication dispense (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as medicationCodeableConcept
     *
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Sets a new medicationCodeableConcept
     *
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $medicationCodeableConcept
     * @return self
     */
    public function setMedicationCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Gets as medicationReference
     *
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Sets a new medicationReference
     *
     * Identifies the medication being administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $medicationReference
     * @return self
     */
    public function setMedicationReference(\TKusy\Hl7FhirR4\ReferenceType $medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * Gets as subject
     *
     * A link to a resource representing the person or the group to whom the medication will be given.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as context
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7FhirR4\ReferenceType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as supportingInformation
     *
     * Additional information that supports the medication being dispensed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7FhirR4\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Additional information that supports the medication being dispensed.
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
     * Additional information that supports the medication being dispensed.
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
     * Additional information that supports the medication being dispensed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Additional information that supports the medication being dispensed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation)
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
     * @param \TKusy\Hl7FhirR4\MedicationDispensePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\MedicationDispensePerformerType $performer)
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
     * @return \TKusy\Hl7FhirR4\MedicationDispensePerformerType[]
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
     * @param \TKusy\Hl7FhirR4\MedicationDispensePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * The principal physical location where the dispense was performed.
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
     * The principal physical location where the dispense was performed.
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
     * Adds as authorizingPrescription
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $authorizingPrescription
     */
    public function addToAuthorizingPrescription(\TKusy\Hl7FhirR4\ReferenceType $authorizingPrescription)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $authorizingPrescription
     * @return self
     */
    public function setAuthorizingPrescription(array $authorizingPrescription)
    {
        $this->authorizingPrescription = $authorizingPrescription;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the type of dispensing event that is performed. For example, Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as daysSupply
     *
     * The amount of medication expressed as a timing amount.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $daysSupply
     * @return self
     */
    public function setDaysSupply(\TKusy\Hl7FhirR4\QuantityType $daysSupply)
    {
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * Gets as whenPrepared
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $whenPrepared
     * @return self
     */
    public function setWhenPrepared(\TKusy\Hl7FhirR4\DateTimeType $whenPrepared)
    {
        $this->whenPrepared = $whenPrepared;
        return $this;
    }

    /**
     * Gets as whenHandedOver
     *
     * The time the dispensed product was provided to the patient or their representative.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $whenHandedOver
     * @return self
     */
    public function setWhenHandedOver(\TKusy\Hl7FhirR4\DateTimeType $whenHandedOver)
    {
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Identification of the facility/location where the medication was shipped to, as part of the dispense event.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $destination
     * @return self
     */
    public function setDestination(\TKusy\Hl7FhirR4\ReferenceType $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Adds as receiver
     *
     * Identifies the person who picked up the medication. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $receiver
     */
    public function addToReceiver(\TKusy\Hl7FhirR4\ReferenceType $receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * isset receiver
     *
     * Identifies the person who picked up the medication. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
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
     * Identifies the person who picked up the medication. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
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
     * Identifies the person who picked up the medication. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Identifies the person who picked up the medication. This will usually be a patient or their caregiver, but some cases exist where it can be a healthcare professional.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $receiver
     * @return self
     */
    public function setReceiver(array $receiver)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DosageType $dosageInstruction
     */
    public function addToDosageInstruction(\TKusy\Hl7FhirR4\DosageType $dosageInstruction)
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
     * @return \TKusy\Hl7FhirR4\DosageType[]
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
     * @param \TKusy\Hl7FhirR4\DosageType[] $dosageInstruction
     * @return self
     */
    public function setDosageInstruction(array $dosageInstruction)
    {
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * Gets as substitution
     *
     * Indicates whether or not substitution was made as part of the dispense. In some cases, substitution will be expected but does not happen, in other cases substitution is not expected but does happen. This block explains what substitution did or did not happen and why. If nothing is specified, substitution was not done.
     *
     * @return \TKusy\Hl7FhirR4\MedicationDispenseSubstitutionType
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
     * @param \TKusy\Hl7FhirR4\MedicationDispenseSubstitutionType $substitution
     * @return self
     */
    public function setSubstitution(\TKusy\Hl7FhirR4\MedicationDispenseSubstitutionType $substitution)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Adds as detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $detectedIssue
     */
    public function addToDetectedIssue(\TKusy\Hl7FhirR4\ReferenceType $detectedIssue)
    {
        $this->detectedIssue[] = $detectedIssue;
        return $this;
    }

    /**
     * isset detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetectedIssue($index)
    {
        return isset($this->detectedIssue[$index]);
    }

    /**
     * unset detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetectedIssue($index)
    {
        unset($this->detectedIssue[$index]);
    }

    /**
     * Gets as detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * Sets a new detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $detectedIssue
     * @return self
     */
    public function setDetectedIssue(array $detectedIssue)
    {
        $this->detectedIssue = $detectedIssue;
        return $this;
    }

    /**
     * Adds as eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $eventHistory
     */
    public function addToEventHistory(\TKusy\Hl7FhirR4\ReferenceType $eventHistory)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

