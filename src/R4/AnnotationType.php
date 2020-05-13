<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing AnnotationType
 *
 * A text note which also contains information about who made the statement and when.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Annotation
 */
class AnnotationType extends ElementType
{

    /**
     * The individual responsible for making the annotation. (choose any one of author*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $authorReference
     */
    private $authorReference = null;

    /**
     * The individual responsible for making the annotation. (choose any one of author*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $authorString
     */
    private $authorString = null;

    /**
     * Indicates when this particular annotation was made.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $time
     */
    private $time = null;

    /**
     * The text of the annotation in markdown format.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $text
     */
    private $text = null;

    /**
     * Gets as authorReference
     *
     * The individual responsible for making the annotation. (choose any one of author*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAuthorReference()
    {
        return $this->authorReference;
    }

    /**
     * Sets a new authorReference
     *
     * The individual responsible for making the annotation. (choose any one of author*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $authorReference
     * @return self
     */
    public function setAuthorReference(\TKusy\Hl7Fhir\R4\ReferenceType $authorReference)
    {
        $this->authorReference = $authorReference;
        return $this;
    }

    /**
     * Gets as authorString
     *
     * The individual responsible for making the annotation. (choose any one of author*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAuthorString()
    {
        return $this->authorString;
    }

    /**
     * Sets a new authorString
     *
     * The individual responsible for making the annotation. (choose any one of author*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $authorString
     * @return self
     */
    public function setAuthorString(\TKusy\Hl7Fhir\R4\StringType $authorString)
    {
        $this->authorString = $authorString;
        return $this;
    }

    /**
     * Gets as time
     *
     * Indicates when this particular annotation was made.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $time
     * @return self
     */
    public function setTime(\TKusy\Hl7Fhir\R4\DateTimeType $time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as text
     *
     * The text of the annotation in markdown format.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $text
     * @return self
     */
    public function setText(\TKusy\Hl7Fhir\R4\MarkdownType $text)
    {
        $this->text = $text;
        return $this;
    }


}

