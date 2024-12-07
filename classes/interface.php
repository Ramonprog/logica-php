<?php
// interface define um contrato comum para classes

interface PaymentProcessor {
  public function processPayment(string $amount):bool;
  public function refundPayment(string $amount):bool;
}

// abstract: Permite uma base comum para classes derivadas, com implementação parcial ou total.
// uso : Quando você deseja compartilhar lógica comum entre várias classes que herdam dela.
abstract class OnlinePaymentProcessor implements PaymentProcessor {
  public function __construct(
    protected string $apiKey
  ){}

  public function processPayment(string $amount):bool {
    return true;
  }

  public function refundPayment(string $amount):bool {
    return true;
  }
}

class StripePaymentProcessor extends OnlinePaymentProcessor {}
class PayPalPaymentProcessor  extends OnlinePaymentProcessor {}

$processor = new StripePaymentProcessor('sk_test_123');
$processor->processPayment('100');