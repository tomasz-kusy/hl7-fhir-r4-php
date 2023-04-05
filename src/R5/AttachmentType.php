<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AttachmentType
 *
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Attachment
 */
class AttachmentType extends DataTypeType
{

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $contentType
     */
    private $contentType = null;

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $language
     */
    private $language = null;

    /**
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     *
     * @var \TKusy\Hl7Fhir\R5\Base64BinaryType $data
     */
    private $data = null;

    /**
     * A location where the data can be accessed.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $url
     */
    private $url = null;

    /**
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     *
     * @var \TKusy\Hl7Fhir\R5\Integer64Type $size
     */
    private $size = null;

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @var \TKusy\Hl7Fhir\R5\Base64BinaryType $hash
     */
    private $hash = null;

    /**
     * A label or set of text to display in place of the data.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The date that the attachment was first created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $creation
     */
    private $creation = null;

    /**
     * Height of the image in pixels (photo/video).
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $height
     */
    private $height = null;

    /**
     * Width of the image in pixels (photo/video).
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $width
     */
    private $width = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $frames
     */
    private $frames = null;

    /**
     * The duration of the recording in seconds - for audio and video.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $duration
     */
    private $duration = null;

    /**
     * The number of pages when printed.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $pages
     */
    private $pages = null;

    /**
     * Gets as contentType
     *
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
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
     * @param \TKusy\Hl7Fhir\R5\CodeType $contentType
     * @return self
     */
    public function setContentType(?\TKusy\Hl7Fhir\R5\CodeType $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as language
     *
     * The human language of the content. The value can be any valid value according to BCP 47.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
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
     * @param \TKusy\Hl7Fhir\R5\CodeType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as data
     *
     * The actual data of the attachment - a sequence of bytes, base64 encoded.
     *
     * @return \TKusy\Hl7Fhir\R5\Base64BinaryType
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
     * @param \TKusy\Hl7Fhir\R5\Base64BinaryType $data
     * @return self
     */
    public function setData(?\TKusy\Hl7Fhir\R5\Base64BinaryType $data = null)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as url
     *
     * A location where the data can be accessed.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
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
     * @param \TKusy\Hl7Fhir\R5\UrlType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UrlType $url = null)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as size
     *
     * The number of bytes of data that make up this attachment (before base64 encoding, if that is done).
     *
     * @return \TKusy\Hl7Fhir\R5\Integer64Type
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
     * @param \TKusy\Hl7Fhir\R5\Integer64Type $size
     * @return self
     */
    public function setSize(?\TKusy\Hl7Fhir\R5\Integer64Type $size = null)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as hash
     *
     * The calculated hash of the data using SHA-1. Represented using base64.
     *
     * @return \TKusy\Hl7Fhir\R5\Base64BinaryType
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
     * @param \TKusy\Hl7Fhir\R5\Base64BinaryType $hash
     * @return self
     */
    public function setHash(?\TKusy\Hl7Fhir\R5\Base64BinaryType $hash = null)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * Gets as title
     *
     * A label or set of text to display in place of the data.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as creation
     *
     * The date that the attachment was first created.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $creation
     * @return self
     */
    public function setCreation(?\TKusy\Hl7Fhir\R5\DateTimeType $creation = null)
    {
        $this->creation = $creation;
        return $this;
    }

    /**
     * Gets as height
     *
     * Height of the image in pixels (photo/video).
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * Height of the image in pixels (photo/video).
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $height
     * @return self
     */
    public function setHeight(?\TKusy\Hl7Fhir\R5\PositiveIntType $height = null)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * Width of the image in pixels (photo/video).
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * Width of the image in pixels (photo/video).
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $width
     * @return self
     */
    public function setWidth(?\TKusy\Hl7Fhir\R5\PositiveIntType $width = null)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as frames
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * Sets a new frames
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $frames
     * @return self
     */
    public function setFrames(?\TKusy\Hl7Fhir\R5\PositiveIntType $frames = null)
    {
        $this->frames = $frames;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $duration
     * @return self
     */
    public function setDuration(?\TKusy\Hl7Fhir\R5\DecimalType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as pages
     *
     * The number of pages when printed.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Sets a new pages
     *
     * The number of pages when printed.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $pages
     * @return self
     */
    public function setPages(?\TKusy\Hl7Fhir\R5\PositiveIntType $pages = null)
    {
        $this->pages = $pages;
        return $this;
    }


}

