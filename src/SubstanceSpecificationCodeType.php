<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSpecificationCodeType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Code
 */
class SubstanceSpecificationCodeType extends BackboneElementType
{

    /**
     * The specific code.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Status of the code assignment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The date at which the code status is changed as part of the terminology maintenance.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $statusDate
     */
    private $statusDate = null;

    /**
     * Any comment can be provided in this field, if necessary.
     *
     * @var \TKusy\Hl7FhirR4\StringType $comment
     */
    private $comment = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as code
     *
     * The specific code.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The specific code.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status of the code assignment.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of the code assignment.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * The date at which the code status is changed as part of the terminology maintenance.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * The date at which the code status is changed as part of the terminology maintenance.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $statusDate
     * @return self
     */
    public function setStatusDate(\TKusy\Hl7FhirR4\DateTimeType $statusDate)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Any comment can be provided in this field, if necessary.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any comment can be provided in this field, if necessary.
     *
     * @param \TKusy\Hl7FhirR4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7FhirR4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as source
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7FhirR4\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Supporting literature.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Supporting literature.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }


}

