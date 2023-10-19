<?php

namespace aetchell\Highcharts\Elemental {

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\Security\Security;

    class ElementalHighchartSeries extends DataObject {

        private static $db = [
            'Title' => 'Varchar(255)',
        ];
        private static $has_one = [
            'ElementParent' => ElementalHighchart::class
        ];
        private static $table_name = 'ElementalHighchartSeries';
        private static $defaults = [
        ];
        private static $singular_name = 'Series';
        private static $plural_name = 'Series';
        private static $summary_fields = [
            'Title' => 'Title',
        ];



        public function getCMSFields() {
            $fields = parent::getCMSFields();
            return $fields;
        }

        public function canView($member = null) {
            return true;
        }

        public function canEdit($member = null) {
            if (!$member) {
                if (!Security::getCurrentUser()) {
                    return false;
                }
                $member = Security::getCurrentUser();
            }
            return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
        }

        public function canDelete($member = null) {
            if (!$member) {
                if (!Security::getCurrentUser()) {
                    return false;
                }
                $member = Security::getCurrentUser();
            }
            return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
        }

        public function canCreate($member = null, $context = []) {
            if (!$member) {
                if (!Security::getCurrentUser()) {
                    return false;
                }
                $member = Security::getCurrentUser();
            }
            return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
        }

    }

}
