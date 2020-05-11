<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing InsurancePlanType
 *
 * Details of a Health Insurance product/plan provided by an organization.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: InsurancePlan
 */
class InsurancePlanType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the health insurance product.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The kind of health insurance product.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Official name of the health insurance product as designated by the owner.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $alias
     */
    private $alias = null;

    /**
     * The period of time that the health insurance product is available.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * The entity that is providing the health insurance product and underwriting the risk. This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $ownedBy
     */
    private $ownedBy = null;

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $administeredBy
     */
    private $administeredBy = null;

    /**
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $coverageArea
     */
    private $coverageArea = null;

    /**
     * The contact for the health insurance product for a certain purpose.
     *
     * @var \TKusy\Hl7FhirR4\InsurancePlanContactType[] $contact
     */
    private $contact = null;

    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Reference to the network included in the health insurance product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $network
     */
    private $network = null;

    /**
     * Details about the coverage offered by the insurance product.
     *
     * @var \TKusy\Hl7FhirR4\InsurancePlanCoverageType[] $coverage
     */
    private $coverage = null;

    /**
     * Details about an insurance plan.
     *
     * @var \TKusy\Hl7FhirR4\InsurancePlanPlanType[] $plan
     */
    private $plan = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
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
     * The current state of the health insurance product.
     *
     * @return \TKusy\Hl7FhirR4\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the health insurance product.
     *
     * @param \TKusy\Hl7FhirR4\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as type
     *
     * The kind of health insurance product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The kind of health insurance product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The kind of health insurance product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The kind of health insurance product.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The kind of health insurance product.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * Official name of the health insurance product as designated by the owner.
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
     * Official name of the health insurance product as designated by the owner.
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
     * Adds as alias
     *
     * A list of alternate names that the product is known as, or was known as in the past.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $alias
     */
    public function addToAlias(\TKusy\Hl7FhirR4\StringType $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias
     *
     * A list of alternate names that the product is known as, or was known as in the past.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias
     *
     * A list of alternate names that the product is known as, or was known as in the past.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias
     *
     * A list of alternate names that the product is known as, or was known as in the past.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * A list of alternate names that the product is known as, or was known as in the past.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $alias
     * @return self
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period of time that the health insurance product is available.
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
     * The period of time that the health insurance product is available.
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
     * Gets as ownedBy
     *
     * The entity that is providing the health insurance product and underwriting the risk. This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getOwnedBy()
    {
        return $this->ownedBy;
    }

    /**
     * Sets a new ownedBy
     *
     * The entity that is providing the health insurance product and underwriting the risk. This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $ownedBy
     * @return self
     */
    public function setOwnedBy(\TKusy\Hl7FhirR4\ReferenceType $ownedBy)
    {
        $this->ownedBy = $ownedBy;
        return $this;
    }

    /**
     * Gets as administeredBy
     *
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAdministeredBy()
    {
        return $this->administeredBy;
    }

    /**
     * Sets a new administeredBy
     *
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $administeredBy
     * @return self
     */
    public function setAdministeredBy(\TKusy\Hl7FhirR4\ReferenceType $administeredBy)
    {
        $this->administeredBy = $administeredBy;
        return $this;
    }

    /**
     * Adds as coverageArea
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $coverageArea
     */
    public function addToCoverageArea(\TKusy\Hl7FhirR4\ReferenceType $coverageArea)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * isset coverageArea
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverageArea($index)
    {
        return isset($this->coverageArea[$index]);
    }

    /**
     * unset coverageArea
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverageArea($index)
    {
        unset($this->coverageArea[$index]);
    }

    /**
     * Gets as coverageArea
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * Sets a new coverageArea
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $coverageArea
     * @return self
     */
    public function setCoverageArea(array $coverageArea)
    {
        $this->coverageArea = $coverageArea;
        return $this;
    }

    /**
     * Adds as contact
     *
     * The contact for the health insurance product for a certain purpose.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\InsurancePlanContactType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\InsurancePlanContactType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * The contact for the health insurance product for a certain purpose.
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
     * The contact for the health insurance product for a certain purpose.
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
     * The contact for the health insurance product for a certain purpose.
     *
     * @return \TKusy\Hl7FhirR4\InsurancePlanContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * The contact for the health insurance product for a certain purpose.
     *
     * @param \TKusy\Hl7FhirR4\InsurancePlanContactType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * The technical endpoints providing access to services operated for the health insurance product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7FhirR4\ReferenceType $endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * isset endpoint
     *
     * The technical endpoints providing access to services operated for the health insurance product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndpoint($index)
    {
        return isset($this->endpoint[$index]);
    }

    /**
     * unset endpoint
     *
     * The technical endpoints providing access to services operated for the health insurance product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndpoint($index)
    {
        unset($this->endpoint[$index]);
    }

    /**
     * Gets as endpoint
     *
     * The technical endpoints providing access to services operated for the health insurance product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * The technical endpoints providing access to services operated for the health insurance product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Adds as network
     *
     * Reference to the network included in the health insurance product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $network
     */
    public function addToNetwork(\TKusy\Hl7FhirR4\ReferenceType $network)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * isset network
     *
     * Reference to the network included in the health insurance product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetwork($index)
    {
        return isset($this->network[$index]);
    }

    /**
     * unset network
     *
     * Reference to the network included in the health insurance product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetwork($index)
    {
        unset($this->network[$index]);
    }

    /**
     * Gets as network
     *
     * Reference to the network included in the health insurance product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Reference to the network included in the health insurance product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $network
     * @return self
     */
    public function setNetwork(array $network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Adds as coverage
     *
     * Details about the coverage offered by the insurance product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\InsurancePlanCoverageType $coverage
     */
    public function addToCoverage(\TKusy\Hl7FhirR4\InsurancePlanCoverageType $coverage)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * isset coverage
     *
     * Details about the coverage offered by the insurance product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverage($index)
    {
        return isset($this->coverage[$index]);
    }

    /**
     * unset coverage
     *
     * Details about the coverage offered by the insurance product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverage($index)
    {
        unset($this->coverage[$index]);
    }

    /**
     * Gets as coverage
     *
     * Details about the coverage offered by the insurance product.
     *
     * @return \TKusy\Hl7FhirR4\InsurancePlanCoverageType[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * Details about the coverage offered by the insurance product.
     *
     * @param \TKusy\Hl7FhirR4\InsurancePlanCoverageType[] $coverage
     * @return self
     */
    public function setCoverage(array $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Adds as plan
     *
     * Details about an insurance plan.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\InsurancePlanPlanType $plan
     */
    public function addToPlan(\TKusy\Hl7FhirR4\InsurancePlanPlanType $plan)
    {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * isset plan
     *
     * Details about an insurance plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlan($index)
    {
        return isset($this->plan[$index]);
    }

    /**
     * unset plan
     *
     * Details about an insurance plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlan($index)
    {
        unset($this->plan[$index]);
    }

    /**
     * Gets as plan
     *
     * Details about an insurance plan.
     *
     * @return \TKusy\Hl7FhirR4\InsurancePlanPlanType[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new plan
     *
     * Details about an insurance plan.
     *
     * @param \TKusy\Hl7FhirR4\InsurancePlanPlanType[] $plan
     * @return self
     */
    public function setPlan(array $plan)
    {
        $this->plan = $plan;
        return $this;
    }


}

