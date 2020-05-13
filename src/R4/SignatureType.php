<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SignatureType
 *
 * A signature along with supporting context. The signature may be a digital signature that is cryptographic in nature, or some other signature acceptable to the domain. This other signature may be as simple as a graphical image representing a hand-written signature, or a signature ceremony Different signature approaches have different utilities.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Signature
 */
class SignatureType extends ElementType
{

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $type
     */
    private $type = null;

    /**
     * When the digital signature was signed.
     *
     * @var \TKusy\Hl7Fhir\R4\InstantType $when
     */
    private $when = null;

    /**
     * A reference to an application-usable description of the identity that signed (e.g. the signature used their private key).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $who
     */
    private $who = null;

    /**
     * A reference to an application-usable description of the identity that is represented by the signature.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * A mime type that indicates the technical format of the target resources signed by the signature.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $targetFormat
     */
    private $targetFormat = null;

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jose for JWS, and image/* for a graphical image of a signature, etc.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $sigFormat
     */
    private $sigFormat = null;

    /**
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     *
     * @var \TKusy\Hl7Fhir\R4\Base64BinaryType $data
     */
    private $data = null;

    /**
     * Adds as type
     *
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R4\CodingType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as when
     *
     * When the digital signature was signed.
     *
     * @return \TKusy\Hl7Fhir\R4\InstantType
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Sets a new when
     *
     * When the digital signature was signed.
     *
     * @param \TKusy\Hl7Fhir\R4\InstantType $when
     * @return self
     */
    public function setWhen(\TKusy\Hl7Fhir\R4\InstantType $when)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * Gets as who
     *
     * A reference to an application-usable description of the identity that signed (e.g. the signature used their private key).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Sets a new who
     *
     * A reference to an application-usable description of the identity that signed (e.g. the signature used their private key).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $who
     * @return self
     */
    public function setWho(\TKusy\Hl7Fhir\R4\ReferenceType $who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * Gets as onBehalfOf
     *
     * A reference to an application-usable description of the identity that is represented by the signature.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * A reference to an application-usable description of the identity that is represented by the signature.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(\TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * Gets as targetFormat
     *
     * A mime type that indicates the technical format of the target resources signed by the signature.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getTargetFormat()
    {
        return $this->targetFormat;
    }

    /**
     * Sets a new targetFormat
     *
     * A mime type that indicates the technical format of the target resources signed by the signature.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $targetFormat
     * @return self
     */
    public function setTargetFormat(\TKusy\Hl7Fhir\R4\CodeType $targetFormat)
    {
        $this->targetFormat = $targetFormat;
        return $this;
    }

    /**
     * Gets as sigFormat
     *
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jose for JWS, and image/* for a graphical image of a signature, etc.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getSigFormat()
    {
        return $this->sigFormat;
    }

    /**
     * Sets a new sigFormat
     *
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jose for JWS, and image/* for a graphical image of a signature, etc.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $sigFormat
     * @return self
     */
    public function setSigFormat(\TKusy\Hl7Fhir\R4\CodeType $sigFormat)
    {
        $this->sigFormat = $sigFormat;
        return $this;
    }

    /**
     * Gets as data
     *
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     *
     * @return \TKusy\Hl7Fhir\R4\Base64BinaryType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * The base64 encoding of the Signature content. When signature is not recorded electronically this element would be empty.
     *
     * @param \TKusy\Hl7Fhir\R4\Base64BinaryType $data
     * @return self
     */
    public function setData(\TKusy\Hl7Fhir\R4\Base64BinaryType $data)
    {
        $this->data = $data;
        return $this;
    }


}

