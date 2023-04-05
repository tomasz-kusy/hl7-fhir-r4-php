<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationAdministrationType
 *
 * Describes the event of a patient consuming or otherwise being administered a medication. This may be as simple as swallowing a tablet or it may be a long running infusion. Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationAdministration
 */
class MedicationAdministrationType extends DomainResourceType
{

    /**
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan that is fulfilled in whole or in part by this MedicationAdministration.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * Will generally be set to show that the administration has been completed. For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationAdministrationStatusCodesType $status
     */
    private $status = null;

    /**
     * A code indicating why the administration was not performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $statusReason
     */
    private $statusReason = null;

    /**
     * The type of medication administration (for example, drug classification like ATC, where meds would be administered, legal category of the medication).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $medication
     */
    private $medication = null;

    /**
     * The person or animal or group receiving the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication. This attribute can be used to provide documentation of specific characteristics of the patient present at the time of administration. For example, if the dose says "give "x" if the heartrate exceeds "y"", then the heart rate can be included using this attribute.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurenceDateTime
     */
    private $occurenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurencePeriod
     */
    private $occurencePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $occurenceTiming
     */
    private $occurenceTiming = null;

    /**
     * The date the occurrence of the MedicationAdministration was first captured in the record - potentially significantly after the occurrence of the event.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recorded
     */
    private $recorded = null;

    /**
     * An indication that the full dose was not administered.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isSubPotent
     */
    private $isSubPotent = null;

    /**
     * The reason or reasons why the full dose was not administered.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subPotentReason
     */
    private $subPotentReason = null;

    /**
     * The performer of the medication treatment. For devices this is the device that performed the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationAdministrationPerformerType[] $performer
     */
    private $performer = null;

    /**
     * A code, Condition or observation that supports why the medication was administered.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * The original request, instruction or authority to perform the administration.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $request
     */
    private $request = null;

