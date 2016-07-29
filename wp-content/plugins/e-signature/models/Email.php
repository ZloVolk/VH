<?php

class WP_E_Email extends WP_E_Model {

    public function __construct() {
        parent::__construct();
    }

    public function esig_register_mail_option() {

        $esig_options_default = array(
            'enable' => 'no',
            'from_email_field' => '',
            'from_name_field' => '',
            'smtp_settings' => array(
                'host' => 'smtp.example.com',
                'type_encryption' => 'none',
                'port' => 25,
                'autentication' => 'no',
                'username' => 'yourusername',
                'password' => 'yourpassword'
            )
        );

        /* install the default plugin options */
        if (!get_option('esig_mail_options')) {
            add_option('esig_mail_options', $esig_options_default, '', 'yes');
        }
    }

    /**
     * Retrurn e-signature mail settings password 
     * 
     * @return
     */
    public function esig_mail_get_password() {

        $esig_options = get_option('esig_mail_options');
        $temp_password = $esig_options['smtp_settings']['password'];
        $password = "";
        if (!$temp_password) {
            return $password;
        }

        $decoded_pass = base64_decode($temp_password);

        if (base64_encode($decoded_pass) === $temp_password) {  //it might be encoded
            $password = base64_decode($temp_password);
        } else { //not encoded
            $password = $temp_password;
        }
        return $password;
    }

    public function mailType($content_type) {
        $mail_type = 'text/html'; 
        return apply_filters('esig_mailtype',$mail_type);
    }

    public function default_mail($to_email, $subject, $message, $headers, $attachments = false) {

        add_filter('wp_mail_content_type', array($this, 'mailType'));

        if ($attachments) {
            try {
                $mailsent = @wp_mail($to_email, $subject, $message, $headers, $attachments);
                if (!$mailsent) {
                    mail($to_email, $subject, $message, implode("\r\n", $headers), $attachments);
                }
            } catch (Exception $e) {
                error_log('WP E-sginature mail sent error:' . $e->getMessage()); // this line is for testing 
            }
        } else {
            try {
                $mailsent = @wp_mail($to_email, $subject, $message, $headers);
                if (!$mailsent) {
                    mail($to_email, $subject, $message, implode("\r\n", $headers));
                }
            } catch (Exception $e) {
                error_log('WP E-sginature mail sent error:' . $e->getMessage()); // this line is for testing 
            }

            //$mailsent = @wp_mail($to_email, $subject,$message, $headers);
        }

        remove_filter('wp_mail_content_type', 'set_html_content_type');

        return $mailsent;
    }

    public function esig_mail($from_name = '', $from_email = '', $to_email, $subject, $message, $attachments = false) {

        $errors = '';

        $esig_options = get_option('esig_mail_options');
        // if from name is not set 
        if ($from_name == '') {
            $from_name = utf8_decode($esig_options['from_name_field']);
        }
        // if from email is not set 
        if ($from_email == '') {
            $from_email = $esig_options['from_email_field'];
        }


        if (empty($esig_options['enable']) || $esig_options['enable'] != 'yes') {

            $headers = array(
                "From: " . $from_name . " <{$from_email}>",
                "Reply-To: {$from_name} <{$from_email}>"
            );

            $mailsent = $this->default_mail($to_email, $subject, $message, $headers, $attachments);
            return $mailsent;
        }

        require_once( ABSPATH . WPINC . '/class-phpmailer.php' );

        $mail = new PHPMailer();




        /* If using smtp auth, set the username & password */
        if ('yes' == $esig_options['smtp_settings']['autentication']) {
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Username = $esig_options['smtp_settings']['username'];
            $mail->Password = $this->esig_mail_get_password();
        }

        /* Set the SMTPSecure value, if set to none, leave this blank */
        if ($esig_options['smtp_settings']['type_encryption'] != 'none') {
            $mail->SMTPSecure = $esig_options['smtp_settings']['type_encryption'];
        }

        /* Set the other options */
        $mail->Host = $esig_options['smtp_settings']['host'];
        $mail->Port = $esig_options['smtp_settings']['port'];
        $mail->SetFrom($from_email, $from_name);
        $mail->isHTML(true);
        $mail->Subject = utf8_decode($subject);
        $mail->MsgHTML($message);
        $mail->AddAddress($to_email);

        // adding attachment if there is attachment 
        if ($attachments) {
            $mail->addAttachment($attachments);
        }

        $mail->SMTPDebug = 0;

        /* Send mail and return result */
        if (!$mail->Send())
            $errors = $mail->ErrorInfo;

        $mail->ClearAddresses();
        $mail->ClearAllRecipients();

        if (!empty($errors)) {
            if (is_admin()) {
                $esig_notice = new WP_E_Notice();

                $esig_notice->set('e-sign-red-alert email', __('It appears you don\'t have your SMTP settings setup properly right now. In other words, no one is able to receive your E-Signature emails because they are not sending... <a href="admin.php?page=esign-email-general" class="button-primary">Fix this issue now</a>', 'esig'));
                WP_E_Notice::set_error_dialog('emails');
            }
            return false;
        } else {
            return true;
        }
    }

