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
     * @var \TKusy\Hl7FhirR4\DecimalType $sphere
     */
    private $sphere = null;

    /**
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $cylinder
     */
    private $cylinder = null;

    /**
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $axis
     */
    private $axis = null;

    /**
     * Allows for adjustment on two axis.
     *
     * @var \TKusy\Hl7FhirR4\VisionPrescriptionPrismType[] $prism
     */
    private $prism = [
        
    ];

    /**
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $add
     */
    private $add = null;

    /**
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $power
     */
    private $power = null;

    /**
     * Back curvature measured in millimetres.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $backCurve
     */
    private $backCurve = null;

    /**
     * Contact lens diameter measured in millimetres.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $diameter
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
     * @var \TKusy\Hl7FhirR4\StringType $color
     */
    private $color = null;

    /**
     * Brand recommendations or restrictions.
     *
     * @var \TKusy\Hl7FhirR4\StringType $brand
     */
    private $brand = null;

    /**
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

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
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $sphere
     * @return self
     */
    public function setSphere(\TKusy\Hl7FhirR4\DecimalType $sphere)
    {
        $this->sphere = $sphere;
        return $this;
    }

    /**
     * Gets as cylinder
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $cylinder
     * @return self
     */
    public function setCylinder(\TKusy\Hl7FhirR4\DecimalType $cylinder)
    {
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * Gets as axis
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
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
     * @param \TKusy\Hl7FhirR4\IntegerType $axis
     * @return self
     */
    public function setAxis(\TKusy\Hl7FhirR4\IntegerType $axis)
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
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $add
     * @return self
     */
    public function setAdd(\TKusy\Hl7FhirR4\DecimalType $add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as power
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $power
     * @return self
     */
    public function setPower(\TKusy\Hl7FhirR4\DecimalType $power)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * Gets as backCurve
     *
     * Back curvature measured in millimetres.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $backCurve
     * @return self
     */
    public function setBackCurve(\TKusy\Hl7FhirR4\DecimalType $backCurve)
    {
        $this->backCurve = $backCurve;
        return $this;
    }

    /**
     * Gets as diameter
     *
     * Contact lens diameter measured in millimetres.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $diameter
     * @return self
     */
    public function setDiameter(\TKusy\Hl7FhirR4\DecimalType $diameter)
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
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $color
     * @return self
     */
    public function setColor(\TKusy\Hl7FhirR4\StringType $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as brand
     *
     * Brand recommendations or restrictions.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $brand
     * @return self
     */
    public function setBrand(\TKusy\Hl7FhirR4\StringType $brand)
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

