<?php

// LOGIN
$lang['lg_email_label']                                                                         = 'Email';
$lang['lg_psw_label']                                                                           = 'Password';
$lang['lg_signin_btn']                                                                          = 'Login';
$lang['lg_error_wrong_data']                                                                    = 'The email or password is invalid.';

// GENERAL
$lang['gn_error_title']										= 'Alert!';
$lang['gn_warning_title']									= 'Warning!';
$lang['gn_ok_title']										= 'Ok!';
$lang['ge_user']											= 'Player';
$lang['ge_go']												= 'Operator (GO)';
$lang['ge_sgo']												= 'Super Operator (SGo)';
$lang['ge_ga']												= 'Administrator (GA)';
$lang['ge_yes']												= 'YES';
$lang['ge_no']												= 'NO';
$lang['ge_no_permissions']									= 'You need special permissions to see this page';
$lang['ge_home_planet']										= 'Homeworld';
$lang['ge_colony']											= 'Colony';
$lang['user_level'][0]										= 'Player';
$lang['user_level'][1]										= 'Operator (GO)';
$lang['user_level'][2]										= 'Super Operator (SGo)';
$lang['user_level'][3]										= 'Administrator (GA)';

// MENU
$lang['mn_general']                                                                             = 'General';
$lang['mn_index']           = 'Home';
$lang['mn_permissions']     = 'Permissions';
$lang['mn_reset_universe']  = 'Reset universe';
$lang['mn_sql_queries']     = 'SQL query';
$lang['mn_config_title']									= 'Configuration';
$lang['mn_config_server']									= 'Game settings';
$lang['mn_config_modules']									= 'Game features';
$lang['mn_config_registrations']							= 'User registration settings';
$lang['mn_config_planets']									= 'New planet settings';
$lang['mn_config_stats']									= 'Statistics';
$lang['mn_premium']											= 'Premium';
$lang['mn_config_changelog']								= 'Languages edition';
$lang['mn_info_title']										= 'Information';
$lang['mn_info_general']									= 'General';
$lang['mn_info_db']											= 'DB errors';
$lang['mn_info_fleets']										= 'Flying fleets';
$lang['mn_info_messages']									= 'Messages list';
$lang['mn_edition_title']									= 'Edition';
$lang['mn_edition_maker']									= 'Creator';
$lang['mn_edition_users']									= 'Users';
$lang['mn_edition_alliances']								= 'Alliances';
$lang['mn_tools_title']										= 'Tools';
$lang['mn_tools_backup']									= 'Backups';
$lang['mn_tools_encrypter']									= 'Password encrypter';
$lang['mn_tools_global_message']							= 'Global Message / Email ';
$lang['mn_tools_ban']										= 'Banning';
$lang['mn_tools_manual_update']								= 'Manual points update';
$lang['mn_tools_update']                                                        = 'Update';
$lang['mn_tools_migrate']                                                       = 'Migrate';
$lang['mn_tools_manual_update_confirm']						= '¿Are you sure you wan to update the Statistics?';
$lang['mn_maintenance_title']								= 'Maintenance';
$lang['mn_maintenance_db']									= 'Repair / Optimize tables';

// TOP NAVIGATION BAR
$lang['tn_game']            = 'Game overview';
$lang['tn_logout']          = 'Logout';
$lang['tn_exit_confirm']    = 'Are you sure you want to log out of the control panel?';                                        
$lang['tn_update']          = 'Update available!';
$lang['tn_last_version']    = 'Latest version available: ';

// HOME - INDEX
$lang['hm_title']											= 'Welcome to XG Proyect';
$lang['hm_notifications']									= 'Notifications';
$lang['hm_errors']											= 'Alert!';
$lang['hm_warning']											= 'Warning!';
$lang['hm_ok']												= 'Ok!';
$lang['hm_install_file_detected']							= 'install/ directory detected. For safety reasons you must rename or delete it.';
$lang['hm_config_file_writable']							= 'The config.php file can be written, it is recommended to be placed in chmod 440 (read only).';
$lang['hm_database_errors']									= 'There are errors in your database. You can view them by clicking <a href="admin.php?page=errors">here</a>';
$lang['hm_old_version']										= 'A new version is available. Click <a href="http://www.xgproyect.org/downloads/" target="_blank">here</a> to download it.';
$lang['hm_all_ok']											= 'No updates or alerts';






$lang['hm_credits']											= 'Credits';
$lang['hm_proyect_leader']									= 'Project Leader';
$lang['hm_principal_contributors']							= 'Main contributors';

// PERMISSIONS
$lang['mod_title']											= 'Manage permissions';
$lang['mod_range']											= 'Ranks';
$lang['mod_power_config']									= 'Access to Configurations';
$lang['mod_power_info']										= 'Access to Information';
$lang['mod_power_edition']									= 'Access to Edition';
$lang['mod_power_tools']									= 'Access to Tools';
$lang['mod_power_maintenance']								= 'Access to Maintenance';
$lang['mod_power_log']										= 'Record actions';
$lang['mod_reference']										= 'Referencias';
$lang['mod_save_all']										= 'Save permissions';
$lang['mod_all_ok_message']									= 'Changes saved successfully!';

// UNIVERSE RESET
$lang['re_reset_universe']									= 'Reset universe';
$lang['re_reset_universe_confirmation']						= 'When you click OK, the requested options will be reset to zero. This operation can not be reversed, and it is your responsibility to make a backup of the database. In case of restarting the whole universe accounts will not be deleted.';
$lang['re_defenses_and_ships']								= 'Shipyard and defenses';
$lang['re_defenses']										= 'Reset defenses';
$lang['re_ships']											= 'Reset ships';
$lang['re_reset_hangar']									= 'Reset shipyard and defenses queue';
$lang['re_buldings']										= 'Buildings';
$lang['re_buildings_pl']									= 'Reset planetary buildings';
$lang['re_buildings_lu']									= 'Reset lunar buildings';
$lang['re_reset_buldings']									= 'Reset building queue';
$lang['re_inve_ofis']										= 'Research and officiers';
$lang['re_ofici']											= 'Reset officiers';
$lang['re_investigations']									= 'Reset researchs';
$lang['re_reset_invest']									= 'Reset ongoing researchs';
$lang['re_resources']										= 'Resources';
$lang['re_resources_dark']									= 'Reset dark matter';
$lang['re_resources_met_cry']								= 'Reset metal, crystal and deuterium';
$lang['re_general']											= 'General';
$lang['re_reset_moons']										= 'Reset moons';
$lang['re_reset_notes']										= 'Reset notes';
$lang['re_reset_rw']										= 'Reset combat reports';
$lang['re_reset_buddies']									= 'Reset buddy list';
$lang['re_reset_allys']										= 'Reset alliances';
$lang['re_reset_fleets']									= 'Reset fleets';
$lang['re_reset_banned']									= 'Reset banned users';
$lang['re_reset_messages']									= 'Reset messages';
$lang['re_reset_statpoints']								= 'Reset statistics';
$lang['re_reset_all']										= 'Reset the whole universe';
$lang['re_reset_h1']										= 'Reset options';
$lang['re_reset_excess']									= 'Options successfully resetted';
$lang['re_reset_go']										= 'Reset';

