<?php declare(strict_types=1);
// SPDX-License-Identifier: BSD-3-Clause

namespace SingleA\Bundles\Singlea\Service\Client;

/**
 * An optional service which allows using the "is_valid_registration_ticket()" expression function
 * in the "allow_if" option of an access map element.
 */
interface RegistrationTicketManagerInterface
{
    public function isValid(string $ticket): bool;
}
