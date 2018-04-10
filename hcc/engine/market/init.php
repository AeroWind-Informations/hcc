<?php

namespace Hcc\Engine\Market {

    class Market {

        public static function getApps() {
            $get = file_get_contents("https://raw.githubusercontent.com/hcctech/hcc-market/master/apps.json");
            if ($get) {
                return json_decode($get);
            } else {
                return false;
            }
        }

        public static function getPlugins() {
            $get = file_get_contents("https://raw.githubusercontent.com/hcctech/hcc-market/master/plugins.json");
            if ($get) {
                return json_decode($get);
            } else {
                return false;
            }
        }

    }

}