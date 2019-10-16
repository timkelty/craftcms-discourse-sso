<?php
namespace timkelty\craftcms\discoursesso\controllers;

use Craft;
use craft\helpers\UrlHelper;
use Cviebrock\DiscoursePHP\SSOHelper;
use timkelty\craftcms\discoursesso\Plugin;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->requireLogin();

        $settings = Plugin::getInstance()->getSettings();
        $user = Craft::$app->getUser()->getIdentity();
        $payload = Craft::$app->getRequest()->getRequiredParam('sso');
        $signature = Craft::$app->getRequest()->getRequiredParam('sig');
        $sso = (new SSOHelper())->setSecret($settings->ssoSecret);

        if (!($sso->validatePayload($payload, $signature))) {
            throw new BadRequestHttpException('Invalid SSO Payload.');
        }

        $query = $sso->getSignInString(
            $sso->getNonce($payload),
            $user->id,
            $user->email,
            [
                'username' => $user->username,
                'name' => $user->getName(),
            ]
        );

        $this->redirect(UrlHelper::urlWithParams($settings->ssoEndpoint, $query));
    }
}
