<?php

class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $ajax = false;
    private $messages = [];

    public function add_message($content, $name, $length = 0) {
        if ($length > 0 && strlen($content) > $length) {
            $content = substr($content, 0, $length) . '...';
        }
        $this->messages[$name] = $content;
    }

    public function send() {
        $headers = "From: $this->from_name <$this->from_email>\r\n";
        $headers .= "Reply-To: $this->from_email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $message = "";
        foreach ($this->messages as $name => $content) {
            $message .= "$name: $content\n";
        }

        return mail($this->to, $this->subject, $message, $headers) ? 'Mail sent successfully!' : 'Mail sending failed!';
    }
}