// RUN QUERY
$lang['qe_title_menu']										= 'SQL query';
$lang['qe_execute']											= 'Run SQL query';
$lang['qe_succes']											= 'Operation completed successfully';
$lang['qe_note']											= 'Note: Only one query at the time';

// SETTINGS - CONFIGURATIONS
$lang['se_server_parameters']								= 'Game settings';
$lang['se_name']											= 'Name';
$lang['se_logo']											= 'Logo';
$lang['se_lang']											= 'Language';
$lang['se_general_speed']									= 'General speed';
$lang['se_normal_speed']									= 'Default general speed: 1<br>Maximum recommended speed: 5';
$lang['se_normal_speed_resoruces']							= 'Default production speed: 1<br>Maximum recommended speed: 5';
$lang['se_normal_speed_fleett']								= 'Default fleet speed: 1<br>Maximum recommended speed: 5';
$lang['se_fleet_speed']										= 'Fleet speed';
$lang['se_resources_producion_speed']						= 'Production speed';
$lang['se_admin_email']										= 'Administrator email';
$lang['se_forum_link']										= 'Forum link';
$lang['se_server_op_close']									= 'Enable server';
$lang['se_server_status_message']							= 'Disabled server message';
$lang['se_ssl_enabled']										= 'Activate SSL';
$lang['se_date_time_zone']									= 'Time Zone';
$lang['se_date_format']										= 'Short Date';
$lang['se_date_format_extended']							= 'Extended Date';
$lang['se_server_planet_parameters']						= 'New planets settings';
$lang['se_several_parameters']								= 'Other settings';
$lang['se_title_admins_protection']							= 'Check the box to enable protection and prevent administrators and moderators receive attacks or any other action of the fleets.';
$lang['se_admin_protection']								= 'Protection';
$lang['se_save_parameters']									= 'Save changes';
$lang['se_configuration_title']								= 'Configuration';
$lang['se_server_name']										= 'Name of your game';
$lang['se_server_logo']										= 'Your game Logo. Only an URL.';
$lang['se_def_cdr']											= 'Defenses to debris';
$lang['se_ships_cdr']										= 'Ships to debris';
$lang['se_def_cdr_message']									= 'Set the percentage of debris that would generate the defenses after an attack';
$lang['se_ships_cdr_message']								= 'Set the percentage of debris that would generate the ships after an attack';
$lang['se_noob_protect']									= 'Noob protection';
$lang['se_noob_protect_active']								= 'Activate protection';
$lang['se_noob_protect2']									= 'Base points';
$lang['se_noob_protect3']									= 'Multiplier';
$lang['se_noob_protect_e2']									= 'Limit of point to lose protection';
$lang['se_noob_protect_e3']									= 'There are three main values to calculate the noob protection:
<br/><br/>
"Noob protection" enabled / disable the noob protection setting.<br/>
"Points amount" limit of point to lose protection.<br/>
"Points amount limit" this is what we\'re going to analyze<br/>
<br/>
Player points * Points amount limit = points until a player can be attacked.<br/>
<br/>
Ex:<br/>
<br/>
If the player has 10 points and the points amount limit is 5:<br/>
<br/>
10 * 5 = 50<br/>
<br/>
Players up to 50 points can attack a weak player and those over 50 cannot.<br/>
<br/>
The player that this weak player can attack will be calculated:<br/>
<br/>
10 / 5 = 2<br/>
<br/>
So it\'s going to be able to attack player with more than 2 points.';
$lang['se_all_ok_message']									= 'Changes saved successfully!';

// MODULES
$lang['mdl_modules']										= 'Game features';
$lang['mdl_save']											= 'Save features';
$lang['module'][0]											= 'Changelog';
$lang['module'][1]											= 'Overview';
$lang['module'][2]											= 'Empire';
$lang['module'][3]											= 'Resources / Facilities';
$lang['module'][4]											= 'Resource settings';
$lang['module'][5]											= 'Merchant';
$lang['module'][6]											= 'Research';
$lang['module'][7]											= 'Shipyard';
$lang['module'][8]											= 'Fleet / Shortcuts';
$lang['module'][9]											= 'Fleet movements';
$lang['module'][10]											= 'Technology';
$lang['module'][11]											= 'Galaxy';
$lang['module'][12]											= 'Defense';
$lang['module'][13]											= 'Alliance';
$lang['module'][14]											= 'Forum';
$lang['module'][15]											= 'Recruit Officers';
$lang['module'][16]											= 'Statistics';
$lang['module'][17]											= 'Search';
$lang['module'][18]											= 'Messages';
$lang['module'][19]											= 'Notes';
$lang['module'][20]											= 'Buddies';
$lang['module'][21]											= 'Options';
$lang['module'][22]											= 'Banned';
$lang['module'][23]											= 'Combat Reports';
$lang['module'][24]											= 'Information / Jump Gate';

// USER REGISTRATION SETTINGS
$lang['ur_settings']										= 'User registration settings';
$lang['ur_open_close']										= 'New accounts';
$lang['ur_welcome_message']									= 'Send welcome message';
$lang['ur_welcome_email']									= 'Send welcome email';
$lang['ur_all_ok_message']									= 'Changes saved successfully!';
$lang['ur_save_parameters']									= 'Save changes';

// NEW PLANET SETTINGS
$lang['np_parameters']										= 'New planets settings';
$lang['np_initial_fields']									= 'Initial fields';
$lang['np_metal_production']								= 'Metal production per hour';
$lang['np_crystal_production']								= 'Crystal production per hour';
$lang['np_deuterium_production']							= 'Deuterium production per hour';
$lang['np_energy_production']								= 'Energy production per hour';
$lang['np_all_ok_message']									= 'Changes saved successfully!';
$lang['np_save_parameters']									= 'Save changes';

