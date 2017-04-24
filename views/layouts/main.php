<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use kartik\nav\NavX;

use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;
use yii\helpers\Url;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta property="og:image" content="<?= Yii::$app->request->baseUrl ?>/myassets/img/logo.png" />
    <meta property="og:url"content="http://camaleonsystems.com" />
    
    <meta property="og:title" content="Camaleon Reports" />
    
    
    
    <?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl ?>/myassets/img/logo-fav.png">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/myassets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/myassets/lib/daterangepicker/css/daterangepicker.css"/>
    
    
    
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/myassets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/myassets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl ?>/myassets/img/logo-fav.png">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    
    
    
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/myassets/css/style.css" type="text/css"/>
    
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="be-wrapper">
        
        
        <nav class="navbar navbar-default navbar-fixed-top be-top-header">
            <div class="container-fluid">
                <div class="navbar-header"><a href="index#" class="navbar-brand"></a>
                </div>
                <div class="be-right-navbar">
                    
                    <ul class="nav navbar-nav navbar-right be-user-nav">
                        
                        
                        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="<?= Yii::$app->request->baseUrl ?>/myassets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li>
                                    <div class="user-info">
                                        <div class="user-name"><?php echo Yii::$app->user->identity->username ?></div>
                                        
                                        <div class="user-position online">Available</div>
                                    </div>
                                </li>
                                <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                                <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                                
                                
                                <li><?= Html::a('<span class="icon mdi mdi-power"></span> Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?><li>
                                    
                                </ul>
                            </li>
                        </ul>
                        <div class="page-title"><span><?= Html::encode($this->title) ?></span></div>
                        <ul class="nav navbar-nav navbar-right be-icons-nav">
                            <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                                <ul class="dropdown-menu be-notifications">
                                    <li>
                                        <div class="title">Notifications<span class="badge">3</span></div>
                                        <div class="list">
                                            <div class="be-scroller">
                                                <div class="content">
                                                    <ul>
                                                        <li class="notification notification-unread"><a href="#">
                                                            <div class="image"><img src="<?= Yii::$app->request->baseUrl ?>/myassets/img/avatar2.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                                            </div></a></li>
                                                            <li class="notification"><a href="#">
                                                                <div class="image"><img src="<?= Yii::$app->request->baseUrl ?>/myassets/img/avatar3.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                                                </div></a></li>
                                                                <li class="notification"><a href="#">
                                                                    <div class="image"><img src="<?= Yii::$app->request->baseUrl ?>/myassets/img/avatar4.png" alt="Avatar"></div>
                                                                    <div class="notification-info">
                                                                        <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                                                    </div></a></li>
                                                                    <li class="notification"><a href="#">
                                                                        <div class="image"><img src="<?= Yii::$app->request->baseUrl ?>/myassets/img/avatar5.png" alt="Avatar"></div>
                                                                        <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="footer"> <a href="#">View all notifications</a></div>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="be-left-sidebar">
                                <div class="left-sidebar-wrapper">
                                    <div class="left-sidebar-spacer">
                                        <div class="left-sidebar-scroll">
                                            <div class="left-sidebar-content">
                                                
                                                <?php
                                                
                                                
                                                //                         echo SideNav::widget([
                                                //                               'type' => $type,
                                                //                               'encodeLabels' => false,
                                                //                               'heading' => $heading,
                                                //                               'options' => [
                                                //                                     'class' => 'sidebar-elements',
                                                //
                                                //                               ],
                                                //
                                                //                               'items' => [
                                                //                                     // Important: you need to specify url as 'controller/action',
                                                //                                     // not just as 'controller' even if default action is used.
                                                //                                     //
                                                //                                     // NOTE: The variable `$item` is specific to this demo page that determines
                                                //                                     // which menu item will be activated. You need to accordingly define and pass
                                                //                                     // such variables to your view object to handle such logic in your application
                                                //                                     // (to determine the active status).
                                                //                                     //
                                                //                                     ['label' => 'Home', 'icon' => 'home', 'url' => ['site/index'], 'active' => ($item == 'home')],
                                                //                                     ['label' => 'Books', 'icon' => 'book', 'items' => [
                                                //                                           ['label' => ' New Arrivals', 'url' => Url::to(['/site/new-arrivals', 'type'=>$type]), 'active' => ($item == 'new-arrivals')],
                                                //                                           ['label' => ' Most Popular', 'url' => Url::to(['/site/most-popular', 'type'=>$type]), 'active' => ($item == 'most-popular')],
                                                //                                           ['label' => 'Read Online', 'icon' => 'cloud', 'items' => [
                                                //                                                 ['label' => 'Online 1', 'url' => Url::to(['/site/online-1', 'type'=>$type]), 'active' => ($item == 'online-1')],
                                                //                                                 ['label' => 'Online 2', 'url' => Url::to(['/site/online-2', 'type'=>$type]), 'active' => ($item == 'online-2')]
                                                //                                           ]
                                                //                                     ],
                                                //                               ]
                                                //
                                                //                         ],
                                                //                         ['label' => ' Categories', 'icon' => 'tags', 'items' => [
                                                //                               ['label' => 'Fiction', 'url' => Url::to(['/site/fiction', 'type'=>$type]), 'active' => ($item == 'fiction')],
                                                //                               ['label' => 'Historical', 'url' => Url::to(['/site/historical', 'type'=>$type]), 'active' => ($item == 'historical')],
                                                //                               ['label' => ' Announcements', 'icon' => 'bullhorn', 'items' => [
                                                //                                     ['label' => 'Event 1', 'url' => Url::to(['/site/event-1', 'type'=>$type]), 'active' => ($item == 'event-1')],
                                                //                                     ['label' => 'Event 2', 'url' => Url::to(['/site/event-2', 'type'=>$type]), 'active' => ($item == 'event-2')]
                                                //                               ]
                                                //                         ],
                                                //                   ]
                                                //             ],
                                                //             ['label' => 'Profile', 'icon' => 'user', 'url' => Url::to(['/site/profile', 'type'=>$type]), 'active' => ($item == 'profile')],
                                                //       ],
                                                //       'type' => SideNav::TYPE_DANGER,
                                                // ]);
                                                
                                                
                                                
                                                
                                                ?>
                                                
                                                <?php
                                                // echo Menu::widget([
                                                //       'items' => [
                                                //             ['label' => Html::tag('i', '', ['class' => 'icon mdi mdi-home']).' Home', 'url' => ['site/index'],],
                                                //             ['label' => 'About', 'url' => ['site/about'],'icon' => 'mdi-chart',],
                                                //             ['label' => 'Products',
                                                //             'url' => ['product/index'],
                                                //             'icon' => 'mdi-chart',
                                                //             'items' => [
                                                //                   ['label' => 'New Arrivals', 'url' => ['product/index'],'icon' => 'mdi-chart',],
                                                //             ],
                                                //       ],
                                                //
                                                //
                                                // ],
                                                // 'itemOptions'=>array('id'=>'item_id', 'class'=>'', 'style'=>''),
                                                // 'options' => [
                                                //       'class' => 'sidebar-elements',
                                                //       'id'=>'navbar-id',
                                                // ],
                                                // 'labelTemplate' =>'{label} Label',
                                                // //'iconTemplate' =>'{icon} Icon',
                                                // 'linkTemplate' => '<a href="{url}"><i class="icon mdi {icon}"></i><span>{label}</span></a>',
                                                //
                                                
                                                //]);
                                                ?>
                                                <ul class="sidebar-elements">
                                                    <li class="divider">Menu</li>
                                                    
                                                    <li><a href=""><i class="icon mdi mdi-home"></i><span>Home</span></a></li>
                                                    
                                                    
                                                    <li class="divider">REPORTS</li>
                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-chart"></i><span>Sales Reports</span></a>
                                                        <ul class="sub-menu">
                                                            
                                                            
                                                            <li><?= Html::a('By Category', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Class', ['sales/class'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Department', ['sales/deparment'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Family', ['sales/family'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Subfamily', ['sales/subfamily'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Subcategory', ['sales/subcategory'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Employee', ['sales/employee'], ['data' => ['method' => 'post']]) ?></li>
                                                            
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-trending-up"></i><span>Sales Analisys</span></a>
                                                        <ul class="sub-menu">
                                                            
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-money-box"></i><span>Purchases Reports</span></a>
                                                        <ul class="sub-menu">
                                                            
                                                            <li><?= Html::a('By Category', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Class', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Fidelity Reports</span></a>
                                                        <ul class="sub-menu">
                                                            
                                                            <li><?= Html::a('By Category', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('By Class', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-collection-text"></i><span>Custom Reports</span></a>
                                                        <ul class="sub-menu">
                                                            
                                                            <li><?= Html::a('New Report', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            <li><?= Html::a('My Custom Report1', ['sales/category'], ['data' => ['method' => 'post']]) ?></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    
                                                    <li class="divider">Features</li>
                                                    
                                                    
                                                    
                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu Levels</span></a>
                                                        <ul class="sub-menu">
                                                            <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                                    </li>
                                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                                            </li>
                                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                                        
                                                                    </li>
                                                                    <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                                            </li>
                                                                            <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-widget">
                                        <div class="progress-data"><span class="progress-value">10%</span><span class="name">Current Project</span></div>
                                        <div class="progress">
                                            <div style="width: 10%;" class="progress-bar progress-bar-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="be-content">
                                <div class="main-content container-fluid">
                                    <?= Breadcrumbs::widget([
                                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                        ]) ?>
                                        <?= $content ?>
                                        
                                        
                                    </div>
                                </div>
                                <nav class="be-right-sidebar">
                                    <div class="sb-content">
                                        <div class="tab-navigation">
                                            <ul role="tablist" class="nav nav-tabs nav-justified">
                                                
                                                <li role="presentation" class="active"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Locations</a></li>
                                                <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-panel">
                                            <div class="tab-content">
                                                
                                                <div id="tab2" role="tabpanel" class="tab-pane tab-todo active">
                                                    <div class="todo-container">
                                                        <div class="todo-wrapper">
                                                            <div class="be-scroller">
                                                                <div class="todo-content"><span class="category-title">Texas</span>
                                                                    <ul class="todo-list">
                                                                        <li>
                                                                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-edit"></span>
                                                                                
                                                                                <label for="todo4">Morelos 1</label>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                    </ul><span class="category-title">Oklahoma</span>
                                                                    <ul class="todo-list">
                                                                        <li>
                                                                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-edit"></span>
                                                                                
                                                                                <label for="todo4">Morelos 2</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-edit"></span>
                                                                                
                                                                                <label for="todo5">Morelos 3</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-edit"></span>
                                                                                
                                                                                <label for="todo6">Morelos 6</label>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-input">
                                                            <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
                                                    <div class="settings-wrapper">
                                                        <div class="be-scroller"><span class="category-title">General</span>
                                                            <ul class="settings-list">
                                                                <li>
                                                                    <div class="switch-button switch-button-sm">
                                                                        <input type="checkbox" checked="" name="st1" id="st1"><span>
                                                                            <label for="st1"></label></span>
                                                                        </div><span class="name">Available</span>
                                                                    </li>
                                                                    <li>
                                                                        <div class="switch-button switch-button-sm">
                                                                            <input type="checkbox" checked="" name="st2" id="st2"><span>
                                                                                <label for="st2"></label></span>
                                                                            </div><span class="name">Enable notifications</span>
                                                                        </li>
                                                                        <li>
                                                                            <div class="switch-button switch-button-sm">
                                                                                <input type="checkbox" checked="" name="st3" id="st3"><span>
                                                                                    <label for="st3"></label></span>
                                                                                </div><span class="name">Login with Facebook</span>
                                                                            </li>
                                                                        </ul><span class="category-title">Notifications</span>
                                                                        <ul class="settings-list">
                                                                            <li>
                                                                                <div class="switch-button switch-button-sm">
                                                                                    <input type="checkbox" name="st4" id="st4"><span>
                                                                                        <label for="st4"></label></span>
                                                                                    </div><span class="name">Email notifications</span>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="switch-button switch-button-sm">
                                                                                        <input type="checkbox" checked="" name="st5" id="st5"><span>
                                                                                            <label for="st5"></label></span>
                                                                                        </div><span class="name">Project updates</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="switch-button switch-button-sm">
                                                                                            <input type="checkbox" checked="" name="st6" id="st6"><span>
                                                                                                <label for="st6"></label></span>
                                                                                            </div><span class="name">New comments</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <div class="switch-button switch-button-sm">
                                                                                                <input type="checkbox" name="st7" id="st7"><span>
                                                                                                    <label for="st7"></label></span>
                                                                                                </div><span class="name">Chat messages</span>
                                                                                            </li>
                                                                                        </ul><span class="category-title">Workflow</span>
                                                                                        <ul class="settings-list">
                                                                                            <li>
                                                                                                <div class="switch-button switch-button-sm">
                                                                                                    <input type="checkbox" name="st8" id="st8">
                                                                                                    <span>
                                                                                                        <label for="st8"></label>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <span class="name">Deploy on commit</span>
                                                                                                
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                        <footer class="footer">
                                                            <div class="container">
                                                                <p class="pull-left">&copy; Camaleon Systems <?= date('Y') ?></p>
                                                                
                                                                
                                                            </div>
                                                        </footer>
                                                        <?php $this->endBody() ?>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/js/main.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
                                                        
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/select2/js/select2.min.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/js/app-form-elements.js" type="text/javascript"></script>
                                                        <script src="<?= Yii::$app->request->baseUrl ?>/myassets/js/app-dashboard.js" type="text/javascript"></script>
                                                        <script type="text/javascript">
                                                        $(document).ready(function(){
                                                            //initialize the javascript
                                                            App.init();
                                                            App.formElements();
                                                        });
                                                        
                                                        </script>
                                                        
                                                    </body>
                                                    </html>
                                                    <?php $this->endPage() ?>
