<?php

// Lab 2B: PHP Functions and Basic Objects

echo '<h1>Lab 2B: Functions and Objects</h1>';

// 1. Function with Parameters and Return Value
echo '<h2>1. Function with Parameters and Return Value</h2>';

function formatName($first, $middle, $last)
{
    $first = ucwords(strtolower(trim($first)));
    $middle = ucwords(strtolower(trim($middle)));
    $last = ucwords(strtolower(trim($last)));

    return "$first $middle $last";
}

$formattedName = formatName('  mARIA', 'ann louise', 'cHEN  ');
echo "$formattedName<br>";

// 2. Function That Returns an Array
echo '<h2>2. Function That Returns an Array</h2>';

function cleanNameParts($first, $middle, $last)
{
    return [
        'first' => ucwords(strtolower(trim($first))),
        'middle' => ucwords(strtolower(trim($middle))),
        'last' => ucwords(strtolower(trim($last))),
    ];
}

$nameParts = cleanNameParts('  mARIA', 'ann louise', 'cHEN  ');
print_r($nameParts);
echo "<br>First name: {$nameParts['first']}<br>";

// 3. Variable Scope
echo '<h2>3. Variable Scope</h2>';

$first = 'Maria';
$last = 'Chen';

function buildFullName()
{
    global $first, $last;

    return "$first $last";
}

echo buildFullName() . '<br>';

function buildFullName2($first, $last)
{
    return "$first $last";
}

echo buildFullName2($first, $last) . '<br>';

// 4. Static Variable
echo '<h2>4. Static Variable</h2>';

function nextTicketNumber()
{
    static $ticketNumber = 0;

    return ++$ticketNumber;
}

echo 'Ticket numbers: ' . nextTicketNumber() . ', ' . nextTicketNumber() . '<br>';

// 5. User Class
echo '<h2>5. User Class</h2>';

class User
{
    public $name;
    public $email;

    public function display()
    {
        return $this->name;
    }
}

$user = new User();
$user->name = 'Maria Chen';
$user->email = 'maria@example.com';
echo $user->display() . ' (' . $user->email . ')<br>';

// 6. Constructor and Password Hashing
echo '<h2>6. Constructor and Password Hashing</h2>';

class User2
{
    public $name;
    private $passwordHash;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }
}

$userWithPassword = new User2('Alex Rivera', 'example-password');
print_r($userWithPassword);
