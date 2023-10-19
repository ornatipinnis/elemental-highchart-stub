<?php

namespace aetchell\Highcharts\Elemental {

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;
    class ElementalHighchart extends BaseElement {

        private static $singular_name = 'Highchart';
        private static $plural_name = 'Highcharts';
        private static $icon = 'font-icon-chart-line';
        private static $table_name = 'ElementalHighchart';
        private static $db = [
        ];
        private static $has_one = [
        ];
        private static $owns = [
        ];
        private static $has_many = [
        ];

        private static $defaults = [

        ];
        private static $inline_editable = false;
        var $LibrariesExtra = [];

        function __construct($record = null, $isSingleton = false, $model = null) {
            parent::__construct($record, $isSingleton, $model);
        }

        public function onBeforeWrite() {
            parent::onBeforeWrite();
        }

        public function getCMSFields() {
            $this->beforeUpdateCMSFields(function (FieldList $fields) {});
            return parent::getCMSFields();
        }

        public function getType() {
            return _t(__CLASS__ . '.BlockType', 'Highchart');
        }

        public function getSummary() {
            return '';
        }

        protected function provideBlockSchema() {
            $blockSchema = parent::provideBlockSchema();
            $blockSchema['content'] = 'Highchart';
            return $blockSchema;
        }
    }
}
