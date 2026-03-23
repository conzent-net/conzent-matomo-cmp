<?php

/**
 * Conzent CMP - Cookie Consent Management Platform
 *
 * @link https://getconzent.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\ConzentCmp\Template\Tag;

use Piwik\Piwik;
use Piwik\Settings\FieldConfig;
use Piwik\Plugins\TagManager\Template\Tag\BaseTag;
use Piwik\Validators\NotEmpty;

class ConzentCmpTag extends BaseTag
{
    public function getCategory()
    {
        return Piwik::translate('TagManager_ConsentManagement');
    }

    public function getIcon()
    {
        return 'plugins/ConzentCmp/images/conzent.png';
    }

    public function getParameters()
    {
        return [
            $this->makeSetting('websiteKey', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = Piwik::translate('ConzentCmp_WebsiteKeyTitle');
                $field->description = Piwik::translate('ConzentCmp_WebsiteKeyDescription');
                $field->customFieldComponent = self::FIELD_VARIABLE_COMPONENT;
                $field->validators[] = new NotEmpty();
            }),
            $this->makeSetting('serverUrl', 'https://app.getconzent.com', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = Piwik::translate('ConzentCmp_ServerUrlTitle');
                $field->description = Piwik::translate('ConzentCmp_ServerUrlDescription');
                $field->customFieldComponent = self::FIELD_VARIABLE_COMPONENT;
            }),
        ];
    }
}
