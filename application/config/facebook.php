<?php

$config['facebook']['api_id']       = 'YOUR APP ID';
$config['facebook']['app_secret']   = 'YOUR APP SECRET';
$config['facebook']['redirect_url'] = 'https://yourdomain.com/login';
$config['facebook']['permissions']  = array(
                                        'email',
                                        'user_location',
                                        'user_birthday'
                                      );