<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImagingSelectionInstanceType
 *
 * A selection of DICOM SOP instances and/or frames within a single Study and Series. This might include additional specifics such as an image region, an Observation UID or a Segmentation Number, allowing linkage to an Observation Resource or transferring this information along with the ImagingStudy Resource.
 * XSD Type: ImagingSelection.Instance
 */
class ImagingSelectionInstanceType extends BackboneElementType
{

    /**
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $uid
     */
    private $uid = null;

    /**
     * The Instance Number for the selected DICOM instance.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $number
     */
    private $number = null;

    /**
     * The SOP Class UID for the selected DICOM instance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $sopClass
     */
    private $sopClass = null;

    /**
     * Selected subset of the SOP Instance. The content and format of the subset item is determined by the SOP Class of the selected instance.
     *  May be one of:
     *  - A list of frame numbers selected from a multiframe SOP Instance.
     *  - A list of Content Item Observation UID values selected from a DICOM SR or other structured document SOP Instance.
     *  - A list of segment numbers selected from a segmentation SOP Instance.
     *  - A list of Region of Interest (ROI) numbers selected from a radiotherapy structure set SOP Instance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $subset
     */
    private $subset = null;

    /**
     * Each imaging selection instance or frame list might includes an image region, specified by a region type and a set of 2D coordinates.
     *  If the parent imagingSelection.instance contains a subset element of type frame, the image region applies to all frames in the subset list.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion2DType[] $imageRegion2D
     */
    private $imageRegion2D = null;

    /**
     * Each imaging selection might includes a 3D image region, specified by a region type and a set of 3D coordinates.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion3DType[] $imageRegion3D
     */
    private $imageRegion3D = null;

