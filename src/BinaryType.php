<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BinaryType
 *
 * A resource that represents the data of a single raw artifact as digital content accessible in its native format. A Binary resource can contain any content, whether text, image, pdf, zip archive, etc.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Binary
 */
class BinaryType extends ResourceType
{

    /**
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     *
     * @var \TKusy\Hl7FhirR4\CodeType $contentType
     */
    private $contentType = null;

    /**
     * This element identifies another resource that can be used as a proxy of the security sensitivity to use when deciding and enforcing access control rules for the Binary resource. Given that the Binary resource contains very few elements that can be used to determine the sensitivity of the data and relationships to individuals, the referenced resource stands in as a proxy equivalent for this purpose. This referenced resource may be related to the Binary (e.g. Media, DocumentReference), or may be some non-related Resource purely as a security proxy. E.g. to identify that the binary resource relates to a patient, and access should only be granted to applications that have access to the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $securityContext
     */
    private $securityContext = null;

    /**
     * The actual content, base64 encoded.
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $data
     */
    private $data = null;

    /**
     * Gets as contentType
     *
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * MimeType of the binary content represented as a standard MimeType (BCP 13).
     *
     * @param \TKusy\Hl7FhirR4\CodeType $contentType
     * @return self
     */
    public function setContentType(\TKusy\Hl7FhirR4\CodeType $contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as securityContext
     *
     * This element identifies another resource that can be used as a proxy of the security sensitivity to use when deciding and enforcing access control rules for the Binary resource. Given that the Binary resource contains very few elements that can be used to determine the sensitivity of the data and relationships to individuals, the referenced resource stands in as a proxy equivalent for this purpose. This referenced resource may be related to the Binary (e.g. Media, DocumentReference), or may be some non-related Resource purely as a security proxy. E.g. to identify that the binary resource relates to a patient, and access should only be granted to applications that have access to the patient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSecurityContext()
    {
        return $this->securityContext;
    }

    /**
     * Sets a new securityContext
     *
     * This element identifies another resource that can be used as a proxy of the security sensitivity to use when deciding and enforcing access control rules for the Binary resource. Given that the Binary resource contains very few elements that can be used to determine the sensitivity of the data and relationships to individuals, the referenced resource stands in as a proxy equivalent for this purpose. This referenced resource may be related to the Binary (e.g. Media, DocumentReference), or may be some non-related Resource purely as a security proxy. E.g. to identify that the binary resource relates to a patient, and access should only be granted to applications that have access to the patient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $securityContext
     * @return self
     */
    public function setSecurityContext(\TKusy\Hl7FhirR4\ReferenceType $securityContext)
    {
        $this->securityContext = $securityContext;
        return $this;
    }

    /**
     * Gets as data
     *
     * The actual content, base64 encoded.
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * The actual content, base64 encoded.
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $data
     * @return self
     */
    public function setData(\TKusy\Hl7FhirR4\Base64BinaryType $data)
    {
        $this->data = $data;
        return $this;
    }


}

