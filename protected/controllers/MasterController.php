<?php

class MasterController extends Controller
{
  public $layout = '//layouts/withSidebar';

  public function actionPatient()
  {
    $this->render('application.views.site.master.patientManagement');
  }
  public function actionEmployee()
  {
    $this->render('application.views.site.master.employeeManagement');
  }

  public function actionMedicine()
  {
    $this->render('application.views.site.master.medicineManagement');
  }

  public function actionTreatment()
  {
    $this->render('application.views.site.master.treatmentManagement');
  }
}
