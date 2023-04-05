<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionCharacterizationType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Characterization
 */
class SubstanceDefinitionCharacterizationType extends BackboneElementType
{

    /**
     * The method used to elucidate the characterization of the drug substance. Example: HPLC.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $technique
     */
    private $technique = null;

    /**
     * Describes the nature of the chemical entity and explains, for instance, whether this is a base or a salt form.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $form
     */
    private $form = null;

    /**
     * The description or justification in support of the interpretation of the data file.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The data produced by the analytical instrument or a pictorial representation of that data. Examples: a JCAMP, JDX, or ADX file, or a chromatogram or spectrum analysis.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType[] $file
     */
    private $file = null;

    /**
     * Gets as technique
     *
     * The method used to elucidate the characterization of the drug substance. Example: HPLC.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Sets a new technique
     *
     * The method used to elucidate the characterization of the drug substance. Example: HPLC.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $technique
     * @return self
     */
    public function setTechnique(?\TKusy\Hl7Fhir\R5\CodeableConceptType $technique = null)
    {
        $this->technique = $technique;
        return $this;
    }

    /**
     * Gets as form
     *
     * Describes the nature of the chemical entity and explains, for instance, whether this is a base or a salt form.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * Describes the nature of the chemical entity and explains, for instance, whether this is a base or a salt form.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $form
     * @return self
     */
    public function setForm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description or justification in support of the interpretation of the data file.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description or justification in support of the interpretation of the data file.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as file
     *
     * The data produced by the analytical instrument or a pictorial representation of that data. Examples: a JCAMP, JDX, or ADX file, or a chromatogram or spectrum analysis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $file
     */
    public function addToFile(\TKusy\Hl7Fhir\R5\AttachmentType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * The data produced by the analytical instrument or a pictorial representation of that data. Examples: a JCAMP, JDX, or ADX file, or a chromatogram or spectrum analysis.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * The data produced by the analytical instrument or a pictorial representation of that data. Examples: a JCAMP, JDX, or ADX file, or a chromatogram or spectrum analysis.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFile($index)
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * The data produced by the analytical instrument or a pictorial representation of that data. Examples: a JCAMP, JDX, or ADX file, or a chromatogram or spectrum analysis.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * The data produced by the analytical instrument or a pictorial representation of that data. Examples: a JCAMP, JDX, or ADX file, or a chromatogram or spectrum analysis.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType[] $file
     * @return self
     */
    public function setFile(array $file = null)
    {
        $this->file = $file;
        return $this;
    }


}

