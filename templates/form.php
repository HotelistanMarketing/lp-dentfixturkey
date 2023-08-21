<input type='text' style='display:none;' name='xnQsjsdp'
       value='f26b68fc575ddfcaee437b8e12d5515126eae05cf5d1a5976d576056a6237774'>
<input type='hidden' name='zc_gad' id='zc_gad' value=''>
<input type='text' style='display:none;' name='xmIwtLD'
       value='0e65f475011faf7c6ff4c6942b525aed4359637541a529b149b48e7c3a350e75'>
<input type='text' style='display:none;' name='actionType' value='TGVhZHM='>
<input type='text' style='display:none;' name='returnURL' value='<?= FORM_THANK_YOU_PAGE ?>'>

<label for='Last_Name'>Name &amp; Surname</label>
<input type='text' id='Last_Name' name='Last Name' maxlength='80' placeholder="<?= TR['form_name'] ?>">

<label for='Email'>Email</label>
<input type='text' id='Email' name='Email' maxlength='100' placeholder="<?= TR['form_mail'] ?>">

<label for='Mobile'>Mobile</label>
<input type='text' id='Mobile' name='Mobile' maxlength='30' placeholder="<?= TR['form_phone'] ?>">

<label for='Country'>Country</label>
<input type='hidden' id='Country' name='Country' maxlength='100' value='DefaultCountry'>

<label for='Lead_Status'>Lead Status</label>
<select class='hidden' id='Lead_Status' name='Lead Status'>
    <option selected value='New'>New</option>
</select>

<label for='LEADCF2'>Language</label>
<select class='hidden' id='LEADCF2' name='LEADCF2'>
    <option selected value='<?= LEAD_LANGUAGE ?>'></option>
</select>

<label for='Description'>Description</label>
<textarea class="hidden" id='Description' name='Description'><?= LEAD_DESCRIPTION ?></textarea>

<label for='LEADCF48'>Treatments</label>
<select class='hidden' id='LEADCF48' name='LEADCF48' multiple>
    <option selected value='<?= LEAD_TREATMENTS ?>'></option>
</select>

<label for='Lead_Source'>Lead Source</label>
<select class='hidden' id='Lead_Source' name='Lead Source'>
    <option selected value='<?= LEAD_SOURCE ?>'></option>
</select>

<label for='LEADCF15'>Treatment</label>
<select class='hidden' id='LEADCF15' name='LEADCF15' multiple>
    <option selected value='<?= LEAD_TREATMENT ?>'></option>
</select>

<input class="hidden" id="utm_source" name="utm_source" type="hidden" value="">
<button type="submit" id='formsubmit' class='formsubmit button' title='Submit'>
    <?= TR['form_button'] ?>
</button>

<?php // Do not remove this --- Analytics Tracking code starts ?>
<script id='wf_anal'
        src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=0e65f475011faf7c6ff4c6942b525aed4359637541a529b149b48e7c3a350e75gidf26b68fc575ddfcaee437b8e12d5515126eae05cf5d1a5976d576056a6237774gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513&tw=61690b96c1d0471b638f31426f38e68aa67fb7ed6da86f32dc10ad817fe55a0a'></script>
