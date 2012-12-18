<?php

class SwiftMailer {

    public function init() {
        spl_autoload_unregister(array('YiiBase', 'autoload'));
        $cargar = realpath(__DIR__ . '/lib/swift_required.php');
        require_once "$cargar";
        spl_autoload_register(array('YiiBase', 'autoload'));
    }

    public function preferences() {
        return Swift_Preferences;
    }

    public function attachment() {
        return Swift_Attachment;
    }

    public function newMessage($subject) {
        return Swift_Message::newInstance($subject);
    }

    public function mailer($transport = null) {
        return Swift_Mailer::newInstance($transport);
    }

    public function image() {
        return Swift_Image;
    }

    public function smtpTransport($host = null, $port = null) {
        return Swift_SmtpTransport::newInstance($host, $port);
    }

    public function sendmailTransport($command = null) {
        return Swift_SendmailTransport::newInstance($command);
    }

    public function mailTransport() {
        return Swift_MailTransport::newInstance();
    }

}
?>

