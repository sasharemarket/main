<?php

namespace App\Constants;

class StatusAndStageConstant {

	
	// Added New From Foront 

	CONST IMPORTER_APPLICATION_FILLING_LINKS = [
		//Importer
		'SINGLE_WINDOW_APPLICATION_BIN_NO' => 1,
		'SINGLE_WINDOW_APPLICATION_LINK'       => 'work-management/application/get-boe-list/1',

		'DRAFT_APPLICATION_BIN_NO' => 2,
		'DRAFT_APPLICATION_LINK'       => 'work-management/application/get-boe-list/2',

		'SEZ_APPLICATION_BIN_NO' => 4,
		'SEZ_APPLICATION_LINK'   => 'work-management/application/get-boe-list/4',
	];

	CONST IMPORTER_APPLICATION_SCRUTINY_LINKS = [
		//Importer
		'UNDER_SCRUTINY_APPLICATION_BIN_NO' => 22,
		'UNDER_SCRUTINY_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-under-scrutiny-list/22',

		'WAITING_FOR_CLARIFICATION_APPLICATION_BIN_NO' => 23,
		'WAITING_FOR_CLARIFICATION_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-waiting-for-clarification-list/23',

		'OUT_OF_SCOPE_APPLICATION_BIN_NO' => 25,
		'OUT_OF_SCOPE_APPLICATION_LINK'   => 'work-management/application-lab/get-noc-ncc-applications-list/121',

		'REJECTED_APPLICATION_BIN_NO' => 121,
		'REJECTED_APPLICATION_LINK'   => 'work-management/ncc-noc-pnoc/get-noc-ncc-applications-list/121',

		'NCC_NOC__BIN_NO' => 121,
		'NCC_NOC_LINK'   => 'work-management/ncc-noc-pnoc/get-noc-ncc-applications-list/121',
	];

	
	CONST TO_APPLICATION_SCRUTINY_LINKS = [
		//Importer
		'ASSIGNED_SCRUTINY_APPLICATION_BIN_NO' => 9,
		'ASSIGNED_SCRUTINY_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-assigned-for-scrutiny-list/9',

		'FORWARDED_TO_AO_APPLICATION_BIN_NO' => 13,
		'FORWARDED_TO_AO_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-forwarded-to-ao-after-scrutiny-list/13',

		'RECEIVED_FROM_AO_FOR_CLARIFICATION_APPLICATION_BIN_NO' => 14,
		'RECEIVED_FROM_AO_FOR_CLARIFICATION_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-received-from-ao-for-clarification-list/14',

		'RECEIVED_FROM_IMPORTER_APPLICATION_BIN_NO' => 12,
		'RECEIVED_FROM_IMPORTER_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-received-from-importer-after-clarification-list/12',

		'SENT_TO_IMPORTER_APPLICATION_BIN_NO' => 11,
		'SENT_TO_IMPORTER_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-sent-to-importer-for-clarification-list/11',
	];