// STATISTICS SETTINGS
$lang['cs_title']											= 'Statistics';
$lang['cs_point_per_resources_used']						= 'One point equals';
$lang['cs_resources']										= 'resources';
$lang['cs_time_between_updates']							= 'Time between updates';
$lang['cs_minutes']											= 'minutes';
$lang['cs_access_lvl']										= 'Until which rank can be shown in the rank page?';
$lang['cs_save_changes']									= 'Save changes';
$lang['cs_all_ok_message']									= 'Changes saved successfully!';
$lang['cs_yes']												= 'Yes';
$lang['cs_no']												= 'No';

// PREMIUM
$lang['pr_title']											= 'Premium';
$lang['pr_pay_url']											= 'Payment URL';
$lang['pr_trader']											= 'Trader cost (Dark Matter)';
$lang['pr_save_changes']									= 'Save changes';
$lang['pr_error_url']										= '<br/>Payment URL is empty or invalid';
$lang['pr_error_trader']									= '<br/>Trader cost must be a value greater than 0';
$lang['pr_all_ok_message']									= 'Changes saved successfully!';

// CHANGELOG EDITOR
$lang['ce_edit']											= 'Languages edition';
$lang['ce_notice']											= 'Here you can modify the languages files, HTML is allowed. Use with caution.';
$lang['ce_file']											= 'Select language file';
$lang['ce_warning']											= 'Making a wrong change in this file may cause your game to stop working, modify it only if you know what you are doing.';
$lang['ce_sure']											= 'Are you sure you want to continue?';
$lang['ce_save_changes']									= 'Save changes';
$lang['ce_all_ok_message']									= 'Changes saved successfully!';

// INFORMATION
$lang['ia_title']											= 'Additional information';
$lang['ia_upcoming_updates']								= 'Upcoming updates';
$lang['ia_name']											= 'Update';
$lang['ia_value']											= 'Time until next update / Time since the last update';
$lang['ia_next_points_update']								= 'Points';
$lang['ia_next_db_backup']									= 'Data backup';
$lang['ia_next_cleanup']									= 'Players, messages and reports cleanup';
$lang['ia_statistics']										= 'Statistics';
$lang['ia_stats_name']										= 'Name';
$lang['ia_stats_value']										= 'Value';
$lang['ia_active_modules']									= 'Active modules';
$lang['ia_total_users']										= 'Amount of users';
$lang['ia_inactive_users']									= 'Inactive users';
$lang['ia_vacation_users']									= 'On vacation users';
$lang['ia_delete_mode_users']								= 'Delete mode users';
$lang['ia_banned_users']									= 'Banned users';
$lang['ia_flying_fleets']									= 'Flying fleets';
$lang['ia_db_data']											= 'Database information';
$lang['ia_database_size']									= 'Dtabase size';
$lang['ia_database_server']									= 'MySQL version';

// DB ERRORS
$lang['er_error_list']										= 'DB errors';
$lang['er_dlte_all']										= 'Delete all';
$lang['er_user_id']											= 'User (IP)';
$lang['er_type']											= 'Type';
$lang['er_data']											= 'Date';
$lang['er_track']											= 'Line / Class / File';
$lang['er_errors']											= ' error/s';

// FLEET MOVEMENTS
$lang['ff_flying_fleets']									= 'Flying fleets';
$lang['ff_number']											= 'ID';
$lang['ff_mission']											= 'Mission';
$lang['ff_ammount']											= 'Ships (total)';
$lang['ff_beginning']										= 'Beginning';
$lang['ff_departure']										= 'Departure';
$lang['ff_objective']										= 'Destiny';
$lang['ff_arrival']											= 'Objective';
$lang['ff_return']											= 'Return';
$lang['ff_type_mission'][1]  								= 'Attack';
$lang['ff_type_mission'][2]  								= 'Groupal Attack';
$lang['ff_type_mission'][3]  								= 'Transport';
$lang['ff_type_mission'][4]  								= 'Deploy';
$lang['ff_type_mission'][5]  								= 'Hold Position';
$lang['ff_type_mission'][6]  								= 'Spy';
$lang['ff_type_mission'][7]  								= 'Colonize';
$lang['ff_type_mission'][8]  								= 'Recycle';
$lang['ff_type_mission'][9]  								= 'Destroy';
$lang['ff_type_mission'][15] 								= 'Expedition';
$lang['ff_ships']											= 'Ships';
$lang['ff_r']												= '(R)';
$lang['ff_a']												= '(A)';
$lang['ff_metal']											= 'Metal';
$lang['ff_crystal']											= 'Crystal';
$lang['ff_deuterium']										= 'Deuterium';
$lang['ff_no_resources']									= 'No resources';

// MESSAGES LIST
$lang['mg_title']											= 'Messages list';
$lang['mg_filter_by']										= 'Filter messages by:';
$lang['mg_filter_message_id']								= 'Message ID:';
$lang['mg_filter_user']										= 'ID/username:';
$lang['mg_filter_planet']									= 'Planet name/coords:';
$lang['mg_filter_date']										= 'Date (dd/mm/yyyy):';
$lang['mg_filter_type']										= 'Message type:';
$lang['mg_filter_content']									= 'Content (keywords):';
$lang['mg_filter_start_search']								= 'Begin search';
$lang['mg_search_results']									= 'Search results';
$lang['mg_no_results']										= 'No messages found';
$lang['mg_show_hide']										= 'Show / Hide';
$lang['mg_delete_selected']									= 'Delete selected messages';
$lang['mg_delete_id']										= 'ID';
$lang['mg_delete_sender']									= 'Sender';
$lang['mg_delete_receiver']									= 'Receiver';
$lang['mg_delete_time']										= 'Date/Time';
$lang['mg_delete_type']										= 'Type';
$lang['mg_delete_from']										= 'From';
$lang['mg_delete_subject']									= 'Subject';
$lang['mg_delete_ok']										= 'Messages successfully deleted';

