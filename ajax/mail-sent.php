<?php require_once 'inc/init.php'; ?>
<div>
    <div class="mail-box">

        <aside class="lg-side">
            <div class="inbox-head">
                <h3><strong>SENT</strong></h3>
                <form action="#" class="pull-right position">
                    <!-- <div class="input-append">
                        <input type="text" class="sr-input" placeholder="Search Mail">
                        <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                    </div> -->
                </form>
            </div>
            <div id="message_form" style="display:none"></div>
            <div class="inbox-body smart-form">
                <?php include 'mail-option.php' ?>
                <table class="table table-inbox table-hover" style="width:100%" id="mailSend">
                    <tbody></tbody>
                </table>
            </div>
        </aside>
    </div>
</div>
<script src="./js/script/mail/mail-op.js"></script>
<script>
    var mailOp = new MailOp();
    mailOp.bindEvent();
    mailOp.loadListMail(link._emails_sent, '.mail-box .inbox-body #mailSend'  <?php if(hasIdParam()){echo ','. getID();} ?>);
</script>