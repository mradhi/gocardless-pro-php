<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Resources;

/**
  * Payouts represent transfers from GoCardless to a
  * [creditor](#core-endpoints-creditors). Each payout contains the funds
  * collected from one or many [payments](#core-endpoints-payments). Payouts are
  * created automatically after a payment has been successfully collected.
  */
class Payout extends Base
{



  /**
    * Amount in pence or cents.
    *
    * @return int
    */
    public function amount()
    {
        $field = 'amount';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Fixed [timestamp](#overview-time-zones-dates), recording when this
    * resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
    * code. Currently only "GBP" and "EUR" are supported.
    *
    * @return string
    */
    public function currency()
    {
        $field = 'currency';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "PO".
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Referenced objects. Key values to stdClasses returned.
    *
    * @return Wrapper\NestedObject
    */
    public function links()
    {
        $field = 'links';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * Reference which appears on the creditor's bank statement.
    *
    * @return string
    */
    public function reference()
    {
        $field = 'reference';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * One of:
    * <ul>
    * <li>`pending`: the payout has been created, but
    * not yet sent to the banks</li>
    * <li>`paid`: the payout has been sent
    * to the banks</li>
    * </ul>
    * [pending paid]
    * @return string
    */
    public function status()
    {
        $field = 'status';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'Payout Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
