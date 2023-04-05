<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing QuestionnaireResponseType
 *
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: QuestionnaireResponse
 */
class QuestionnaireResponseType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this questionnaire response by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this questionnaire response. For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A procedure or observation that this questionnaire was performed as part of the execution of. For example, the surgery a checklist was executed as part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $questionnaire
     */
    private $questionnaire = null;

    /**
     * The current state of the questionnaire response.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireResponseStatusType $status
     */
    private $status = null;

    /**
     * The subject of the questionnaire response. This could be a patient, organization, practitioner, device, etc. This is who/what the answers apply to, but is not necessarily the source of information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this questionnaire response was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date and/or time that this questionnaire response was last modified by the user - e.g. changing answers or revising status.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authored
     */
    private $authored = null;

    /**
     * The individual or device that received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * The individual or device that answered the questions about the subject.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    private $source = null;

    /**
     * A group or question item from the original questionnaire for which answers are provided.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType[] $item
     */
    private $item = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this questionnaire response by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Business identifiers assigned to this questionnaire response by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Business identifiers assigned to this questionnaire response by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Business identifiers assigned to this questionnaire response by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifiers assigned to this questionnaire response by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this questionnaire response. For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this questionnaire response. For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this questionnaire response. For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this questionnaire response. For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this questionnaire response. For example, a ServiceRequest seeking an intake assessment or a decision support recommendation to assess for post-partum depression.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A procedure or observation that this questionnaire was performed as part of the execution of. For example, the surgery a checklist was executed as part of.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A procedure or observation that this questionnaire was performed as part of the execution of. For example, the surgery a checklist was executed as part of.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartOf($index)
    {
        return isset($this->partOf[$index]);
    }

    /**
     * unset partOf
     *
     * A procedure or observation that this questionnaire was performed as part of the execution of. For example, the surgery a checklist was executed as part of.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartOf($index)
    {
        unset($this->partOf[$index]);
    }

    /**
     * Gets as partOf
     *
     * A procedure or observation that this questionnaire was performed as part of the execution of. For example, the surgery a checklist was executed as part of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A procedure or observation that this questionnaire was performed as part of the execution of. For example, the surgery a checklist was executed as part of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as questionnaire
     *
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Sets a new questionnaire
     *
     * The Questionnaire that defines and organizes the questions for which answers are being provided.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $questionnaire
     * @return self
     */
    public function setQuestionnaire(\TKusy\Hl7Fhir\R5\CanonicalType $questionnaire)
    {
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the questionnaire response.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireResponseStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the questionnaire response.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\QuestionnaireResponseStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The subject of the questionnaire response. This could be a patient, organization, practitioner, device, etc. This is who/what the answers apply to, but is not necessarily the source of information.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The subject of the questionnaire response. This could be a patient, organization, practitioner, device, etc. This is who/what the answers apply to, but is not necessarily the source of information.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this questionnaire response was created or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter during which this questionnaire response was created or to which the creation of this record is tightly associated.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as authored
     *
     * The date and/or time that this questionnaire response was last modified by the user - e.g. changing answers or revising status.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getAuthored()
    {
        return $this->authored;
    }

    /**
     * Sets a new authored
     *
     * The date and/or time that this questionnaire response was last modified by the user - e.g. changing answers or revising status.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $authored
     * @return self
     */
    public function setAuthored(?\TKusy\Hl7Fhir\R5\DateTimeType $authored = null)
    {
        $this->authored = $authored;
        return $this;
    }

    /**
     * Gets as author
     *
     * The individual or device that received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
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
     * The individual or device that received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
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
     * Gets as source
     *
     * The individual or device that answered the questions about the subject.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The individual or device that answered the questions about the subject.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\ReferenceType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Adds as item
     *
     * A group or question item from the original questionnaire for which answers are provided.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * A group or question item from the original questionnaire for which answers are provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * A group or question item from the original questionnaire for which answers are provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * A group or question item from the original questionnaire for which answers are provided.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * A group or question item from the original questionnaire for which answers are provided.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}

