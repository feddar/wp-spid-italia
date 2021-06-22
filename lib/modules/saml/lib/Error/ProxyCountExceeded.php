<?php
/**
 * A SAML error indicating that the maximum amount of proxies traversed has been reached.
 *
 * @author Jaime Pérez Crespo, UNINETT AS <jaime.perez@uninett.no>
 * @package SimpleSAMLphp
 */

namespace SimpleSAML\Module\saml\Error;

use SAML2\Constants;

class ProxyCountExceeded extends \sspmod_saml_Error
{
    /**
     * ProxyCountExceeded error constructor.
     *
     * @param string $responsible A string telling who is responsible for this error. Can be one of the following:
     *   - \SAML2\Constants::STATUS_RESPONDER: in case the error is caused by this SAML responder.
     *   - \SAML2\Constants::STATUS_REQUESTER: in case the error is caused by the SAML requester.
     * @param string|null $message A short message explaining why this error happened.
     * @param \Exception|null $cause An exception that caused this error.
     */
    public function __construct($responsible, $message = null, \Exception $cause = null)
    {
        parent::__construct($responsible, Constants::STATUS_PROXY_COUNT_EXCEEDED, $message, $cause);
    }
}
