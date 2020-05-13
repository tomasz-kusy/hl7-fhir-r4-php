<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductAuthorizationJurisdictionalAuthorizationType
 *
 * The regulatory authorization of a medicinal product.
 * XSD Type: MedicinalProductAuthorization.JurisdictionalAuthorization
 */
class MedicinalProductAuthorizationJurisdictionalAuthorizationType extends BackboneElementType
{

    /**
     * The assigned number for the marketing authorization.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Country of authorization.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $country
     */
    private $country = null;

    /**
     * Jurisdiction within a country.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * The legal status of supply in a jurisdiction or region.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $legalStatusOfSupply
     */
    private $legalStatusOfSupply = null;

    /**
     * The start and expected end date of the authorization.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Adds as identifier
     *
     * The assigned number for the marketing authorization.
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
     * The assigned number for the marketing authorization.
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
     * The assigned number for the marketing authorization.
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
     * The assigned number for the marketing authorization.
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
     * The assigned number for the marketing authorization.
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
     * Gets as country
     *
     * Country of authorization.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Country of authorization.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $country
     * @return self
     */
    public function setCountry(\TKusy\Hl7Fhir\R4\CodeableConceptType $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdiction($index)
    {
        return isset($this->jurisdiction[$index]);
    }

    /**
     * unset jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdiction($index)
    {
        unset($this->jurisdiction[$index]);
    }

    /**
     * Gets as jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * Jurisdiction within a country.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as legalStatusOfSupply
     *
     * The legal status of supply in a jurisdiction or region.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * Sets a new legalStatusOfSupply
     *
     * The legal status of supply in a jurisdiction or region.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $legalStatusOfSupply
     * @return self
     */
    public function setLegalStatusOfSupply(\TKusy\Hl7Fhir\R4\CodeableConceptType $legalStatusOfSupply)
    {
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * The start and expected end date of the authorization.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * The start and expected end date of the authorization.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\TKusy\Hl7Fhir\R4\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }


}

