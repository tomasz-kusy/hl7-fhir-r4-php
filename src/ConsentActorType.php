<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConsentActorType
 *
 * A record of a healthcare consumer’s choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Actor
 */
class ConsentActorType extends BackboneElementType
{

    /**
     * How the individual is involved in the resources content that is described in the exception.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * The resource that identifies the actor. To identify actors by type, use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as role
     *
     * How the individual is involved in the resources content that is described in the exception.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * How the individual is involved in the resources content that is described in the exception.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7FhirR4\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as reference
     *
     * The resource that identifies the actor. To identify actors by type, use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * The resource that identifies the actor. To identify actors by type, use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7FhirR4\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

