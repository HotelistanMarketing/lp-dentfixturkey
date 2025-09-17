<?php
const DR_NAME = 'dentfix';

const EMAIL = 'contact@dentfixturkey.com';
const ADDRESS = '<strong>Şişli / İstanbul</strong>';
const MAP_URL = 'https://maps.app.goo.gl/meTo2wcQNwjxLsjG8';
const FACEBOOK_LINK = 'https://www.facebook.com/people/Denfix-Clinic/100088026948190/';
const INSTAGRAM_LINK = 'https://www.instagram.com/dentfix.turkey/';
const TIKTOK_LINK = 'https://www.tiktok.com/@dentfixturkey';

if (!defined('READABLE_PHONE_NUMBER'))
    define('READABLE_PHONE_NUMBER', value: '905518622525');

define('PHONE_NUMBER', trim_phone_number(READABLE_PHONE_NUMBER));
const WHATSAPP_NUMBER = PHONE_NUMBER;
define('WHATSAPP_LINK', get_wp_link(WHATSAPP_NUMBER));

define(
    'GTM_ID',
    str_contains($_SERVER['HTTP_HOST'], 'dentfixinternational.com') ? 'GTM-M9MMQW5J' :
    (str_contains($_SERVER['HTTP_HOST'], 'dentfixdubai.com') ? 'GTM-NK7FM5HK' :
    (str_contains($_SERVER['HTTP_HOST'], 'healthclinicturkeyx') ? 'GTM-N7LDD78Z' : 'GTM-M9MMQW5J'))
);

const HOTJAR_ID = '3703079';

const LEAD_INTEREST = Lead\Interest\Dental;
const LEAD_PROCEDURE = Lead\Procedure\Implant;
define('LEAD_DR', value: str_contains($_SERVER['HTTP_HOST'], 'dentfixdubai.com') ? 'Dentfix Dubai' : 'Dentfix Turkey');



const FORM_RETURN_URL = 'https://www.dentfixturkey.com/thank-you/';
