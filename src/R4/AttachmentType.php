<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing AttachmentType
 *
 * For referring to data content defined in other formats.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Attachment
 */
class AttachmentType extends ElementType
{

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $contentType
     */
    private $contentType = null;

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $language
     */
    private $language = null;

    /**
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     *
     * @var \TKusy\Hl7Fhir\R4\Base64BinaryType $data
     */
    private $data = null;

    /**
     * A location where the data can be accessed.
     *
     * @var \TKusy\Hl7Fhir\R4\UrlType $url
     */
    private $url = null;

    /**
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     *
     * @var \TKusy\Hl7Fhir\R4\UnsignedIntType $size
     */
    private $size = null;

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @var \TKusy\Hl7Fhir\R4\Base64BinaryType $hash
     */
    private $hash = null;

    /**
     * A label or set of text to display in place of the data.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $title
     */
    private $title = null;

    /**
     * The date that the attachment was first created.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $creation
     */
    private $creation = null;

    /**
     * Gets as contentType
     *
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $contentType
     * @return self
     */
    public function setContentType(\TKusy\Hl7Fhir\R4\CodeType $contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as language
     *
     * The human language of the content. The value can be any valid value according to BCP 47.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The human language of the content. The value can be any valid value according to BCP 47.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7Fhir\R4\CodeType $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as data
     *
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
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
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     *
     * @param \TKusy\Hl7Fhir\R4\Base64BinaryType $data
     * @return self
     */
    public function setData(\TKusy\Hl7Fhir\R4\Base64BinaryType $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as url
     *
     * A location where the data can be accessed.
     *
     * @return \TKusy\Hl7Fhir\R4\UrlType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * A location where the data can be accessed.
     *
     * @param \TKusy\Hl7Fhir\R4\UrlType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R4\UrlType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as size
     *
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     *
     * @return \TKusy\Hl7Fhir\R4\UnsignedIntType
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     *
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType $size
     * @return self
     */
    public function setSize(\TKusy\Hl7Fhir\R4\UnsignedIntType $size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as hash
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @return \TKusy\Hl7Fhir\R4\Base64BinaryType
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Sets a new hash
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @param \TKusy\Hl7Fhir\R4\Base64BinaryType $hash
     * @return self
     */
    public function setHash(\TKusy\Hl7Fhir\R4\Base64BinaryType $hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * Gets as title
     *
     * A label or set of text to display in place of the data.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A label or set of text to display in place of the data.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as creation
     *
     * The date that the attachment was first created.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Sets a new creation
     *
     * The date that the attachment was first created.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $creation
     * @return self
     */
    public function setCreation(\TKusy\Hl7Fhir\R4\DateTimeType $creation)
    {
        $this->creation = $creation;
        return $this;
    }


}

