<?php

// Lab 2C: Constructors, Constants, and Inheritance

echo '<h1>Lab 2C: User and Tutor Classes</h1>';

function cleanText($value)
{
    return trim(preg_replace('/\s+/', ' ', $value));
}

class User
{
    public const STATUS_ACTIVE = 'active';

    public $name;
    public $email;
    public $status;

    public function __construct($name, $email)
    {
        $this->name = cleanText($name);
        $this->email = strtolower(cleanText($email));
        $this->status = self::STATUS_ACTIVE;
    }
}

class Tutor extends User
{
    public $subject;

    public function __construct($name, $email, $subject)
    {
        parent::__construct($name, $email);
        $this->subject = cleanText($subject);
    }

    public function profileSummary()
    {
        $name = htmlspecialchars($this->name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($this->email, ENT_QUOTES, 'UTF-8');
        $subject = htmlspecialchars($this->subject, ENT_QUOTES, 'UTF-8');

        return "Name: $name<br>Email: $email<br>Subject: $subject";
    }
}

$tutor = new Tutor('  Jamie   Lee  ', '  JAMIE.LEE@EXAMPLE.COM  ', '  Web   Development  ');
echo '<p>' . $tutor->profileSummary() . '</p>';