<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\ActionParticipantTypeType $type
     */
    private $type = null;

    /**
     * The role the participant should play in performing the described action.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Gets as type
     *
     * The type of participant in the action.
     *
     * @return \TKusy\Hl7Fhir\R4\ActionParticipantTypeType
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
     * @param \TKusy\Hl7Fhir\R4\ActionParticipantTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\ActionParticipantTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as role
     *
     * The role the participant should play in performing the described action.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7Fhir\R4\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }


}

