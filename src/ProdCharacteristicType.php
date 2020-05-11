<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ProdCharacteristicType
 *
 * The marketing status describes the date when a medicinal product is actually put on the market or the date as of which it is no longer available.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ProdCharacteristic
 */
class ProdCharacteristicType extends BackboneElementType
{

    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $height
     */
    private $height = null;

    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $width
     */
    private $width = null;

    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $depth
     */
    private $depth = null;

    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $weight
     */
    private $weight = null;

    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $nominalVolume
     */
    private $nominalVolume = null;

    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $externalDiameter
     */
    private $externalDiameter = null;

    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var string $shape
     */
    private $shape = null;

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var string[] $color
     */
    private $color = null;

    /**
     * Where applicable, the imprint can be specified as text.
     *
     * @var string[] $imprint
     */
    private $imprint = null;

    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType[] $image
     */
    private $image = null;

    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $scoring
     */
    private $scoring = null;

    /**
     * Gets as height
     *
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $height
     * @return self
     */
    public function setHeight(\TKusy\Hl7FhirR4\QuantityType $height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $width
     * @return self
     */
    public function setWidth(\TKusy\Hl7FhirR4\QuantityType $width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as depth
     *
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets a new depth
     *
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $depth
     * @return self
     */
    public function setDepth(\TKusy\Hl7FhirR4\QuantityType $depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $weight
     * @return self
     */
    public function setWeight(\TKusy\Hl7FhirR4\QuantityType $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as nominalVolume
     *
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getNominalVolume()
    {
        return $this->nominalVolume;
    }

    /**
     * Sets a new nominalVolume
     *
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $nominalVolume
     * @return self
     */
    public function setNominalVolume(\TKusy\Hl7FhirR4\QuantityType $nominalVolume)
    {
        $this->nominalVolume = $nominalVolume;
        return $this;
    }

    /**
     * Gets as externalDiameter
     *
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getExternalDiameter()
    {
        return $this->externalDiameter;
    }

    /**
     * Sets a new externalDiameter
     *
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $externalDiameter
     * @return self
     */
    public function setExternalDiameter(\TKusy\Hl7FhirR4\QuantityType $externalDiameter)
    {
        $this->externalDiameter = $externalDiameter;
        return $this;
    }

    /**
     * Gets as shape
     *
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Sets a new shape
     *
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param string $shape
     * @return self
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Adds as color
     *
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return self
     * @param string $color
     */
    public function addToColor($color)
    {
        $this->color[] = $color;
        return $this;
    }

    /**
     * isset color
     *
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColor($index)
    {
        return isset($this->color[$index]);
    }

    /**
     * unset color
     *
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColor($index)
    {
        unset($this->color[$index]);
    }

    /**
     * Gets as color
     *
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return string[]
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param string[] $color
     * @return self
     */
    public function setColor(array $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Adds as imprint
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @return self
     * @param string $imprint
     */
    public function addToImprint($imprint)
    {
        $this->imprint[] = $imprint;
        return $this;
    }

    /**
     * isset imprint
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImprint($index)
    {
        return isset($this->imprint[$index]);
    }

    /**
     * unset imprint
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImprint($index)
    {
        unset($this->imprint[$index]);
    }

    /**
     * Gets as imprint
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @return string[]
     */
    public function getImprint()
    {
        return $this->imprint;
    }

    /**
     * Sets a new imprint
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param string[] $imprint
     * @return self
     */
    public function setImprint(array $imprint)
    {
        $this->imprint = $imprint;
        return $this;
    }

    /**
     * Adds as image
     *
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AttachmentType $image
     */
    public function addToImage(\TKusy\Hl7FhirR4\AttachmentType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as scoring
     *
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Sets a new scoring
     *
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $scoring
     * @return self
     */
    public function setScoring(\TKusy\Hl7FhirR4\CodeableConceptType $scoring)
    {
        $this->scoring = $scoring;
        return $this;
    }


}

