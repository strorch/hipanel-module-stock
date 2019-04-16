<?php


namespace hipanel\modules\stock\controllers;


use hipanel\actions\IndexAction;
use hipanel\actions\SmartCreateAction;
use hipanel\actions\SmartDeleteAction;
use hipanel\actions\SmartUpdateAction;
use hipanel\actions\ValidateFormAction;
use hipanel\actions\ViewAction;
use hipanel\base\CrudController;
use hipanel\filters\EasyAccessControl;
use Yii;

class OrderController extends CrudController
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            [
                'class' => EasyAccessControl::class,
                'actions' => [
                    'create' => 'order.create',
                    'update' => 'order.update',
                    'delete' => 'order.delete',

                    '*' => 'order.read',
                ],
            ],
        ]);
    }

    public function actions()
    {
        return array_merge(parent::actions(), [
            "index" => [
                'class' => IndexAction::class,
            ],
            "create" => [
                'class' => SmartCreateAction::class,
                'success' => Yii::t('hipanel.stock.order', 'Order has been created'),
            ],
            'update' => [
                'class' => SmartUpdateAction::class,
                'success' => Yii::t('hipanel.stock.order', 'Order has been updated'),
            ],
            'view' => [
                'class' => ViewAction::class,
            ],
            'delete' => [
                'class' => SmartDeleteAction::class,
                'success' => Yii::t('hipanel.stock.order', 'Order has been deleted'),
            ],
            'validate-form' => [
                'class' => ValidateFormAction::class,
            ],
        ]);
    }
}