<?php

$config =   [
				 'login' =>  [
				                            [
						                     'field' => 'email',
						                     'label' => 'Email',
						                     'rules' => 'required'
											],
											[
				                             'field' => 'password',
				                             'label' => 'Password',
				                             'rules' => 'required'
											]
							  ],
				'sing_up' => [
				                            [
				                             'field' => 'username',
				                             'label' => 'Name',
				                             'rules' => 'required'
				                            ],
				                            [
				                             'field' => 'email',
				                             'label' => 'User Name',
				                             'rules' => 'required'
				                            ],
				                            [
				                             'field' => 'password',
				                             'label' => 'Password',
				                             'rules' => 'required'
				                            ],
				                            [
				                            'field' => 'dob',
				                            'label' => "Bod",
				                            'rules' => 'required'
				                            ],
				                            [
				                            'field' => 'mobile',
				                            'label' => 'Email',
				                            'rules' => 'required'
				                            ],
				                            [
				                            'field' => 'address',
				                            'label' => 'Address',
				                            'rules' => 'required'
				                            ]
				]			
		];
?>