// MAKER - CREATOR
$lang['mk_title']											= 'Creator';
$lang['mk_new_alliance']									= 'Create Alliance';
$lang['mk_new_moon']										= 'Create Moon';
$lang['mk_new_planet']										= 'Create Planet';
$lang['mk_new_user']										= 'Create User';
$lang['mk_alliance_title']									= 'Create Alliance';
$lang['mk_alliance_name']									= 'Alliance name';
$lang['mk_alliance_tag']									= 'Alliance tag';
$lang['mk_alliance_founder']								= 'Alliance founder';
$lang['mk_alliance_add_alliance']							= 'Add Alliance';
$lang['mk_alliance_all_fields']								= 'Unable to create an alliance. <br /><strong>Probable errors:</strong><br />-Alliance name already exists.<br/>-Alliance tag already exists.<br/>-Founder not defined.';
$lang['mk_alliance_added']									= 'Alliance added';
$lang['mk_alliance_founder_rank']							= 'Leader';
$lang['mk_moon_title']										= 'Create Moon';
$lang['mk_moon_planet']										= 'Planet';
$lang['mk_moon_name']										= 'Moon name';
$lang['mk_moon_default_name']								= 'Moon';
$lang['mk_moon_diameter']									= 'Diameter';
$lang['mk_moon_random']										= '(Random)';
$lang['mk_moon_temperature']								= 'Temperature';
$lang['mk_moon_available_fields']							= 'Available fields';
$lang['mk_moon_add_moon']									= 'Add Moon';
$lang['mk_moon_only_numbers']								= 'Only numbers';
$lang['mk_moon_added']										= 'Moon added';
$lang['mk_moon_add_errors']									= 'Unable to create moon. <br /><strong>Probable errors:</strong><br />-Moon already exists on that planet.<br/>-You\'re traying to add a moon to another moon.<br/>-The selected planet is destroyed.';
$lang['mk_moon_planet_doesnt_exist']						= 'The planet doesn\'t exists.';
$lang['mk_planet_title']									= 'Create Planet';
$lang['mk_planet_user']										= 'User';
$lang['mk_planet_name']										= 'Planet name';
$lang['mk_planet_default_name']								= 'Colony';
$lang['mk_planet_available_fields']							= 'Available fields';
$lang['mk_planet_coords']									= 'Coords';
$lang['mk_planet_add_planet']								= 'Add Planet';
$lang['mk_planet_unavailable_coords']						= 'Invalid data or unavailable coords!';
$lang['mk_planet_wrong_coords']								= 'Wrong coords!';
$lang['mk_planet_added']									= 'Planet added';
$lang['mk_user_title']										= 'Create User';
$lang['mk_user_name']										= 'Username';
$lang['mk_user_pass']										= 'User password';
$lang['mk_user_password_random']							= '(Random)';
$lang['mk_user_email']										= 'User email';
$lang['mk_user_level']										= 'User level';
$lang['mk_user_coords']										= 'Coords';
$lang['mk_user_add_user']									= 'Add user';
$lang['mk_user_only_numbers']								= 'Only numbers<br/>';
$lang['mk_user_wrong_coords']								= 'Wrong coords!<br/>';
$lang['mk_user_complete_all']								= 'All fields are required<br/>';
$lang['mk_user_invalid_email']								= 'Invalid email<br/>';
$lang['mk_user_existing_name']								= 'Username already exists<br/>';
$lang['mk_user_existing_email']								= 'Email already exists<br/>';
$lang['mk_user_existing_planet']							= 'Planet already exists<br/>';
$lang['mk_user_invalid_password']							= 'Invalid password. It must contain more than 4 characters<br/>';
$lang['mk_user_added']										= 'User added with the password: %s';

