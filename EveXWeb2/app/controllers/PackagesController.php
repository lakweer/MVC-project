<?php

class PackagesController extends Controller {

  public function __construct($controller,$action){
    parent::__construct($controller,$action);
    $this->view->setLayout('default');
    $this->load_model('Packages');
  }

  public function indexAction(){
    $packages = $this->PackagesModel->findAllByUserId(CurrentUser()->id,['order'=>'company_name']);
    $this->view->packages = $packages;
    $this->view->render('packages/index');
  }

  public function addAction(){
    $package = new Packages();
    $validation = new Validate();
    if($_POST){
      $package->assign($_POST);
      $validation->check($_POST, Packages::$addValidation);
      if($validation->passed()) {
        $package->user_id = currentUser()->id;
        $package->save();
        Router::redirect('packages');
      }
    }
    $this->view->package = $package;
    $this->view->displayErrors = $validation->displayErrors();
    $this->view->postAction = PROOT . 'Packages' . DS . 'add';
    $this->view->render('packages/add');
  }

  public function editAction($id){
    $package = $this->PackagesModel->findByIdAndUserId((int)$id, currentUser()->id);
    if(!$package) Router::redirect('packages');
    $validation = new Validate();
    if($_POST){
      $package->assign($_POST);
      $validation->check($_POST,Packages::$addValidation);
      if($validation->passed()){
        $package->save();
        Router::redirect('packages');
      }
    }
    $this->view->displayErrors = $validation->displayErrors();
    $this->view->package = $package;
    $this->view->postAction = PROOT . 'packages' . DS . 'edit' . DS . $package->id;
    $this->view->render('packages/edit');
  }

  public function detailsAction($id){
    $package = $this->PackagesModel->findByIdAndUserId((int)$id,currentUser()->id);
    if(!$package){
      Router::redirect('packages');
    }
    $this->view->package = $package;
    $this->view->render('packages/details');
  }

  public function deleteAction($id){
    $package = $this->PackagesModel->findByIdAndUserId((int)$id,currentUser()->id);
    if($package){
      $package->delete();
    }
    Router::redirect('packages');
  }

}