    /**
     * The device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $device
     */
    private $device = null;

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationAdministrationDosageType $dosage
     */
    private $dosage = null;

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     */
    private $eventHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this Medication Administration that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * A plan that is fulfilled in whole or in part by this MedicationAdministration.
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
     * A plan that is fulfilled in whole or in part by this MedicationAdministration.
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
     * A plan that is fulfilled in whole or in part by this MedicationAdministration.
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
     * A plan that is fulfilled in whole or in part by this MedicationAdministration.
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
     * A plan that is fulfilled in whole or in part by this MedicationAdministration.
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
     * A larger event of which this particular event is a component or step.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * Will generally be set to show that the administration has been completed. For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationAdministrationStatusCodesType
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
     * @param \TKusy\Hl7Fhir\R5\MedicationAdministrationStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\MedicationAdministrationStatusCodesType $status)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    public function addToStatusReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $statusReason
     * @return self
     */
    public function setStatusReason(array $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Adds as category
     *
     * The type of medication administration (for example, drug classification like ATC, where meds would be administered, legal category of the medication).
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
     * The type of medication administration (for example, drug classification like ATC, where meds would be administered, legal category of the medication).
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
     * The type of medication administration (for example, drug classification like ATC, where meds would be administered, legal category of the medication).
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
     * The type of medication administration (for example, drug classification like ATC, where meds would be administered, legal category of the medication).
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
     * The type of medication administration (for example, drug classification like ATC, where meds would be administered, legal category of the medication).
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
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
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
     * The person or animal or group receiving the medication.
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
     * The person or animal or group receiving the medication.
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
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
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
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication. This attribute can be used to provide documentation of specific characteristics of the patient present at the time of administration. For example, if the dose says "give "x" if the heartrate exceeds "y"", then the heart rate can be included using this attribute.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication. This attribute can be used to provide documentation of specific characteristics of the patient present at the time of administration. For example, if the dose says "give "x" if the heartrate exceeds "y"", then the heart rate can be included using this attribute.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication. This attribute can be used to provide documentation of specific characteristics of the patient present at the time of administration. For example, if the dose says "give "x" if the heartrate exceeds "y"", then the heart rate can be included using this attribute.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication. This attribute can be used to provide documentation of specific characteristics of the patient present at the time of administration. For example, if the dose says "give "x" if the heartrate exceeds "y"", then the heart rate can be included using this attribute.
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
     * Additional information (for example, patient height and weight) that supports the administration of the medication. This attribute can be used to provide documentation of specific characteristics of the patient present at the time of administration. For example, if the dose says "give "x" if the heartrate exceeds "y"", then the heart rate can be included using this attribute.
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
     * Gets as occurenceDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurenceDateTime()
    {
        return $this->occurenceDateTime;
    }

    /**
     * Sets a new occurenceDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurenceDateTime
     * @return self
     */
    public function setOccurenceDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurenceDateTime = null)
    {
        $this->occurenceDateTime = $occurenceDateTime;
        return $this;
    }

    /**
     * Gets as occurencePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOccurencePeriod()
    {
        return $this->occurencePeriod;
    }

    /**
     * Sets a new occurencePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $occurencePeriod
     * @return self
     */
    public function setOccurencePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $occurencePeriod = null)
    {
        $this->occurencePeriod = $occurencePeriod;
        return $this;
    }

    /**
     * Gets as occurenceTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getOccurenceTiming()
    {
        return $this->occurenceTiming;
    }

    /**
     * Sets a new occurenceTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $occurenceTiming
     * @return self
     */
    public function setOccurenceTiming(?\TKusy\Hl7Fhir\R5\TimingType $occurenceTiming = null)
    {
        $this->occurenceTiming = $occurenceTiming;
        return $this;
    }

    /**
     * Gets as recorded
     *
     * The date the occurrence of the MedicationAdministration was first captured in the record - potentially significantly after the occurrence of the event.
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
     * The date the occurrence of the MedicationAdministration was first captured in the record - potentially significantly after the occurrence of the event.
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
     * Gets as isSubPotent
     *
     * An indication that the full dose was not administered.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIsSubPotent()
    {
        return $this->isSubPotent;
    }

    /**
     * Sets a new isSubPotent
     *
     * An indication that the full dose was not administered.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isSubPotent
     * @return self
     */
    public function setIsSubPotent(?\TKusy\Hl7Fhir\R5\BooleanType $isSubPotent = null)
    {
        $this->isSubPotent = $isSubPotent;
        return $this;
    }

    /**
     * Adds as subPotentReason
     *
     * The reason or reasons why the full dose was not administered.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subPotentReason
     */
    public function addToSubPotentReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $subPotentReason)
    {
        $this->subPotentReason[] = $subPotentReason;
        return $this;
    }

    /**
     * isset subPotentReason
     *
     * The reason or reasons why the full dose was not administered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubPotentReason($index)
    {
        return isset($this->subPotentReason[$index]);
    }

    /**
     * unset subPotentReason
     *
     * The reason or reasons why the full dose was not administered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubPotentReason($index)
    {
        unset($this->subPotentReason[$index]);
    }

    /**
     * Gets as subPotentReason
     *
     * The reason or reasons why the full dose was not administered.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSubPotentReason()
    {
        return $this->subPotentReason;
    }

    /**
     * Sets a new subPotentReason
     *
     * The reason or reasons why the full dose was not administered.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subPotentReason
     * @return self
     */
    public function setSubPotentReason(array $subPotentReason = null)
    {
        $this->subPotentReason = $subPotentReason;
        return $this;
    }

    /**
     * Adds as performer
     *
     * The performer of the medication treatment. For devices this is the device that performed the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationAdministrationPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\MedicationAdministrationPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * The performer of the medication treatment. For devices this is the device that performed the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
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
     * The performer of the medication treatment. For devices this is the device that performed the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
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
     * The performer of the medication treatment. For devices this is the device that performed the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationAdministrationPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The performer of the medication treatment. For devices this is the device that performed the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationAdministrationPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as reason
     *
     * A code, Condition or observation that supports why the medication was administered.
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
     * A code, Condition or observation that supports why the medication was administered.
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
     * A code, Condition or observation that supports why the medication was administered.
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
     * A code, Condition or observation that supports why the medication was administered.
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
     * A code, Condition or observation that supports why the medication was administered.
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
     * Gets as request
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $request
     * @return self
     */
    public function setRequest(?\TKusy\Hl7Fhir\R5\ReferenceType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Adds as device
     *
     * The device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R5\CodeableReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * The device that is to be used for the administration of the medication (for example, PCA Pump).
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
     * The device that is to be used for the administration of the medication (for example, PCA Pump).
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
     * The device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device = null)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as dosage
     *
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationAdministrationDosageType
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
     * @param \TKusy\Hl7Fhir\R5\MedicationAdministrationDosageType $dosage
     * @return self
     */
    public function setDosage(?\TKusy\Hl7Fhir\R5\MedicationAdministrationDosageType $dosage = null)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory = null)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

