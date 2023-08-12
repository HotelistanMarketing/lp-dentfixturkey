<?php

const EMAIL = 'info@dentfixturkey.com';
const READABLE_PHONE_NUMBER = '+90 (546) 902 31 91';
define('PHONE_NUMBER', trim_number(READABLE_PHONE_NUMBER));
const WHATSAPP_NUMBER = PHONE_NUMBER;
define('WHATSAPP_LINK', generate_wp_link(WHATSAPP_NUMBER));
const FORM_THANK_YOU_PAGE = 'https://dentfixturkey.com/thank-you';
const FACEBOOK_LINK = 'https://www.facebook.com/dentfix.turkey/';
const INSTAGRAM_LINK = 'https://www.instagram.com/dentfix.turkey/';
const TIKTOK_LINK = 'https://www.tiktok.com/@dentfixturkey';
const GTM_ID = 'GTM-5F8BD5F';
