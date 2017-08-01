<?php

namespace wesrice\inlineentries\fields;

use Craft;
use craft\fields\Entries;
use craft\elements\Entry;
use craft\elements\MatrixBlock;
use craft\base\ElementInterface;

class InlineEntriesField extends Entries
{
    public $allowLimit = false;

    // public $inputJsClass = 'Craft.BaseElementEditor';

    public $inputTemplate = 'inline-entries/_includes/forms/inlineentries';
    // public $inputTemplate = '_includes/forms/elementSelect';

    // public $viewMode = '';

    // Static
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('app', 'Inline Entries');
    }

    /**
     * @inheritdoc
     */
    protected static function elementType(): string
    {
        return Entry::class;
    }

    /**
     * @inheritdoc
     */
    public static function defaultSelectionLabel(): string
    {
        return Craft::t('app', 'Add an entry');
    }

    /**
     * Normalizes the available sources into select input options.
     *
     * @return array
     */
    // public function getSourceOptions(): array
    // {
    //     $options = [];
    //     $optionNames = [];

    //     foreach ($this->availableSources() as $source) {
    //         // Make sure it's not a heading
    //         if (!isset($source['heading']) && $source['key'] !== '*') {
    //             $options[] = [
    //                 'label' => $source['label'],
    //                 'value' => $source['key']
    //             ];
    //             $optionNames[] = $source['label'];
    //         }
    //     }

    //     // Sort alphabetically
    //     array_multisort($optionNames, SORT_NATURAL | SORT_FLAG_CASE, $options);

    //     return $options;
    // }

    /**
     * @inheritdoc
     */
    // public function getInputHtml($value, ElementInterface $element = null): string
    // {
    //     /** @var Element $element */
    //     if ($element !== null && $element->hasEagerLoadedElements($this->handle)) {
    //         $value = $element->getEagerLoadedElements($this->handle);
    //     }

    //     /** @var ElementQuery|array $value */
    //     $variables = $this->inputTemplateVariables($value, $element);

    //     $sections = array_map(function($source) {
    //         list($source, $id) = explode(':', $source);
    //         return Craft::$app->getSections()->getSectionById($id);;
    //     }, $this->sources);

    //     Craft::dd($sections);

    //     // Craft::dd($element->fieldByHandle($this->handle));

    //     return Craft::$app->getView()->renderTemplate(
    //         $this->inputTemplate,
    //         [
    //             'id' => Craft::$app->getView()->formatInputId($this->handle),
    //             'name' => $this->handle,
    //             'sections' => $sections,
    //             'elements' => $value,
    //         ]
    //     );
    // }
}
