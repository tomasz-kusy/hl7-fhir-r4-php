<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AnnotationType
 *
 * A text note which also contains information about who made the statement and when.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Annotation
 */
class AnnotationType extends DataTypeType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $authorReference
     */
    private $authorReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $authorString
     */
    private $authorString = null;

    /**
     * Indicates when this particular annotation was made.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $time
     */
    private $time = null;

    /**
     * The text of the annotation in markdown format.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $text
     */
    private $text = null;

    /**
     * Gets as authorReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthorReference()
    {
        return $this->authorReference;
    }

    /**
     * Sets a new authorReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $authorReference
     * @return self
     */
    public function setAuthorReference(?\TKusy\Hl7Fhir\R5\ReferenceType $authorReference = null)
    {
        $this->authorReference = $authorReference;
        return $this;
    }

    /**
     * Gets as authorString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAuthorString()
    {
        return $this->authorString;
    }

    /**
     * Sets a new authorString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $authorString
     * @return self
     */
    public function setAuthorString(?\TKusy\Hl7Fhir\R5\StringType $authorString = null)
    {
        $this->authorString = $authorString;
        return $this;
    }

    /**
     * Gets as time
     *
     * Indicates when this particular annotation was made.
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
     * Indicates when this particular annotation was made.
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
     * Gets as text
     *
     * The text of the annotation in markdown format.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The text of the annotation in markdown format.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R5\MarkdownType $text)
    {
        $this->text = $text;
        return $this;
    }


}

