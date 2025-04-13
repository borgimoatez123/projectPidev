<?php

namespace App\Entity\gestion_user;

enum UserRole: string
{
    case ADMIN = 'ADMIN';
    case CLIENT = 'CLIENT';
    case SPONSOR = 'SPONSOR';
}