	CONST AO_APPLICATION_SCRUTINY_LINKS = [
		//Importer

		'SCRUTINY_NON_FOOD_APPLICATION_BIN_NO' => 135,
		'SCRUTINY_NON_FOOD_APPLICATION_LINK'       => 'work-management/scrutiny/get-non-food-applications-ao-list/135',

		'SCRUTINY_CHECK_APPLICATION_BIN_NO' => 16,
		'SCRUTINY_CHECK_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-for-scrutiny-check-list/16',

		'RECEIVED_FROM_TO_AFTER_CLARIFICATION_APPLICATION_BIN_NO' => 34,
		'RECEIVED_FROM_TO_AFTER_CLARIFICATION_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-received-from-to-after-clarification-list/34',

		'RECEIVED_FROM_TO_APPLICATION_BIN_NO' => 14,
		'RECEIVED_FROM_TO_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-received-from-ao-for-clarification-list/14',

		'RECIEVED_FROM_IMPORTER_CLARIFICATION_APPLICATION_BIN_NO' => 19,
		'RECIEVED_FROM_IMPORTER_CLARIFICATION_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-ao-received-from-importer-after-clarification-list/19',

		'SENT_TO_IMPORTER_CLARIFICATION_APPLICATION_BIN_NO' => 18,
		'SENT_TO_IMPORTER_CLARIFICATION_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-ao-sent-to-importer-for-clarification-list/18',

		'SENT_TO_TO_CLARIFICATION_APPLICATION_BIN_NO' => 20,
		'SENT_TO_TO_CLARIFICATION_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-sent-to-to-for-clarification-list/20',

		'AO_TO_LIST_APPLICATION_BIN_NO' => 11,
		'AO_TO_LIST_APPLICATION_LINK'   => 'work-management/scrutiny/get-application-sent-to-importer-for-clarification-list/11',

		'AO_OUT_OF_SCOPE_BIN_NO' => 130,
		'AO_OUT_OF_SCOPE_BIN_NO_LINK'   => 'work-management/scrutiny/get-application-out-of-scope-list-for-ao/130',

		'AO_REJECTED_BIN_NO' => 129,
		'AO_REJECTED_BIN_NO_LINK'   => 'work-management/scrutiny/get-application-rejected-list-for-ao/129',

		'AO_ACCEPTED_BIN_NO' => 131,
		'AO_ACCEPTED_BIN_NO_LINK'   => 'work-management/scrutiny/get-application-accepted-list-for-ao/131',

	];

	CONST AO_APPLICATION_RETEST_LINKS = [
		'AO_RETEST_REQUEST_BIN_NO' => 131,
		'AO_RETEST_REQUEST_BIN_NO_LINK'   => 'work-management/application-retest/get-retest-request-importer-boe-list-ao-login/122',
	];

	
	CONST RD_APPLICATION_REVIEW_LINKS = [
		'RD_RETEST_REQUEST_FROM_IMPORTER_BIN_NO' => 123,
		'RD_RETEST_REQUEST_FROM_IMPORTER_BIN_NO_LINK'   => 'work-management/application-review/get-review-request-assigned-to-rd-self-list/123',

		'RD_RETEST_REQUEST_TO_REVIEW_COMPLETED_BIN_NO' => 127,
		'RD_RETEST_REQUEST_TO_REVIEW_COMPLETED_BIN_NO_LINK'   => 'work-management/application-review/get-review-application-to-completed-list/127',
	];

	CONST RD_APPLICATION_RETEST_LINKS = [
		'RD_RETEST_REQUEST_FROM_IMPORTER_BIN_NO' => 143,
		'RD_RETEST_REQUEST_FROM_IMPORTER_BIN_NO_LINK'   => 'work-management/application-retest/view-retest-request-approval-list/143',
	];

	CONST CEO_APPLICATION_REVIEW_LINKS = [
		'CEO_REVIEW_COMPLED_BY_TO_BIN_NO' => 147,
		'CEO_REVIEW_COMPLED_BY_TO_BIN_NO_LINK'   => 'work-management/application-review/get-review-application-to-completed-ceo-self-list/147',

		// 'RD_RETEST_REQUEST_TO_REVIEW_COMPLETED_BIN_NO' => 127,
		// 'RD_RETEST_REQUEST_TO_REVIEW_COMPLETED_BIN_NO_LINK'   => 'work-management/application-review/get-review-application-to-completed-list/127',

	];

	

	CONST TO_APPLICATION_RETEST_LINKS = [
		'APPLICATION_FOR_REVIEW_BIN_NO' => 125,
		'APPLICATION_FOR_REVIEW_LINK'   => 'work-management/application-review/get-review-request-assigned-to-to-self-list/125',
		
	];

	CONST TO_APPLICATION_LINKS = [
		'SCRUTINY_ASSIGNED_APPLICATION_BIN_NO' => 9,
		'SCRUTINY_ASSIGNED_APPLICATION_LINK'       => 'work-management/scrutiny/get-application-assigned-for-scrutiny-list/9',
	];






