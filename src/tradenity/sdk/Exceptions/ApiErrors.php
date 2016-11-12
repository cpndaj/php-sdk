<?php
/**
 * Created by IntelliJ IDEA.
 * User: Joseph
 * Date: 01-Nov-16
 * Time: 11:44 AM
 */

namespace Tradenity\SDK\Exceptions;


class ApiErrors
{
    const UNAUTHORIZED_ERROR_CODE = 1001;
    const ACCESS_DENIED_ERROR_CODE = 1002;

    const METHOD_NOT_SUPPORTED_ERROR_CODE = 1102;

    const NOT_FOUND_ERROR_CODE = 1201;
    const DATA_VALIDATION_ERROR_CODE = 1203;

    const INVALID_PAYMENT_ERROR_CODE = 1401;
    const REFUND_ERROR_ERROR_CODE = 1402;
    const GATEWAY_ERROR_ERROR_CODE = 1403;

    const EXISTING_EMAIL_ERROR_CODE = 1601;
    const EXISTING_USERNAME_ERROR_CODE = 1602;

    const CART_INVALID_ITEM_ERROR_CODE = 1701;

    const INVENTORY_INVALID_PRODUCT_ERROR_CODE = 1801;
    const INVENTORY_NOT_AVAILABLE_PRODUCT_ERROR_CODE = 1802;

    const UNAUTHORIZED = "Unauthorized";
    const ACCESS_DENIED = "Access denied";

    const NOT_FOUND = "Not found";
    const DATA_VALIDATION_ERROR = "Data validation error";

    const INVALID_PAYMENT = "Invalid payment";
    const REFUND_ERROR = "Refund error";
    const GATEWAY_ERROR = "Gateway error";

    const EXISTING_EMAIL = "Email already registered.";
    const EXISTING_USERNAME = "Already registered username.";

}