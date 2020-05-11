<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstancePolymerStructuralRepresentationType
 *
 * Todo.
 * XSD Type: SubstancePolymer.StructuralRepresentation
 */
class SubstancePolymerStructuralRepresentationType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Todo.
     *
     * @var string $representation
     */
    private $representation = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $attachment
     */
    private $attachment = null;

    /**
     * Gets as type
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as representation
     *
     * Todo.
     *
     * @return string
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Sets a new representation
     *
     * Todo.
     *
     * @param string $representation
     * @return self
     */
    public function setRepresentation($representation)
    {
        $this->representation = $representation;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $attachment
     * @return self
     */
    public function setAttachment(\TKusy\Hl7FhirR4\AttachmentType $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }


}

