<div class="crp-options-header">
    <div class="crp-three-parts crp-fl">
        <a class='button-secondary portfolio-button crp-glazzed-btn crp-glazzed-btn-dark' href="<?php echo "?page={$crp_adminPage}"; ?>">
            <div class='crp-icon crp-portfolio-button-icon'><i class="fa fa-long-arrow-left"></i></div>
        </a>
    </div>

    <div class="crp-three-parts crp-fl crp-title-part crp-settings-title"><span>Settings</span></div>
</div>

<hr />

<div id="crp-options-accordion" class="crp-options-wrapper">

    <div class="collapse-card">
        <div class="title">
            Layout type
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Display elements
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Styles & effects
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Colorizations
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Dimensions
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Fonts & icons
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Advanced
        </div>
    </div>

    <div class="collapse-card">
        <div class="title">
            Custom CSS & JS
        </div>
    </div>

    <div class="crp-options-overlay">
        <div>
            <span>You’re running Free version of Gallery. You can upgrade your license to unlock all features and options.</span>
            <br><a class="crp-glazzed-btn crp-glazzed-inverse-btn crp-glazzed-btn-green" href="<?php echo CRP_PRO_URL; ?>">UPGRADE</a>
        </div>
    </div>

</div>
<?php
    $logStatus = get_option(CRP_LOG_STATUS_OPTION_KEY, CRP_LOG_STATUS_DEFAULT);
?>
<div class="crp-fr" id="crp-reporting-option"><span>Turn on reports:</span>&nbsp;&nbsp;<input type="checkbox" <?php echo ($logStatus == 'on') ? 'checked="checked"' : ''; ?> value="1" /></div>
<script>
    jQuery(document).ready(function(){
        jQuery("#crp-reporting-option input").change(function(){
            var val = (jQuery(this).prop('checked') ? 'on' : 'off');
            crpAjaxSaveLogStatus(val);
        });
    });
</script>