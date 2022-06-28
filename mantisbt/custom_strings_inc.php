<?php
if ( lang_get_current() == portuguese_brazil ) 
{
  $s_status_enum_string = '10:novo,21:requisitos,31:viabilidade,41:datamart,51:cubolap,61:dataviz,71:homologação,90:fechado,100:cancelado';
} else {
  $s_status_enum_string = '10:new,21:requirements,31:viability,41:datamart,51:cubolap,61:dataviz,71:homologation,90:closed,100:cancelled';
  
  $s_cancelled_bug_button = "Issue Cancelled";
  $s_requirements_bug_button = 'issue in Requirements';
  $s_viability_bug_button = 'issue in Viability';
  $s_datamart_bug_button = 'issue in Datamart';
  $s_cubolap_bug_button = 'issue in Cubolap';
  $s_dataviz_bug_button = 'issue in Dataviz';
  $s_homologation_bug_button = 'issue in Homologation';
  $s_cancelled_bug_button = 'issue in Cancelled';

  $s_requirements_bug_title = "Set Issue to Requirements";
  $s_viability_bug_title = "Set Issue to Viability";
  $s_datamart_bug_title = "Set Issue to Datamart";
  $s_cubolap_bug_title = "Set Issue to Cubolap";
  $s_dataviz_bug_title = "Set Issue to Dataviz";
  $s_homologation_bug_title = "Set Issue to Homologation";
  $s_cancelled_bug_title = "Set Issue to Cancelled";

  $s_email_notification_title_for_status_bug_requirements = "The following issue is REQUIREMENTS."; 
  $s_email_notification_title_for_status_bug_viability = "The following issue is VIABILITY."; 
  $s_email_notification_title_for_status_bug_datamart = "The following issue is DATAMART."; 
  $s_email_notification_title_for_status_bug_cubolap = "The following issue is CUBOLAP."; 
  $s_email_notification_title_for_status_bug_dataviz = "The following issue is DATAVIZ."; 
  $s_email_notification_title_for_status_bug_homologation = "The following issue is HOMOLOGATION."; 
  $s_email_notification_title_for_status_bug_cancelled = "The following issue is CANCELLED."; 

}

?>