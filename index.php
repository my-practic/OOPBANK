<?php 
echo "<h1>Simple Bank transaction Using OOP in Php</h1>";
class Account{
private $balance=80000;
public function deposit($money){
    $this->balance+=$money;
    echo "you deposited "."#".$money." into your Account <br>";
    echo "your balance is "."#".$this->balance."<br>";
}
public function withdrawn($amount){
if($amount<=$this->balance){
    $this->balance-=$amount;
    echo "withdrawn successful<br>";
    echo $amount." was withdrawn from your account<br>";
    echo " your balance is "."#".$this->balance."<br>";
}
else{
    echo "insuffiient funds";
}
}


}

$total = new Account();

//i want to deposit 70 into my account;
$total->deposit(70000);
echo "<hr>";
$total->withdrawn(30000);
?>