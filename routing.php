<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homeShow'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('userList',        'UserListCtrl', ['admin', 'stylist']);
Utils::addRoute('userListPart',        'UserListCtrl', ['admin', 'stylist']);
Utils::addRoute('register',        'RegisterCtrl');
Utils::addRoute('registerShow',    'RegisterCtrl');
Utils::addRoute('accountIntro',    'AccountIntroCtrl',        ['user']);
Utils::addRoute('accountHairplan',    'AccountHairplanCtrl',  ['user']);
Utils::addRoute('accountProducts',    'AccountProductsCtrl',  ['user']);
Utils::addRoute('accountResults',    'AccountResultsCtrl',    ['user']);
Utils::addRoute('loginShow',        'LoginCtrl');
Utils::addRoute('login',            'LoginCtrl');
Utils::addRoute('logout',            'LoginCtrl');
Utils::addRoute('userEdit',        'UserEditCtrl', ['admin']);
Utils::addRoute('userSave',        'UserEditCtrl', ['admin']);
Utils::addRoute('userDelete',    'UserEditCtrl',   ['admin']);
Utils::addRoute('homeShow',    'HomeCtrl');
Utils::addRoute('testShow',    'TestCtrl');
Utils::addRoute('resultShow',    'ResultCtrl');
Utils::addRoute('resultDelete',    'AccountResultsCtrl');
Utils::addRoute('userProductSet',    'UserProductSetCtrl', ['stylist']);
Utils::addRoute('userProductSetSave',    'UserProductSetCtrl', ['stylist']);
