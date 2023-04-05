<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ActivityDefinitionParticipantType
 *
 * This resource allows for the definition of some activity to be performed, independent of a particular patient, practitioner, or other performance context.
 * XSD Type: ActivityDefinition.Participant
 */
class ActivityDefinitionParticipantType extends BackboneElementType
{

    /**
     * The type of participant in the action.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionParticipantTypeType $type
     */
    private $type = null;

    /**
     * The type of participant in the action.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $typeCanonical
     */
    private $typeCanonical = null;

    /**
     * The type of participant in the action.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $typeReference
     */
    private $typeReference = null;

    /**
     * The role the participant should play in performing the described action.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Indicates how the actor will be involved in the action - author, reviewer, witness, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Gets as type
     *
     * The type of participant in the action.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionParticipantTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of participant in the action.
     *
     * @param \TKusy\Hl7Fhir\R5\ActionParticipantTypeType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\ActionParticipantTypeType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as typeCanonical
     *
     * The type of participant in the action.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getTypeCanonical()
    {
        return $this->typeCanonical;
    }

    /**
     * Sets a new typeCanonical
     *
     * The type of participant in the action.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $typeCanonical
     * @return self
     */
    public function setTypeCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $typeCanonical = null)
    {
        $this->typeCanonical = $typeCanonical;
        return $this;
    }

    /**
     * Gets as typeReference
     *
     * The type of participant in the action.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getTypeReference()
    {
        return $this->typeReference;
    }

    /**
     * Sets a new typeReference
     *
     * The type of participant in the action.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $typeReference
     * @return self
     */
    public function setTypeReference(?\TKusy\Hl7Fhir\R5\ReferenceType $typeReference = null)
    {
        $this->typeReference = $typeReference;
        return $this;
    }

    /**
     * Gets as role
     *
     * The role the participant should play in performing the described action.
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
     * The role the participant should play in performing the described action.
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
     * Gets as function
     *
     * Indicates how the actor will be involved in the action - author, reviewer, witness, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * Indicates how the actor will be involved in the action - author, reviewer, witness, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     * @return self
     */
    public function setFunction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $function = null)
    {
        $this->function = $function;
        return $this;
    }


}

