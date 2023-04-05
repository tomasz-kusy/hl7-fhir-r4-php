<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BodyStructureIncludedStructureType
 *
 * Record details about an anatomical structure. This resource may be used when a coded concept does not provide the necessary detail needed for the use case.
 * XSD Type: BodyStructure.IncludedStructure
 */
class BodyStructureIncludedStructureType extends BackboneElementType
{

    /**
     * Code that represents the included structure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $structure
     */
    private $structure = null;

    /**
     * Code that represents the included structure laterality.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $laterality
     */
    private $laterality = null;

    /**
     * Body locations in relation to a specific body landmark (tatoo, scar, other body structure).
     *
     * @var \TKusy\Hl7Fhir\R5\BodyStructureBodyLandmarkOrientationType[] $bodyLandmarkOrientation
     */
    private $bodyLandmarkOrientation = null;

    /**
     * XY or XYZ-coordinate orientation for structure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $spatialReference
     */
    private $spatialReference = null;

    /**
     * Code that represents the included structure qualifier.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $qualifier
     */
    private $qualifier = null;

    /**
     * Gets as structure
     *
     * Code that represents the included structure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Sets a new structure
     *
     * Code that represents the included structure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $structure
     * @return self
     */
    public function setStructure(\TKusy\Hl7Fhir\R5\CodeableConceptType $structure)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * Gets as laterality
     *
     * Code that represents the included structure laterality.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getLaterality()
    {
        return $this->laterality;
    }

    /**
     * Sets a new laterality
     *
     * Code that represents the included structure laterality.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $laterality
     * @return self
     */
    public function setLaterality(?\TKusy\Hl7Fhir\R5\CodeableConceptType $laterality = null)
    {
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * Adds as bodyLandmarkOrientation
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body structure).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BodyStructureBodyLandmarkOrientationType $bodyLandmarkOrientation
     */
    public function addToBodyLandmarkOrientation(\TKusy\Hl7Fhir\R5\BodyStructureBodyLandmarkOrientationType $bodyLandmarkOrientation)
    {
        $this->bodyLandmarkOrientation[] = $bodyLandmarkOrientation;
        return $this;
    }

    /**
     * isset bodyLandmarkOrientation
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body structure).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodyLandmarkOrientation($index)
    {
        return isset($this->bodyLandmarkOrientation[$index]);
    }

    /**
     * unset bodyLandmarkOrientation
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body structure).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodyLandmarkOrientation($index)
    {
        unset($this->bodyLandmarkOrientation[$index]);
    }

    /**
     * Gets as bodyLandmarkOrientation
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body structure).
     *
     * @return \TKusy\Hl7Fhir\R5\BodyStructureBodyLandmarkOrientationType[]
     */
    public function getBodyLandmarkOrientation()
    {
        return $this->bodyLandmarkOrientation;
    }

    /**
     * Sets a new bodyLandmarkOrientation
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body structure).
     *
     * @param \TKusy\Hl7Fhir\R5\BodyStructureBodyLandmarkOrientationType[] $bodyLandmarkOrientation
     * @return self
     */
    public function setBodyLandmarkOrientation(array $bodyLandmarkOrientation = null)
    {
        $this->bodyLandmarkOrientation = $bodyLandmarkOrientation;
        return $this;
    }

    /**
     * Adds as spatialReference
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $spatialReference
     */
    public function addToSpatialReference(\TKusy\Hl7Fhir\R5\ReferenceType $spatialReference)
    {
        $this->spatialReference[] = $spatialReference;
        return $this;
    }

    /**
     * isset spatialReference
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpatialReference($index)
    {
        return isset($this->spatialReference[$index]);
    }

    /**
     * unset spatialReference
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpatialReference($index)
    {
        unset($this->spatialReference[$index]);
    }

    /**
     * Gets as spatialReference
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSpatialReference()
    {
        return $this->spatialReference;
    }

    /**
     * Sets a new spatialReference
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $spatialReference
     * @return self
     */
    public function setSpatialReference(array $spatialReference = null)
    {
        $this->spatialReference = $spatialReference;
        return $this;
    }

    /**
     * Adds as qualifier
     *
     * Code that represents the included structure qualifier.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $qualifier
     */
    public function addToQualifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $qualifier)
    {
        $this->qualifier[] = $qualifier;
        return $this;
    }

    /**
     * isset qualifier
     *
     * Code that represents the included structure qualifier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifier($index)
    {
        return isset($this->qualifier[$index]);
    }

    /**
     * unset qualifier
     *
     * Code that represents the included structure qualifier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifier($index)
    {
        unset($this->qualifier[$index]);
    }

    /**
     * Gets as qualifier
     *
     * Code that represents the included structure qualifier.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getQualifier()
    {
        return $this->qualifier;
    }

    /**
     * Sets a new qualifier
     *
     * Code that represents the included structure qualifier.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $qualifier
     * @return self
     */
    public function setQualifier(array $qualifier = null)
    {
        $this->qualifier = $qualifier;
        return $this;
    }


}

