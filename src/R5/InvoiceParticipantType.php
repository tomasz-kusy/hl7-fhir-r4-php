<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InvoiceParticipantType
 *
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 * XSD Type: Invoice.Participant
 */
class InvoiceParticipantType extends BackboneElementType
{

    /**
     * Describes the type of involvement (e.g. transcriptionist, creator etc.). If the invoice has been created automatically, the Participant may be a billing engine or another kind of device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * The device, practitioner, etc. who performed or participated in the service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as role
     *
     * Describes the type of involvement (e.g. transcriptionist, creator etc.). If the invoice has been created automatically, the Participant may be a billing engine or another kind of device.
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
     * Describes the type of involvement (e.g. transcriptionist, creator etc.). If the invoice has been created automatically, the Participant may be a billing engine or another kind of device.
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
     * Gets as actor
     *
     * The device, practitioner, etc. who performed or participated in the service.
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
     * The device, practitioner, etc. who performed or participated in the service.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7Fhir\R5\ReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }


}

