<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PersonType
 *
 * Demographics and administrative information about a person independent of a specific health-related context.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Person
 */
class PersonType extends DomainResourceType
{

    /**
     * Identifier for a person within a particular scope.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this person's record is in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * A name associated with the person.
     *
     * @var \TKusy\Hl7Fhir\R5\HumanNameType[] $name
     */
    private $name = null;

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Administrative Gender.
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * The birth date for the person.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $birthDate
     */
    private $birthDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $deceasedBoolean
     */
    private $deceasedBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $deceasedDateTime
     */
    private $deceasedDateTime = null;

    /**
     * One or more addresses for the person.
     *
     * @var \TKusy\Hl7Fhir\R5\AddressType[] $address
     */
    private $address = null;

    /**
     * This field contains a person's most recent marital (civil) status.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $maritalStatus
     */
    private $maritalStatus = null;

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType[] $photo
     */
    private $photo = null;

    /**
     * A language which may be used to communicate with the person about his or her health.
     *
     * @var \TKusy\Hl7Fhir\R5\PersonCommunicationType[] $communication
     */
    private $communication = null;

    /**
     * The organization that is the custodian of the person record.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * Link to a resource that concerns the same actual person.
     *
     * @var \TKusy\Hl7Fhir\R5\PersonLinkType[] $link
     */
    private $link = null;

    /**
     * Adds as identifier
     *
     * Identifier for a person within a particular scope.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as active
     *
     * Whether this person's record is in active use.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this person's record is in active use.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $active
     * @return self
     */
    public function setActive(?\TKusy\Hl7Fhir\R5\BooleanType $active = null)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Adds as name
     *
     * A name associated with the person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\HumanNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\HumanNameType $name)
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
     * @return \TKusy\Hl7Fhir\R5\HumanNameType[]
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
     * @param \TKusy\Hl7Fhir\R5\HumanNameType[] $name
     * @return self
     */
    public function setName(array $name = null)
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
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7Fhir\R5\ContactPointType $telecom)
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
     * @return \TKusy\Hl7Fhir\R5\ContactPointType[]
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
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom = null)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Administrative Gender.
     *
     * @return \TKusy\Hl7Fhir\R5\AdministrativeGenderType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Administrative Gender.
     *
     * @param \TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender
     * @return self
     */
    public function setGender(?\TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * The birth date for the person.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * The birth date for the person.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $birthDate
     * @return self
     */
    public function setBirthDate(?\TKusy\Hl7Fhir\R5\DateType $birthDate = null)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as deceasedBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Sets a new deceasedBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $deceasedBoolean
     * @return self
     */
    public function setDeceasedBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $deceasedBoolean = null)
    {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Gets as deceasedDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDeceasedDateTime()
    {
        return $this->deceasedDateTime;
    }

    /**
     * Sets a new deceasedDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $deceasedDateTime
     * @return self
     */
    public function setDeceasedDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $deceasedDateTime = null)
    {
        $this->deceasedDateTime = $deceasedDateTime;
        return $this;
    }

    /**
     * Adds as address
     *
     * One or more addresses for the person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AddressType $address
     */
    public function addToAddress(\TKusy\Hl7Fhir\R5\AddressType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * One or more addresses for the person.
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
     * One or more addresses for the person.
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
     * One or more addresses for the person.
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * One or more addresses for the person.
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as maritalStatus
     *
     * This field contains a person's most recent marital (civil) status.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Sets a new maritalStatus
     *
     * This field contains a person's most recent marital (civil) status.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $maritalStatus
     * @return self
     */
    public function setMaritalStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $maritalStatus = null)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Adds as photo
     *
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $photo
     */
    public function addToPhoto(\TKusy\Hl7Fhir\R5\AttachmentType $photo)
    {
        $this->photo[] = $photo;
        return $this;
    }

    /**
     * isset photo
     *
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
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
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
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
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets a new photo
     *
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType[] $photo
     * @return self
     */
    public function setPhoto(array $photo = null)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Adds as communication
     *
     * A language which may be used to communicate with the person about his or her health.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PersonCommunicationType $communication
     */
    public function addToCommunication(\TKusy\Hl7Fhir\R5\PersonCommunicationType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * A language which may be used to communicate with the person about his or her health.
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
     * A language which may be used to communicate with the person about his or her health.
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
     * A language which may be used to communicate with the person about his or her health.
     *
     * @return \TKusy\Hl7Fhir\R5\PersonCommunicationType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * A language which may be used to communicate with the person about his or her health.
     *
     * @param \TKusy\Hl7Fhir\R5\PersonCommunicationType[] $communication
     * @return self
     */
    public function setCommunication(array $communication = null)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Gets as managingOrganization
     *
     * The organization that is the custodian of the person record.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * The organization that is the custodian of the person record.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Adds as link
     *
     * Link to a resource that concerns the same actual person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PersonLinkType $link
     */
    public function addToLink(\TKusy\Hl7Fhir\R5\PersonLinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Link to a resource that concerns the same actual person.
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
     * Link to a resource that concerns the same actual person.
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
     * Link to a resource that concerns the same actual person.
     *
     * @return \TKusy\Hl7Fhir\R5\PersonLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Link to a resource that concerns the same actual person.
     *
     * @param \TKusy\Hl7Fhir\R5\PersonLinkType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }


}

