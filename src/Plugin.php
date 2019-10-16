<?php

namespace timkelty\craftcms\discoursesso;

use Craft;

class Plugin extends \craft\base\Plugin
{
    protected function createSettingsModel()
    {
        return new models\Settings();
    }

    protected function settingsHtml(): string
    {
        return Craft::$app->getView()->renderTemplate("{$this->handle}/settings", [
            'settings' => $this->getSettings(),
            'ssoUrl' => \craft\helpers\UrlHelper::siteUrl(
                implode('/', [
                    Craft::$app->getConfig()->getGeneral()->actionTrigger,
                    $this->handle,
                    'login',
                ])
            ),
        ]);
    }
}
