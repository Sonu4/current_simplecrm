<?php
 // created: 2018-08-02 16:49:30
$layout_defs["E_Employee"]["subpanel_setup"]['e_employee_fp_events'] = array (
  'order' => 100,
  'module' => 'FP_events',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_E_EMPLOYEE_FP_EVENTS_FROM_FP_EVENTS_TITLE',
  'get_subpanel_data' => 'e_employee_fp_events',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
