<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractSubjectType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Subject
 */
class ContractSubjectType extends BackboneElementType
{

    /**
     * The entity the action is performed or not performed on or for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $reference
     */
    private $reference = null;

    /**
     * Role type of agent assigned roles in this Contract.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Adds as reference
     *
     * The entity the action is performed or not performed on or for.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    public function addToReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * The entity the action is performed or not performed on or for.
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
     * The entity the action is performed or not performed on or for.
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
     * The entity the action is performed or not performed on or for.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * The entity the action is performed or not performed on or for.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $reference
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
     * Role type of agent assigned roles in this Contract.
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
     * Role type of agent assigned roles in this Contract.
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

