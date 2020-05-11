<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing FlagType
 *
 * Prospective warnings of potential issues when providing care to the patient.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Flag
 */
class FlagType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this flag by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Supports basic workflow.
     *
     * @var \TKusy\Hl7FhirR4\FlagStatusType $status
     */
    private $status = null;

    /**
     * Allows a flag to be divided into different categories like clinical, administrative etc. Intended to be used as a means of filtering which flags are displayed to particular user or in a given context.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * The coded value or textual component of the flag to display to the user.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The patient, location, group, organization, or practitioner etc. this is about record this flag is associated with.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The period of time from the activation of the flag to inactivation of the flag. If the flag is active, the end of the period should be unspecified.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * This alert is only relevant during the encounter.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The person, organization or device that created the flag.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $author
     */
    private $author = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this flag by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this flag by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this flag by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this flag by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this flag by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Gets as status
     *
     * Supports basic workflow.
     *
     * @return \TKusy\Hl7FhirR4\FlagStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Supports basic workflow.
     *
     * @param \TKusy\Hl7FhirR4\FlagStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FlagStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * Allows a flag to be divided into different categories like clinical, administrative etc. Intended to be used as a means of filtering which flags are displayed to particular user or in a given context.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Allows a flag to be divided into different categories like clinical, administrative etc. Intended to be used as a means of filtering which flags are displayed to particular user or in a given context.
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
     * Allows a flag to be divided into different categories like clinical, administrative etc. Intended to be used as a means of filtering which flags are displayed to particular user or in a given context.
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
     * Allows a flag to be divided into different categories like clinical, administrative etc. Intended to be used as a means of filtering which flags are displayed to particular user or in a given context.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Allows a flag to be divided into different categories like clinical, administrative etc. Intended to be used as a means of filtering which flags are displayed to particular user or in a given context.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * The coded value or textual component of the flag to display to the user.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The coded value or textual component of the flag to display to the user.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient, location, group, organization, or practitioner etc. this is about record this flag is associated with.
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
     * The patient, location, group, organization, or practitioner etc. this is about record this flag is associated with.
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
     * Gets as period
     *
     * The period of time from the activation of the flag to inactivation of the flag. If the flag is active, the end of the period should be unspecified.
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
     * The period of time from the activation of the flag to inactivation of the flag. If the flag is active, the end of the period should be unspecified.
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
     * Gets as encounter
     *
     * This alert is only relevant during the encounter.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * This alert is only relevant during the encounter.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as author
     *
     * The person, organization or device that created the flag.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The person, organization or device that created the flag.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }


}

