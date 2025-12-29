<?php

namespace App\Enum;

enum UserRole:string
{
    case USER = 'user';
    case ADMIN = 'admin';
    case EDITOR = 'editor';
    case MODERATOR = 'moderator';
    case GUEST = 'guest';
    case CUSTOMER = 'customer';
    case RIDER = 'rider';
    case DILLER = 'diller';
    case DEALER = 'dealer';
    case SELLER = 'seller';
    case SUBDEALER = 'subdealer';
}
