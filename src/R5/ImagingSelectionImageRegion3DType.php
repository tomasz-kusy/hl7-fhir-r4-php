<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImagingSelectionImageRegion3DType
 *
 * A selection of DICOM SOP instances and/or frames within a single Study and Series. This might include additional specifics such as an image region, an Observation UID or a Segmentation Number, allowing linkage to an Observation Resource or transferring this information along with the ImagingStudy Resource.
 * XSD Type: ImagingSelection.ImageRegion3D
 */
class ImagingSelectionImageRegion3DType extends BackboneElementType
{

    /**
     * Specifies the type of image region.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionDGraphicTypeType $regionType
     */
    private $regionType = null;

    /**
     * The coordinates describing the image region. Encoded as an ordered set of (x,y,z) triplets (in mm and may be negative) that define a region of interest in the patient-relative Reference Coordinate System defined by ImagingSelection.frameOfReferenceUid element.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType[] $coordinate
     */
    private $coordinate = null;

    /**
     * Gets as regionType
     *
     * Specifies the type of image region.
     *
     * @return \TKusy\Hl7Fhir\R5\ImagingSelectionDGraphicTypeType
     */
    public function getRegionType()
    {
        return $this->regionType;
    }

    /**
     * Sets a new regionType
     *
     * Specifies the type of image region.
     *
     * @param \TKusy\Hl7Fhir\R5\ImagingSelectionDGraphicTypeType $regionType
     * @return self
     */
    public function setRegionType(\TKusy\Hl7Fhir\R5\ImagingSelectionDGraphicTypeType $regionType)
    {
        $this->regionType = $regionType;
        return $this;
    }

    /**
     * Adds as coordinate
     *
     * The coordinates describing the image region. Encoded as an ordered set of (x,y,z) triplets (in mm and may be negative) that define a region of interest in the patient-relative Reference Coordinate System defined by ImagingSelection.frameOfReferenceUid element.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DecimalType $coordinate
     */
    public function addToCoordinate(\TKusy\Hl7Fhir\R5\DecimalType $coordinate)
    {
        $this->coordinate[] = $coordinate;
        return $this;
    }

    /**
     * isset coordinate
     *
     * The coordinates describing the image region. Encoded as an ordered set of (x,y,z) triplets (in mm and may be negative) that define a region of interest in the patient-relative Reference Coordinate System defined by ImagingSelection.frameOfReferenceUid element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoordinate($index)
    {
        return isset($this->coordinate[$index]);
    }

    /**
     * unset coordinate
     *
     * The coordinates describing the image region. Encoded as an ordered set of (x,y,z) triplets (in mm and may be negative) that define a region of interest in the patient-relative Reference Coordinate System defined by ImagingSelection.frameOfReferenceUid element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoordinate($index)
    {
        unset($this->coordinate[$index]);
    }

    /**
     * Gets as coordinate
     *
     * The coordinates describing the image region. Encoded as an ordered set of (x,y,z) triplets (in mm and may be negative) that define a region of interest in the patient-relative Reference Coordinate System defined by ImagingSelection.frameOfReferenceUid element.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType[]
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * Sets a new coordinate
     *
     * The coordinates describing the image region. Encoded as an ordered set of (x,y,z) triplets (in mm and may be negative) that define a region of interest in the patient-relative Reference Coordinate System defined by ImagingSelection.frameOfReferenceUid element.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType[] $coordinate
     * @return self
     */
    public function setCoordinate(array $coordinate)
    {
        $this->coordinate = $coordinate;
        return $this;
    }


}

