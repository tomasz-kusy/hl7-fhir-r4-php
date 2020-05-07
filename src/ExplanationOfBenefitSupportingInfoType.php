<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitSupportingInfoType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.SupportingInfo
 */
class ExplanationOfBenefitSupportingInfoType extends BackboneElementType
{

    /**
     * A number to uniquely identify supporting information entries.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient for which care is sought.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The date when or period to which this information refers. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $timingDate
     */
    private $timingDate = null;

    /**
     * The date when or period to which this information refers. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $valueString
     */
    private $valueString = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Provides the reason in the situation where a reason code is required in addition to the content.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $reason
     */
    private $reason = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify supporting information entries.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify supporting information entries.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7FhirR4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as category
     *
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient for which care is sought.
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
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient for which care is sought.
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
     * Gets as timingDate
     *
     * The date when or period to which this information refers. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }

    /**
     * Sets a new timingDate
     *
     * The date when or period to which this information refers. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $timingDate
     * @return self
     */
    public function setTimingDate(\TKusy\Hl7FhirR4\DateType $timingDate)
    {
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * The date when or period to which this information refers. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * The date when or period to which this information refers. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(\TKusy\Hl7FhirR4\PeriodType $timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(\TKusy\Hl7FhirR4\BooleanType $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $valueString
     * @return self
     */
    public function setValueString(\TKusy\Hl7FhirR4\StringType $valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(\TKusy\Hl7FhirR4\QuantityType $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(\TKusy\Hl7FhirR4\AttachmentType $valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(\TKusy\Hl7FhirR4\ReferenceType $valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Provides the reason in the situation where a reason code is required in addition to the content.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Provides the reason in the situation where a reason code is required in addition to the content.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $reason
     * @return self
     */
    public function setReason(\TKusy\Hl7FhirR4\CodingType $reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

