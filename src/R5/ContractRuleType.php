<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ContractRuleType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Rule
 */
class ContractRuleType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $contentAttachment
     */
    private $contentAttachment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $contentReference
     */
    private $contentReference = null;

    /**
     * Gets as contentAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }

    /**
     * Sets a new contentAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $contentAttachment
     * @return self
     */
    public function setContentAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $contentAttachment = null)
    {
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * Gets as contentReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Sets a new contentReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $contentReference
     * @return self
     */
    public function setContentReference(?\TKusy\Hl7Fhir\R5\ReferenceType $contentReference = null)
    {
        $this->contentReference = $contentReference;
        return $this;
    }


}

