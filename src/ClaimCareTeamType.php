<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ClaimCareTeamType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.CareTeam
 */
class ClaimCareTeamType extends BackboneElementType
{

    /**
     * A number to uniquely identify care team entries.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * Member of the team who provided the product or service.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The party who is billing and/or responsible for the claimed products or services.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $responsible
     */
    private $responsible = null;

    /**
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * The qualification of the practitioner which is applicable for this service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $qualification
     */
    private $qualification = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify care team entries.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7FhirR4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as provider
     *
     * Member of the team who provided the product or service.
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
     * Member of the team who provided the product or service.
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
     * Gets as responsible
     *
     * The party who is billing and/or responsible for the claimed products or services.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $responsible
     * @return self
     */
    public function setResponsible(\TKusy\Hl7FhirR4\BooleanType $responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as role
     *
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
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
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
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
     * Gets as qualification
     *
     * The qualification of the practitioner which is applicable for this service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Sets a new qualification
     *
     * The qualification of the practitioner which is applicable for this service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $qualification
     * @return self
     */
    public function setQualification(\TKusy\Hl7FhirR4\CodeableConceptType $qualification)
    {
        $this->qualification = $qualification;
        return $this;
    }


}

