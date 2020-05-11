<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ContributorType
 *
 * A contributor to the content of a knowledge asset, including authors, editors, reviewers, and endorsers.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Contributor
 */
class ContributorType extends ElementType
{

    /**
     * The type of contributor.
     *
     * @var \TKusy\Hl7FhirR4\ContributorTypeType $type
     */
    private $type = null;

    /**
     * The name of the individual or organization responsible for the contribution.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Contact details to assist a user in finding and communicating with the contributor.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * Gets as type
     *
     * The type of contributor.
     *
     * @return \TKusy\Hl7FhirR4\ContributorTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of contributor.
     *
     * @param \TKusy\Hl7FhirR4\ContributorTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\ContributorTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the individual or organization responsible for the contribution.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the individual or organization responsible for the contribution.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details to assist a user in finding and communicating with the contributor.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ContactDetailType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details to assist a user in finding and communicating with the contributor.
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
     * Contact details to assist a user in finding and communicating with the contributor.
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
     * Contact details to assist a user in finding and communicating with the contributor.
     *
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details to assist a user in finding and communicating with the contributor.
     *
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

