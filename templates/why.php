<section class="why">
    <div class="container">
        <div id="contact" class="form-box">
            <h2 class="section-title"><?= TR['form_title'] ?></h2>
            <p><?= TR['form_description'] ?></p>

            <form id="contactForm" action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4841144000105221001
                  method='POST'
                  onSubmit='javascript:document.charset="UTF-8"; return formFieldCheck()'
                  accept-charset='UTF-8'>

                <input type='text' style='display:none;' name='xnQsjsdp'
                       value='f26b68fc575ddfcaee437b8e12d5515126eae05cf5d1a5976d576056a6237774'>
                <input type='hidden' name='zc_gad' id='zc_gad' value=''>
                <input type='text' style='display:none;' name='xmIwtLD'
                       value='0e65f475011faf7c6ff4c6942b525aed6ec0f297044fc1377833fa703fdc1128'>
                <input type='text' style='display:none;' name='actionType' value='TGVhZHM='>
                <input type='text' style='display:none;' name='returnURL'
                       value='http&#x3a;&#x2f;&#x2f;drilkeryazici.com&#x2f;thank-you'>

                <label for='Last_Name'>Name &amp; Surname<span style='color:red;'>*</span></label>
                <input type='text' id='Last_Name' name='Last Name' maxlength='80' placeholder="<?= TR['form_name'] ?>">

                <label for='Email'>Email</label>
                <input type='text' id='Email' name='Email' maxlength='100' placeholder="<?= TR['form_mail'] ?>">

                <label for='Mobile'>Mobile<span style='color:red;'>*</span></label>
                <input type='text' id='Mobile' name='Mobile' maxlength='30' placeholder="<?= TR['form_phone'] ?>">

                <label for='Country'>Country</label>
                <input type='hidden' id='Country' name='Country' maxlength='100' value='DefaultCountry'>

                <label for='Lead_Status'>Lead Status</label>
                <select class='hidden' id='Lead_Status' name='Lead Status'>
                    <option selected value='New'>New</option>
                </select>

                <label for='LEADCF2'>Language</label>
                <select class='hidden' id='LEADCF2' name='LEADCF2'>
                    <?php // TODO change it accord. to translation ?>
                    <option selected value='English'>English</option>
                </select>

                <label for='Description'>Description</label>
                <textarea class="hidden" id='Description' name='Description'>Breast</textarea>

                <label for='LEADCF48'>Treatments</label>
                <select class='hidden' id='LEADCF48' name='LEADCF48' multiple>
                    <option selected value='Aesthetics'>Aesthetics</option>
                </select>

                <label for='Lead_Source'>Lead Source</label>
                <select class='hidden' id='Lead_Source' name='Lead Source'>
                    <option selected value='&#x130;lker&#x2f;Google&#x2f;BBL&#x2f;En'>&#x130;lker&#x2f;Google&#x2f;Breast&#x2f;En
                    </option>
                </select>

                <label for='LEADCF15'>Treatment</label>
                <select class='hidden' id='LEADCF15' name='LEADCF15' multiple>
                    <option selected value='BBL'>BBL</option>
                </select>

                <input class="hidden" id="utm_source" name="utm_source" type="hidden" value="">
                <button id='formsubmit' class='formsubmit button red' title='Submit'>
                    <?= TR['form_button'] ?>
                </button>

                <?php // Do not remove this --- Analytics Tracking code starts ?>
                <script id='wf_anal' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=0e65f475011faf7c6ff4c6942b525aed6ec0f297044fc1377833fa703fdc1128gidf26b68fc575ddfcaee437b8e12d5515126eae05cf5d1a5976d576056a6237774gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513&tw=61690b96c1d0471b638f31426f38e68aa67fb7ed6da86f32dc10ad817fe55a0a'></script>
            </form>
        </div>

        <section class="content">
            <h2 class="section-title"><?= TR['why_title'] ?></h2>
            <ul>
                <?php foreach (TR['why'] as $item): ?>
                    <li>
                        <p><?= $item ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</section>