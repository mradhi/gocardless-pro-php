<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Resources;

/**
  * Events are stored for all webhooks. An event refers to a resource which has
  * been updated, for example a payment which has been collected, or a mandate
  * which has been transferred.
  */
class Event extends Base
{



  /**
    * What has happened to the resource.
    *
    * @return string
    */
    public function action()
    {
        $field = 'action';
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
    * 
    *
    * @return Wrapper\NestedObject
    */
    public function details()
    {
        $field = 'details';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * Unique identifier, beginning with "EV".
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
    * If the `details[origin]` is `api`, this will contain any metadata you
    * specified when triggering this event. In other cases it will be an empty
    * object.
    *
    * @return Wrapper\NestedObject
    */
    public function metadata()
    {
        $field = 'metadata';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * The resource type for this event. One of:
    * <ul>
    *
    * <li>`payments`</li>
    * <li>`mandates`</li>
    * <li>`payouts`</li>
   
    * * <li>`refunds`</li>
    * <li>`subscriptions`</li>
    * </ul>
    * [payments mandates payouts refunds subscriptions]
    * @return string
    */
    public function resource_type()
    {
        $field = 'resource_type';
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
        $ret = 'Event Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
