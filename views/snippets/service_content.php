<div class="faq">
    <div class="container">
        <h4 class="latest-text w3_faq_latest_text w3_latest_text"><?=ucfirst($title)?> Information</h4>
        <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">

                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body panel_text">
                        <?=str_replace('.', '.<br><br>', $data)?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>