<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PatientType
 *
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Patient
 */
class PatientType extends DomainResourceType
{

    /**
     * An identifier for this patient.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this patient record is in active use. 
     * Many systems use this property to mark as non-current patients, such as those that have not been seen for a period of time based on an organization's business rules.
     *
     * It is often used to filter patient lists to exclude inactive patients
     *
     * Deceased patients may also be marked as inactive for the same reasons, but may be active for some time after death.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $active
     */
    private $active = null;

    /**
     * A name associated with the individual.
     *
     * @var \TKusy\Hl7FhirR4\HumanNameType[] $name
     */
    private $name = null;

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     *
     * @var \TKusy\Hl7FhirR4\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * The date of birth for the individual.
     *
     * @var \TKusy\Hl7FhirR4\DateType $birthDate
     */
    private $birthDate = null;

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $deceasedBoolean
     */
    private $deceasedBoolean = null;

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $deceasedDateTime
     */
    private $deceasedDateTime = null;

    /**
     * An address for the individual.
     *
     * @var \TKusy\Hl7FhirR4\AddressType[] $address
     */
    private $address = null;

    /**
     * This field contains a patient's most recent marital (civil) status.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $maritalStatus
     */
    private $maritalStatus = null;

    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $multipleBirthBoolean
     */
    private $multipleBirthBoolean = null;

    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $multipleBirthInteger
     */
    private $multipleBirthInteger = null;

    /**
     * Image of the patient.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType[] $photo
     */
    private $photo = null;

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @var \TKusy\Hl7FhirR4\PatientContactType[] $contact
     */
    private $contact = null;

    /**
     * A language which may be used to communicate with the patient about his or her health.
     *
     * @var \TKusy\Hl7FhirR4\PatientCommunicationType[] $communication
     */
    private $communication = null;

    /**
     * Patient's nominated care provider.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $generalPractitioner
     */
    private $generalPractitioner = null;

    /**
     * Organization that is the custodian of the patient record.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * Link to another patient resource that concerns the same actual patient.
     *
     * @var \TKusy\Hl7FhirR4\PatientLinkType[] $link
     */
    private $link = null;

    /**
     * Adds as identifier
     *
     * An identifier for this patient.
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
     * An identifier for this patient.
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
     * An identifier for this patient.
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
     * An identifier for this patient.
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
     * An identifier for this patient.
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
     * Whether this patient record is in active use. 
     * Many systems use this property to mark as non-current patients, such as those that have not been seen for a period of time based on an organization's business rules.
     *
     * It is often used to filter patient lists to exclude inactive patients
     *
     * Deceased patients may also be marked as inactive for the same reasons, but may be active for some time after death.
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
     * Whether this patient record is in active use. 
     * Many systems use this property to mark as non-current patients, such as those that have not been seen for a period of time based on an organization's business rules.
     *
     * It is often used to filter patient lists to exclude inactive patients
     *
     * Deceased patients may also be marked as inactive for the same reasons, but may be active for some time after death.
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
     * Adds as name
     *
     * A name associated with the individual.
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
     * A name associated with the individual.
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
     * A name associated with the individual.
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
     * A name associated with the individual.
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
     * A name associated with the individual.
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
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
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
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
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
     * The date of birth for the individual.
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
     * The date of birth for the individual.
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
     * Gets as deceasedBoolean
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
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
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
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
     * Gets as deceasedDateTime
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDeceasedDateTime()
    {
        return $this->deceasedDateTime;
    }

    /**
     * Sets a new deceasedDateTime
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $deceasedDateTime
     * @return self
     */
    public function setDeceasedDateTime(\TKusy\Hl7FhirR4\DateTimeType $deceasedDateTime)
    {
        $this->deceasedDateTime = $deceasedDateTime;
        return $this;
    }

    /**
     * Adds as address
     *
     * An address for the individual.
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
     * An address for the individual.
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
     * An address for the individual.
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
     * An address for the individual.
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
     * An address for the individual.
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
     * Gets as maritalStatus
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Sets a new maritalStatus
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $maritalStatus
     * @return self
     */
    public function setMaritalStatus(\TKusy\Hl7FhirR4\CodeableConceptType $maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Gets as multipleBirthBoolean
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getMultipleBirthBoolean()
    {
        return $this->multipleBirthBoolean;
    }

    /**
     * Sets a new multipleBirthBoolean
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $multipleBirthBoolean
     * @return self
     */
    public function setMultipleBirthBoolean(\TKusy\Hl7FhirR4\BooleanType $multipleBirthBoolean)
    {
        $this->multipleBirthBoolean = $multipleBirthBoolean;
        return $this;
    }

    /**
     * Gets as multipleBirthInteger
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getMultipleBirthInteger()
    {
        return $this->multipleBirthInteger;
    }

    /**
     * Sets a new multipleBirthInteger
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $multipleBirthInteger
     * @return self
     */
    public function setMultipleBirthInteger(\TKusy\Hl7FhirR4\IntegerType $multipleBirthInteger)
    {
        $this->multipleBirthInteger = $multipleBirthInteger;
        return $this;
    }

    /**
     * Adds as photo
     *
     * Image of the patient.
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
     * Image of the patient.
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
     * Image of the patient.
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
     * Image of the patient.
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
     * Image of the patient.
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
     * Adds as contact
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PatientContactType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\PatientContactType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @return \TKusy\Hl7FhirR4\PatientContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param \TKusy\Hl7FhirR4\PatientContactType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as communication
     *
     * A language which may be used to communicate with the patient about his or her health.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PatientCommunicationType $communication
     */
    public function addToCommunication(\TKusy\Hl7FhirR4\PatientCommunicationType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * A language which may be used to communicate with the patient about his or her health.
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
     * A language which may be used to communicate with the patient about his or her health.
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
     * A language which may be used to communicate with the patient about his or her health.
     *
     * @return \TKusy\Hl7FhirR4\PatientCommunicationType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * A language which may be used to communicate with the patient about his or her health.
     *
     * @param \TKusy\Hl7FhirR4\PatientCommunicationType[] $communication
     * @return self
     */
    public function setCommunication(array $communication)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Adds as generalPractitioner
     *
     * Patient's nominated care provider.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $generalPractitioner
     */
    public function addToGeneralPractitioner(\TKusy\Hl7FhirR4\ReferenceType $generalPractitioner)
    {
        $this->generalPractitioner[] = $generalPractitioner;
        return $this;
    }

    /**
     * isset generalPractitioner
     *
     * Patient's nominated care provider.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneralPractitioner($index)
    {
        return isset($this->generalPractitioner[$index]);
    }

    /**
     * unset generalPractitioner
     *
     * Patient's nominated care provider.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneralPractitioner($index)
    {
        unset($this->generalPractitioner[$index]);
    }

    /**
     * Gets as generalPractitioner
     *
     * Patient's nominated care provider.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getGeneralPractitioner()
    {
        return $this->generalPractitioner;
    }

    /**
     * Sets a new generalPractitioner
     *
     * Patient's nominated care provider.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $generalPractitioner
     * @return self
     */
    public function setGeneralPractitioner(array $generalPractitioner)
    {
        $this->generalPractitioner = $generalPractitioner;
        return $this;
    }

    /**
     * Gets as managingOrganization
     *
     * Organization that is the custodian of the patient record.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * Organization that is the custodian of the patient record.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(\TKusy\Hl7FhirR4\ReferenceType $managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Adds as link
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PatientLinkType $link
     */
    public function addToLink(\TKusy\Hl7FhirR4\PatientLinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @return \TKusy\Hl7FhirR4\PatientLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @param \TKusy\Hl7FhirR4\PatientLinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }


}

