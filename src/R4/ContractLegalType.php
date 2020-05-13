<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ContractLegalType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Legal
 */
class ContractLegalType extends BackboneElementType
{

    /**
     * Contract legal text in human renderable form. (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType $contentAttachment
     */
    private $contentAttachment = null;

    /**
     * Contract legal text in human renderable form. (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $contentReference
     */
    private $contentReference = null;

    /**
     * Gets as contentAttachment
     *
     * Contract legal text in human renderable form. (choose any one of content*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AttachmentType
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }

    /**
     * Sets a new contentAttachment
     *
     * Contract legal text in human renderable form. (choose any one of content*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AttachmentType $contentAttachment
     * @return self
     */
    public function setContentAttachment(\TKusy\Hl7Fhir\R4\AttachmentType $contentAttachment)
    {
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * Gets as contentReference
     *
     * Contract legal text in human renderable form. (choose any one of content*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Sets a new contentReference
     *
     * Contract legal text in human renderable form. (choose any one of content*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $contentReference
     * @return self
     */
    public function setContentReference(\TKusy\Hl7Fhir\R4\ReferenceType $contentReference)
    {
        $this->contentReference = $contentReference;
        return $this;
    }


}

