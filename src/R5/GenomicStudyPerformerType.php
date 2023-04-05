<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GenomicStudyPerformerType
 *
 * A GenomicStudy is a set of analyses performed to analyze and generate genomic data.
 * XSD Type: GenomicStudy.Performer
 */
class GenomicStudyPerformerType extends BackboneElementType
{

    /**
     * The organization, healthcare professional, or others who participated in performing this analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Role of the actor for this analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Gets as actor
     *
     * The organization, healthcare professional, or others who participated in performing this analysis.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * The organization, healthcare professional, or others who participated in performing this analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     * @return self
     */
    public function setActor(?\TKusy\Hl7Fhir\R5\ReferenceType $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as role
     *
     * Role of the actor for this analysis.
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
     * Role of the actor for this analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $role = null)
    {
        $this->role = $role;
        return $this;
    }


}