    /**
     * Gets as uid
     *
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $uid
     * @return self
     */
    public function setUid(\TKusy\Hl7Fhir\R5\IdType $uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as number
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $number
     * @return self
     */
    public function setNumber(?\TKusy\Hl7Fhir\R5\UnsignedIntType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as sopClass
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getSopClass()
    {
        return $this->sopClass;
    }

    /**
     * Sets a new sopClass
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $sopClass
     * @return self
     */
    public function setSopClass(?\TKusy\Hl7Fhir\R5\CodingType $sopClass = null)
    {
        $this->sopClass = $sopClass;
        return $this;
    }

    /**
     * Adds as subset
     *
     * Selected subset of the SOP Instance. The content and format of the subset item is determined by the SOP Class of the selected instance.
     *  May be one of:
     *  - A list of frame numbers selected from a multiframe SOP Instance.
     *  - A list of Content Item Observation UID values selected from a DICOM SR or other structured document SOP Instance.
     *  - A list of segment numbers selected from a segmentation SOP Instance.
     *  - A list of Region of Interest (ROI) numbers selected from a radiotherapy structure set SOP Instance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $subset
     */
    public function addToSubset(\TKusy\Hl7Fhir\R5\StringType $subset)
    {
        $this->subset[] = $subset;
        return $this;
    }

    /**
     * isset subset
     *
     * Selected subset of the SOP Instance. The content and format of the subset item is determined by the SOP Class of the selected instance.
     *  May be one of:
     *  - A list of frame numbers selected from a multiframe SOP Instance.
     *  - A list of Content Item Observation UID values selected from a DICOM SR or other structured document SOP Instance.
     *  - A list of segment numbers selected from a segmentation SOP Instance.
     *  - A list of Region of Interest (ROI) numbers selected from a radiotherapy structure set SOP Instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubset($index)
    {
        return isset($this->subset[$index]);
    }

    /**
     * unset subset
     *
     * Selected subset of the SOP Instance. The content and format of the subset item is determined by the SOP Class of the selected instance.
     *  May be one of:
     *  - A list of frame numbers selected from a multiframe SOP Instance.
     *  - A list of Content Item Observation UID values selected from a DICOM SR or other structured document SOP Instance.
     *  - A list of segment numbers selected from a segmentation SOP Instance.
     *  - A list of Region of Interest (ROI) numbers selected from a radiotherapy structure set SOP Instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubset($index)
    {
        unset($this->subset[$index]);
    }

    /**
     * Gets as subset
     *
     * Selected subset of the SOP Instance. The content and format of the subset item is determined by the SOP Class of the selected instance.
     *  May be one of:
     *  - A list of frame numbers selected from a multiframe SOP Instance.
     *  - A list of Content Item Observation UID values selected from a DICOM SR or other structured document SOP Instance.
     *  - A list of segment numbers selected from a segmentation SOP Instance.
     *  - A list of Region of Interest (ROI) numbers selected from a radiotherapy structure set SOP Instance.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getSubset()
    {
        return $this->subset;
    }

    /**
     * Sets a new subset
     *
     * Selected subset of the SOP Instance. The content and format of the subset item is determined by the SOP Class of the selected instance.
     *  May be one of:
     *  - A list of frame numbers selected from a multiframe SOP Instance.
     *  - A list of Content Item Observation UID values selected from a DICOM SR or other structured document SOP Instance.
     *  - A list of segment numbers selected from a segmentation SOP Instance.
     *  - A list of Region of Interest (ROI) numbers selected from a radiotherapy structure set SOP Instance.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $subset
     * @return self
     */
    public function setSubset(array $subset = null)
    {
        $this->subset = $subset;
        return $this;
    }

    /**
     * Adds as imageRegion2D
     *
     * Each imaging selection instance or frame list might includes an image region, specified by a region type and a set of 2D coordinates.
     *  If the parent imagingSelection.instance contains a subset element of type frame, the image region applies to all frames in the subset list.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion2DType $imageRegion2D
     */
    public function addToImageRegion2D(\TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion2DType $imageRegion2D)
    {
        $this->imageRegion2D[] = $imageRegion2D;
        return $this;
    }

    /**
     * isset imageRegion2D
     *
     * Each imaging selection instance or frame list might includes an image region, specified by a region type and a set of 2D coordinates.
     *  If the parent imagingSelection.instance contains a subset element of type frame, the image region applies to all frames in the subset list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageRegion2D($index)
    {
        return isset($this->imageRegion2D[$index]);
    }

    /**
     * unset imageRegion2D
     *
     * Each imaging selection instance or frame list might includes an image region, specified by a region type and a set of 2D coordinates.
     *  If the parent imagingSelection.instance contains a subset element of type frame, the image region applies to all frames in the subset list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageRegion2D($index)
    {
        unset($this->imageRegion2D[$index]);
    }

    /**
     * Gets as imageRegion2D
     *
     * Each imaging selection instance or frame list might includes an image region, specified by a region type and a set of 2D coordinates.
     *  If the parent imagingSelection.instance contains a subset element of type frame, the image region applies to all frames in the subset list.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion2DType[]
     */
    public function getImageRegion2D()
    {
        return $this->imageRegion2D;
    }

    /**
     * Sets a new imageRegion2D
     *
     * Each imaging selection instance or frame list might includes an image region, specified by a region type and a set of 2D coordinates.
     *  If the parent imagingSelection.instance contains a subset element of type frame, the image region applies to all frames in the subset list.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion2DType[] $imageRegion2D
     * @return self
     */
    public function setImageRegion2D(array $imageRegion2D = null)
    {
        $this->imageRegion2D = $imageRegion2D;
        return $this;
    }

    /**
     * Adds as imageRegion3D
     *
     * Each imaging selection might includes a 3D image region, specified by a region type and a set of 3D coordinates.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion3DType $imageRegion3D
     */
    public function addToImageRegion3D(\TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion3DType $imageRegion3D)
    {
        $this->imageRegion3D[] = $imageRegion3D;
        return $this;
    }

    /**
     * isset imageRegion3D
     *
     * Each imaging selection might includes a 3D image region, specified by a region type and a set of 3D coordinates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageRegion3D($index)
    {
        return isset($this->imageRegion3D[$index]);
    }

    /**
     * unset imageRegion3D
     *
     * Each imaging selection might includes a 3D image region, specified by a region type and a set of 3D coordinates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageRegion3D($index)
    {
        unset($this->imageRegion3D[$index]);
    }

    /**
     * Gets as imageRegion3D
     *
     * Each imaging selection might includes a 3D image region, specified by a region type and a set of 3D coordinates.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion3DType[]
     */
    public function getImageRegion3D()
    {
        return $this->imageRegion3D;
    }

    /**
     * Sets a new imageRegion3D
     *
     * Each imaging selection might includes a 3D image region, specified by a region type and a set of 3D coordinates.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionImageRegion3DType[] $imageRegion3D
     * @return self
     */
    public function setImageRegion3D(array $imageRegion3D = null)
    {
        $this->imageRegion3D = $imageRegion3D;
        return $this;
    }


}