// USERS
$lang['us_title']											= 'Users';
$lang['us_username_placeholder']							= 'Username or email here...';
$lang['us_search']											= 'Search';
$lang['us_nothing_found'] 									= 'User not found';
$lang['us_edit']											= 'Edit';
$lang['us_delete']											= 'Delete';
$lang['us_delete_confirm']									= 'Are you sure you want to permanently delete this user? This action CANNOT be undone.';
$lang['us_user_deleted']									= 'User successfully deleted!';
$lang['us_ban']												= 'Ban';
$lang['us_change_permissions']								= 'Change permissions';
$lang['us_general_info']									= 'General information';
$lang['us_settings']										= 'Options';
$lang['us_research']										= 'Technologies';
$lang['us_premium']											= 'Premium';
$lang['us_planets']											= 'Planets';
$lang['us_moons']											= 'Moons';
$lang['us_user_information']								= '"%s" information';
$lang['us_user_information_field']							= 'Field';
$lang['us_user_information_value']							= 'Value';
$lang['us_user_information_username']						= 'Username';
$lang['us_user_information_password']						= 'Password';
$lang['us_user_information_email']							= 'Email';
$lang['us_user_information_pemail']							= 'Permanent Email';
$lang['us_user_information_level']							= 'Level';
$lang['us_user_information_pp']								= 'Home planet';
$lang['us_user_information_ap']								= 'Current Planet / Moon';
$lang['us_user_information_last_ip']						= 'Last IP';
$lang['us_user_information_reg_ip']							= 'Registration IP';
$lang['us_user_information_browser']						= 'Browser';
$lang['us_user_information_actual_page']					= 'Current page';
$lang['us_user_information_date_reg']						= 'Date / Time registration';
$lang['us_user_information_conection']						= 'Connection';
$lang['us_no_new_messages']									= 'No unread messages';
$lang['us_new_message']										= 'There\'s one unread message';
$lang['us_user_information_shortcuts']						= 'Fleet shortcuyts';
$lang['us_user_information_alliance']						= 'Alliance';
$lang['us_user_information_banned']							= 'Banned';
$lang['us_user_information_banned_until']					= ' | banned until: ';
$lang['us_online']											= 'Connected';
$lang['us_minutes']											= '15 min';
$lang['us_offline']											= 'Offline';
$lang['us_planet_shortcut']									= 'Planet (P)';
$lang['us_debris_shortcut']									= 'Debris (E)';
$lang['us_moon_shortcut']									= 'Moon (L)';
$lang['us_send_data']										= 'Save changes';
$lang['us_error_username']									= 'Username empty on already taken';
$lang['us_error_email']										= 'Email empty or already taken';
$lang['us_error_perm_email']								= 'Permanent Email empty or already taken';
$lang['us_error_authlevel']									= 'The user level can not be empty and must be between 0 and 3';
$lang['us_error_idplanet']									= 'The planet can not be empty';
$lang['us_error_current_planet']							= 'The current user planet can not be empty';
$lang['us_error_ally_id']									= 'The user alliance can not be empty';
$lang['us_all_ok_message']									= 'Changes saved successfully!';
$lang['us_user_settings']									= '"%s" configurations';
$lang['us_user_settings_field']								= 'Configuration';
$lang['us_user_settings_value']								= 'Value';
$lang['us_user_settings_general_title']						= 'General Options';
$lang['us_user_setting_planet_sort']						= 'Sort planets by:';
$lang['us_user_setting_planet_sort_op1']					= 'Colonization date';
$lang['us_user_setting_planet_sort_op2']					= 'Coordinates';
$lang['us_user_setting_planet_sort_op3']					= 'Alphabetic order';
$lang['us_user_setting_planet_order']						= 'Assortment sequence:';
$lang['us_user_setting_planet_order_op1']					= 'Ascendant';
$lang['us_user_setting_planet_order_op2']					= 'Decreasing';
$lang['us_user_setting_no_ip_check']						= 'Disable IP Check';
$lang['us_user_settings_galaxy_title']						= 'Galaxy View Options';
$lang['us_user_setting_probes_amount']						= 'Number of espionage probes';
$lang['us_user_setting_fleet_actions']						= 'Maximum fleet messages';
$lang['us_user_settings_shortcuts_title']					= 'Shortcut';
$lang['us_user_setting_galaxy_espionage']					= 'Spy';
$lang['us_user_setting_galaxy_write']						= 'Write message';
$lang['us_user_setting_galaxy_buddy']						= 'Add to buddylist';
$lang['us_user_setting_galaxy_missile']						= 'Missile attack';
$lang['us_user_settings_other_title']						= 'Vacation mode / Delete account';
$lang['us_user_setting_vacations_status']					= 'Enable vacation mode';
$lang['us_user_setting_vacations_until']					= 'Should remain on vacation until: ';
$lang['us_user_setting_delete_account']						= 'Delete account';
$lang['us_user_research']									= '"%s" technologies';
$lang['us_user_research_technology']						= 'Technology';
$lang['us_user_research_level']								= 'Current level';
$lang['us_user_research_espionage_technology'] 				= 'Espionage Technology';
$lang['us_user_research_computer_technology'] 				= 'Computer Technology';
$lang['us_user_research_weapons_technology'] 				= 'Weapons Technology';
$lang['us_user_research_shielding_technology'] 				= 'Shielding Technology';
$lang['us_user_research_armour_technology'] 				= 'Armour Technology';
$lang['us_user_research_energy_technology'] 				= 'Energy Technology';
$lang['us_user_research_hyperspace_technology'] 			= 'Hyperspace Technology';
$lang['us_user_research_combustion_drive'] 					= 'Combustion Drive';
$lang['us_user_research_impulse_drive'] 					= 'Impulse Drive';
$lang['us_user_research_hyperspace_drive'] 					= 'Hyperspace Drive';
$lang['us_user_research_laser_technology'] 					= 'Laser Technology';
$lang['us_user_research_ionic_technology'] 					= 'Ion Technology';
$lang['us_user_research_plasma_technology'] 				= 'Plasma Technology';
$lang['us_user_research_intergalactic_research_network'] 	= 'Intergalactic Research Network';
$lang['us_user_research_astrophysics'] 						= 'Astrophysics';
$lang['us_user_research_graviton_technology'] 				= 'Graviton Technology';
$lang['us_user_premium']									= '"%s" officiers / DM';
$lang['us_user_premium_field']								= 'Field';
$lang['us_user_premium_value']								= 'Status / Amount';
$lang['us_user_premium_dark_matter'] 						= 'Dark Matter';
$lang['us_user_premium_officier_commander'] 				= 'Commander';
$lang['us_user_premium_officier_admiral']					= 'Admiral';
$lang['us_user_premium_officier_engineer'] 					= 'Engineer';
$lang['us_user_premium_officier_geologist']					= 'Geologist';
$lang['us_user_premium_officier_technocrat'] 				= 'Technocrat';
$lang['us_user_premium_deactivate']							= 'Do not activate / Disable';
$lang['us_user_premium_activate_one_week']					= 'Activate 1 week';
$lang['us_user_premium_activate_three_month']				= 'Activate 3 months';
$lang['us_user_premium_inactive']							= 'Inactive';
$lang['us_user_premium_active_until']						= 'Active until ';
$lang['us_user_planets']									= '"%s" planets';
$lang['us_user_planets_header']								= 'Planet / Image / Moon';
$lang['us_user_planets_actions']							= 'Actions';
$lang['us_user_planets_destroyed']							= 'Destroyed';
$lang['us_user_planets_destroyed_short']							= 'D';
$lang['us_user_moon_title']									= '%s (Moon)';
$lang['us_user_planets_edit']								= 'Edit planet';
$lang['us_user_buildings_edit']								= 'Edit buildings';
$lang['us_user_ships_edit']									= 'Edit ships';
$lang['us_user_defenses_edit']								= 'Edit defenses';
$lang['us_user_add_moon']									= 'Add Moon';
$lang['us_user_delete_planet']								= 'Delete planet and moon';
$lang['us_user_delete_moon']								= 'Delete Moon';
$lang['us_user_delete_pm_soft']								= '(Soft)';
$lang['us_user_delete_pm_physical']                                                     = '(Physical)';
$lang['us_user_moons']										= '"%s" moons';
$lang['us_user_moons_header']								= 'Moon / Image';
$lang['us_user_moons_actions']								= 'Actions';
$lang['us_user_moons_edit']									= 'Edit moon';
$lang['us_user_main_field']									= 'Field';
$lang['us_user_main_value']									= 'Value';
$lang['us_user_main_name']									= 'Name';
$lang['us_user_main_id_owner']								= 'Owner';
$lang['us_user_main_coords']								= 'Coordinates';
$lang['us_user_main_last_update']							= 'Last access';
$lang['us_user_main_planet_type']							= 'Planet type';
$lang['us_user_main_planet']								= 'Planet';
$lang['us_user_main_moon']									= 'Moon';
$lang['us_user_main_destroyed']								= 'Status';
$lang['us_user_main_planet_destroyed_yes']					= 'Yes';
$lang['us_user_main_planet_destroyed_no']					= 'No';
$lang['us_user_main_b_building']							= 'Building time';
$lang['us_user_main_b_building_id']							= 'Building queue';
$lang['us_user_main_b_tech']								= 'Research time';
$lang['us_user_main_b_tech_id']								= 'Research queue';
$lang['us_user_main_b_hangar']								= 'Shipyard time';
$lang['us_user_main_b_hangar_id']							= 'Shipyard queue';
$lang['us_user_main_image']									= 'Image';
$lang['us_user_main_diameter']								= 'Diameter';
$lang['us_user_main_field_current']							= 'Current fields';
$lang['us_user_main_field_max']								= 'Max. fields';
$lang['us_user_main_temp_min']								= 'Min. temperature';
$lang['us_user_main_temp_max']								= 'Max. temperature';
$lang['us_user_main_metal']									= 'Metal';
$lang['us_user_main_metal_perhour']							= 'Metal per hour';
$lang['us_user_main_metal_max']								= 'Maximum metal';
$lang['us_user_main_crystal']								= 'Crystal';
$lang['us_user_main_crystal_perhour']						= 'Crystal per hour';
$lang['us_user_main_crystal_max']							= 'Maximum Crystal';
$lang['us_user_main_deuterium']								= 'Deuterium';
$lang['us_user_main_deuterium_perhour']						= 'Deuterium per hour';
$lang['us_user_main_deuterium_max']							= 'Maximum Deuterium';
$lang['us_user_main_energy_used']							= 'Energy used';
$lang['us_user_main_energy_max']							= 'Maximum energy';
$lang['us_user_main_building_metal_mine_percent']			= '% metal production';
$lang['us_user_main_building_crystal_mine_percent']			= '% crystal production';
$lang['us_user_main_building_deuterium_sintetizer_percent']	= '% deuterium production';
$lang['us_user_main_building_solar_plant_percent']			= '% solar plant production';
$lang['us_user_main_building_fusion_reactor_percent']		= '% fusion reactor production';
$lang['us_user_main_ship_solar_satellite_percent']			= '% solar satellite production';
$lang['us_user_main_last_jump_time']						= 'Last jump';
$lang['us_user_main_reset']									= 'Reset jump';
$lang['us_user_main_planet_debris_metal']					= 'Metal debris';
$lang['us_user_main_planet_debris_crystal']					= 'Crystal debris';
$lang['us_user_main_invisible_start_time']					= 'Debris start time';
$lang['us_user_buildings_field']							= 'Building';
$lang['us_user_buildings_value']							= 'Level';
$lang['us_user_building_metal_mine']						= 'Metal Mine';
$lang['us_user_building_crystal_mine']						= 'Crystal Mine';
$lang['us_user_building_deuterium_sintetizer']				= 'Deuterium Synthesizer';
$lang['us_user_building_solar_plant']						= 'Solar Plant';
$lang['us_user_building_fusion_reactor']					= 'Fusion Reactor';
$lang['us_user_building_robot_factory']						= 'Robotics Factory';
$lang['us_user_building_nano_factory']						= 'Nanite Factory';
$lang['us_user_building_hangar']							= 'Shipyard';
$lang['us_user_building_metal_store']						= 'Metal Storage';
$lang['us_user_building_crystal_store']						= 'Crystal Storage';
$lang['us_user_building_deuterium_tank']					= 'Deuterium Tank';
$lang['us_user_building_laboratory']						= 'Research Lab';
$lang['us_user_building_terraformer']						= 'Terraformer';
$lang['us_user_building_ally_deposit']						= 'Alliance Depot';
$lang['us_user_building_missile_silo']						= 'Missile Silo';
$lang['us_user_building_mondbasis']							= 'Lunar Base';
$lang['us_user_building_phalanx']							= 'Sensor Phalanx';
$lang['us_user_building_jump_gate']							= 'Jump Gate';
$lang['us_user_ships_field']								= 'Ships';
$lang['us_user_ships_value']								= 'Amount';
$lang['us_user_ship_small_cargo_ship']						= 'Small Cargo';
$lang['us_user_ship_big_cargo_ship']						= 'Large Cargo';
$lang['us_user_ship_light_fighter']							= 'Light Fighter';
$lang['us_user_ship_heavy_fighter']							= 'Heavy Fighter';
$lang['us_user_ship_cruiser']								= 'Cruiser';
$lang['us_user_ship_battleship']							= 'Battleship';
$lang['us_user_ship_colony_ship']							= 'Colony Ship';
$lang['us_user_ship_recycler']								= 'Recycler';
$lang['us_user_ship_espionage_probe']						= 'Espionage Probe';
$lang['us_user_ship_bomber']								= 'Bomber';
$lang['us_user_ship_solar_satellite']						= 'Solar Satellite';
$lang['us_user_ship_destroyer']								= 'Destroyer';
$lang['us_user_ship_deathstar']								= 'Deathstar';
$lang['us_user_ship_battlecruiser']							= 'Battlecruiser';
$lang['us_user_defenses_field']								= 'Defenses';
$lang['us_user_defenses_value']								= 'Amount';
$lang['us_user_defense_rocket_launcher']					= 'Rocket Launcher';
$lang['us_user_defense_light_laser']						= 'Light Laser';
$lang['us_user_defense_heavy_laser']						= 'Heavy Laser';
$lang['us_user_defense_ion_cannon']							= 'Gauss Cannon';
$lang['us_user_defense_gauss_cannon']						= 'Ion Cannon';
$lang['us_user_defense_plasma_turret']						= 'Plasma Turret';
$lang['us_user_defense_small_shield_dome']					= 'Small Shield Dome';
$lang['us_user_defense_large_shield_dome']					= 'Large Shield Dome';
$lang['us_user_defense_anti-ballistic_missile']				= 'Anti-Ballistic Missiles';
$lang['us_user_defense_interplanetary_missile']				= 'Interplanetary Missiles';