	///End Front Code
	CONST ROLE_ID_FOOD_IMPORTER               = 3;
	CONST ROLE_ID_NON_FOOD_IMPORTER           = 4;
	CONST ROLE_ID_TO				          = 8;
	CONST ROLE_ID_AO				          = 7;
	CONST ROLE_ID_ADMIN						  = 1;
	CONST ROLE_ID_RD						  = 6;
	CONST ROLE_ID_HEAD_OFFICE_TO			  = 9;
	CONST ROLE_ID_CEO						  = 10;

	CONST APPLICATION_PARTIAL_STATUS = [
		'SCRUTINY_SUBMITED_BY_TO'            => 9999,
		'HALF_IN_SCRUTINY_AND_HALF_IN_VI'    => 10000,
		'HALF_IN_VI_AND_HALF_IN_LAB_TESTING' => 10010,
	];

	CONST MODE_OF_TRANSPORT =[
		'AIR'  => 1,
		'LAND' => 2,
		'SEA'  => 3,
	];

	CONST APPLICATION_STAGES = [
		'INITIAL_SINGLE_WINDOW_APPLICATION' => 0,
		'INITIAL_SEZ_APPLICATION' => 1,
		'FILLING'       => 1,
		'SCRUTINY'      => 2,
		'VI'            => 3,
		'LAB_TEST'      => 4,
		'RETEST'      => 5,
		'REVIEW'      => 6,
	];

	CONST APPLICATION_REMARK = [
		'BASIC_DETAILS'       => 1,
		'PRODUCT_DETAILS'     => 2,
		'DOCUMENTS'           => 3,
		'SAMPLING'            => 4,
		'GENERAL'			  => 5,
	];


	CONST APPLICATION = [
		'INITIAL'   => 0,
		'DRAFT'     => 10,
		'AMENDMENT' => 20,
		'SCRUTINY'  => 30,
		'NON_FOOD_APPLICATION_SUBMIT_TO_AO' => 111,
		'NEED_FILLING' => 771,
	];

	CONST STAGE_FOR_DRAFT = [
		'INITIAL' => 0,
		'BASIC' => 10,
		'PRODUCT' => 20,
		'ATTACHMENT' => 30,
		'FINAL_SUBMIT_FOR_NON_FOOD_IMP' => 40,
		'FINAL_SUBMIT_FOR_FOOD_IMP' => 50,

	];

	CONST SCRUTINY_STATUS_TO =[
		'ACCEPT'                          => 777,
		'REJECT'                          =>3000,
		'SEND_FOR_CLARIFICATION_IMPORTER' =>100,
		'OUT_OF_SCOPE'                    =>2000,
		'SEND_TO_AO_AFTER_CLARIFICATION'  =>220,

	];

	CONST SCRUTINY_STATUS_AO =[
		'ACCEPT'                          => 777,
		'REJECT'                          =>3000,
		'SEND_FOR_CLARIFICATION_IMPORTER' =>110,
		'SEND_FOR_CLARIFICATION_TO'       =>160,
		'OUT_OF_SCOPE'                    =>2000
	];

	CONST SCRUTINY_IMPORTER_APPLICATION = [
		'IN_PROGRESS_APPLICATION_FROM_TO'           => 100,
		'IN_PROGRESS_APPLICATION_FROM_AO'           => 110,
	];

	CONST SCRUTINY_IMPORTER_PRODUCT = [
		'SENT_FOR_SCRUTINY_AFTER_CLARIFICATION_TO'  => 120,
		'SENT_FOR_SCRUTINY_AFTER_CLARIFICATION_AO'  => 130,
	];


	CONST SCRUTINY_TO_APPLICATION = [
		'IN_PROGRESS_APPLICATION_INITIAL'                     => 140,
		'IN_PROGRESS_APPLICATION_CLARIFICATION_FROM_IMPORTER' => 150,
	];

	CONST SCRUTINY_TO_PRODUCT = [
		'IN_PROGRESS_APPLICATION_CLARIFICATION_FROM_AO'       => 160,
		'SENT_TO_IMPORTER_FOR_CLARIFICATION'                  => 170,
		'SENT_TO_AO_INITAL'                                   => 180,
		'SENT_TO_AO_AFTER_CLIRIFCATION'                       => 190,
		'URL_FOR_PRODUCT_CLARIFICATION_RECEVED_FROM_AO' =>'get-application-received-from-ao-for-clarification-list',
		'URL_FOR_PRODUCT_CLARIFICATION_RECEVED_FROM_IMPORTER' =>'get-application-received-from-importer-after-clarification-list',
		'URL_FOR_PRODUCT_CLARIFICATION_SENT_TO_IMPORTER' => 'get-application-sent-to-importer-for-clarification-list'
	];

