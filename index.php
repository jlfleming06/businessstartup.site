<?php
// Set how often home page changes - in seconds (recommended period is 86400 for 24 hours)
$lockperiod = 86400;


$filename = array ();
$filename[0] = 'the_one_on_one_coaching_model.php';
$filename[1] = '4_reasons_you_should_use_a_business_coach_to_get_results.php';
$filename[2] = 'coaching_models_for_the_workplace.php';
$filename[3] = 'coaching_to_get_results.php';
$filename[4] = 'highly_effective_business_coaching.php';
$filename[5] = 'how_business_coaching_can_create_continually_motivated_employees.php';
$filename[6] = 'how_business_coaching_helps_leadership_teams.php';
$filename[7] = 'how_business_coaching_works.php';
$filename[8] = 'how_one_on_one_business_coaching_can_help.php';
$filename[9] = 'how_your_business_coach_can_help_you_grow_your_business.php';
$filename[10] = 'a_look_at_the_different_coaching_styles.php';
$filename[11] = 'the_role_of_the_business_coach_put_into_play.php';
$filename[12] = 'training_methods_and_techniques_used_by_business_coaches.php';
$filename[13] = 'understanding_the_role_of_the_business_coach.php';
$filename[14] = 'using_reflective_language_in_business_coaching.php';
$filename[15] = 'what_is_business_coaching_and_how_can_it_benefit_your_business.php';
$filename[16] = 'what_is_business_coaching.php';
$filename[17] = 'why_using_a_business_coach_can_get_you_the_results_you_want.php';
$filename[18] = 'why_you_want_to_hire_the_services_of_a_business_coach.php';
$filename[19] = 'will_your_business_benefit_from_a_business_coach.php';
$randpos = (intval(time() / $lockperiod)) % 20;
$filepath = $filename[$randpos];
include $filepath;
?>