// ALLIANCES
$lang['al_title']											= 'Alliances';
$lang['al_alliance_placeholder']							= 'Name or tag here...';
$lang['al_search']											= 'Search';
$lang['al_actions']											= 'Actions';
$lang['al_nothing_found'] 									= 'Alliance not found';
$lang['al_edit']											= 'Edit';
$lang['al_delete']											= 'Delete';
$lang['al_general_info']									= 'General information';
$lang['al_ranks']											= 'Ranks';
$lang['al_members']											= 'Members';
$lang['al_alliance_information']							= '"%s" information';
$lang['al_alliance_information_field']						= 'Field';
$lang['al_alliance_information_value']						= 'Value';
$lang['al_alliance_information_name']						= 'Name';
$lang['al_alliance_information_tag']						= 'Tag';
$lang['al_alliance_information_owner']						= 'Founder';
$lang['al_alliance_information_register_time']				= 'Foundation date';
$lang['al_alliance_information_description']				= 'External text';
$lang['al_alliance_information_web']						= 'Web site';
$lang['al_alliance_information_text']						= 'Internal text';
$lang['al_alliance_information_image']						= 'Image';
$lang['al_alliance_information_request']					= 'Application text';
$lang['al_alliance_information_request_notallow']			= 'Allow applications';
$lang['al_allow_yes']										= 'Yes';
$lang['al_allow_no']										= 'No';
$lang['al_alliance_information_owner_range']				= 'Founder rank';
$lang['al_send_data']										= 'Save changes';
$lang['al_error_alliance_name']								= '<br />Invalid alliance name.<br /><br /><strong>Possible reasons:</strong><br/>-Name already exists.<br/>-The alliance name is shorter than 3 characters<br/>-The alliance name is longer than 30 characters';
$lang['al_error_alliance_tag']								= '<br />Invalid alliance tag.<br /><br /><strong>Possible reasons:</strong><br/>-Tag already exists.<br/>-The alliance tag is shorter than 3 characters<br/>-The alliance tag is longer than 8 characters';
$lang['al_error_founder']									= 'El fundador seleccionado no puede ser establecido. Es posible que ya esté asignado a otra alianza.';
$lang['al_all_ok_message']									= 'Changes saved successfully!';
$lang['al_alliance_ranks']									= '"%s" ranks';
$lang['al_no_ranks']										= 'Ranks not defined';
$lang['al_configure_ranks']									= 'Configure Rights';
$lang['al_rank_name']										= 'Rank name';
$lang['al_save_ranks']										= 'Save rank';
$lang['al_delete_ranks']									= 'Delete rank(s)';
$lang['al_create_ranks']									= 'Create rank';
$lang['al_ranks_leyend']									= 'Rights Description';
$lang['al_rank_delete_alliance']							= 'Disband alliance';
$lang['al_rank_kick_members']								= 'Kick user';
$lang['al_rank_see_requests']								= 'Show applications';
$lang['al_rank_see_memberslist']							= 'Show member list';
$lang['al_rank_check_requests']								= 'Process applications';
$lang['al_rank_manage_alliance']							= 'Manage Alliance';
$lang['al_rank_see_online_members']							= 'Show online status in member list';
$lang['al_rank_create_circular']							= 'Write circular message';
$lang['al_rank_right_hand']									= '"Right Hand" (necessary to transfer founder rank)';
$lang['al_rank_added']										= 'Rank added successfully';
$lang['al_rank_saved']										= 'Rights saved successfully';
$lang['al_rank_removed']									= 'Ranks deleted successfully';
$lang['al_required_name']									= 'You must insert a valid rank name.';
$lang['al_alliance_members']								= '"%s" members';
$lang['al_alliance_username']								= 'Username';
$lang['al_alliance_pending_request']						= 'Pending request';
$lang['al_request_yes']										= 'Yes';
$lang['al_request_no']										= 'No';
$lang['al_alliance_request_text']							= 'Resquest text';
$lang['al_inscription_date']								= 'Joined';
$lang['al_alliance_member_rank']							= 'Rank';
$lang['al_save_members']									= 'Save members';
$lang['al_delete_members']									= 'Delete members';
$lang['al_rank_not_defined']								= 'N/A';
$lang['al_cant_delete_last_one']                                                        = 'You can\'t delete the last member of the alliance';

