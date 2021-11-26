<?php
    //Problem: We need to change 'Character' class every time a new equipament exists.
    
    class Character{
        public function useEquipament($equipament){
            if($equipament = "sword"){
                echo "Use the sword to atack.";
            }else if($equipament = "shield"){
                echo "Use the shield to defend.";
            }else if($equipament = "watch"){
                echo "Use the watch to see the time.";
            }else{
                echo "Use the pencil to write something.";
            }
        }
    }
?>