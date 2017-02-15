<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base.php');
class Module extends Base {
 
  
  function __construct()
  {
    parent:: __construct(); 
    $this->isLoggedIn();
    $this->load->model('admin/moduleManage', 'model');
    
    if($this->session_data['user_level'] != '0'){
      redirect('admin/homecrm','location');
    }
  
  }


  public function index() {   

    $post = $this->input->post();

    if(isset($post['send'])){
      $out = $this->model->moduleInsert($post);
      redirect(base_url().'admin/module','location');
    }
    if(isset($post['sidebar_insert'])){

      $out = $this->model->sidebarInsert($post);
      redirect(base_url().'admin/module/showPanelData','location');
    }

    $data = $this->model->dataFetch();
    $header = array('page_title' => 'Manage Module | MiConsulting');
    $content = array('headline' => "Manage Modules", 'data' => $data);

    $this->getLayout('admin/moduleManage/index', $header, $left, $content, $footer);

  }


  public function fetchSidePanelForDeveloper(){

  $data = $this->models->retrieveLeftPanelBySession();
        $navigationCollection = array();
    

    foreach ($data as $node => $value) {
      
      if( $value->sub_id == 0 ){
          $navigationCollection[$value->id]['nav'] = $value->root_heading;
          $navigationCollection[$value->id]['icon'] = $value->icon;
          $navigationCollection[$value->id]['url'] = $value->url;
      }else{
        $navigationCollection[$value->sub_id]['sub-nav'][$value->id] = array(
                                            'url' => $value->url, 
                                            'sub_heading' => $value->sub_heading
                                          );
      }

    }
         return $navigationCollection;
    
  }

  public function addModule() {  


    $header = array('page_title' => 'Add Module | MiConsulting');
    $content = array('headline' => "Add Module");
    $this->getLayout('admin/moduleManage/addModule', $header, $left, $content, $footer);

  }  

  public function showPanelData() { 

    $leftpanel = $this->fetchSidePanelForDeveloper();
    $data = $this->model->showpaneldata();

    $header = array('page_title' => 'Manage Sidepanel | MiConsulting');
    $content = array('headline' => "Manage Sidepanel", 'data'=> $data, 'leftpanel' => $leftpanel);
    $this->getLayout('admin/moduleManage/sidePanel', $header, $left, $content, $footer);

  }

  public function fetchsidepanel() { 

    return "ankit Vikalp";
  }

  public function updateModule() {

    $id = $this->uri->segment(4);
    $data = $this->model->dataFetchById($id);      

    $post = $this->input->post();
    if(isset($post['send'])){
      $out = $this->model->moduleUpdate($post);
      if($out == 'OK'){
        $msg = 'Updated Successfully'; 
        redirect(base_url().'admin/module','location');
      }else{
        $msg = 'Oopss Error Occured Try Again!';
      }
    }

    $header = array('page_title' => 'Update Module | MiConsulting');
    $content = array('headline' => "Update Module", 'data'=> $data, 'message'=>$msg );
    $this->getLayout('admin/moduleManage/updateModule', $header, $left, $content, $footer);

  }  

  public function updateSidePanel() {

    $id = $this->uri->segment(4);

    $data = $this->model->sideBarFetchById($id); 
    $rootheading = $this->model->fetchRootHeading();     

    $post = $this->input->post();
    if(isset($post['sidebar_update'])){

      $out = $this->model->sidebarUpdate($post, $id);
      if($out == 'OK'){
        $msg = 'Updated Successfully'; 
        redirect(base_url().'admin/module/showPanelData','location');
      }else{
        $msg = 'Oopss Error Occured Try Again!';
      }
    }

    $header = array('page_title' => 'Update Sidepanel | MiConsulting');
    $content = array('headline' => "Update Sidepanel", 'rootheading' => $rootheading, 'data' => $data, 'message' => $msg );
    $this->getLayout('admin/moduleManage/updateSidePanel', $header, $left, $content, $footer);

  }

  public function updateStatus(){
    $id = $this->uri->segment(5);
    $status = $this->uri->segment(4);

    $res = $this->model->updateStatusId($id, $status);

    redirect('admin/module','location');

  }  

  public function updateStatusSidePanel(){
    $id = $this->uri->segment(5);
    $status = $this->uri->segment(4);

    $res = $this->model->updateStatusIdSidePanel($id, $status);
    redirect('admin/module/showPanelData','location');

  }  

  public function addSidebar(){

    $id = $this->uri->segment(5);
    $status = $this->uri->segment(4);

    $rootheading = $this->model->fetchRootHeading();

    $header = array('page_title' => 'Add SidePanel | MiConsulting');
    $content = array('headline' => "Add Sidepanel", 'rootheading'=> $rootheading );
    $this->getLayout('admin/moduleManage/addSidePanel', $header, $left, $content, $footer);

  }


    

  
}
