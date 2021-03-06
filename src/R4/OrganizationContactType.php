<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing OrganizationContactType
 *
 * A formally or informally recognized grouping of people or organizations formed for the purpose of achieving some form of collective action. Includes companies, institutions, corporations, departments, community groups, healthcare practice groups, payer/insurer, etc.
 * XSD Type: Organization.Contact
 */
class OrganizationContactType extends BackboneElementType
{

    /**
     * Indicates a purpose for which the contact can be reached.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $purpose
     */
    private $purpose = null;

    /**
     * A name associated with the contact.
     *
     * @var \TKusy\Hl7Fhir\R4\HumanNameType $name
     */
    private $name = null;

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * Visiting or postal addresses for the contact.
     *
     * @var \TKusy\Hl7Fhir\R4\AddressType $address
     */
    private $address = null;

    /**
     * Gets as purpose
     *
     * Indicates a purpose for which the contact can be reached.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Indicates a purpose for which the contact can be reached.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $purpose
     * @return self
     */
    public function setPurpose(\TKusy\Hl7Fhir\R4\CodeableConceptType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name associated with the contact.
     *
     * @return \TKusy\Hl7Fhir\R4\HumanNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name associated with the contact.
     *
     * @param \TKusy\Hl7Fhir\R4\HumanNameType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\HumanNameType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
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
     * Gets as address
     *
     * Visiting or postal addresses for the contact.
     *
     * @return \TKusy\Hl7Fhir\R4\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Visiting or postal addresses for the contact.
     *
     * @param \TKusy\Hl7Fhir\R4\AddressType $address
     * @return self
     */
    public function setAddress(\TKusy\Hl7Fhir\R4\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }


}

