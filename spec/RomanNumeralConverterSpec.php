<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralConverterSpec extends ObjectBehavior
{
  function it_can_calculate_the_roman_numeral_for_1()
  {
    $this->convert(1)->shouldReturn("I");
  }

  function it_can_calculate_the_roman_numeral_for_4()
  {
    $this->convert(4)->shouldReturn("IV");
  }

  function it_can_calculate_the_roman_numeral_for_5()
  {
    $this->convert(5)->shouldReturn("V");
  }

  function it_can_calculate_the_roman_numeral_for_7()
  {
    $this->convert(7)->shouldReturn("VII");
  }

  function it_can_calculate_the_roman_numeral_for_9()
  {
    $this->convert(9)->shouldReturn("IX");
  }

  function it_can_calculate_the_roman_numeral_for_10()
  {
    $this->convert(10)->shouldReturn("X");
  }

  function it_can_calculate_the_roman_numeral_for_16()
  {
    $this->convert(16)->shouldReturn("XVI");
  }

  function it_can_calculate_the_roman_numeral_for_20()
  {
    $this->convert(20)->shouldReturn("XX");
  }

  function it_can_calculate_the_roman_numeral_for_50()
  {
    $this->convert(50)->shouldReturn("L");
  }

  function it_can_calculate_the_roman_numeral_for_100()
  {
    $this->convert(100)->shouldReturn("C");
  }

  function it_can_calculate_the_roman_numeral_for_322()
  {
    $this->convert(322)->shouldReturn("CCCXXII");
  }

  function it_can_calculate_the_roman_numeral_for_500()
  {
    $this->convert(500)->shouldReturn("D");
  }

  function it_can_calculate_the_roman_numeral_for_1000()
  {
    $this->convert(1000)->shouldReturn("M");
  }

  function it_can_calculate_the_roman_numeral_for_1444()
  {
    $this->convert(1444)->shouldReturn("MCDXLIV");
  }

  function it_can_calculate_the_roman_numeral_for_1501()
  {
    $this->convert(1501)->shouldReturn("MDI");
  }

  function it_can_calculate_the_roman_numeral_for_1999()
  {
    $this->convert(1999)->shouldReturn("MCMXCIX");
  }

  function it_can_calculate_the_roman_numeral_for_5000()
  {
    $this->convert(5000)->shouldReturn("MMMMM");
  }
}
