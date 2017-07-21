<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Widgets */
/* @var $list[] frontend\models\Widgets */
use yii\widgets\DetailView;
?>
<h2>DetailView</h2>
<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [                               // description свойство, как HTML
        [                                                  // name свойство зависимой модели owner
            'label' => 'First name',
            'value' => $list[1]['name'],            
            'contentOptions' => ['class' => 'bg-red'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],  // настройка HTML атрибутов для тега, соответсвующего label
        ],
        [                                                  // name свойство зависимой модели owner
            'label' => 'Second name',
            'value' => $list[1]['sname'],            
            'contentOptions' => ['class' => 'bg-red'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],  // настройка HTML атрибутов для тега, соответсвующего label
        ],
    ],
]);
?>
<h2>Grid View</h2>