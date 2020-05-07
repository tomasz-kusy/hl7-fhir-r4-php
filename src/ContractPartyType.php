<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ContractPartyType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Party
 */
class ContractPartyType extends BackboneElementType
{

    /**
     * Participant in the offer.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reference
     */
    private $reference = [
        
    ];

    /**
     * How the party participates in the offer.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Adds as reference
     *
     * Participant in the offer.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reference
     */
    public function addToReference(\TKusy\Hl7FhirR4\ReferenceType $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * Participant in the offer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * Participant in the offer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * Participant in the offer.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Participant in the offer.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as role
     *
     * How the party participates in the offer.
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
     * How the party participates in the offer.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7FhirR4\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }


}

