<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $product
     */
    private $product = null;

    /**
     * The eye for which the lens specification applies.
     *
     * @var \TKusy\Hl7FhirR4\VisionEyesType $eye
     */
    private $eye = null;

    /**
     * Lens power measured in dioptres (0.25 units).
     *
     * @var float $sphere
     */
    private $sphere = null;

    /**
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @var float $cylinder
     */
    private $cylinder = null;

    /**
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var \integer $axis
     */
    private $axis = null;

    /**
     * Allows for adjustment on two axis.
     *
     * @var \TKusy\Hl7FhirR4\VisionPrescriptionPrismType[] $prism
     */
    private $prism = null;

    /**
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @var float $add
     */
    private $add = null;

    /**
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @var float $power
     */
    private $power = null;

    /**
     * Back curvature measured in millimetres.
     *
     * @var float $backCurve
     */
    private $backCurve = null;

    /**
     * Contact lens diameter measured in millimetres.
     *
     * @var float $diameter
     */
    private $diameter = null;

    /**
     * The recommended maximum wear period for the lens.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $duration
     */
    private $duration = null;

    /**
     * Special color or pattern.
     *
     * @var string $color
     */
    private $color = null;

    /**
     * Brand recommendations or restrictions.
     *
     * @var string $brand
     */
    private $brand = null;

    /**
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as product
     *
     * Identifies the type of vision correction product which is required for the patient.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $product
     * @return self
     */
    public function setProduct(\TKusy\Hl7FhirR4\CodeableConceptType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as eye
     *
     * The eye for which the lens specification applies.
     *
     * @return \TKusy\Hl7FhirR4\VisionEyesType
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
     * @param \TKusy\Hl7FhirR4\VisionEyesType $eye
     * @return self
     */
    public function setEye(\TKusy\Hl7FhirR4\VisionEyesType $eye)
    {
        $this->eye = $eye;
        return $this;
    }

    /**
     * Gets as sphere
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @return float
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
     * @param float $sphere
     * @return self
     */
    public function setSphere($sphere)
    {
        $this->sphere = $sphere;
        return $this;
    }

    /**
     * Gets as cylinder
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @return float
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
     * @param float $cylinder
     * @return self
     */
    public function setCylinder($cylinder)
    {
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * Gets as axis
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return \integer
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
     * @param \integer $axis
     * @return self
     */
    public function setAxis(\integer $axis)
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
     * @param \TKusy\Hl7FhirR4\VisionPrescriptionPrismType $prism
     */
    public function addToPrism(\TKusy\Hl7FhirR4\VisionPrescriptionPrismType $prism)
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
     * @return \TKusy\Hl7FhirR4\VisionPrescriptionPrismType[]
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
     * @param \TKusy\Hl7FhirR4\VisionPrescriptionPrismType[] $prism
     * @return self
     */
    public function setPrism(array $prism)
    {
        $this->prism = $prism;
        return $this;
    }

    /**
     * Gets as add
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @return float
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
     * @param float $add
     * @return self
     */
    public function setAdd($add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as power
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @return float
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
     * @param float $power
     * @return self
     */
    public function setPower($power)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * Gets as backCurve
     *
     * Back curvature measured in millimetres.
     *
     * @return float
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
     * @param float $backCurve
     * @return self
     */
    public function setBackCurve($backCurve)
    {
        $this->backCurve = $backCurve;
        return $this;
    }

    /**
     * Gets as diameter
     *
     * Contact lens diameter measured in millimetres.
     *
     * @return float
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
     * @param float $diameter
     * @return self
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The recommended maximum wear period for the lens.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $duration
     * @return self
     */
    public function setDuration(\TKusy\Hl7FhirR4\QuantityType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as color
     *
     * Special color or pattern.
     *
     * @return string
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
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as brand
     *
     * Brand recommendations or restrictions.
     *
     * @return string
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
     * @param string $brand
     * @return self
     */
    public function setBrand($brand)
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
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

