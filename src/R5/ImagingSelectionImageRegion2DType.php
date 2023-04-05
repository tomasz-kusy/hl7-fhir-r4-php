<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImagingSelectionImageRegion2DType
 *
 * A selection of DICOM SOP instances and/or frames within a single Study and Series. This might include additional specifics such as an image region, an Observation UID or a Segmentation Number, allowing linkage to an Observation Resource or transferring this information along with the ImagingStudy Resource.
 * XSD Type: ImagingSelection.ImageRegion2D
 */
class ImagingSelectionImageRegion2DType extends BackboneElementType
{

    /**
     * Specifies the type of image region.
     *
     * @var \TKusy\Hl7Fhir\R5\ImagingSelectionDGraphicTypeType $regionType
     */
    private $regionType = null;

    /**
     * The coordinates describing the image region. Encoded as a set of (column, row) pairs that denote positions in the selected image / frames specified with sub-pixel resolution.
     *  The origin at the TLHC of the TLHC pixel is 0.0\0.0, the BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number of columns\rows in the image / frames. The values must be within the range 0\0 to the number of columns\rows in the image / frames.
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
     * The coordinates describing the image region. Encoded as a set of (column, row) pairs that denote positions in the selected image / frames specified with sub-pixel resolution.
     *  The origin at the TLHC of the TLHC pixel is 0.0\0.0, the BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number of columns\rows in the image / frames. The values must be within the range 0\0 to the number of columns\rows in the image / frames.
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
     * The coordinates describing the image region. Encoded as a set of (column, row) pairs that denote positions in the selected image / frames specified with sub-pixel resolution.
     *  The origin at the TLHC of the TLHC pixel is 0.0\0.0, the BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number of columns\rows in the image / frames. The values must be within the range 0\0 to the number of columns\rows in the image / frames.
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
     * The coordinates describing the image region. Encoded as a set of (column, row) pairs that denote positions in the selected image / frames specified with sub-pixel resolution.
     *  The origin at the TLHC of the TLHC pixel is 0.0\0.0, the BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number of columns\rows in the image / frames. The values must be within the range 0\0 to the number of columns\rows in the image / frames.
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
     * The coordinates describing the image region. Encoded as a set of (column, row) pairs that denote positions in the selected image / frames specified with sub-pixel resolution.
     *  The origin at the TLHC of the TLHC pixel is 0.0\0.0, the BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number of columns\rows in the image / frames. The values must be within the range 0\0 to the number of columns\rows in the image / frames.
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
     * The coordinates describing the image region. Encoded as a set of (column, row) pairs that denote positions in the selected image / frames specified with sub-pixel resolution.
     *  The origin at the TLHC of the TLHC pixel is 0.0\0.0, the BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number of columns\rows in the image / frames. The values must be within the range 0\0 to the number of columns\rows in the image / frames.
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

