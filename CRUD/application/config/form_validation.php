<?php
	$config = array(
                 'Add_client_rules' => array(
                                    array(
                                            'field' => 'clientname_200',
											'lable' => 'Client Name',
											'rules' => 'required',
                                         ),
                                    array(
                                            'field' => 'panortan_200',
											'lable' => 'Pan No',
											'rules' => 'required',
                                         ),
                                    array(
                                            'field' => 'city_200',
											'lable' => 'City',
											'rules' => 'required',
                                         ),
                                    array(
                                            'field' => 'clienttype_200',
											'lable' => 'Client Type',
											'rules' => 'required',
                                         )
                                    ),
                 'Register' => array(
                                    array(
                                            'field' => 'loginname_100',
											'lable' => 'Login Name',
											'rules' => 'required',
                                         ),

                                    array(
                                            'field' => 'loginpwd_100',
											'lable' => 'Login Password',
											'rules' => 'required',
                                         ),

                                    array(
                                            'field' => 'usertype_100',
											'lable' => 'Users Type',
											'rules' => 'required',
                                         ),

                                    array(
                                            'field' => 'userfull_name_100',
											'lable' => 'Users Full Name',
											'rules' => 'required',
                                         ),

                                    array(
                                            'field' => 'cap_images_100',
                                            'lable' => 'Image Failed',
                                            'rules' => 'required',
                                         ),
                                    )                          
               );
?>