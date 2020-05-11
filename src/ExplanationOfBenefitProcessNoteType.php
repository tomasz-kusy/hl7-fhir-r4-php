<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitProcessNoteType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.ProcessNote
 */
class ExplanationOfBenefitProcessNoteType extends BackboneElementType
{

    /**
     * A number to uniquely identify a note entry.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $number
     */
    private $number = null;

    /**
     * The business purpose of the note text.
     *
     * @var \TKusy\Hl7FhirR4\NoteTypeType $type
     */
    private $type = null;

    /**
     * The explanation or description associated with the processing.
     *
     * @var \TKusy\Hl7FhirR4\StringType $text
     */
    private $text = null;

    /**
     * A code to define the language used in the text of the note.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $language
     */
    private $language = null;

    /**
     * Gets as number
     *
     * A number to uniquely identify a note entry.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A number to uniquely identify a note entry.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $number
     * @return self
     */
    public function setNumber(\TKusy\Hl7FhirR4\PositiveIntType $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as type
     *
     * The business purpose of the note text.
     *
     * @return \TKusy\Hl7FhirR4\NoteTypeType
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
     * @param \TKusy\Hl7FhirR4\NoteTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\NoteTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as text
     *
     * The explanation or description associated with the processing.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as language
     *
     * A code to define the language used in the text of the note.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * A code to define the language used in the text of the note.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7FhirR4\CodeableConceptType $language)
    {
        $this->language = $language;
        return $this;
    }


}