//	BACKUPS
$lang['bku_title']											= 'Backups';
$lang['bku_auto']											= 'Automatic Backup';
$lang['bku_auto_legend']									= 'Automatic backups occur once every 6 hours';
$lang['bku_now']											= 'Perform a backup now';
$lang['bku_save']											= 'Save changes';
$lang['bku_backup_done']									= 'Backup successful. Size: %s kb';

// ENCRYPTER
$lang['et_encrypter']										= 'Password encrypter (sha1)';
$lang['et_pass']											= 'Password';
$lang['et_result']											= 'Result';
$lang['et_encript']											= 'Encrypt';

// GLOBAL MESSAGE
$lang['ma_send_global_message']								= 'Global Message / Email';
$lang['ma_subject']											= 'Subject';
$lang['ma_none']											= 'Global message';
$lang['ma_characters']										= 'Available characters';
$lang['ma_send_as']											= 'Send as:';
$lang['ma_send_as_message']									= 'Message';
$lang['ma_send_as_email']									= 'Email (20 per row)';
$lang['ma_send_message']									= 'Send message';
$lang['ma_subject_needed']									= 'You must write a subject and a message!';
$lang['ma_message_sended']									= 'Message succesfully sent!';

// BANS - SUSPENSIONS
$lang['bn_title']											= 'Banning';
$lang['bn_users_list']										= 'Users';
$lang['bn_banned_list']										= 'Banned';
$lang['bn_total_users']										= 'Total: ';
$lang['bn_sort']											= 'Sort by';
$lang['bn_sort_by_user']									= '[Username]';
$lang['bn_sort_by_id']										= '[ID]';
$lang['bn_sort_suspended']									= '[Banned]';
$lang['bn_select_title']									= 'Show names starting with';
$lang['bn_button_filter']									= 'Filter';
$lang['bn_button_remove']									= 'Remove filter';
$lang['bn_button_ban']										= 'Ban';
$lang['bn_button_lift_ban']									= 'Remove ban';
$lang['bn_button_reset']									= 'Reset';
$lang['bn_status']											= '&nbsp; (Banned)';
$lang['bn_username']										= 'Username';
$lang['bn_reason']											= 'Reason';
$lang['bn_characters']										= 'Available characters:';
$lang['bn_auto_lift_ban_message']							= 'Set unban date';
$lang['bn_edit_ban_help']									= 'To remove days or hours use a minus sign ( - ) before de number, Ex.: -5';
$lang['bn_banned_until']									= 'Banned until';
$lang['bn_change_date']										= 'Change date';
$lang['bn_time_days']										= 'Days';
$lang['bn_time_hours']										= 'Hours';
$lang['bn_vacation_mode']									= 'Vacation mode';
$lang['bn_ban_user']										= 'Ban user';
$lang['bn_ban_success']										= 'The user "%s" was banned.';
$lang['bn_lift_ban_success']								= '"%s" ban was removed.';
$lang['bn_all_fields_required']								= 'All fields are required';

// BUILDSTATS
$lang['sb_stats_update_title']								= 'Statistics update';
$lang['sb_top_memory']										= 'Peak memory consumed: %p KB / max. %m KB <br>';
$lang['sb_final_memory']									= 'Memory consumed at the end: %e KB / max. %m KB<br>';
$lang['sb_start_memory']									= 'Memory consumed  at startup: %i KB / max. %m KB<br>';
$lang['sb_stats_update']									= 'Statistics updated in: %t seconds<br>';
$lang['sb_stats_updated']									= 'Summary:<br>';

// UPDATE
$lang['up_title']                                                               = 'Update';

