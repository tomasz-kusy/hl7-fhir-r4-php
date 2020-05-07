<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DetectedIssueMitigationType
 *
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, etc.
 * XSD Type: DetectedIssue.Mitigation
 */
class DetectedIssueMitigationType extends BackboneElementType
{

    /**
     * Describes the action that was taken or the observation that was made that reduces/eliminates the risk associated with the identified issue.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $action
     */
    private $action = null;

    /**
     * Indicates when the mitigating action was documented.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * Identifies the practitioner who determined the mitigation and takes responsibility for the mitigation step occurring.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $author
     */
    private $author = null;

    /**
     * Gets as action
     *
     * Describes the action that was taken or the observation that was made that reduces/eliminates the risk associated with the identified issue.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $action
     * @return self
     */
    public function setAction(\TKusy\Hl7FhirR4\CodeableConceptType $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as date
     *
     * Indicates when the mitigating action was documented.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as author
     *
     * Identifies the practitioner who determined the mitigation and takes responsibility for the mitigation step occurring.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }


}

