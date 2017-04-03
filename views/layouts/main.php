<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    
    <?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/daterangepicker/css/daterangepicker.css"/>
    
    
    
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
        
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="be-wrapper">
            <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                        ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'
                                )
                            ],
                        ]);
                        NavBar::end();
                        ?>
                        <nav class="navbar navbar-default navbar-fixed-top be-top-header">
                            <div class="container-fluid">
                                <div class="navbar-header"><a href="index#" class="navbar-brand"></a>
                                </div>
                                <div class="be-right-navbar">
                                    <ul class="nav navbar-nav navbar-right be-user-nav">
                                        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                                            <ul role="menu" class="dropdown-menu">
                                                <li>
                                                    <div class="user-info">
                                                        <div class="user-name">Túpac Amaru</div>
                                                        <div class="user-position online">Available</div>
                                                    </div>
                                                </li>
                                                <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                                                <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                                                <li><a href="#"><span class="icon mdi mdi-power"></span> Logout</a></li>
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
                                                                        <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                                                        <div class="notification-info">
                                                                            <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                                                        </div></a></li>
                                                                        <li class="notification"><a href="#">
                                                                            <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                                                            <div class="notification-info">
                                                                                <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                                                            </div></a></li>
                                                                            <li class="notification"><a href="#">
                                                                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                                                                <div class="notification-info">
                                                                                    <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                                                                </div></a></li>
                                                                                <li class="notification"><a href="#">
                                                                                    <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                                                                    <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer"> <a href="#">View all notifications</a></div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                                                            <ul class="dropdown-menu be-connections">
                                                                <li>
                                                                    <div class="list">
                                                                        <div class="content">
                                                                            <div class="row">
                                                                                <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                                                                                <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                                                                                <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                                                                                <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                                                                                <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer"> <a href="#">More</a></div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                        <div class="be-left-sidebar">
                                            <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Blank Page</a>
                                                <div class="left-sidebar-spacer">
                                                    <div class="left-sidebar-scroll">
                                                        <div class="left-sidebar-content">
                                                            <ul class="sidebar-elements">
                                                                <li class="divider">Menu</li>
                                                                <li><a href=""><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                                                </li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="">Alerts</a>
                                                                        </li>
                                                                        <li><a href="">Buttons</a>
                                                                        </li>
                                                                        <li><a href="">Panels</a>
                                                                        </li>
                                                                        <li><a href="">General</a>
                                                                        </li>
                                                                        <li><a href="">Modals</a>
                                                                        </li>
                                                                        <li><a href="">Notifications</a>
                                                                        </li>
                                                                        <li><a href="">Icons</a>
                                                                        </li>
                                                                        <li><a href="">Grid</a>
                                                                        </li>
                                                                        <li><a href="">Tabs &amp; Accordions</a>
                                                                        </li>
                                                                        <li><a href="">Nestable Lists</a>
                                                                        </li>
                                                                        <li><a href=""><span class="label label-primary pull-right">New</span>Typography</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="">Flot</a>
                                                                        </li>
                                                                        <li><a href="">Sparklines</a>
                                                                        </li>
                                                                        <li><a href="">Chart.js</a>
                                                                        </li>
                                                                        <li><a href="">Morris.js</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="">Elements</a>
                                                                        </li>
                                                                        <li><a href="">Validation</a>
                                                                        </li>
                                                                        <li><a href=""><span class="label label-primary pull-right">New</span>Multiselect</a>
                                                                        </li>
                                                                        <li><a href="">Wizard</a>
                                                                        </li>
                                                                        <li><a href="">Input Masks</a>
                                                                        </li>
                                                                        <li><a href="">WYSIWYG Editor</a>
                                                                        </li>
                                                                        <li><a href="">Multi Upload</a>
                                                                        </li>
                                                                        <li><a href="form-editable#"><span class="label label-primary pull-right">New</span>X-editable</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="tables-general#">General</a>
                                                                        </li>
                                                                        <li><a href="tables-datatables#">Data Tables</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li class="active"><a href="pages-blank#">Blank Page</a>
                                                                        </li>
                                                                        <li><a href="pages-blank-header#">Blank Page Header</a>
                                                                        </li>
                                                                        <li><a href="pages-login#">Login</a>
                                                                        </li>
                                                                        <li><a href="pages-login2#">Login v2</a>
                                                                        </li>
                                                                        <li><a href="pages-404#">404 Page</a>
                                                                        </li>
                                                                        <li><a href="pages-sign-up#">Sign Up</a>
                                                                        </li>
                                                                        <li><a href="pages-forgot-password#">Forgot Password</a>
                                                                        </li>
                                                                        <li><a href="pages-profile#">Profile</a>
                                                                        </li>
                                                                        <li><a href="pages-pricing-tables#">Pricing Tables</a>
                                                                        </li>
                                                                        <li><a href="pages-pricing-tables2#">Pricing Tables v2</a>
                                                                        </li>
                                                                        <li><a href="pages-timeline#"><span class="label label-primary pull-right">New</span>Timeline</a>
                                                                        </li>
                                                                        <li><a href="pages-timeline2#"><span class="label label-primary pull-right">New</span>Timeline v2</a>
                                                                        </li>
                                                                        <li><a href="pages-invoice#"><span class="label label-primary pull-right">New</span>Invoice</a>
                                                                        </li>
                                                                        <li><a href="pages-calendar#">Calendar</a>
                                                                        </li>
                                                                        <li><a href="pages-gallery#">Gallery</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="divider">Features</li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="email-inbox#">Inbox</a>
                                                                        </li>
                                                                        <li><a href="email-read#">Email Detail</a>
                                                                        </li>
                                                                        <li><a href="email-compose#">Email Compose</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="layouts-primary-header#">Primary Header</a>
                                                                        </li>
                                                                        <li><a href="layouts-success-header#">Success Header</a>
                                                                        </li>
                                                                        <li><a href="layouts-warning-header#">Warning Header</a>
                                                                        </li>
                                                                        <li><a href="layouts-danger-header#">Danger Header</a>
                                                                        </li>
                                                                        <li><a href="layouts-search-input#"><span class="label label-primary pull-right">New</span>Search Input</a>
                                                                        </li>
                                                                        <li><a href="layouts-offcanvas-menu#"><span class="label label-primary pull-right">New</span>Off Canvas Menu</a>
                                                                        </li>
                                                                        <li><a href="layouts-nosidebar-left#">Without Left Sidebar</a>
                                                                        </li>
                                                                        <li><a href="layouts-nosidebar-right#">Without Right Sidebar</a>
                                                                        </li>
                                                                        <li><a href="layouts-nosidebars#">Without Both Sidebars</a>
                                                                        </li>
                                                                        <li><a href="layouts-fixed-sidebar#">Fixed Left Sidebar</a>
                                                                        </li>
                                                                        <li><a href="pages-blank-aside#">Page Aside</a>
                                                                        </li>
                                                                        <li><a href="layouts-collapsible-sidebar#"><span class="label label-primary pull-right">New</span>Collapsible Sidebar</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="maps-google#">Google Maps</a>
                                                                        </li>
                                                                        <li><a href="maps-vector#">Vector Maps</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
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
                                                    <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
                                                    <div class="progress">
                                                        <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
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
                                                            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
                                                            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
                                                            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-panel">
                                                        <div class="tab-content">
                                                            <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
                                                                <div class="chat-contacts">
                                                                    <div class="chat-sections">
                                                                        <div class="be-scroller">
                                                                            <div class="content">
                                                                                <h2>Recent</h2>
                                                                                <div class="contact-list contact-list-recent">
                                                                                    <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                                                                                        <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                                                                                        <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                                                                                            <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                                                                                            <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                                                                                                <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                                                                                            </div>
                                                                                            <h2>Contacts</h2>
                                                                                            <div class="contact-list">
                                                                                                <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                                                                                                    <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                                                                                                    <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                                                                                                        <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                                                                                                        <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                                                                                                            <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom-input">
                                                                                                <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="chat-window">
                                                                                            <div class="title">
                                                                                                <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                                                                                                    <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                                                                                </div><span class="icon return mdi mdi-chevron-left"></span>
                                                                                            </div>
                                                                                            <div class="chat-messages">
                                                                                                <div class="be-scroller">
                                                                                                    <div class="content">
                                                                                                        <ul>
                                                                                                            <li class="friend">
                                                                                                                <div class="msg">Hello</div>
                                                                                                            </li>
                                                                                                            <li class="self">
                                                                                                                <div class="msg">Hi, how are you?</div>
                                                                                                            </li>
                                                                                                            <li class="friend">
                                                                                                                <div class="msg">Good, I'll need support with my pc</div>
                                                                                                            </li>
                                                                                                            <li class="self">
                                                                                                                <div class="msg">Sure, just tell me what is going on with your computer?</div>
                                                                                                            </li>
                                                                                                            <li class="friend">
                                                                                                                <div class="msg">I don't know it just turns off suddenly</div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="chat-input">
                                                                                                <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                                                                                                    <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
                                                                                        <div class="todo-container">
                                                                                            <div class="todo-wrapper">
                                                                                                <div class="be-scroller">
                                                                                                    <div class="todo-content"><span class="category-title">Today</span>
                                                                                                        <ul class="todo-list">
                                                                                                            
                                                                                                        </ul><span class="category-title">Tomorrow</span>
                                                                                                        <ul class="todo-list">
                                                                                                            <li>
                                                                                                                <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                                                                                                                    <input id="todo4" type="checkbox">
                                                                                                                    <label for="todo4">Initialize the project</label>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                                                                                                                    <input id="todo5" type="checkbox">
                                                                                                                    <label for="todo5">Create the main structure</label>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                                                                                                                    <input id="todo6" type="checkbox">
                                                                                                                    <label for="todo6">Updates changes to GitHub</label>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                                                                                                                    <input id="todo7" type="checkbox">
                                                                                                                    <label for="todo7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!</label>
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
                                                                                                                                        <input type="checkbox" name="st8" id="st8"><span>
                                                                                                                                            <label for="st8"></label></span>
                                                                                                                                        </div><span class="name">Deploy on commit</span>
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
                                                                                                        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                                                                                                        
                                                                                                        <p class="pull-right"><?= Yii::powered() ?></p>
                                                                                                    </div>
                                                                                                </footer>
                                                                                                <?php $this->endBody() ?>
                                                                                                <script src="assets/js/main.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
                                                                                                <script src="assets/js/main.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
                                                                                                <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
                                                                                                <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
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
