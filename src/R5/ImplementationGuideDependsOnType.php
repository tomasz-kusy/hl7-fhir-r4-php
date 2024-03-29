<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImplementationGuideDependsOnType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.DependsOn
 */
class ImplementationGuideDependsOnType extends BackboneElementType
{

    /**
     * A canonical reference to the Implementation guide for the dependency.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $uri
     */
    private $uri = null;

    /**
     * The NPM package name for the Implementation Guide that this IG depends on.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $packageId
     */
    private $packageId = null;

    /**
     * The version of the IG that is depended on, when the correct version is required to understand the IG correctly.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * A description explaining the nature of the dependency on the listed IG.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $reason
     */
    private $reason = null;

    /**
     * Gets as uri
     *
     * A canonical reference to the Implementation guide for the dependency.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * A canonical reference to the Implementation guide for the dependency.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $uri
     * @return self
     */
    public function setUri(\TKusy\Hl7Fhir\R5\CanonicalType $uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as packageId
     *
     * The NPM package name for the Implementation Guide that this IG depends on.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Sets a new packageId
     *
     * The NPM package name for the Implementation Guide that this IG depends on.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $packageId
     * @return self
     */
    public function setPackageId(?\TKusy\Hl7Fhir\R5\IdType $packageId = null)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the IG that is depended on, when the correct version is required to understand the IG correctly.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the IG that is depended on, when the correct version is required to understand the IG correctly.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A description explaining the nature of the dependency on the listed IG.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A description explaining the nature of the dependency on the listed IG.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\MarkdownType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }


}

