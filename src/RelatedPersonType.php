<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RelatedPersonType
 *
 * Information about a person that is involved in the care for a patient, but who is not the target of healthcare, nor has a formal responsibility in the care process.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RelatedPerson
 */
class RelatedPersonType extends DomainResourceType
{

    /**
     * Identifier for a person within a particular scope.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this related person record is in active use.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $active
     */
    private $active = null;

    /**
     * The patient this person is related to.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The nature of the relationship between a patient and the related person.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $relationship
     */
    private $relationship = null;

    /**
     * A name associated with the person.
     *
     * @var \TKusy\Hl7FhirR4\HumanNameType[] $name
     */
    private $name = null;

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     *
     * @var \TKusy\Hl7FhirR4\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * The date on which the related person was born.
     *
     * @var \TKusy\Hl7FhirR4\DateType $birthDate
     */
    private $birthDate = null;

    /**
     * Address where the related person can be contacted or visited.
     *
     * @var \TKusy\Hl7FhirR4\AddressType[] $address
     */
    private $address = null;

    /**
     * Image of the person.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType[] $photo
     */
    private $photo = null;

    /**
     * The period of time during which this relationship is or was active. If there are no dates defined, then the interval is unknown.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * A language which may be used to communicate with about the patient's health.
     *
     * @var \TKusy\Hl7FhirR4\RelatedPersonCommunicationType[] $communication
     */
    private $communication = null;

    /**
     * Adds as identifier
     *
     * Identifier for a person within a particular scope.
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
     * Identifier for a person within a particular scope.
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
     * Identifier for a person within a particular scope.
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
     * Identifier for a person within a particular scope.
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
     * Identifier for a person within a particular scope.
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
     * Gets as active
     *
     * Whether this related person record is in active use.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this related person record is in active use.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $active
     * @return self
     */
    public function setActive(\TKusy\Hl7FhirR4\BooleanType $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient this person is related to.
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
     * The patient this person is related to.
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
     * Adds as relationship
     *
     * The nature of the relationship between a patient and the related person.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     */
    public function addToRelationship(\TKusy\Hl7FhirR4\CodeableConceptType $relationship)
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * isset relationship
     *
     * The nature of the relationship between a patient and the related person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelationship($index)
    {
        return isset($this->relationship[$index]);
    }

    /**
     * unset relationship
     *
     * The nature of the relationship between a patient and the related person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelationship($index)
    {
        unset($this->relationship[$index]);
    }

    /**
     * Gets as relationship
     *
     * The nature of the relationship between a patient and the related person.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The nature of the relationship between a patient and the related person.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $relationship
     * @return self
     */
    public function setRelationship(array $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Adds as name
     *
     * A name associated with the person.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\HumanNameType $name
     */
    public function addToName(\TKusy\Hl7FhirR4\HumanNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * A name associated with the person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * A name associated with the person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * A name associated with the person.
     *
     * @return \TKusy\Hl7FhirR4\HumanNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name associated with the person.
     *
     * @param \TKusy\Hl7FhirR4\HumanNameType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7FhirR4\ContactPointType $telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * isset telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
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
     * A contact detail for the person, e.g. a telephone number or an email address.
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
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Sets a new telecom
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     *
     * @return \TKusy\Hl7FhirR4\AdministrativeGenderType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     *
     * @param \TKusy\Hl7FhirR4\AdministrativeGenderType $gender
     * @return self
     */
    public function setGender(\TKusy\Hl7FhirR4\AdministrativeGenderType $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * The date on which the related person was born.
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * The date on which the related person was born.
     *
     * @param \TKusy\Hl7FhirR4\DateType $birthDate
     * @return self
     */
    public function setBirthDate(\TKusy\Hl7FhirR4\DateType $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Adds as address
     *
     * Address where the related person can be contacted or visited.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AddressType $address
     */
    public function addToAddress(\TKusy\Hl7FhirR4\AddressType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * Address where the related person can be contacted or visited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Address where the related person can be contacted or visited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Address where the related person can be contacted or visited.
     *
     * @return \TKusy\Hl7FhirR4\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address where the related person can be contacted or visited.
     *
     * @param \TKusy\Hl7FhirR4\AddressType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as photo
     *
     * Image of the person.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AttachmentType $photo
     */
    public function addToPhoto(\TKusy\Hl7FhirR4\AttachmentType $photo)
    {
        $this->photo[] = $photo;
        return $this;
    }

    /**
     * isset photo
     *
     * Image of the person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoto($index)
    {
        return isset($this->photo[$index]);
    }

    /**
     * unset photo
     *
     * Image of the person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoto($index)
    {
        unset($this->photo[$index]);
    }

    /**
     * Gets as photo
     *
     * Image of the person.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets a new photo
     *
     * Image of the person.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType[] $photo
     * @return self
     */
    public function setPhoto(array $photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period of time during which this relationship is or was active. If there are no dates defined, then the interval is unknown.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period of time during which this relationship is or was active. If there are no dates defined, then the interval is unknown.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as communication
     *
     * A language which may be used to communicate with about the patient's health.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RelatedPersonCommunicationType $communication
     */
    public function addToCommunication(\TKusy\Hl7FhirR4\RelatedPersonCommunicationType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * A language which may be used to communicate with about the patient's health.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommunication($index)
    {
        return isset($this->communication[$index]);
    }

    /**
     * unset communication
     *
     * A language which may be used to communicate with about the patient's health.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommunication($index)
    {
        unset($this->communication[$index]);
    }

    /**
     * Gets as communication
     *
     * A language which may be used to communicate with about the patient's health.
     *
     * @return \TKusy\Hl7FhirR4\RelatedPersonCommunicationType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * A language which may be used to communicate with about the patient's health.
     *
     * @param \TKusy\Hl7FhirR4\RelatedPersonCommunicationType[] $communication
     * @return self
     */
    public function setCommunication(array $communication)
    {
        $this->communication = $communication;
        return $this;
    }


}

