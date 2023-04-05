<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MolecularSequenceType
 *
 * Representation of a molecular sequence.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MolecularSequence
 */
class MolecularSequenceType extends DomainResourceType
{

    /**
     * A unique identifier for this particular sequence instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @var \TKusy\Hl7Fhir\R5\SequenceTypeType $type
     */
    private $type = null;

    /**
     * Indicates the subject this sequence is associated too.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The actual focus of a molecular sequence when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the subject would be the child (proband) and the focus would be the parent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     */
    private $focus = null;

    /**
     * Specimen used for sequencing.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $specimen
     */
    private $specimen = null;

    /**
     * The method for sequencing, for example, chip information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * The organization or lab that should be responsible for this result.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Sequence that was observed.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $literal
     */
    private $literal = null;

    /**
     * Sequence that was observed as file content. Can be an actual file contents, or referenced by a URL to an external system.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType[] $formatted
     */
    private $formatted = null;

    /**
     * A sequence defined relative to another sequence.
     *
     * @var \TKusy\Hl7Fhir\R5\MolecularSequenceRelativeType[] $relative
     */
    private $relative = null;

    /**
     * Adds as identifier
     *
     * A unique identifier for this particular sequence instance.
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
     * A unique identifier for this particular sequence instance.
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
     * A unique identifier for this particular sequence instance.
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
     * A unique identifier for this particular sequence instance.
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
     * A unique identifier for this particular sequence instance.
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
     * Gets as type
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @return \TKusy\Hl7Fhir\R5\SequenceTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @param \TKusy\Hl7Fhir\R5\SequenceTypeType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\SequenceTypeType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Indicates the subject this sequence is associated too.
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
     * Indicates the subject this sequence is associated too.
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
     * Adds as focus
     *
     * The actual focus of a molecular sequence when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the subject would be the child (proband) and the focus would be the parent.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R5\ReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The actual focus of a molecular sequence when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the subject would be the child (proband) and the focus would be the parent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocus($index)
    {
        return isset($this->focus[$index]);
    }

    /**
     * unset focus
     *
     * The actual focus of a molecular sequence when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the subject would be the child (proband) and the focus would be the parent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocus($index)
    {
        unset($this->focus[$index]);
    }

    /**
     * Gets as focus
     *
     * The actual focus of a molecular sequence when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the subject would be the child (proband) and the focus would be the parent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The actual focus of a molecular sequence when it is not the patient of record representing something or someone associated with the patient such as a spouse, parent, child, or sibling. For example, in trio testing, the subject would be the child (proband) and the focus would be the parent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as specimen
     *
     * Specimen used for sequencing.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * Specimen used for sequencing.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $specimen
     * @return self
     */
    public function setSpecimen(?\TKusy\Hl7Fhir\R5\ReferenceType $specimen = null)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Gets as device
     *
     * The method for sequencing, for example, chip information.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The method for sequencing, for example, chip information.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(?\TKusy\Hl7Fhir\R5\ReferenceType $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as performer
     *
     * The organization or lab that should be responsible for this result.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The organization or lab that should be responsible for this result.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $performer
     * @return self
     */
    public function setPerformer(?\TKusy\Hl7Fhir\R5\ReferenceType $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as literal
     *
     * Sequence that was observed.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLiteral()
    {
        return $this->literal;
    }

    /**
     * Sets a new literal
     *
     * Sequence that was observed.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $literal
     * @return self
     */
    public function setLiteral(?\TKusy\Hl7Fhir\R5\StringType $literal = null)
    {
        $this->literal = $literal;
        return $this;
    }

    /**
     * Adds as formatted
     *
     * Sequence that was observed as file content. Can be an actual file contents, or referenced by a URL to an external system.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $formatted
     */
    public function addToFormatted(\TKusy\Hl7Fhir\R5\AttachmentType $formatted)
    {
        $this->formatted[] = $formatted;
        return $this;
    }

    /**
     * isset formatted
     *
     * Sequence that was observed as file content. Can be an actual file contents, or referenced by a URL to an external system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormatted($index)
    {
        return isset($this->formatted[$index]);
    }

    /**
     * unset formatted
     *
     * Sequence that was observed as file content. Can be an actual file contents, or referenced by a URL to an external system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormatted($index)
    {
        unset($this->formatted[$index]);
    }

    /**
     * Gets as formatted
     *
     * Sequence that was observed as file content. Can be an actual file contents, or referenced by a URL to an external system.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType[]
     */
    public function getFormatted()
    {
        return $this->formatted;
    }

    /**
     * Sets a new formatted
     *
     * Sequence that was observed as file content. Can be an actual file contents, or referenced by a URL to an external system.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType[] $formatted
     * @return self
     */
    public function setFormatted(array $formatted = null)
    {
        $this->formatted = $formatted;
        return $this;
    }

    /**
     * Adds as relative
     *
     * A sequence defined relative to another sequence.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MolecularSequenceRelativeType $relative
     */
    public function addToRelative(\TKusy\Hl7Fhir\R5\MolecularSequenceRelativeType $relative)
    {
        $this->relative[] = $relative;
        return $this;
    }

    /**
     * isset relative
     *
     * A sequence defined relative to another sequence.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelative($index)
    {
        return isset($this->relative[$index]);
    }

    /**
     * unset relative
     *
     * A sequence defined relative to another sequence.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelative($index)
    {
        unset($this->relative[$index]);
    }

    /**
     * Gets as relative
     *
     * A sequence defined relative to another sequence.
     *
     * @return \TKusy\Hl7Fhir\R5\MolecularSequenceRelativeType[]
     */
    public function getRelative()
    {
        return $this->relative;
    }

    /**
     * Sets a new relative
     *
     * A sequence defined relative to another sequence.
     *
     * @param \TKusy\Hl7Fhir\R5\MolecularSequenceRelativeType[] $relative
     * @return self
     */
    public function setRelative(array $relative = null)
    {
        $this->relative = $relative;
        return $this;
    }


}

