<?php

namespace Shakibonline;

class MoonTelegram extends Types
{
    /**
     * Store Update type
     *
     * @var string $type
     */
    private static $type;

    /**
     * @param array $update
     * @return string
     */
    public static function Type($update)
    {
        $type = 'message';
        if ( array_key_exists(self::CHANNEL_POST, $update) ) {
            $type = 'channel_post';
        } elseif ( array_key_exists(self::INLINE_QUERY, $update) ) {
            $type = 'inline_query';
        }elseif ( array_key_exists(self::CALLBACK_QUERY, $update) ) {
            $type = 'callback_query';
        }elseif ( array_key_exists(self::SHIPPING_QUERY, $update) ) {
            $type = 'shipping_query';
        }elseif ( array_key_exists(self::EDITED_MESSAGE, $update) ) {
            $type = 'edited_message';
        }elseif ( array_key_exists(self::PRE_CHECKOUT_QUERY, $update) ) {
            $type = 'pre_checkout_query';
        }elseif ( array_key_exists(self::EDITED_CHANNEL_POST, $update) ) {
            $type = 'edited_channel_post';
        }elseif ( array_key_exists(self::CHOSEN_INLINE_RESULT, $update) ) {
            $type = 'chosen_inline_result';
        }
        self::$type = $type;
        return $type;
    }
}