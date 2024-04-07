<?php
const DR_NAME = 'dentfix';

const EMAIL = 'info@dentfixturkey.com';
const ADDRESS = '19 Mayıs Mah. Etfal Hastanesi Sok.<br>Kent Apt. No: 2/78 <strong>Şişli / İstanbul</strong>';
const MAP_URL = 'https://maps.app.goo.gl/meTo2wcQNwjxLsjG8';
const FACEBOOK_LINK = 'https://www.facebook.com/people/Denfix-Clinic/100088026948190/';
const INSTAGRAM_LINK = 'https://www.instagram.com/dentfix.turkey/';
const TIKTOK_LINK = 'https://www.tiktok.com/@dentfixturkey';

if (!defined('READABLE_PHONE_NUMBER'))
    define('READABLE_PHONE_NUMBER', '+90 (549) 612 32 95');

define('PHONE_NUMBER', trim_phone_number(READABLE_PHONE_NUMBER));
const WHATSAPP_NUMBER = PHONE_NUMBER;
define('WHATSAPP_LINK', get_wp_link(WHATSAPP_NUMBER));

define('GTM_ID', str_contains($_SERVER['HTTP_HOST'], 'arpanumedical.com') ? 'GTM-5H727LL' : 'GTM-W4KM7W2');
const HOTJAR_ID = '3703079';

const LEAD_INTEREST = Lead\Interest\Dental;
const LEAD_PROCEDURE = Lead\Procedure\Implant;
const LEAD_DR = 'Dentfix Turkey';

const FORM_RETURN_URL = 'https://dentfixturkey.com/thank-you';
