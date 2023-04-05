<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CompositionAttesterType
 *
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 * XSD Type: Composition.Attester
 */
class CompositionAttesterType extends BackboneElementType
{

    /**
     * The type of attestation the authenticator offers.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $mode
     */
    private $mode = null;

    /**
     * When the composition was attested by the party.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $time
     */
    private $time = null;

    /**
     * Who attested the composition in the specified way.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $party
     */
    private $party = null;

    /**
     * Gets as mode
     *
     * The type of attestation the authenticator offers.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * The type of attestation the authenticator offers.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R5\CodeableConceptType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as time
     *
     * When the composition was attested by the party.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * When the composition was attested by the party.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $time
     * @return self
     */
    public function setTime(?\TKusy\Hl7Fhir\R5\DateTimeType $time = null)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as party
     *
     * Who attested the composition in the specified way.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * Who attested the composition in the specified way.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $party
     * @return self
     */
    public function setParty(?\TKusy\Hl7Fhir\R5\ReferenceType $party = null)
    {
        $this->party = $party;
        return $this;
    }


}

