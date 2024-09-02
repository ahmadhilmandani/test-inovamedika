<?php

class AuthController extends Controller
{
  public $layout = '//layouts/auth';

  public function actionLogin()
  {
    $this->render('application.views.site.login.index');

  }
}
