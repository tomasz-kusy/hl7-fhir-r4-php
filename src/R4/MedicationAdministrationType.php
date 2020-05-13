<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationAdministrationType
 *
 * Describes the event of a patient consuming or otherwise being administered a medication. This may be as simple as swallowing a tablet or it may be a long running infusion. Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationAdministration
 */
class MedicationAdministrationType extends DomainResourceType
{

    /**
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType[] $instantiates
     */
    private $instantiates = null;

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * Will generally be set to show that the administration has been completed. For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $status
     */
    private $status = null;

    /**
     * A code indicating why the administration was not performed.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $statusReason
     */
    private $statusReason = null;

    /**
     * Indicates where the medication is expected to be consumed or administered.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $medicationCodeableConcept
     */
    private $medicationCodeableConcept = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $medicationReference
     */
    private $medicationReference = null;

    /**
     * The person or animal or group receiving the medication.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $context
     */
    private $context = null;

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $effectiveDateTime
     */
    private $effectiveDateTime = null;

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Indicates who or what performed the medication administration and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicationAdministrationPerformerType[] $performer
     */
    private $performer = null;

    /**
     * A code indicating why the medication was given.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Condition or observation that supports why the medication was administered.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * The original request, instruction or authority to perform the administration.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $request
     */
    private $request = null;

    /**
     * The device used in administering the medication to the patient. For example, a particular infusion pump.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $device
     */
    private $device = null;

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicationAdministrationDosageType $dosage
     */
    private $dosage = null;

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $eventHistory
     */
    private $eventHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Adds as instantiates
     *
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\UriType $instantiates
     */
    public function addToInstantiates(\TKusy\Hl7Fhir\R4\UriType $instantiates)
    {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * isset instantiates
     *
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiates($index)
    {
        return isset($this->instantiates[$index]);
    }

    /**
     * unset instantiates
     *
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiates($index)
    {
        unset($this->instantiates[$index]);
    }

    /**
     * Gets as instantiates
     *
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType[]
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }

    /**
     * Sets a new instantiates
     *
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType[] $instantiates
     * @return self
     */
    public function setInstantiates(array $instantiates)
    {
        $this->instantiates = $instantiates;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R4\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $partOf
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
     * Will generally be set to show that the administration has been completed. For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Will generally be set to show that the administration has been completed. For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\CodeType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as statusReason
     *
     * A code indicating why the administration was not performed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $statusReason
     */
    public function addToStatusReason(\TKusy\Hl7Fhir\R4\CodeableConceptType $statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * isset statusReason
     *
     * A code indicating why the administration was not performed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusReason($index)
    {
        return isset($this->statusReason[$index]);
    }

    /**
     * unset statusReason
     *
     * A code indicating why the administration was not performed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusReason($index)
    {
        unset($this->statusReason[$index]);
    }

    /**
     * Gets as statusReason
     *
     * A code indicating why the administration was not performed.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * A code indicating why the administration was not performed.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $statusReason
     * @return self
     */
    public function setStatusReason(array $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as category
     *
     * Indicates where the medication is expected to be consumed or administered.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Indicates where the medication is expected to be consumed or administered.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as medicationCodeableConcept
     *
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Sets a new medicationCodeableConcept
     *
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $medicationCodeableConcept
     * @return self
     */
    public function setMedicationCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Gets as medicationReference
     *
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Sets a new medicationReference
     *
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $medicationReference
     * @return self
     */
    public function setMedicationReference(\TKusy\Hl7Fhir\R4\ReferenceType $medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The person or animal or group receiving the medication.
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
     * The person or animal or group receiving the medication.
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
     * Gets as context
     *
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7Fhir\R4\ReferenceType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as supportingInformation
     *
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R4\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as effectiveDateTime
     *
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * Sets a new effectiveDateTime
     *
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $effectiveDateTime
     * @return self
     */
    public function setEffectiveDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as performer
     *
     * Indicates who or what performed the medication administration and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MedicationAdministrationPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R4\MedicationAdministrationPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed the medication administration and how they were involved.
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
     * Indicates who or what performed the medication administration and how they were involved.
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
     * Indicates who or what performed the medication administration and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicationAdministrationPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed the medication administration and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicationAdministrationPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * A code indicating why the medication was given.
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
     * A code indicating why the medication was given.
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
     * A code indicating why the medication was given.
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
     * A code indicating why the medication was given.
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
     * A code indicating why the medication was given.
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
     * Condition or observation that supports why the medication was administered.
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
     * Condition or observation that supports why the medication was administered.
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
     * Condition or observation that supports why the medication was administered.
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
     * Condition or observation that supports why the medication was administered.
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
     * Condition or observation that supports why the medication was administered.
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
     * Gets as request
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $request
     * @return self
     */
    public function setRequest(\TKusy\Hl7Fhir\R4\ReferenceType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Adds as device
     *
     * The device used in administering the medication to the patient. For example, a particular infusion pump.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R4\ReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * The device used in administering the medication to the patient. For example, a particular infusion pump.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * The device used in administering the medication to the patient. For example, a particular infusion pump.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * The device used in administering the medication to the patient. For example, a particular infusion pump.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The device used in administering the medication to the patient. For example, a particular infusion pump.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as note
     *
     * Extra information about the medication administration that is not conveyed by the other attributes.
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
     * Extra information about the medication administration that is not conveyed by the other attributes.
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
     * Extra information about the medication administration that is not conveyed by the other attributes.
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
     * Extra information about the medication administration that is not conveyed by the other attributes.
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
     * Extra information about the medication administration that is not conveyed by the other attributes.
     *
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as dosage
     *
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicationAdministrationDosageType
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Sets a new dosage
     *
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicationAdministrationDosageType $dosage
     * @return self
     */
    public function setDosage(\TKusy\Hl7Fhir\R4\MedicationAdministrationDosageType $dosage)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Adds as eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $eventHistory
     */
    public function addToEventHistory(\TKusy\Hl7Fhir\R4\ReferenceType $eventHistory)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * isset eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the administration was verified.
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
     * A summary of the events of interest that have occurred, such as when the administration was verified.
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
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * Sets a new eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

