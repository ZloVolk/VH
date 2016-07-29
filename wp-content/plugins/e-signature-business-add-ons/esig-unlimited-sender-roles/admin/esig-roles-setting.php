<?php

class Esig_Roles {

    const ESIG_ROLES_OPTION = "esig_unlimited_roles_option";
    const ESIG_ROLES_USER_OPTION = "esig_unlimited_users_option";

    public static function save_unlimited_roles_option($roles) {
        WP_E_Sig()->setting->set_generic(self::ESIG_ROLES_OPTION, json_encode($roles));
    }

    public static function save_unlimited_users_option($users) {
        WP_E_Sig()->setting->set_generic(self::ESIG_ROLES_USER_OPTION, json_encode($users));
    }

    public static function get_unlimited_roles_option() {
        return json_decode(WP_E_Sig()->setting->get_generic(self::ESIG_ROLES_OPTION));
    }

    public static function get_unlimited_uesrs_option() {
        return json_decode(WP_E_Sig()->setting->get_generic(self::ESIG_ROLES_USER_OPTION));
    }
    
    public static function is_roles_enabled(){
         $roles = self::get_unlimited_roles_option();
         if(!is_object($roles)){
             return false; 
         }
         return true ; 
    }
    
    public static function is_users_enabled(){
        $users = self::get_unlimited_uesrs_option();
        if(!is_object($users)){
            return false ;
        }
        return true ; 
    }

}