	CONST SCRUTINY_AO_APPLICATION = [
		'IN_PROGRESS_APPLICATION_INITIAL'                             => 200,
		'IN_PROGRESS_APPLICATION_CLARIFICATION_FROM_IMPORTER'         => 210,
		'IN_PROGRESS_APPLICATION_CLARIFICATION_FROM_TO'               => 220,
	];

	CONST SCRUTINY_AO_PRODUCT = [
		'IN_PROGRESS_PRODUCT_CLARIFICATION_FROM_TO'                   => 220,
		'SENT_TO_IMPORTER_FOR_CLARIFICATION'                          => 230,
		'SENT_TO_TO_FOR_CLARIFICATION'                                => 240, 
		'SENT_FOR_VI'                                                 => 250,
		'URL_FOR_PRODUCT_CLARIFICATION_RECEVED_FROM_TO' => 'get-application-received-from-to-after-clarification-list',
		'URL_FOR_PRODUCT_CLARIFICATION_RECEVED_FROM_IMPORTER' => 'get-application-ao-received-from-importer-after-clarification-list',
	];

	CONST STORAGE_CONDISTION_PNOC_ELIGIBLE_LIST = [
		'Temperature_Controlled'                        => 3, 
		'Shelf_life_less_than_7_days_or_Chilled_items'  => 4, 
		'Pre_Packaged_Retail_Food_Article_or_Crude_oil_Edible_grade_or_Food_Grains' => 6
	];

	CONST ID_FOR_COUNT_BIN_DASHBOARD = [
		'ASSIGNED_TO_TO_BIN'				=> 15,
		'ASSIGNED_TO_TO_DASHBOARD'			=> 49,
	];

	/// VI

	//Below VI_STATUS for  TO
	CONST VI_STATUS_TO =[
		'ACCEPT'                          =>5000,
		'REJECT'                          =>5001,
		'DISCREPANCY'                     =>5002,
	];

	CONST VI_STATUS_AO =[
		'ACCEPT'                          =>5000,
		'REJECT'                          =>5001,
		'CLARIFICATION'                   =>5002,
		'PRODUCT_VI_CLARIFICATION_FORWARDED_TO_IMPORTER'  =>5056,
		'PRODUCT_VI_CLARIFICATION_FORWARDED_TO_TO'        =>5055,
	];

	CONST VI_REMARK_TO =[
		'SENT_CLARIFICATION_TO_AO'        =>5052,
		'ASK_CLARIFICATION_TO_IMPORTER'   =>5059,
	];


	CONST VI_IMPORTER_APPLICATION = [
		'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_IMPORTER_FORWARWD_AO'							=> 360, //
		// 'APPLICATION_VI_DATE_TIME_CHANGE_TO_ON_LEAVE_REQUESTED_BY_AO_AND_APPROVED_FORWARWD_TO_AO'	=> 260,
		// 'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_TO_TO_AO_FORWARWD_TO_AO'           			=> 270,
		// 'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_AO_CONFIRMED_BY_IMPORTER_FORWARDED_TO_AO' 	=>330,
		'APPLICATION_VI_DATE_TIME_CONFIRM_BY_IMPORTER_FORWARED_TO_TO'                      => 340,
		'APPLICATION_VI_REJECTED_ITEMS'                     										 => 410,
		'DATE_CHANGE_REQUEST_COUNT'                     										 => 3,  // Keep this if want 2 then 3
	];


	CONST VI_TO_APPLICATION = [
		'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_TO'  => 280,
		'APPLICATION_VI_DATE_TIME_SCHEDULE_CONFIRMED'      => 400,
		'APPLICATION_VI_ACCEPT'							   => 370,
		'APPLICATION_VI_REJECT'							   => 380,
		'APPLICATION_VI_DISCREPANCY'					   => 390,
	];

