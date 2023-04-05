<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConsentPolicyBasisType
 *
 * A record of a healthcare consumer’s choices or choices made on their behalf by a third party, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.PolicyBasis
 */
class ConsentPolicyBasisType extends BackboneElementType
{

    /**
     * A Reference that identifies the policy the organization will enforce for this Consent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * A URL that links to a computable version of the policy the organization will enforce for this Consent.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $url
     */
    private $url = null;

    /**
     * Gets as reference
     *
     * A Reference that identifies the policy the organization will enforce for this Consent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A Reference that identifies the policy the organization will enforce for this Consent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\ReferenceType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as url
     *
     * A URL that links to a computable version of the policy the organization will enforce for this Consent.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * A URL that links to a computable version of the policy the organization will enforce for this Consent.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UrlType $url = null)
    {
        $this->url = $url;
        return $this;
    }


}

