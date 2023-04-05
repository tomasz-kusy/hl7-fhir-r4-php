<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BodyStructureBodyLandmarkOrientationType
 *
 * Record details about an anatomical structure. This resource may be used when a coded concept does not provide the necessary detail needed for the use case.
 * XSD Type: BodyStructure.BodyLandmarkOrientation
 */
class BodyStructureBodyLandmarkOrientationType extends BackboneElementType
{

    /**
     * A description of a landmark on the body used as a reference to locate something else.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $landmarkDescription
     */
    private $landmarkDescription = null;

    /**
     * An description of the direction away from a landmark something is located based on a radial clock dial.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $clockFacePosition
     */
    private $clockFacePosition = null;

    /**
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @var \TKusy\Hl7Fhir\R5\BodyStructureDistanceFromLandmarkType[] $distanceFromLandmark
     */
    private $distanceFromLandmark = null;

    /**
     * The surface area a body location is in relation to a landmark.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $surfaceOrientation
     */
    private $surfaceOrientation = null;

    /**
     * Adds as landmarkDescription
     *
     * A description of a landmark on the body used as a reference to locate something else.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $landmarkDescription
     */
    public function addToLandmarkDescription(\TKusy\Hl7Fhir\R5\CodeableConceptType $landmarkDescription)
    {
        $this->landmarkDescription[] = $landmarkDescription;
        return $this;
    }

    /**
     * isset landmarkDescription
     *
     * A description of a landmark on the body used as a reference to locate something else.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLandmarkDescription($index)
    {
        return isset($this->landmarkDescription[$index]);
    }

    /**
     * unset landmarkDescription
     *
     * A description of a landmark on the body used as a reference to locate something else.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLandmarkDescription($index)
    {
        unset($this->landmarkDescription[$index]);
    }

    /**
     * Gets as landmarkDescription
     *
     * A description of a landmark on the body used as a reference to locate something else.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getLandmarkDescription()
    {
        return $this->landmarkDescription;
    }

    /**
     * Sets a new landmarkDescription
     *
     * A description of a landmark on the body used as a reference to locate something else.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $landmarkDescription
     * @return self
     */
    public function setLandmarkDescription(array $landmarkDescription = null)
    {
        $this->landmarkDescription = $landmarkDescription;
        return $this;
    }

    /**
     * Adds as clockFacePosition
     *
     * An description of the direction away from a landmark something is located based on a radial clock dial.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $clockFacePosition
     */
    public function addToClockFacePosition(\TKusy\Hl7Fhir\R5\CodeableConceptType $clockFacePosition)
    {
        $this->clockFacePosition[] = $clockFacePosition;
        return $this;
    }

    /**
     * isset clockFacePosition
     *
     * An description of the direction away from a landmark something is located based on a radial clock dial.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClockFacePosition($index)
    {
        return isset($this->clockFacePosition[$index]);
    }

    /**
     * unset clockFacePosition
     *
     * An description of the direction away from a landmark something is located based on a radial clock dial.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClockFacePosition($index)
    {
        unset($this->clockFacePosition[$index]);
    }

    /**
     * Gets as clockFacePosition
     *
     * An description of the direction away from a landmark something is located based on a radial clock dial.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClockFacePosition()
    {
        return $this->clockFacePosition;
    }

    /**
     * Sets a new clockFacePosition
     *
     * An description of the direction away from a landmark something is located based on a radial clock dial.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $clockFacePosition
     * @return self
     */
    public function setClockFacePosition(array $clockFacePosition = null)
    {
        $this->clockFacePosition = $clockFacePosition;
        return $this;
    }

    /**
     * Adds as distanceFromLandmark
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BodyStructureDistanceFromLandmarkType $distanceFromLandmark
     */
    public function addToDistanceFromLandmark(\TKusy\Hl7Fhir\R5\BodyStructureDistanceFromLandmarkType $distanceFromLandmark)
    {
        $this->distanceFromLandmark[] = $distanceFromLandmark;
        return $this;
    }

    /**
     * isset distanceFromLandmark
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistanceFromLandmark($index)
    {
        return isset($this->distanceFromLandmark[$index]);
    }

    /**
     * unset distanceFromLandmark
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistanceFromLandmark($index)
    {
        unset($this->distanceFromLandmark[$index]);
    }

    /**
     * Gets as distanceFromLandmark
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @return \TKusy\Hl7Fhir\R5\BodyStructureDistanceFromLandmarkType[]
     */
    public function getDistanceFromLandmark()
    {
        return $this->distanceFromLandmark;
    }

    /**
     * Sets a new distanceFromLandmark
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @param \TKusy\Hl7Fhir\R5\BodyStructureDistanceFromLandmarkType[] $distanceFromLandmark
     * @return self
     */
    public function setDistanceFromLandmark(array $distanceFromLandmark = null)
    {
        $this->distanceFromLandmark = $distanceFromLandmark;
        return $this;
    }

    /**
     * Adds as surfaceOrientation
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $surfaceOrientation
     */
    public function addToSurfaceOrientation(\TKusy\Hl7Fhir\R5\CodeableConceptType $surfaceOrientation)
    {
        $this->surfaceOrientation[] = $surfaceOrientation;
        return $this;
    }

    /**
     * isset surfaceOrientation
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSurfaceOrientation($index)
    {
        return isset($this->surfaceOrientation[$index]);
    }

    /**
     * unset surfaceOrientation
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSurfaceOrientation($index)
    {
        unset($this->surfaceOrientation[$index]);
    }

    /**
     * Gets as surfaceOrientation
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSurfaceOrientation()
    {
        return $this->surfaceOrientation;
    }

    /**
     * Sets a new surfaceOrientation
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $surfaceOrientation
     * @return self
     */
    public function setSurfaceOrientation(array $surfaceOrientation = null)
    {
        $this->surfaceOrientation = $surfaceOrientation;
        return $this;
    }


}

