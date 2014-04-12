<?php

Router::connect('/users/login',array('plugin'=>'usermgmt','controller'=>'users','action'=>'login'));
Router::connect('/logout',array('plugin'=>'usermgmt','controller'=>'users','action'=>'logout'));

Router::connect('/roles',array('plugin'=>'usermgmt','controller'=>'roles','action'=>'index'));
Router::connect('/add-role',array('plugin'=>'usermgmt','controller'=>'roles','action'=>'add'));
Router::connect('/view-role/:id',array('plugin'=>'usermgmt','controller'=>'roles','action'=>'view'),array('pass'=>array('id'),'id'=>'[0-9]+'));
Router::connect('/update-role/:id',array('plugin'=>'usermgmt','controller'=>'roles','action'=>'edit'),array('pass'=>array('id'),'id'=>'[0-9]+'));
Router::connect('/delete-role/:id',array('plugin'=>'usermgmt','controller'=>'roles','action'=>'delete'),array('pass'=>array('id'),'id'=>'[0-9]+'));


Router::connect('/users',array('plugin'=>'usermgmt','controller'=>'users','action'=>'index'));
Router::connect('/add-users',array('plugin'=>'usermgmt','controller'=>'users','action'=>'add'));
Router::connect('/view-user/:id',array('plugin'=>'usermgmt','controller'=>'users','action'=>'view'),array('pass'=>array('id'),'id'=>'[0-9]+'));
Router::connect('/update-user/:id',array('plugin'=>'usermgmt','controller'=>'users','action'=>'edit'),array('pass'=>array('id'),'id'=>'[0-9]+'));
Router::connect('/delete-user/:id',array('plugin'=>'usermgmt','controller'=>'users','action'=>'delete'),array('pass'=>array('id'),'id'=>'[0-9]+'));
