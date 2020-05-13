<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $representation
     */
    private $representation = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType $attachment
     */
    private $attachment = null;

    /**
     * Gets as type
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as representation
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $representation
     * @return self
     */
    public function setRepresentation(\TKusy\Hl7Fhir\R4\StringType $representation)
    {
        $this->representation = $representation;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\AttachmentType
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
     * @param \TKusy\Hl7Fhir\R4\AttachmentType $attachment
     * @return self
     */
    public function setAttachment(\TKusy\Hl7Fhir\R4\AttachmentType $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }


}

