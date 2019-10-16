<?php

namespace timkelty\craftcms\discoursesso\models;

class Settings extends \craft\base\Model
{
    public $ssoEndpoint = '';
    public $ssoSecret = '';

    public function rules()
    {
        return [
            [['ssoEndpoint', 'ssoSecret'], 'required'],
            [['ssoEndpoint', 'ssoSecret'], 'string'],
        ];
    }
}
