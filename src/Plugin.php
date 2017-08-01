<?php

namespace wesrice\inlineentries;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use yii\base\Event;
use wesrice\inlineentries\fields\InlineEntriesField;


class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        Event::on(
            Fields::class, 
            Fields::EVENT_REGISTER_FIELD_TYPES, 
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = InlineEntriesField::class;
            }
        );

        parent::init();
    }
}
