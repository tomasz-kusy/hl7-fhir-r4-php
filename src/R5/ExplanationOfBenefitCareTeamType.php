<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitCareTeamType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.CareTeam
 */
class ExplanationOfBenefitCareTeamType extends BackboneElementType
{

    /**
     * A number to uniquely identify care team entries.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * Member of the team who provided the product or service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The party who is billing and/or responsible for the claimed products or services.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $responsible
     */
    private $responsible = null;

    /**
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * The specialization of the practitioner or provider which is applicable for this service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $specialty
     */
    private $specialty = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify care team entries.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify care team entries.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as provider
     *
     * Member of the team who provided the product or service.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * Member of the team who provided the product or service.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7Fhir\R5\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as responsible
     *
     * The party who is billing and/or responsible for the claimed products or services.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Sets a new responsible
     *
     * The party who is billing and/or responsible for the claimed products or services.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $responsible
     * @return self
     */
    public function setResponsible(?\TKusy\Hl7Fhir\R5\BooleanType $responsible = null)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as role
     *
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
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
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as specialty
     *
     * The specialization of the practitioner or provider which is applicable for this service.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Sets a new specialty
     *
     * The specialization of the practitioner or provider which is applicable for this service.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialty
     * @return self
     */
    public function setSpecialty(?\TKusy\Hl7Fhir\R5\CodeableConceptType $specialty = null)
    {
        $this->specialty = $specialty;
        return $this;
    }


}