// MIGRATE
$lang['mi_title']                                                               = 'Migrate';
$lang['mi_version_select']                                                      = 'Select version';
$lang['mi_option_init']                                                         = 'Select';
$lang['mi_server_title']			= 'SQL server:';
$lang['mi_db_title']				= 'Database:';
$lang['mi_user_title']				= 'User:';
$lang['mi_password_title']			= 'Password:';
$lang['mi_prefix_title']			= 'Tables prefix:';
$lang['mi_test_mode']                           = 'Test mode:';
$lang['mi_test_mode_notice']                    = 'Notice: test mode allows you to obtain a list of queries that are going to be executed. Checking this box, allows you to get details about what the migration system will do. It is important to clarify that <strong>no query will be executed.</strong>';
$lang['mi_ex_tag']                              = 'Ex:';
$lang['mi_go']                                  = 'Start migration';
$lang['mi_back']                                = 'Back';
$lang['mi_empty_fields_error']                  = 'All fields are required';
$lang['mi_no_migration_file']                   = 'The migration file doesn\'t exists, please verify that the "install" directory exists.';
$lang['mi_not_connected_error']                 = 'Unable to connect to the database with the data entered.';
$lang['mi_db_not_exists']                       = 'Unable to access the database with the provided name.';
$lang['mi_success']                             = 'Migration completed!';
$lang['mi_alert_title']                         = 'Notice before migrating:';
$lang['mi_alert_type_1_title']                  = 'Alerts';
$lang['mi_alert_type_1_content_1']              = 'The data stored in the new installation of XGP will be lost, excluding the settings.-';
$lang['mi_alert_type_2_title']                  = 'Warnings';
$lang['mi_alert_type_2_content_1']              = 'User passwords are not going to be imported. Old passwords were stored with md5 encoding, new ones are being stored with sha1. Your users will require to change their passwords.-';
$lang['mi_alert_type_3_title']                  = 'Info';
$lang['mi_alert_type_3_content_1']              = 'Errors logs are not going to be imported.-';
$lang['mi_alert_type_3_content_2']              = 'Plugins are not going to be imported.-';
$lang['mi_alert_type_3_content_3']              = 'Configurations / settings are not going to be imported.-';

// DATA BASE
$lang['db_not_opt']         = '¡Error!';
$lang['db_not_check']       = 'There\'re errors!';
$lang['db_opt']             = 'Optimized!';
$lang['db_rep']             = 'Repaired!';
$lang['db_check_ok']        = 'Everything OK!';
$lang['db_opt_db']          = 'Repair / Optimize table';
$lang['db_optimize']        = 'Optimize';
$lang['db_repair']          = 'Repair';
$lang['db_check']           = 'Check';
$lang['db_table_name']      = 'Table';
$lang['db_data_length']     = 'Data Length';
$lang['db_index_length']    = 'Index Length';
$lang['db_overhead']        = 'Overhead';
$lang['db_checkall']        = 'Check All';
$lang['db_yes']             = 'Yes';
$lang['db_no']              = 'No';
$lang['db_table_result']    = 'Result';

// ELEMENTS LIST FOR QUEUE LISTS
$lang['tech'][1] 											= 'Metal Mine';
$lang['tech'][2] 											= 'Crystal Mine';
$lang['tech'][3] 											= 'Deuterium Synthesizer';
$lang['tech'][4] 											= 'Solar Plant';
$lang['tech'][12] 											= 'Fusion Reactor';
$lang['tech'][14] 											= 'Robotics Factory';
$lang['tech'][15] 											= 'Nanite Factory';
$lang['tech'][21] 											= 'Shipyard';
$lang['tech'][22] 		 				 					= 'Metal Storage';
$lang['tech'][23] 					 				 		= 'Crystal Storage';
$lang['tech'][24]		 				 					= 'Deuterium Tank';
$lang['tech'][31]		 				 					= 'Research Lab';
$lang['tech'][33]		 				 					= 'Terraformer';
$lang['tech'][34]		 				 					= 'Alliance Depot';
$lang['tech'][41] 											= 'Lunar Base';
$lang['tech'][42] 											= 'Sensor Phalanx';
$lang['tech'][43] 											= 'Jump Gate';
$lang['tech'][44] 											= 'Missile Silo';
$lang['tech'][106] 											= 'Espionage Technology';
$lang['tech'][108]		 				 					= 'Computer Technology';
$lang['tech'][109]		 				 					= 'Weapons Technology';
$lang['tech'][110]		 				 					= 'Shielding Technology';
$lang['tech'][111]		 				 					= 'Armour Technology';
$lang['tech'][113]		 				 					= 'Energy Technology';
$lang['tech'][114]		 				 					= 'Hyperspace Technology';
$lang['tech'][115]		 				 					= 'Combustion Drive';
$lang['tech'][117]		 				 					= 'Impulse Drive';
$lang['tech'][118]		 				 					= 'Hyperspace Drive';
$lang['tech'][120]		 				 					= 'Laser Technology';
$lang['tech'][121]		 				 					= 'Ion Technology';
$lang['tech'][122]		 				 					= 'Plasma Technology';
$lang['tech'][123]		 				 					= 'Intergalactic Research Network';
$lang['tech'][124]		 				 					= 'Astrophysics';
$lang['tech'][199]		 				 					= 'Graviton Technology';
$lang['tech'][202]		 				 					= 'Small Cargo';
$lang['tech'][203]		 				 					= 'Large Cargo';
$lang['tech'][204]		 				 					= 'Light Fighter';
$lang['tech'][205]		 				 					= 'Heavy Fighter';
$lang['tech'][206]		 				 					= 'Cruiser';
$lang['tech'][207]		 				 					= 'Battleship';
$lang['tech'][208]		 				 					= 'Colony Ship';
$lang['tech'][209]		 				 					= 'Recycler';
$lang['tech'][210]		 				 					= 'Espionage Probe';
$lang['tech'][211]		 				 					= 'Bomber';
$lang['tech'][212]		 				 					= 'Solar Satellite';
$lang['tech'][213]		 				 					= 'Destroyer';
$lang['tech'][214]		 				 					= 'Deathstar';
$lang['tech'][215]		 				 					= 'Battlecruiser';
$lang['tech'][401]		 				 					= 'Rocket Launcher';
$lang['tech'][402]		 				 					= 'Light Laser';
$lang['tech'][403]		 				 					= 'Heavy Laser';
$lang['tech'][404]		 				 					= 'Gauss Cannon';
$lang['tech'][405]		 				 					= 'Ion Cannon';
$lang['tech'][406]		 				 					= 'Plasma Turret';
$lang['tech'][407]		 				 					= 'Small Shield Dome';
$lang['tech'][408]		 				 					= 'Large Shield Dome';
$lang['tech'][502]		 				 					= 'Anti-Ballistic Missiles';
$lang['tech'][503]		 				 					= 'Interplanetary Missiles';
/* end of ADMIN.php */