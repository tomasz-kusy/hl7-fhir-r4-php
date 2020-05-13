<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing PaymentReconciliationProcessNoteType
 *
 * This resource provides the details including amount of a payment and allocates the payment items being paid.
 * XSD Type: PaymentReconciliation.ProcessNote
 */
class PaymentReconciliationProcessNoteType extends BackboneElementType
{

    /**
     * The business purpose of the note text.
     *
     * @var \TKusy\Hl7Fhir\R4\NoteTypeType $type
     */
    private $type = null;

    /**
     * The explanation or description associated with the processing.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $text
     */
    private $text = null;

    /**
     * Gets as type
     *
     * The business purpose of the note text.
     *
     * @return \TKusy\Hl7Fhir\R4\NoteTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The business purpose of the note text.
     *
     * @param \TKusy\Hl7Fhir\R4\NoteTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\NoteTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as text
     *
     * The explanation or description associated with the processing.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The explanation or description associated with the processing.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }


}

