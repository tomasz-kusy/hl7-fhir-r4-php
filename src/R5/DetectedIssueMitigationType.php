<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DetectedIssueMitigationType
 *
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, gaps in care, etc.
 * XSD Type: DetectedIssue.Mitigation
 */
class DetectedIssueMitigationType extends BackboneElementType
{

    /**
     * Describes the action that was taken or the observation that was made that reduces/eliminates the risk associated with the identified issue.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $action
     */
    private $action = null;

    /**
     * Indicates when the mitigating action was documented.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Identifies the practitioner who determined the mitigation and takes responsibility for the mitigation step occurring.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * Clinicians may add additional notes or justifications about the mitigation action. For example, patient can have this drug because they have had it before without any issues. Multiple justifications may be provided.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as action
     *
     * Describes the action that was taken or the observation that was made that reduces/eliminates the risk associated with the identified issue.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Describes the action that was taken or the observation that was made that reduces/eliminates the risk associated with the identified issue.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $action
     * @return self
     */
    public function setAction(\TKusy\Hl7Fhir\R5\CodeableConceptType $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as date
     *
     * Indicates when the mitigating action was documented.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Indicates when the mitigating action was documented.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as author
     *
     * Identifies the practitioner who determined the mitigation and takes responsibility for the mitigation step occurring.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Identifies the practitioner who determined the mitigation and takes responsibility for the mitigation step occurring.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as note
     *
     * Clinicians may add additional notes or justifications about the mitigation action. For example, patient can have this drug because they have had it before without any issues. Multiple justifications may be provided.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Clinicians may add additional notes or justifications about the mitigation action. For example, patient can have this drug because they have had it before without any issues. Multiple justifications may be provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Clinicians may add additional notes or justifications about the mitigation action. For example, patient can have this drug because they have had it before without any issues. Multiple justifications may be provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Clinicians may add additional notes or justifications about the mitigation action. For example, patient can have this drug because they have had it before without any issues. Multiple justifications may be provided.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Clinicians may add additional notes or justifications about the mitigation action. For example, patient can have this drug because they have had it before without any issues. Multiple justifications may be provided.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

