<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageEligibilityResponseItemType
 *
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.
 * XSD Type: CoverageEligibilityResponse.Item
 */
class CoverageEligibilityResponseItemType extends BackboneElementType
{

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * This contains the product, service, drug or other billing code for the item.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $productOrService
     */
    private $productOrService = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $modifier
     */
    private $modifier = null;

    /**
     * The practitioner who is eligible for the provision of the product or service.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicates the product or service is included in the coverage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $excluded
     */
    private $excluded = null;

    /**
     * A short name or tag for the benefit.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A richer description of the benefit or services covered.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $network
     */
    private $network = null;

    /**
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unit
     */
    private $unit = null;

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $term
     */
    private $term = null;

    /**
     * Benefits used to date.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityResponseBenefitType[] $benefit
     */
    private $benefit = null;

    /**
     * A boolean flag indicating whether a preauthorization is required prior to actual service delivery.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $authorizationRequired
     */
    private $authorizationRequired = null;

    /**
     * Codes or comments regarding information or actions associated with the preauthorization.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $authorizationSupporting
     */
    private $authorizationSupporting = null;

    /**
     * A web location for obtaining requirements or descriptive information regarding the preauthorization.
     *
     * @var \TKusy\Hl7FhirR4\UriType $authorizationUrl
     */
    private $authorizationUrl = null;

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as productOrService
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * Sets a new productOrService
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productOrService
     * @return self
     */
    public function setProductOrService(\TKusy\Hl7FhirR4\CodeableConceptType $productOrService)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * Adds as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $modifier
     */
    public function addToModifier(\TKusy\Hl7FhirR4\CodeableConceptType $modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * isset modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifier($index)
    {
        return isset($this->modifier[$index]);
    }

    /**
     * unset modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifier($index)
    {
        unset($this->modifier[$index]);
    }

    /**
     * Gets as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $modifier
     * @return self
     */
    public function setModifier(array $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as provider
     *
     * The practitioner who is eligible for the provision of the product or service.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The practitioner who is eligible for the provision of the product or service.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7FhirR4\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as excluded
     *
     * True if the indicated class of service is excluded from the plan, missing or False indicates the product or service is included in the coverage.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * Sets a new excluded
     *
     * True if the indicated class of service is excluded from the plan, missing or False indicates the product or service is included in the coverage.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $excluded
     * @return self
     */
    public function setExcluded(\TKusy\Hl7FhirR4\BooleanType $excluded)
    {
        $this->excluded = $excluded;
        return $this;
    }

    /**
     * Gets as name
     *
     * A short name or tag for the benefit.
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
     * A short name or tag for the benefit.
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
     * Gets as description
     *
     * A richer description of the benefit or services covered.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A richer description of the benefit or services covered.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as network
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or out-of-network providers.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $network
     * @return self
     */
    public function setNetwork(\TKusy\Hl7FhirR4\CodeableConceptType $network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unit
     * @return self
     */
    public function setUnit(\TKusy\Hl7FhirR4\CodeableConceptType $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as term
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $term
     * @return self
     */
    public function setTerm(\TKusy\Hl7FhirR4\CodeableConceptType $term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Adds as benefit
     *
     * Benefits used to date.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseBenefitType $benefit
     */
    public function addToBenefit(\TKusy\Hl7FhirR4\CoverageEligibilityResponseBenefitType $benefit)
    {
        $this->benefit[] = $benefit;
        return $this;
    }

    /**
     * isset benefit
     *
     * Benefits used to date.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBenefit($index)
    {
        return isset($this->benefit[$index]);
    }

    /**
     * unset benefit
     *
     * Benefits used to date.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBenefit($index)
    {
        unset($this->benefit[$index]);
    }

    /**
     * Gets as benefit
     *
     * Benefits used to date.
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityResponseBenefitType[]
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * Sets a new benefit
     *
     * Benefits used to date.
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityResponseBenefitType[] $benefit
     * @return self
     */
    public function setBenefit(array $benefit)
    {
        $this->benefit = $benefit;
        return $this;
    }

    /**
     * Gets as authorizationRequired
     *
     * A boolean flag indicating whether a preauthorization is required prior to actual service delivery.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAuthorizationRequired()
    {
        return $this->authorizationRequired;
    }

    /**
     * Sets a new authorizationRequired
     *
     * A boolean flag indicating whether a preauthorization is required prior to actual service delivery.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $authorizationRequired
     * @return self
     */
    public function setAuthorizationRequired(\TKusy\Hl7FhirR4\BooleanType $authorizationRequired)
    {
        $this->authorizationRequired = $authorizationRequired;
        return $this;
    }

    /**
     * Adds as authorizationSupporting
     *
     * Codes or comments regarding information or actions associated with the preauthorization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $authorizationSupporting
     */
    public function addToAuthorizationSupporting(\TKusy\Hl7FhirR4\CodeableConceptType $authorizationSupporting)
    {
        $this->authorizationSupporting[] = $authorizationSupporting;
        return $this;
    }

    /**
     * isset authorizationSupporting
     *
     * Codes or comments regarding information or actions associated with the preauthorization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizationSupporting($index)
    {
        return isset($this->authorizationSupporting[$index]);
    }

    /**
     * unset authorizationSupporting
     *
     * Codes or comments regarding information or actions associated with the preauthorization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizationSupporting($index)
    {
        unset($this->authorizationSupporting[$index]);
    }

    /**
     * Gets as authorizationSupporting
     *
     * Codes or comments regarding information or actions associated with the preauthorization.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAuthorizationSupporting()
    {
        return $this->authorizationSupporting;
    }

    /**
     * Sets a new authorizationSupporting
     *
     * Codes or comments regarding information or actions associated with the preauthorization.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $authorizationSupporting
     * @return self
     */
    public function setAuthorizationSupporting(array $authorizationSupporting)
    {
        $this->authorizationSupporting = $authorizationSupporting;
        return $this;
    }

    /**
     * Gets as authorizationUrl
     *
     * A web location for obtaining requirements or descriptive information regarding the preauthorization.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }

    /**
     * Sets a new authorizationUrl
     *
     * A web location for obtaining requirements or descriptive information regarding the preauthorization.
     *
     * @param \TKusy\Hl7FhirR4\UriType $authorizationUrl
     * @return self
     */
    public function setAuthorizationUrl(\TKusy\Hl7FhirR4\UriType $authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }


}

