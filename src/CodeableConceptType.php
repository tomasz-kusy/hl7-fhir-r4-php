<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeableConceptType
 *
 * A concept that may be defined by a formal reference to a terminology or ontology or may be provided by text.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: CodeableConcept
 */
class CodeableConceptType extends ElementType
{

    /**
     * A reference to a code defined by a terminology system.
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $coding
     */
    private $coding = null;

    /**
     * A human language representation of the concept as seen/selected/uttered by the user who entered the data and/or which represents the intended meaning of the user.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Adds as coding
     *
     * A reference to a code defined by a terminology system.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $coding
     */
    public function addToCoding(\TKusy\Hl7FhirR4\CodingType $coding)
    {
        $this->coding[] = $coding;
        return $this;
    }

    /**
     * isset coding
     *
     * A reference to a code defined by a terminology system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoding($index)
    {
        return isset($this->coding[$index]);
    }

    /**
     * unset coding
     *
     * A reference to a code defined by a terminology system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoding($index)
    {
        unset($this->coding[$index]);
    }

    /**
     * Gets as coding
     *
     * A reference to a code defined by a terminology system.
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getCoding()
    {
        return $this->coding;
    }

    /**
     * Sets a new coding
     *
     * A reference to a code defined by a terminology system.
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $coding
     * @return self
     */
    public function setCoding(array $coding)
    {
        $this->coding = $coding;
        return $this;
    }

    /**
     * Gets as text
     *
     * A human language representation of the concept as seen/selected/uttered by the user who entered the data and/or which represents the intended meaning of the user.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A human language representation of the concept as seen/selected/uttered by the user who entered the data and/or which represents the intended meaning of the user.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }


}