	CONST VI_AO_APPLICATION = [
	 	'APPLICATION_SCHEDULE_FOR_VI'           		                                            => 320,
		'APPLICATION_VI_DATE_TIME_CHANGE_TO_ON_LEAVE_REQUESTED_BY_AO_TO_IMPORTER'           		=> 290,
		'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_TO_TO_AO_ACCEPTED_AND_FORDWARED_TO_IMPORTER'  => 300,
		'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_IMPORTER_CONFIRM_AND_FORWARED_TO_TO'          => 310,
		'APPLICATION_VI_DATE_TIME_CHANGE_REQUESTED_BY_AO_FORWARED_TO_IMPORTER'           			=> 350,
	];

	CONST VI_TO_PRODUCT = [
		'PRODUCT_VI_ACCEPT_FORWARDED_TO_AO' 					=> 5050,
		'PRODUCT_VI_REJECT_FORWARDED_TO_AO'						=> 5051,
		'PRODUCT_VI_DISCREPANCY_FORWARDED_TO_IMPORTER'			=> 5059,
		'PRODUCT_VI_CLARIFICATION_FORWARDED_TO_AO'				=> 5052,
	];

	CONST VI_AO_PRODUCT = [
		'PRODUCT_VI_ACCEPT' 									 => 5053,
		'PRODUCT_VI_REJECT'										 => 5054,
		'PRODUCT_VI_CLARIFICATION_FORWARDED_TO_TO'				 => 5055,
		'PRODUCT_VI_FORWARDED_TO_TO_FOR_RE_VI'		             => 5057,
		'PRODUCT_VI_CLARIFICATION_FORWARDED_TO_IMPORTER'	     => 5056,
		'PRODUCT_VI_FORWARDED_TO_IMPORTER_FOR_RE_VI'             => 5058,

		'PRODUCT_VI_RECEIVED_FROM_TO_AFTER_RE_VERIFICATION'      => 5075,
	];

	CONST VI_IMPORTER_PRODUCT = [
		'PRODUCT_VI_DISCREPANCY_FORWARDED_TO_AO'				=> 5060,
		'PRODUCT_VI_CLARIFICATION_FORWARDED_TO_AO'				=> 5061,
	];

	CONST RETEST_IMPORTER = [
		'REQUESTED_FOR_SAMPLE_RETEST'							=> 5065,
	];

	CONST RETEST_AO = [
		'REQUESTED_ACCEPT_SAMPLE_RETEST'					    => 5066,
	];

	CONST RETEST_TEXT = 'You can not add retest request as 15 days over';
	CONST RETEST_TIME_IN_MINUTES = 20;

	CONST REVIEW_TEXT = 'You can not add review request as 30 days over';
	CONST REVIEW_TIME_IN_MINUTES = 2000000;

	CONST STATUS_REVIEW_RD = [
		'SENT_FOR_RETEST' => 7051,
		'OUT_OF_SCOPE'    => 7061,
		'SENT_FOR_RE_VI'  => 7071,
		'REJECT'          => 7072,
		'ASSIGN_TO'       => 7073,
	];


	CONST IMPORTER_MESSAGE_PRODUCT_STATUS = [
		'SCRUTINY_NOT_STARTED'      => 'Scrutiny not started',
		'SCRUTINY_IN_PROGRESS'      => 'Scrutiny in progress',
		'SCRUTINY_CLARIFIED'        => 'Clarification under review',
		'OUT_OF_SCOPE'              => 'Out of scope',
		'CLARIFICATION_REQ'         => 'Clarification required',
		'REJECT'                    => 'Rejected',
		
	];

	CONST SUPER_USER_APPLICATION_BIN = [
		'DRAFTED' => 137,
		'RD_DRAFTED' => 140
	];


	//=========RLO type===========//
	CONST RLO_TYPES = [
		'RELEASE' => 1,
		'DESTRUCTION' => 2,
		'DEPORTATION'       => 3,
		'NOC'      => 4,
		'NCC'            => 5,
		'OUT_OF_SCOPE'      => 6
	];
}
