<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing VisionPrescriptionLensSpecificationType
 *
 * An authorization for the provision of glasses and/or contact lenses to a patient.
 * XSD Type: VisionPrescription.LensSpecification
 */
class VisionPrescriptionLensSpecificationType extends BackboneElementType
{

    /**
     * Identifies the type of vision correction product which is required for the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $product
     */
    private $product = null;

    /**
     * The eye for which the lens specification applies.
     *
     * @var \TKusy\Hl7Fhir\R5\VisionEyesType $eye
     */
    private $eye = null;

    /**
     * Lens power measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $sphere
     */
    private $sphere = null;

    /**
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $cylinder
     */
    private $cylinder = null;

    /**
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $axis
     */
    private $axis = null;

    /**
     * Allows for adjustment on two axis.
     *
     * @var \TKusy\Hl7Fhir\R5\VisionPrescriptionPrismType[] $prism
     */
    private $prism = null;

    /**
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $add
     */
    private $add = null;

    /**
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $power
     */
    private $power = null;

    /**
     * Back curvature measured in millimetres.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $backCurve
     */
    private $backCurve = null;

    /**
     * Contact lens diameter measured in millimetres.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $diameter
     */
    private $diameter = null;

    /**
     * The recommended maximum wear period for the lens.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $duration
     */
    private $duration = null;

    /**
     * Special color or pattern.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $color
     */
    private $color = null;

    /**
     * Brand recommendations or restrictions.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $brand
     */
    private $brand = null;

    /**
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as product
     *
     * Identifies the type of vision correction product which is required for the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * Identifies the type of vision correction product which is required for the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $product
     * @return self
     */
    public function setProduct(\TKusy\Hl7Fhir\R5\CodeableConceptType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as eye
     *
     * The eye for which the lens specification applies.
     *
     * @return \TKusy\Hl7Fhir\R5\VisionEyesType
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * Sets a new eye
     *
     * The eye for which the lens specification applies.
     *
     * @param \TKusy\Hl7Fhir\R5\VisionEyesType $eye
     * @return self
     */
    public function setEye(\TKusy\Hl7Fhir\R5\VisionEyesType $eye)
    {
        $this->eye = $eye;
        return $this;
    }

    /**
     * Gets as sphere
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getSphere()
    {
        return $this->sphere;
    }

    /**
     * Sets a new sphere
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $sphere
     * @return self
     */
    public function setSphere(?\TKusy\Hl7Fhir\R5\DecimalType $sphere = null)
    {
        $this->sphere = $sphere;
        return $this;
    }

    /**
     * Gets as cylinder
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * Sets a new cylinder
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $cylinder
     * @return self
     */
    public function setCylinder(?\TKusy\Hl7Fhir\R5\DecimalType $cylinder = null)
    {
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * Gets as axis
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * Sets a new axis
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $axis
     * @return self
     */
    public function setAxis(?\TKusy\Hl7Fhir\R5\IntegerType $axis = null)
    {
        $this->axis = $axis;
        return $this;
    }

    /**
     * Adds as prism
     *
     * Allows for adjustment on two axis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\VisionPrescriptionPrismType $prism
     */
    public function addToPrism(\TKusy\Hl7Fhir\R5\VisionPrescriptionPrismType $prism)
    {
        $this->prism[] = $prism;
        return $this;
    }

    /**
     * isset prism
     *
     * Allows for adjustment on two axis.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrism($index)
    {
        return isset($this->prism[$index]);
    }

    /**
     * unset prism
     *
     * Allows for adjustment on two axis.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrism($index)
    {
        unset($this->prism[$index]);
    }

    /**
     * Gets as prism
     *
     * Allows for adjustment on two axis.
     *
     * @return \TKusy\Hl7Fhir\R5\VisionPrescriptionPrismType[]
     */
    public function getPrism()
    {
        return $this->prism;
    }

    /**
     * Sets a new prism
     *
     * Allows for adjustment on two axis.
     *
     * @param \TKusy\Hl7Fhir\R5\VisionPrescriptionPrismType[] $prism
     * @return self
     */
    public function setPrism(array $prism = null)
    {
        $this->prism = $prism;
        return $this;
    }

    /**
     * Gets as add
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Sets a new add
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $add
     * @return self
     */
    public function setAdd(?\TKusy\Hl7Fhir\R5\DecimalType $add = null)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as power
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Sets a new power
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $power
     * @return self
     */
    public function setPower(?\TKusy\Hl7Fhir\R5\DecimalType $power = null)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * Gets as backCurve
     *
     * Back curvature measured in millimetres.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getBackCurve()
    {
        return $this->backCurve;
    }

    /**
     * Sets a new backCurve
     *
     * Back curvature measured in millimetres.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $backCurve
     * @return self
     */
    public function setBackCurve(?\TKusy\Hl7Fhir\R5\DecimalType $backCurve = null)
    {
        $this->backCurve = $backCurve;
        return $this;
    }

    /**
     * Gets as diameter
     *
     * Contact lens diameter measured in millimetres.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Sets a new diameter
     *
     * Contact lens diameter measured in millimetres.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $diameter
     * @return self
     */
    public function setDiameter(?\TKusy\Hl7Fhir\R5\DecimalType $diameter = null)
    {
        $this->diameter = $diameter;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The recommended maximum wear period for the lens.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The recommended maximum wear period for the lens.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $duration
     * @return self
     */
    public function setDuration(?\TKusy\Hl7Fhir\R5\QuantityType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as color
     *
     * Special color or pattern.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * Special color or pattern.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $color
     * @return self
     */
    public function setColor(?\TKusy\Hl7Fhir\R5\StringType $color = null)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as brand
     *
     * Brand recommendations or restrictions.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * Brand recommendations or restrictions.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $brand
     * @return self
     */
    public function setBrand(?\TKusy\Hl7Fhir\R5\StringType $brand = null)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Adds as note
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

