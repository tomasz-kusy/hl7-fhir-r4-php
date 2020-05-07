<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuideGlobalType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Global
 */
class ImplementationGuideGlobalType extends BackboneElementType
{

    /**
     * The type of resource that all instances must conform to.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $type
     */
    private $type = null;

    /**
     * A reference to the profile that all instances must conform to.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Gets as type
     *
     * The type of resource that all instances must conform to.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of resource that all instances must conform to.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as profile
     *
     * A reference to the profile that all instances must conform to.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * A reference to the profile that all instances must conform to.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

