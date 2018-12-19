<?php

$form = <<<EOD

<form id="ajax_contact_form"> 
<input type="text" placeholder="Name" name="name" required />
                        <input type="text" placeholder="Email Address" name="email" required />
                        <textarea placeholder="Your Message" maxlength="250" name="message" required></textarea>
<a href="#" id="ajax_contact_formsubmit">Send Email</a>
<div class="form_result"> </div>
</form>

EOD;

echo $form;

?>

