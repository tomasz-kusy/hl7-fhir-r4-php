<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ContractRuleType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Rule
 */
class ContractRuleType extends BackboneElementType
{

    /**
     * Computable Contract conveyed using a policy rule language (e.g. XACML, DKAL, SecPal). (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $contentAttachment
     */
    private $contentAttachment = null;

    /**
     * Computable Contract conveyed using a policy rule language (e.g. XACML, DKAL, SecPal). (choose any one of content*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $contentReference
     */
    private $contentReference = null;

    /**
     * Gets as contentAttachment
     *
     * Computable Contract conveyed using a policy rule language (e.g. XACML, DKAL, SecPal). (choose any one of content*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }

    /**
     * Sets a new contentAttachment
     *
     * Computable Contract conveyed using a policy rule language (e.g. XACML, DKAL, SecPal). (choose any one of content*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $contentAttachment
     * @return self
     */
    public function setContentAttachment(\TKusy\Hl7FhirR4\AttachmentType $contentAttachment)
    {
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * Gets as contentReference
     *
     * Computable Contract conveyed using a policy rule language (e.g. XACML, DKAL, SecPal). (choose any one of content*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Sets a new contentReference
     *
     * Computable Contract conveyed using a policy rule language (e.g. XACML, DKAL, SecPal). (choose any one of content*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $contentReference
     * @return self
     */
    public function setContentReference(\TKusy\Hl7FhirR4\ReferenceType $contentReference)
    {
        $this->contentReference = $contentReference;
        return $this;
    }


}

