<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing PractitionerType
 *
 * A person who is directly or indirectly involved in the provisioning of healthcare.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Practitioner
 */
class PractitionerType extends DomainResourceType
{

    /**
     * An identifier that applies to this person in this role.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this practitioner's record is in active use.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $active
     */
    private $active = null;

    /**
     * The name(s) associated with the practitioner.
     *
     * @var \TKusy\Hl7Fhir\R4\HumanNameType[] $name
     */
    private $name = null;

    /**
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Address(es) of the practitioner that are not role specific (typically home address). 
     * Work addresses are not typically entered in this property as they are usually role dependent.
     *
     * @var \TKusy\Hl7Fhir\R4\AddressType[] $address
     */
    private $address = null;

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * The date of birth for the practitioner.
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $birthDate
     */
    private $birthDate = null;

    /**
     * Image of the person.
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType[] $photo
     */
    private $photo = null;

    /**
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner. For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     *
     * @var \TKusy\Hl7Fhir\R4\PractitionerQualificationType[] $qualification
     */
    private $qualification = null;

    /**
     * A language the practitioner can use in patient communication.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $communication
     */
    private $communication = null;

    /**
     * Adds as identifier
     *
     * An identifier that applies to this person in this role.
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
     * An identifier that applies to this person in this role.
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
     * An identifier that applies to this person in this role.
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
     * An identifier that applies to this person in this role.
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
     * An identifier that applies to this person in this role.
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
     * Gets as active
     *
     * Whether this practitioner's record is in active use.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this practitioner's record is in active use.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $active
     * @return self
     */
    public function setActive(\TKusy\Hl7Fhir\R4\BooleanType $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Adds as name
     *
     * The name(s) associated with the practitioner.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\HumanNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R4\HumanNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * The name(s) associated with the practitioner.
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
     * The name(s) associated with the practitioner.
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
     * The name(s) associated with the practitioner.
     *
     * @return \TKusy\Hl7Fhir\R4\HumanNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name(s) associated with the practitioner.
     *
     * @param \TKusy\Hl7Fhir\R4\HumanNameType[] $name
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
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7Fhir\R4\ContactPointType $telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * isset telecom
     *
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
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
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
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
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     *
     * @return \TKusy\Hl7Fhir\R4\ContactPointType[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Sets a new telecom
     *
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     *
     * @param \TKusy\Hl7Fhir\R4\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Adds as address
     *
     * Address(es) of the practitioner that are not role specific (typically home address). 
     * Work addresses are not typically entered in this property as they are usually role dependent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\AddressType $address
     */
    public function addToAddress(\TKusy\Hl7Fhir\R4\AddressType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * Address(es) of the practitioner that are not role specific (typically home address). 
     * Work addresses are not typically entered in this property as they are usually role dependent.
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
     * Address(es) of the practitioner that are not role specific (typically home address). 
     * Work addresses are not typically entered in this property as they are usually role dependent.
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
     * Address(es) of the practitioner that are not role specific (typically home address). 
     * Work addresses are not typically entered in this property as they are usually role dependent.
     *
     * @return \TKusy\Hl7Fhir\R4\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address(es) of the practitioner that are not role specific (typically home address). 
     * Work addresses are not typically entered in this property as they are usually role dependent.
     *
     * @param \TKusy\Hl7Fhir\R4\AddressType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     *
     * @return \TKusy\Hl7Fhir\R4\AdministrativeGenderType
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
     * @param \TKusy\Hl7Fhir\R4\AdministrativeGenderType $gender
     * @return self
     */
    public function setGender(\TKusy\Hl7Fhir\R4\AdministrativeGenderType $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * The date of birth for the practitioner.
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * The date of birth for the practitioner.
     *
     * @param \TKusy\Hl7Fhir\R4\DateType $birthDate
     * @return self
     */
    public function setBirthDate(\TKusy\Hl7Fhir\R4\DateType $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Adds as photo
     *
     * Image of the person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\AttachmentType $photo
     */
    public function addToPhoto(\TKusy\Hl7Fhir\R4\AttachmentType $photo)
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
     * @return \TKusy\Hl7Fhir\R4\AttachmentType[]
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
     * @param \TKusy\Hl7Fhir\R4\AttachmentType[] $photo
     * @return self
     */
    public function setPhoto(array $photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Adds as qualification
     *
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner. For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\PractitionerQualificationType $qualification
     */
    public function addToQualification(\TKusy\Hl7Fhir\R4\PractitionerQualificationType $qualification)
    {
        $this->qualification[] = $qualification;
        return $this;
    }

    /**
     * isset qualification
     *
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner. For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualification($index)
    {
        return isset($this->qualification[$index]);
    }

    /**
     * unset qualification
     *
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner. For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualification($index)
    {
        unset($this->qualification[$index]);
    }

    /**
     * Gets as qualification
     *
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner. For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     *
     * @return \TKusy\Hl7Fhir\R4\PractitionerQualificationType[]
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Sets a new qualification
     *
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner. For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     *
     * @param \TKusy\Hl7Fhir\R4\PractitionerQualificationType[] $qualification
     * @return self
     */
    public function setQualification(array $qualification)
    {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Adds as communication
     *
     * A language the practitioner can use in patient communication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $communication
     */
    public function addToCommunication(\TKusy\Hl7Fhir\R4\CodeableConceptType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * A language the practitioner can use in patient communication.
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
     * A language the practitioner can use in patient communication.
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
     * A language the practitioner can use in patient communication.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * A language the practitioner can use in patient communication.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $communication
     * @return self
     */
    public function setCommunication(array $communication)
    {
        $this->communication = $communication;
        return $this;
    }


}

