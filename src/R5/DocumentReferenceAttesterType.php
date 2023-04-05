<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DocumentReferenceAttesterType
 *
 * A reference to a document of any kind for any purpose. While the term “document” implies a more narrow focus, for this resource this "document" encompasses *any* serialized object with a mime-type, it includes formal patient-centric documents (CDA), clinical notes, scanned paper, non-patient specific documents like policy text, as well as a photo, video, or audio recording acquired or used in healthcare. The DocumentReference resource provides metadata about the document so that the document can be discovered and managed. The actual content may be inline base64 encoded data or provided by direct reference.
 * XSD Type: DocumentReference.Attester
 */
class DocumentReferenceAttesterType extends BackboneElementType
{

    /**
     * The type of attestation the authenticator offers.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $mode
     */
    private $mode = null;

    /**
     * When the document was attested by the party.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $time
     */
    private $time = null;

    /**
     * Who attested the document in the specified way.
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
     * When the document was attested by the party.
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
     * When the document was attested by the party.
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
     * Who attested the document in the specified way.
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
     * Who attested the document in the specified way.
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

