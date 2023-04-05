<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationEntryType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Entry
 */
class CitationEntryType extends BackboneElementType
{

    /**
     * The identity of the individual contributor.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $contributor
     */
    private $contributor = null;

    /**
     * For citation styles that use initials.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $forenameInitials
     */
    private $forenameInitials = null;

    /**
     * Organization affiliated with the contributor.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $affiliation
     */
    private $affiliation = null;

    /**
     * This element identifies the specific nature of an individual’s contribution with respect to the cited work.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $contributionType
     */
    private $contributionType = null;

    /**
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Contributions with accounting for time or number.
     *
     * @var \TKusy\Hl7Fhir\R5\CitationContributionInstanceType[] $contributionInstance
     */
    private $contributionInstance = null;

    /**
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $correspondingContact
     */
    private $correspondingContact = null;

    /**
     * Provides a numerical ranking to represent the degree of contributorship relative to other contributors, such as 1 for first author and 2 for second author.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $rankingOrder
     */
    private $rankingOrder = null;

    /**
     * Gets as contributor
     *
     * The identity of the individual contributor.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * The identity of the individual contributor.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $contributor
     * @return self
     */
    public function setContributor(\TKusy\Hl7Fhir\R5\ReferenceType $contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as forenameInitials
     *
     * For citation styles that use initials.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getForenameInitials()
    {
        return $this->forenameInitials;
    }

    /**
     * Sets a new forenameInitials
     *
     * For citation styles that use initials.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $forenameInitials
     * @return self
     */
    public function setForenameInitials(?\TKusy\Hl7Fhir\R5\StringType $forenameInitials = null)
    {
        $this->forenameInitials = $forenameInitials;
        return $this;
    }

    /**
     * Adds as affiliation
     *
     * Organization affiliated with the contributor.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $affiliation
     */
    public function addToAffiliation(\TKusy\Hl7Fhir\R5\ReferenceType $affiliation)
    {
        $this->affiliation[] = $affiliation;
        return $this;
    }

    /**
     * isset affiliation
     *
     * Organization affiliated with the contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffiliation($index)
    {
        return isset($this->affiliation[$index]);
    }

    /**
     * unset affiliation
     *
     * Organization affiliated with the contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffiliation($index)
    {
        unset($this->affiliation[$index]);
    }

    /**
     * Gets as affiliation
     *
     * Organization affiliated with the contributor.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Sets a new affiliation
     *
     * Organization affiliated with the contributor.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $affiliation
     * @return self
     */
    public function setAffiliation(array $affiliation = null)
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    /**
     * Adds as contributionType
     *
     * This element identifies the specific nature of an individual’s contribution with respect to the cited work.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $contributionType
     */
    public function addToContributionType(\TKusy\Hl7Fhir\R5\CodeableConceptType $contributionType)
    {
        $this->contributionType[] = $contributionType;
        return $this;
    }

    /**
     * isset contributionType
     *
     * This element identifies the specific nature of an individual’s contribution with respect to the cited work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributionType($index)
    {
        return isset($this->contributionType[$index]);
    }

    /**
     * unset contributionType
     *
     * This element identifies the specific nature of an individual’s contribution with respect to the cited work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributionType($index)
    {
        unset($this->contributionType[$index]);
    }

    /**
     * Gets as contributionType
     *
     * This element identifies the specific nature of an individual’s contribution with respect to the cited work.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getContributionType()
    {
        return $this->contributionType;
    }

    /**
     * Sets a new contributionType
     *
     * This element identifies the specific nature of an individual’s contribution with respect to the cited work.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $contributionType
     * @return self
     */
    public function setContributionType(array $contributionType = null)
    {
        $this->contributionType = $contributionType;
        return $this;
    }

    /**
     * Gets as role
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as contributionInstance
     *
     * Contributions with accounting for time or number.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CitationContributionInstanceType $contributionInstance
     */
    public function addToContributionInstance(\TKusy\Hl7Fhir\R5\CitationContributionInstanceType $contributionInstance)
    {
        $this->contributionInstance[] = $contributionInstance;
        return $this;
    }

    /**
     * isset contributionInstance
     *
     * Contributions with accounting for time or number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributionInstance($index)
    {
        return isset($this->contributionInstance[$index]);
    }

    /**
     * unset contributionInstance
     *
     * Contributions with accounting for time or number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributionInstance($index)
    {
        unset($this->contributionInstance[$index]);
    }

    /**
     * Gets as contributionInstance
     *
     * Contributions with accounting for time or number.
     *
     * @return \TKusy\Hl7Fhir\R5\CitationContributionInstanceType[]
     */
    public function getContributionInstance()
    {
        return $this->contributionInstance;
    }

    /**
     * Sets a new contributionInstance
     *
     * Contributions with accounting for time or number.
     *
     * @param \TKusy\Hl7Fhir\R5\CitationContributionInstanceType[] $contributionInstance
     * @return self
     */
    public function setContributionInstance(array $contributionInstance = null)
    {
        $this->contributionInstance = $contributionInstance;
        return $this;
    }

    /**
     * Gets as correspondingContact
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getCorrespondingContact()
    {
        return $this->correspondingContact;
    }

    /**
     * Sets a new correspondingContact
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $correspondingContact
     * @return self
     */
    public function setCorrespondingContact(?\TKusy\Hl7Fhir\R5\BooleanType $correspondingContact = null)
    {
        $this->correspondingContact = $correspondingContact;
        return $this;
    }

    /**
     * Gets as rankingOrder
     *
     * Provides a numerical ranking to represent the degree of contributorship relative to other contributors, such as 1 for first author and 2 for second author.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getRankingOrder()
    {
        return $this->rankingOrder;
    }

    /**
     * Sets a new rankingOrder
     *
     * Provides a numerical ranking to represent the degree of contributorship relative to other contributors, such as 1 for first author and 2 for second author.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $rankingOrder
     * @return self
     */
    public function setRankingOrder(?\TKusy\Hl7Fhir\R5\PositiveIntType $rankingOrder = null)
    {
        $this->rankingOrder = $rankingOrder;
        return $this;
    }


}