    public function esig_test_mail($to_email, $subject, $message) {


        $errors = '';

        $esig_options = get_option('esig_mail_options');

        require_once( ABSPATH . WPINC . '/class-phpmailer.php' );

        $mail = new PHPMailer();



        $from_name = utf8_decode($esig_options['from_name_field']);
        $from_email = $esig_options['from_email_field'];



        /* If using smtp auth, set the username & password */
        if ('yes' == $esig_options['smtp_settings']['autentication']) {

            $mail->IsSMTP();

            $mail->SMTPAuth = true;

            $mail->Username = $esig_options['smtp_settings']['username'];
            $mail->Password = $this->esig_mail_get_password();
        }

        /* Set the SMTPSecure value, if set to none, leave this blank */
        if ($esig_options['smtp_settings']['type_encryption'] != 'none') {

            $mail->SMTPSecure = $esig_options['smtp_settings']['type_encryption'];
        }

        /* Set the other options */
        $mail->Host = $esig_options['smtp_settings']['host'];
        $mail->Port = $esig_options['smtp_settings']['port'];

        $mail->SetFrom($from_email, $from_name);
        $mail->isHTML(true);
        $mail->Subject = utf8_decode($subject);
        $mail->MsgHTML($message);
        $mail->AddAddress($to_email);

        $mail->SMTPDebug = 0;


        /* Send mail and return result */
        if (!$mail->Send()) {
            //$mail->SMTPDebug =2;

            $errors = $mail->ErrorInfo;

            $log = new Esig_error_Log();

            $log->add("Email", $errors);
            //echo "<br>" . $errors;
        }


        $mail->ClearAddresses();
        $mail->ClearAllRecipients();

        if (!empty($errors)) {
            return $errors;
        } else {
            return 'success';
        }
    }
    
    /**
     * Send WP E-Signature emails 
     * @param type $args
     * @return type
     */
    public function send($args = array()) {

        // settings default 
        $defaults = array(
            'from_name' => '', // Use 'posts' to get standard post objects
            'from_email' => '',
            'to_email' => '',
            'subject' => __("WP E-Signature e-mail subject", "esig"),
            'message' => '',
            'message_template' => false,
            'template_data' => array(
            ),
            'attachments' => false,
            'document' => false,
        );

        $args = wp_parse_args($args, $defaults);

        $message = $args['message'];
        if ($args['message_template']) {
            $data = $this->get_default_data($args['template_data']);
            $message = WP_E_Sig()->view->renderPartial('', $data, false, false, $args['message_template']);
            
        }

        $from_name = apply_filters('esig-sender-name-filter', $args['from_name'], $args['document']->user_id);

        return $this->esig_mail($from_name, $args['from_email'], $args['to_email'], $args['subject'], $message, $args['attachments']);
    }

    private function get_default_data($template_data = array()) {

        $template_data['esig_logo'] = $this->get_email_logo();
        $template_data['esig_header_tagline'] = $this->get_email_header_tagline();
        $template_data['esig_footer_head'] = $this->get_email_footer_head();
        $template_data['esig_footer_text'] = $this->get_email_footer_text();
        $template_data['document_title'] = esc_attr(wp_unslash($template_data['document_title']));
        return $template_data;
    }

    /**
     * return email logo 
     * @return string
     */
    private function get_email_logo() {

        $esig_logo = "default";
        $esig_logo = apply_filters('esig_invitation_logo_filter', $esig_logo);

        if ($esig_logo == "default") {

            $esig_logo = sprintf(__('<a href="http://www.approveme.com" target="_blank"><img src="%s/images/logo.png" title="Wp E-signature"></a> ', 'esig'), ESIGN_ASSETS_DIR_URI);
        }
        return $esig_logo;
    }

    /**
     * Return wp e-signature email logo tag line 
     * @return string
     */
    private function get_email_header_tagline() {

        $esig_header_tagline = 'default';

        $esig_header_tagline = apply_filters('esig_invitation_header_tagline_filter', $esig_header_tagline);

        if ($esig_header_tagline == 'default') {

            $esig_header_tagline = __('Sign Legally Binding Documents using a WordPress website', 'esig');
        }
        return $esig_header_tagline;
    }

    /**
     * WP E-signature eamil footer tag line 
     * @return string
     */
    private function get_email_footer_head() {
        $esig_footer_head = 'default';
        $esig_footer_head = apply_filters('esig_invitation_footer_head_filter', $esig_footer_head);
        if ($esig_footer_head == 'default') {
            $esig_footer_head = __('What is WP E-Signature?', 'esig');
        }
        return $esig_footer_head;
    }

    /**
     * WP E-signature email footer text 
     * @return string
     */
    private function get_email_footer_text() {
        $esig_footer_text = 'default';
        $esig_footer_text = apply_filters('esig_invitation_footer_text_filter', $esig_footer_text);
        if ($esig_footer_text == 'default') {
            $esig_footer_text = __('WP E-Signature by Approve Me is the
                                fastest way to sign and send documents
                                using WordPress. Save a tree (and a
                                stamp).  Instead of printing, signing
                                and uploading your contract, the
                                document signing process is completed
                                using your WordPress website. You have
                                full control over your data - it never
                                leaves your server. <br>
                                <b>No monthly fees</b> - <b>Easy to use
                                  WordPress plugin.</b><a style="color:#368bc6;text-decoration:none" href="https://www.approveme.com" target="_blank"> Learn more</a> ', 'esig');
        }

        return $esig_footer_text;
    }

}
