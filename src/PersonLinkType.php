<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PersonLinkType
 *
 * Demographics and administrative information about a person independent of a specific health-related context.
 * XSD Type: Person.Link
 */
class PersonLinkType extends BackboneElementType
{

    /**
     * The resource to which this actual person is associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $target
     */
    private $target = null;

    /**
     * Level of assurance that this link is associated with the target resource.
     *
     * @var \TKusy\Hl7FhirR4\IdentityAssuranceLevelType $assurance
     */
    private $assurance = null;

    /**
     * Gets as target
     *
     * The resource to which this actual person is associated.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * The resource to which this actual person is associated.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $target
     * @return self
     */
    public function setTarget(\TKusy\Hl7FhirR4\ReferenceType $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as assurance
     *
     * Level of assurance that this link is associated with the target resource.
     *
     * @return \TKusy\Hl7FhirR4\IdentityAssuranceLevelType
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Sets a new assurance
     *
     * Level of assurance that this link is associated with the target resource.
     *
     * @param \TKusy\Hl7FhirR4\IdentityAssuranceLevelType $assurance
     * @return self
     */
    public function setAssurance(\TKusy\Hl7FhirR4\IdentityAssuranceLevelType $assurance)
    {
        $this->assurance = $assurance;
        return $this;
    }


}

