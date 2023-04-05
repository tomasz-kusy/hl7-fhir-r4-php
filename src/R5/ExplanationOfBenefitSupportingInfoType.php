<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient for which care is sought.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $timingDate
     */
    private $timingDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $valueIdentifier
     */
    private $valueIdentifier = null;

    /**
     * Provides the reason in the situation where a reason code is required in addition to the content.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $reason
     */
    private $reason = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify supporting information entries.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as category
     *
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient for which care is sought.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as timingDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }

    /**
     * Sets a new timingDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $timingDate
     * @return self
     */
    public function setTimingDate(?\TKusy\Hl7Fhir\R5\DateType $timingDate = null)
    {
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $valueBoolean = null)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $valueString
     * @return self
     */
    public function setValueString(?\TKusy\Hl7Fhir\R5\StringType $valueString = null)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(?\TKusy\Hl7Fhir\R5\ReferenceType $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as valueIdentifier
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * Sets a new valueIdentifier
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $valueIdentifier
     * @return self
     */
    public function setValueIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $valueIdentifier = null)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Provides the reason in the situation where a reason code is required in addition to the content.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
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
     * @param \TKusy\Hl7Fhir\R5\CodingType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodingType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }


}

