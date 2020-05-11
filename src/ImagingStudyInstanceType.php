<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImagingStudyInstanceType
 *
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context. A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 * XSD Type: ImagingStudy.Instance
 */
class ImagingStudyInstanceType extends BackboneElementType
{

    /**
     * The DICOM SOP Instance UID for this image or other DICOM content.
     *
     * @var \TKusy\Hl7FhirR4\IdType $uid
     */
    private $uid = null;

    /**
     * DICOM instance type.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $sopClass
     */
    private $sopClass = null;

    /**
     * The number of instance in the series.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $number
     */
    private $number = null;

    /**
     * The description of the instance.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * Gets as uid
     *
     * The DICOM SOP Instance UID for this image or other DICOM content.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * The DICOM SOP Instance UID for this image or other DICOM content.
     *
     * @param \TKusy\Hl7FhirR4\IdType $uid
     * @return self
     */
    public function setUid(\TKusy\Hl7FhirR4\IdType $uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as sopClass
     *
     * DICOM instance type.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getSopClass()
    {
        return $this->sopClass;
    }

    /**
     * Sets a new sopClass
     *
     * DICOM instance type.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $sopClass
     * @return self
     */
    public function setSopClass(\TKusy\Hl7FhirR4\CodingType $sopClass)
    {
        $this->sopClass = $sopClass;
        return $this;
    }

    /**
     * Gets as number
     *
     * The number of instance in the series.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The number of instance in the series.
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $number
     * @return self
     */
    public function setNumber(\TKusy\Hl7FhirR4\UnsignedIntType $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as title
     *
     * The description of the instance.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The description of the instance.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


}

