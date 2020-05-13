<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ConsentPolicyType
 *
 * A record of a healthcare consumer’s choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Policy
 */
class ConsentPolicyType extends BackboneElementType
{

    /**
     * Entity or Organization having regulatory jurisdiction or accountability for enforcing policies pertaining to Consent Directives.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $authority
     */
    private $authority = null;

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $uri
     */
    private $uri = null;

    /**
     * Gets as authority
     *
     * Entity or Organization having regulatory jurisdiction or accountability for enforcing policies pertaining to Consent Directives.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Sets a new authority
     *
     * Entity or Organization having regulatory jurisdiction or accountability for enforcing policies pertaining to Consent Directives.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $authority
     * @return self
     */
    public function setAuthority(\TKusy\Hl7Fhir\R4\UriType $authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Gets as uri
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $uri
     * @return self
     */
    public function setUri(\TKusy\Hl7Fhir\R4\UriType $uri)
    {
        $this->uri = $uri;
        return $this;
    }


}

